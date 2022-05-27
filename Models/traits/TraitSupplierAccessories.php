<?php  

trait SupplierAccessories {
    protected $supplierName = "Gadget S.p.a.";
    protected $supplierCity = "Rome";

    public function getSupplierName()
    {
        return $this->supplierName;
    }
    public function getSupplierCity()
    {
        return $this->supplierCity;
    }
}