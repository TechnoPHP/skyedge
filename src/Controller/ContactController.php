<?php
declare(strict_types=1);

namespace App\Controller;

use App\Form\ContactForm;
use Cake\Log\Log;
use Throwable;

/**
 * Contact page. Shows the enquiry form and emails submissions.
 */
class ContactController extends AppController
{
    /**
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $contact = new ContactForm();

        if ($this->request->is('post')) {
            // Honeypot: bots fill the hidden "website" field; pretend success.
            if ($this->request->getData('website')) {
                return $this->redirect('/contact#enquiry');
            }

            try {
                if ($contact->execute($this->request->getData())) {
                    $this->Flash->success('Thank you! Your enquiry has been sent. Our team will contact you shortly.');

                    return $this->redirect('/contact#enquiry');
                }
                $this->Flash->error('Please correct the highlighted fields and try again.');
            } catch (Throwable $e) {
                Log::error('Contact form email failed: ' . $e->getMessage());
                $this->Flash->error('Sorry, we could not send your enquiry right now. Please call us or email visa@skyedgetravels.com.');
            }
        }

        $this->set(compact('contact'));

        return $this->render('/Pages/contact');
    }
}
