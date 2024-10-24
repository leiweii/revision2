<?php

class CoursCollectif extends Cours
{

    private $libelle; 
    private $ageMaxi;
    private $nbPlacesMaxi;

    public function __construct($unId, $unAgeMini, $unLibelle, $unAgeMaxi, $unNbPlacesMaxi)
    {
        parent::__construct($unId, $unAgeMini);
        $this->libelle = $unLibelle;
        $this->ageMaxi = $unAgeMaxi;
        $this->nbPlacesMaxi = $unNbPlacesMaxi;
    }

    public function convient($age)
    {
        return $age <= $this->ageMaxi && $age >= $this->ageMini;
    }

    public function estComplet(){
        return count($this->lesParticipants) >= $this->nbPlacesMaxi;
    }

    public function peutSInscrire($age)
    {
        return $this->convient($age) && !$this->estComplet();
    }

    public function getNbParticipants()
    {
        return count($this->lesParticipants);
    }

    public function getParticipants()
    {
        return $this->lesParticipants;
    }

}

?>