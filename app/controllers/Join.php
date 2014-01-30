<?
class Join_controller extends App_controller
{
    public function before()
    {
        parent::before();

        $this->render->title = 'Join Us';
        $this->render->layout = 'framed';
    }
}
