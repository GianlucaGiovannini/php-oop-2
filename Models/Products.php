<?php  

class Products {
    
        public $id;
        public $name;
        public $description;
        public $price;

    function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

}