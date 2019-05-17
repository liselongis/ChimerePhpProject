<?php

//Class model for the jobs
class Job
{
    private int $idJob;
    private string $libelleJob;
    private Scorecard $idScorecard;

    public function __constructor($idJob, $libelleJob, $idScorecard) {
        this->idJob = $idJob;
        this->libelleJob = $libelleJob;
        this->idScorecard = $idScorecard;
    }

function getIdJob(): int {
    return this->idJob;
}

public function setIdJob(int $idJob) {
    return this->idJob;
}

public function getLibelleJob(): string {
    return this->libelleJob;
}

public function setLibelleJob(string $libelleJob) {
    return this->libelleJob;
}

public function getIdScorecard(): Scorecard {
    return this->idScorecard;
}

public function setIdScorecard(Scorecard $idScorecard) {
    return this->idScorecard;
}

function display() {
    echo $this->idJob;
    echo $this->libelleJob;
    echo $this->idScorecard;
}