<?php
class Participant{
    private $id;
    private $nom;
    private $age;

    public function __construct($id,$nom,$age){
        $this->id=$id;
        $this->nom=$nom;
        $this->age=$age;
    }
    public function getage(){
        return $this->age;
    }

    public function getnom(){
        return $this->nom;
    }
}

?>