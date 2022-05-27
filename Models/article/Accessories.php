<?php  
class Accessories extends Products {
    use SupplierAccessories;
    public $category = 'Accessori';

function __construct($id, $name, $description, $price) {
    parent::__construct($id, $name, $description, $price);
}

}