<?
class Practice_controller extends App_controller
{
    public function mindfulness()
    {
        $this->render->title = 'Mindfulness practice';
    }

    public function links()
    {
        $this->render->title = 'Useful links';
    }
}
