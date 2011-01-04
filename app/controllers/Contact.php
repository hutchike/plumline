<?
load_model('Message');
load_helper('Spam');

class Contact_controller extends App_controller
{
    public function form()
    {
        $this->render->title = 'Contact form';
        $message = $this->render->message = new Message($this->params->message);
        if (Spam::is_spam($this->params)) return;
        $message->status = 'P'; // Pending
        if ($message->save())
        {
            $this->flash->sent = $this->send($message);
            $this->redirect('default/index', array('notice' => 'Thank you for your interest. Please expect a friendly email from us in the next few days.'));
        }
    }

    private function send($message)
    {
        return $this->send_mail('mail/message', array(
                                    'to'       => CONTACT_EMAIL,
                                    'from'     => $message->email,
                                    'subject'  => 'Plumline website message',
                                    'message'  => $message,
                                ));
    }
}
