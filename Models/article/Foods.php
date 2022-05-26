<?php  
class Foods extends Products {
    public $category = 'Cibo';

function __construct($id, $name, $description, $price) {
    parent::__construct($id, $name, $description, $price);
}

}