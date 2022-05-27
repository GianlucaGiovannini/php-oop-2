<?php  

trait SupplierGames {
    protected $supplierName = "Toys";
    protected $supplierCity = "London";

    public function getSupplierName()
    {
        return $this->supplierName;
    }
    public function getSupplierCity()
    {
        return $this->supplierCity;
    }
}