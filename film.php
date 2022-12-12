<?php

class film
{
    private string $_titrefilm;
    private string $_datesortie;
    private int $_duree;
    private Réalisateur $_unirealisateur;
    private genre $_genre;



public function __construct($titrefilm, $datesortie, $duree, $unirealisateur, $genre)
{
    $this->_titrefilm = $titrefilm;
    $this->_datesortie = $datesortie;
    $this->_duree = $duree;
    $this->_unirealisateur = $unirealisateur;
    $this->unirealisateur->addFilm($this);
}

public function getTitrefilm()
{
    return $this->_titrefilm;
}

public function setTitrefilm($titrefilm)
{
    $this->_titrefilm = $titrefilm;
    return $this;
}

public function getDatesortie()
{
    return $this->_datesortie;
}

public function setDatesortie($datesortie)
{
    $this->_datesortie = $datesortie;
    return $this;
}

public function getDuree()
{
    return $this->_Duree;
}

public function setDuree($duree)
{
    $this->_duree = $duree;
    return $this;
}

public function getUnirealisateur()
{
    return $this->_unirealisateur;
}

public function setUnirealisateur($unirealisateur)
{
    $this->_unirealisateur = $unirealisateur;
    return $this;
}

public function __tostring()
{
    return  $this->_titrefilm;
}
}