<?php
declare(strict_types=1);

namespace App\Form;

use Cake\Core\Configure;
use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Mailer\Mailer;
use Cake\Validation\Validator;

/**
 * Contact enquiry form. Submissions are emailed to Contact.to and not stored.
 */
class ContactForm extends Form
{
    /**
     * @param \Cake\Form\Schema $schema Schema instance.
     * @return \Cake\Form\Schema
     */
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema
            ->addField('name', 'string')
            ->addField('phone', 'string')
            ->addField('email', 'string')
            ->addField('message', 'text');
    }

    /**
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        return $validator
            ->requirePresence('name')
            ->notEmptyString('name', 'Please enter your name.')
            ->maxLength('name', 100)
            ->allowEmptyString('phone')
            ->maxLength('phone', 30)
            ->regex('phone', '/^[0-9+()\-\s]{6,30}$/', 'Please enter a valid phone number.')
            ->requirePresence('email')
            ->notEmptyString('email', 'Please enter your email address.')
            ->email('email', false, 'Please enter a valid email address.')
            ->requirePresence('message')
            ->notEmptyString('message', 'Please tell us what service you need.')
            ->maxLength('message', 5000);
    }

    /**
     * Emails the enquiry. Throws on transport failure.
     *
     * @param array $data Validated form data.
     * @return bool
     */
    protected function _execute(array $data): bool
    {
        $name = trim(preg_replace('/[\r\n]+/', ' ', $data['name']));
        $phone = trim((string)($data['phone'] ?? ''));

        $body = implode("\n", [
            'New enquiry from the Skyedge Travels contact form',
            '',
            'Name:    ' . $name,
            'Email:   ' . $data['email'],
            'Phone:   ' . ($phone !== '' ? $phone : '-'),
            '',
            'Requirement:',
            trim($data['message']),
        ]);

        (new Mailer('default'))
            ->setTo(Configure::read('Contact.to'))
            ->setReplyTo($data['email'], $name)
            ->setSubject('Website enquiry from ' . $name)
            ->deliver($body);

        return true;
    }
}
