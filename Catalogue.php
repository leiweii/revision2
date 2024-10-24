<?php
class Catalogue
{
    private $annee;
    private $lesCours; 

    public function __construct($annee)
    {
        $this->annee = $annee;
    }
    public function ajouterCours($leCours)
    {
        $this->lesCours[] = $leCours;
    }
    public function getLesCoursCollectifsDisponibles()
    {
        $coursDisponibles = [];

        foreach ($this->lesCours as $cours) {
            if (get_class($cours) === 'CoursCollectif') {
                if (!$cours->estComplet()) {
                    $coursDisponibles[] = $cours; 
                }
            }
        }
        return $coursDisponibles;
    }
    

    public function getNbCoursGuitare()
    { 
        $nbCoursGuitare = 0; 

    foreach ($this->lesCours as $cours) {
        if (get_class($cours) === 'CoursIndividuel') {
            if ($cours->getInstrument()->getNom() === 'Guitare') {
                $nbCoursGuitare++;
            }
        }
    }
    return $nbCoursGuitare;
    }
}