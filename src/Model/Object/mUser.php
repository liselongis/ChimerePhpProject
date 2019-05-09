<?php

//Class model for the users
class User
{
    private $idUser;
    private $lastNameUser;
    private $firstNameUser;
    private $jobUser;
    private $loginUser;
    private $passwordUser;
    private $emailUser;
    private $phoneUser;

    function __construct($idUser, $lastNameUser, $firstNameUser, $jobUser, $loginUser, $passwordUser, $emailUser, $phoneUser)
    {
        $this->idUser = $idUser;
        $this->lastNameUser = $lastNameUser;
        $this->firstNameUser = $firstNameUser;
        $this->jobUser = $jobUser;
        $this->loginUser = $loginUser;
        $this->passwordUser = $passwordUser;
        $this->emailUser = $emailUser;
        $this->phoneUser = $phoneUser;
    }

    public function getFirstName(): string {
        return $this->firstNameUser;
    }

    public function setFirstName(string $firstNameUser) {
        return $this->firstNameUser;
    }

    function display()
    {
        echo $this->idUser;
        echo $this->lastNameUser;
        echo $this->firstNameUser;
        echo $this->jobUser;
        echo $this->loginUser;
        echo $this->passwordUser;
        echo $this->emailUser;
        echo $this->phoneUser;
    }
}
