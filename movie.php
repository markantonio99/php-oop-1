<?php

class movie {
    public string $title_movie;
    public string $genere;
    public int $anno_uscita;
    public bool $disponibilita;

    function __construct($_title, $_type_movie){
        $this->title_movie = $_title;
        $this->genere = $_type_movie;
    }

    public function disponibilita(bool $status){
        $this->disponibilita = $status;
    }

    public function getDisponibilita() {
        return $this->disponibilita;
    }
}
