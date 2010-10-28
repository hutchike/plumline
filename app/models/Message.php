<?
class Message extends Model
{
    public function setup()
    {
        $this->set_timestamp('created_at', 'updated_at');
        $this->validates('name', 'is_valid_length', array('shortest' => 3, 'longest' => 70));
        $this->validates('email', 'is_valid_email');
        $this->validates('email', 'is_valid_length', array('shortest' => 6, 'longest' => 70));
        $this->validates('country', 'is_valid_length', array('shortest' => 2, 'longest' => 70));
        $this->validates('timezone', 'is_valid_length', array('shortest' => 3, 'longest' => 70));
    }
}

// End of Message.php
