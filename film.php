<?php

class film
{
    private string $_titrefilm;
    private string $_datesortie;
    private int $_duree;
    private Réalisateur $_unirealisateur;
    private string $_genre;

}

public function __construct($titrefilm, $datesortie, $duree, $unirealisateur, $genre)
{
    $this->_titrefilm = $titrefilm;
    $this->_datesortie = $datesortie;
    $this->_duree = $duree;
    $this->_unirealisateur = $unirealisateur;
    $this->unirealisateur->addFilm($this);
}