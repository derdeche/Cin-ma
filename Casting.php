<?php
class casting
{
    private role $_role;
    private acteur $_acteur;
    private film $_film;
    

public function __construct($role, $acteur,$film)
{
    $this->_role = $role;
    $this->_acteur = $acteur;
    $this->_film = $film;
    $this->_film->addCasting($this);
    $this->_acteur->addCasting($this);
    $this->_role->addCasting($this);    
}

public function addFilm($film)
{   
 
    $this->_films[]= $film;
} 


public function getFilm()
{
    return $this->_film;
}

public function getRole()
{
    return $this->_role;
}


public function getActeur()
{
    return $this->_acteur;
}



public function __toString()
{
    return "L'acteur". $this->getActeur() . "a joué le role de " . $this->getRole() ."dans". $this->getFilm();
}

public function getCasting()
{
    return "Dans le film".$this->getFilm()."L'acteur". $this->getActeur() . "a joué le role de " . $this->getRole() ."dans". $this->getFilm();
}





}
