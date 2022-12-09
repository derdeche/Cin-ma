<?php

class Réalisateur 
{
    private $_nom;
    private string $_prenom;
    private string $_sexe;
    private int $_datenaissance;
    private array $_titrefilm;
}

public function __construct($nom, $sexe, $datenaissance, $titrefilm)
{
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_datenaissance = $datenaissance;
    $this->_titrefilm = [];
}

