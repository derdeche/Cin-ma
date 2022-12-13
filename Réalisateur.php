<?php

class Réalisateur extends Personne
{

    private array $_films;


public function __construct($nom, $prenom, $sexe, $datenaissance)
{
    parent::__construct($nom, $prenom, $sexe, $datenaissance) ;

    $this->_films = [];
}

public function addFilm($film)
{   
 
    $this->_films[]= $film;
} 

public function __toString()
{
    return "Nom du Réalisateur : ". $this->getNom()."<br>"."Prénom du Réalisateur :". $this->getPrenom()."<br>"."Sexe :". $this->getSexe()."<br>"."Date de Naissance :". $this->getDatenaissance()."<br>";
}




}