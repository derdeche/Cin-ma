<?php

class film
{
    private string $_titrefilm;
    private string $_datesortie;
    private int $_duree;
    private Réalisateur $_unirealisateur;
    private Genre $_genre;


public function __construct($titrefilm, $datesortie, $duree, $unirealisateur, $genre)
{
    $this->_titrefilm = $titrefilm;
    $this->_datesortie = $datesortie;
    $this->_duree = $duree;
    $this->_unirealisateur = $unirealisateur;
    $this->_genre = $genre;
    $this->_unirealisateur->addFilm($this);
    $this->_genre->addFilm($this);
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
    return $this->_duree;
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

public function getGenre()
{
    return $this->_genre;
}

public function setGenre($genre)
{
    $this->_genre = $genre;
    return $this;
}

public function __tostring()
{
    return  $this->_titrefilm;
}
















}