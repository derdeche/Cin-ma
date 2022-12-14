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
    return $this->getNom(). $this->getPrenom(). $this->getSexe().$this->getDatenaissance();
 }











}



