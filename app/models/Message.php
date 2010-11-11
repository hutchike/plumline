<?
class Message extends Model
{
    public function setup()
    {
        $this->set_timestamp('created_at', 'updated_at');
        $this->validates('name', 'is_valid_length', array('shortest' => 3, 'longest' => 70));
        $this->validates('email', 'is_valid_email');
        $this->validates('email', 'is_yahoo_email');
        $this->validates('email', 'is_valid_length', array('shortest' => 6, 'longest' => 70));
        $this->validates('country', 'is_valid_length', array('shortest' => 2, 'longest' => 70));
        $this->validates('timezone', 'is_valid_length', array('shortest' => 3, 'longest' => 70));
    }

    public function is_yahoo_email($email)
    {
        if (strpos(strtolower($email), '@yahoo.') === FALSE)
        {
            return 'VALID_EMAIL_MUST_BE_YAHOO';
        }
    }
}

// End of Message.php
