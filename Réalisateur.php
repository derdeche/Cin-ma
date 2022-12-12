<?php

class Réalisateur 
{
    private $_nom;
    private string $_prenom;
    private string $_sexe;
    private int $_datenaissance;
    private array $_titrefilm;


public function __construct($nom, $prenom, $sexe, $datenaissance, $titrefilm)
{
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_datenaissance = $datenaissance;
    $this->_titrefilm = [];
}

public function addTitrefilm($titrefilm)
{   
 
    $this->_titrefilm[]= $titrefilm;
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


























}