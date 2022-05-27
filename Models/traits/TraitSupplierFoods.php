<?php  

trait SupplierFoods {
    protected $supplierName = "Royal";
    protected $supplierCity = "Arezzo";

    public function getSupplierName()
    {
        return $this->supplierName;
    }
    public function getSupplierCity()
    {
        return $this->supplierCity;
    }
}