<?php

//Class model for the orders
class Order
{
    private int $idOrder;
    private date $dateOrder;
    private date $dateDelivery;
    private Customer $idCustomer;
    private string $orderType;
    private boolean $bill;
    private boolean $quotation; //le devis
    private Jewelry $idJewelry;
    private string $typeJewelry;

    function __construct($idOrder, $dateOrder, $dateDelivery, $idCustomer, $orderType, $bill, $quotation, $idJewelry, $typeJewelry)
    {
        $this->idOrder = $idOrder;
        $this->dateOrder = $dateOrder;
        $this->dateDelivery = $dateDelivery;
        $this->idCustomer = $idCustomer;
        $this->orderType = $orderType;
        $this->bill = $bill;
        $this->quotation = $quotation;
        $this->idJewelry = $idJewelry;
        $this->typeJewelry = $typeJewelry;
    }

    public function getIdOrder(): int {
        return $this->idOrder;
    }

    public function setIdOrder(int $idOrder) {
        return $this->idOrder;
    }

    function display()
    {
        echo $this->idOrder;
        echo $this->dateOrder;
        echo $this->dateDelivery;
        echo $this->idCustomer;
        echo $this->orderType;
        echo $this->bill;
        echo $this->quotation;
        echo $this->idJewelry;
        echo $this->typeJewelry;
    }
}