<?php
class Payments
{

    protected $type = "credit card";
    protected $number = 16;
    protected $cvv = 3;
    protected $expired = false;

    public function getType()
    {
        return $this->type;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getCvv()
    {
        return $this->cvv;
    }
    public function getExpired()
    {
        return $this->expired;
    }
}
