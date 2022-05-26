<?php
class Users
{

    public $id;
    public $name;
    public $mail;
    public $registered = true;

    function __construct($id, $name, $mail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;

    }
}
