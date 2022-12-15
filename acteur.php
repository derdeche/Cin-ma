<?php
class acteur extends Personne
{

    private array $_casting;


public function __construct($nom,$prenom, $sexe, $datenaissance)
{
    parent::__construct($nom,$prenom, $sexe, $datenaissance);

    $this->_casting = [];
}

public function addCasting($casting)
{   
 
    $this->_casting[]= $casting;
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

public function afficherActeur()
{
    echo "l acteur".$this."<br>";
    foreach($this->_casting as $casting)
    {
    echo $casting->getFilm()->getRole()."<br>";
    }

}
}
