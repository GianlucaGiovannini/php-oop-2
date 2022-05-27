<?php

class Products
{
    public $id;
    public $name;
    public $poster = "https://picsum.photos/500";
    public $description;
    public $price;
    public $pieces;
    public $has_discount = false;
    public $discount = 0;

    function __construct($id, $name, $description, $price, $pieces)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->pieces = $pieces;
    }


    public function setSconto($user)
    {
        if ($user->registered = true) {
            $this->has_discount = true;
            $this->discount = 20;
        }
    }

    public function getPrice()
    {
        return $this->price = $this->price -  ($this->price * $this->discount / 100);
    }

    public function controlPieces($pieces)
    {
        if ($pieces <= 0) {
            throw new Exception($this->pieces = "esauriti");
        }
        return $pieces;
    }
}





