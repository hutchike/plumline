<?
load_model('Member');

class Contact_controller extends App_controller
{
    public function form()
    {
        $this->render->title = 'Contact form';
        $member = new Member($this->params->member);
        if ($found = $member->find_first(array('email' => $member->email)))
        {
            $this->flash->now = 'We\'re sorry but that member has already registered. Please use an alternative email address.';
        }
        else
        {
            if ($member->save())
            {
                $this->redirect('', array('notice' => 'Thank you for your interest. Please expect a friendly email from us in the next few days.'));
            }
        }
        $this->render->member = $member;
    }
}
