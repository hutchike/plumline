<?
load_helpers('Translate');

class App_controller extends Controller
{
    public function before()
    {
        $this->render->session_user_id = $this->session->user_id;
        $this->render->session_user_email = $this->session->user_email;
        $this->render->user_email = $this->cookie->user_email;
        $this->render->title = 'Plumline';
        $this->render->onload = '';
        $this->render->layout = 'laptop';
    }
}

// End of App.php
