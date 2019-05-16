<?php

//Class model for the customers
class Customer
{
    public int $idCustomer;
    public string $nameCustomer;
    public string $firstNameCustomer;
    public string $emailCustomer;
    public string $phoneCustomer;

    function __constructor($idCustomer, $nameCustomer, $firstNameCustomer, $emailCustomer, $phoneCustomer) {
        $this->idCustomer = $idCustomer;
        $this->nameCustomer = $nameCustomer;
        $this->firstNameCustomer = $firstNameCustomer;
        $this->emailCustomer = $emailCustomer;
        $this->phoneCustomer = $phoneCustomer;
    }

    public function getIdCustomer(): int {
        return $this->idCustomer;
    }

    public function setIdCustomer(int $idCustomer) {
        return $this->idCustomer;
    }

    public function getNameCustomer(): string {
        return $this->nameCustomer;
    }

    public function setNameCustomer(): string {
        return $this->nameCustomer;
    }

    public function getFirstNameCustomer(): string {
        return $this->firstNameCustomer;
    }

    public function setFirstNameCustomer(): string {
        return $this->firstNameCustomer;
    }

    public function getEmailCustomer(): string {
        return $this->emailCustomer;
    }

    public function setEmailCustomer(): string {
        return $this->emailCustomer;
    }

    public function getPhoneCustomer(): string {
        return $this->phoneCustomer;
    }

    public function setPhoneCustomer(): string {
        return $this->phoneCustomer;
    }

    function display() {
        echo $this->idCustomer;
        echo $this->nameCustomer;
        echo $this->firstNameCustomer;
        echo $this->emailCustomer;
        echo $this->phoneCustomer;
    }
}