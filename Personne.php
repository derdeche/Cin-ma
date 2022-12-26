<?php

class Personne
{
    private $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_datenaissance;


    public function __construct(string $nom, string $prenom, string $sexe, string $datenaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_datenaissance = $datenaissance;
    
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


                /* Affichage info Acteur*/
public function __toString()
{
    return $this->getNom(). $this->getPrenom()." "."Né le". $this->getDatenaissance();
}



}



