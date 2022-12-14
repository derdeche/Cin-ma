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

public function setNom($nom)
{
    $this->_nom = $nom;
    return $this;
}

public function getPrenom()
{
    return $this->_prenom;
}

public function setPrenom($prenom)
{
    $this->_prenom = $prenom;
    return $this;
}

public function getSexe()
{
    return $this->_sexe;
}

public function setSexe($sexe)
{
    $this->_sexe = $sexe;
    return $this;
}

public function getDatenaissance()
{
    return $this->_datenaissance;
}

public function setDatenaissance($datenaissance)
{
    $this->_datenaissance = $datenaissance;
    return $this;
}

public function __toString()
{
    return $this->getNom()." ".$this->getPrenom()." ".$this->getSexe()." ".$this->getDatenaissance();
}
}