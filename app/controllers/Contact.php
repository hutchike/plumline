<?
load_model('Member');

class Contact_controller extends App_controller
{
    public function form()
    {
        $this->render->title = 'Contact form';
        $this->render->member = new Member();
    }
}
