<?php
class Users
{

    public $id;
    public $name;
    public $mail;
    public $registered;

    function __construct($id, $name, $mail, $registered)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->registered = $registered;
    }
}
