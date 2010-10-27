<?
load_model('Member');
load_helper('Form');

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
            if (!Form::is_spam($this->params) && $member->save())
            {
                $this->redirect('', array('notice' => 'Thank you for your interest. Please expect a friendly email from us in the next few days.'));
            }
        }
        $this->render->member = $member;
    }
}
