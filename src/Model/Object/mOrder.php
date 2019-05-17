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
    private int $numJewelry;
    private string $typeJewelry;
    private Scorecard $idScorecard;

    function __construct($idOrder, $dateOrder, $dateDelivery, $idCustomer, $orderType, $bill, $quotation, $numJewelry, $typeJewelry, $idScorecard)
    {
        $this->idOrder = $idOrder;
        $this->dateOrder = $dateOrder;
        $this->dateDelivery = $dateDelivery;
        $this->idCustomer = $idCustomer;
        $this->orderType = $orderType;
        $this->bill = $bill;
        $this->quotation = $quotation;
        $this->numJewelry = $numJewelry;
        $this->typeJewelry = $typeJewelry;
        $this->$idScorecard = $idScorecard;
    }

    public function getIdOrder(): int {
        return $this->idOrder;
    }

    public function setIdOrder(int $idOrder) {
        return $this->idOrder;
    }
    
    public function getDateOrder(): date {
        return $this->dateOrder;
    }

    public function setDateOrder(date $dateOrder) {
        return $this->dateOrder;
    }

    public function getDateDelivery(): date {
        return $this->dateDelivery;
    }

    public function setDateDelivery(date $dateDelivery) {
        return $this->dateDelivery;
    }
    
    public function getIdCustomer(): Customer {
        return $this->idCustomer;
    }

    public function setCustomer(Customer $idCustomer) {
        return $this->idCustomer;
    }
    
    public function getOrderType(): string {
        return $this->orderType;
    }

    public function setOrderType(string $orderType) {
        return $this->orderType;
    }
    public function getBill(): boolean {
        return $this->bill;
    }

    public function setBill(boolean $bill) {
        return $this->bill;
    }

    public function getQuotation(): boolean {
        return $this->quotation;
    }

    public function setQuotation(boolean $quotation) {
        return $this->quotation;
    }
    public function getIdJewelry(): Jewelry {
        return $this->numJewelry;
    }

    public function setIdJewelry(Jewelry $numJewelry) {
        return $this->numJewelry;
    }

    public function getTypeJewelry(): string {
        return $this->typeJewelry;
    }

    public function setTypeJewelry(string $typeJewelry) {
        return $this->typeJewelry;
    }

    public function getIdScorecard(): Scorecard {
        return $this->idScorecard;
    }

    public function setIdScorecard(Scorecard $idScorecard) {
        return $this->idScorecard;
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
        echo $this->numJewelry;
        echo $this->typeJewelry;
    }
}