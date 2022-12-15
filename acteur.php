<?php
class acteur extends Personne
{

    private array $_films;


public function __construct($nom,$prenom, $sexe, $datenaissance)
{
    parent::__construct($nom,$prenom, $sexe, $datenaissance);

    $this->_films = [];
}

public function addFilm($film)
{   
 
    $this->_films[]= $film;
} 

public function getNom()
{
    return $this->_nom;
}


public function getPrenom()
{
    return $this->_prenom;
}


public function getSexe()
{
    return $this->_sexe;
}


public function getDatenaissance()
{
    return $this->_datenaissance;
}


public function __toString()
{
    return $this->getNom()." ".$this->getPrenom()." ".$this->getSexe()." ".$this->getDatenaissance();
}
}