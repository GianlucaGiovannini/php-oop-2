<?php  
class Games extends Products {
    use SupplierGames;
    public $category = 'Giochi';

function __construct($id, $name, $description, $price) {
    parent::__construct($id, $name, $description, $price);
}

}