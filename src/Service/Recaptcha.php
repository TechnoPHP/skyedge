<?php
declare(strict_types=1);

namespace App\Service;

use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Log\Log;
use Throwable;

/**
 * Google reCAPTCHA v3 server-side verification.
 */
class Recaptcha
{
    public const VERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify';

    /**
     * Whether both keys are configured.
     *
     * @return bool
     */
    public static function isEnabled(): bool
    {
        return Configure::read('Recaptcha.siteKey') && Configure::read('Recaptcha.secretKey');
    }

    /**
     * Verifies a token for the given action. Fails closed: any error,
     * action mismatch or score below Recaptcha.minScore returns false.
     *
     * @param string $token Token posted by the browser.
     * @param string $action Expected action name.
     * @param string|null $remoteIp Client IP address.
     * @return bool
     */
    public static function verify(string $token, string $action, ?string $remoteIp = null): bool
    {
        if ($token === '') {
            return false;
        }

        try {
            $response = (new Client(['timeout' => 10]))->post(self::VERIFY_URL, array_filter([
                'secret' => Configure::read('Recaptcha.secretKey'),
                'response' => $token,
                'remoteip' => $remoteIp,
            ]));
            $result = $response->getJson();
        } catch (Throwable $e) {
            Log::error('reCAPTCHA verification request failed: ' . $e->getMessage());

            return false;
        }

        $minScore = (float)Configure::read('Recaptcha.minScore', 0.5);
        $passed = !empty($result['success'])
            && ($result['action'] ?? null) === $action
            && (float)($result['score'] ?? 0) >= $minScore;

        if (!$passed) {
            Log::warning('reCAPTCHA rejected contact form: ' . json_encode($result));
        }

        return $passed;
    }
}
