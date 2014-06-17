<?
class App_controller extends Controller
{
    public function before()
    {
        $this->render->session_user_id = $this->session->user_id;
        $this->render->session_user_email = $this->session->user_email;
        $this->render->user_email = $this->cookie->user_email;
        $this->render->title = 'Supporting online sanghas in the tradition of Thich Nhat Hanh';
        $this->render->onload = 'plumline.onload()';
        $this->render->layout = 'framed'; // Was "simple"
        $this->render->image = $this->get_random_image();
    }

    public function get_random_image()
    {
        $images = array(
            'Buddha-statue-by-wall.jpg',
            'Buddha-statue-in-garden.jpg',
            'beautiful-lotus-flower.jpg',
            'lotus-tea-anyone.jpg',
        );
        return $images[ rand(0, count($images)-1) ];
    }
}

// End of App.php
