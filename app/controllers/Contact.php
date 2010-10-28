<?
load_model('Member');
load_helper('Form');

class Contact_controller extends App_controller
{
    public function form()
    {
        $this->render->title = 'Contact form';
        $member = $this->render->member = new Member($this->params->member);
        if (Form::is_spam($this->params)) return;

        if ($found = $member->find_first(array('email' => $member->email)))
        {
            // Member record already exists
        }
        else
        {
            $member->status = 'P'; // Pending approval
            $member->save();
        }

        // Send any member inquiry message

        if ($member->name && $member->email && $member->interest)
        {
            $this->send_member_inquiry($member);
            $this->redirect('', array('notice' => 'Thank you for your interest. Please expect a friendly email from us in the next few days.'));
        }
    }

    private function send_member_inquiry($member)
    {
        $this->send_mail('inquiry', array(
                            'to'       => CONTACT_EMAIL,
                            'from'     => $member->email,
                            'subject'  => 'Plumline member inquiry',
                            'member'   => $member,
                        ));
    }
}
