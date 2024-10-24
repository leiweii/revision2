<?php

class Instrument {

    private $id;
    private $nom; 

    public function __construct($id, $nom) { 
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getNom() { 
        return $this->nom;
    }

    public function getId() {
        return $this->id;
    }
}

?>