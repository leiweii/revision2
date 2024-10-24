<?php

class CoursIndividuel extends Cours {


    private $instrument;

    public function __construct($unId, $unAgeMini, $unInstrument) { 
        parent::__construct($unId, $unAgeMini);
        $this->instrument = $unInstrument;
    }

    public function getInstrument() {
        return $this->instrument;
    }
}

?>