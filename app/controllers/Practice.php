<?
class Practice_controller extends App_controller
{
    public static $mindfulness_link = '<a href="/practice/mindfulness">Mindfulness practice</a>';

    public function mindfulness()
    {
        $this->render->title = 'Mindfulness practice';
    }

    public function links()
    {
        $this->render->title = 'Useful links';
    }

    public function the_5_mindfulness_trainings()
    {
        $this->render->title = self::$mindfulness_link . ' > The 5 mindfulness trainings';
    }

    public function the_14_mindfulness_trainings()
    {
        $this->render->title = self::$mindfulness_link . ' > The 14 mindfulness trainings';
    }
}
