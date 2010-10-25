<?
load_helpers('Translate');

class App_controller extends Controller
{
    public function before()
    {
        $this->render->session_user_id = $this->session->user_id;
        $this->render->session_user_email = $this->session->user_email;
        $this->render->user_email = $this->cookie->user_email;
        $this->render->title = 'Plumline - an e-Sangha in the tradition of Thich Nhat Hanh';
        $this->render->onload = '';
        $this->render->layout = 'simple';
    }
}

// End of App.php
