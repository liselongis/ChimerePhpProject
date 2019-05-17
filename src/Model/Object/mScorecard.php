<?php

//Class model for the scorecards
class Scorecard {

    private int $idScorecard;
    private date $updateDate;
    private string $scorecardState;
    private string $comment;
    private int $nbHour;
    private User $idUser;
    private Job $idJob;
    private Order $idOrder;

    function __constructor($idScorecard, $updateDate, $scorecardState, $comment, $nbHour, $idUser, $idJob, $idOrder) {
        $this->idScorecard = $idScorecard;
        $this->updateDate = $updateDate;
        $this->scorecardState = $scorecardState;
        $this->comment = $comment;
        $this->nbHour = $nbHour;
        $this->idUser = $idUser;
        $this->idJob = $idJob;
        $this->idOrder = $idOrder;
    }

    public getIdScorecard(): int {
        return $this->idScorecard;
    }

    public setIdScorecard(int $idScorecard) {
        return $this->idScorecard;
    }

    public getUpdateDate(): date {
        return $this->updateDate;
    }

    public setUpdateDate(date $updateDate) {
        return $this->updateDate;
    }

    public getScorecardState(): string {
        return $this->scorecardState;
    }

    public setScorecardState(string $scorecardState) {
        return $this->scorecardState;
    }

    public getComment(): string {
        return $this->comment;
    }

    public setComment(string $comment) {
        return $this->comment;
    }

    public getNbHour(): int {
        return $this->nbHour;
    }

    public setNbHour(int $nbHour) {
        return $this->nbHour;
    }

    public getIdUser(): int {
        return $this->idUser;
    }

    public setIdUser(int $idUser) {
        return $this->idUser;
    }

    public getIdOrder(): int {
        return $this->idOrder;
    }

    public setIdOrder(int $idOrder) {
        return $this->idOrder;
    }

    public getIdJob(): int {
        return $this->idJob;
    }

    public setIdJob(int $idJob) {
        return $this->idJob;
    }

    function display() {
        echo $this->idScorecard;
        echo $this->updateDate;
        echo $this->scorecardState;
        echo $this->comment;
        echo $this->nbHour;
        echo $this->idUser;
        echo $this->idJob;
        echo $this->idOrder;
    }
}