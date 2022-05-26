<?php  

class Products {
    
        public $id;
        public $name;
        public $description;
        public $price;
        public $has_discount = false;
        public $discount = 0;

    function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

    }

    public function setSconto()
    {
        if($this->has_discount = true) {
            $this->discount = 10;
        }
    }

}