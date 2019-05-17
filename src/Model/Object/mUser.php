<?php

//Class model for the users
class User
{
    private int $idUser;
    private string $lastNameUser;
    private string $firstNameUser;
    private Job $jobUser;
    private string $loginUser;
    private string $passwordUser;
    private string $emailUser;
    private string $phoneUser;

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

    public function getIdUser()): int {
        return $this->idUser;
    }

    public function setIdUser(int $idUser) {
        return $this->idUser;
    }

    public function getLastName(): string {
        return $this->LastNameUser;
    }

    public function setLastName(string $lastNameUser) {
        return $this->lastNameUser;
    }

    public function getJobUser(): Job {
        return $this->jobUser;
    }

    public function setJobUser(Job $JobUser) {
        return $this->jobUser;
    }

    public function getLoginUser(): string {
        return $this->loginUser;
    }

    public function setLoginUser(string $loginUser) {
        return $this->loginUser;
    }

    public function getPassewordUser(): string {
        return $this->passewordUser;
    }

    public function setPassewordUser(string $passewordUser) {
        return $this->passewordUser;
    }
    public function getEmailUser(): string {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser) {
        return $this->emailUser;
    }

    public function getPhoneUser(): string {
        return $this->phoneUser;
    }

    public function setPhoneUser(string $phoneUser) {
        return $this->phoneUser;
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
