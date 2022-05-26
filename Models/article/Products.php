<?php  

class Products {
    
        public $id;
        public $name;
        public $poster = "https://picsum.photos/500";
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

    public function setSconto($user)
    {
        if($user->registered = true) {
            $this->has_discount = true;
            $this->discount = 20;
        }
    }

    public function getPrice()
    {
        return $this->price = $this->price -  ($this->price * $this->discount / 100);
    }

}