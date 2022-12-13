<?php
class casting
{
    private role $_role;
    private acteur $_acteur;
    private array $_film;
    

public function __construct($role, $acteur)
{
    $this->_role = $role;
    $this->_acteur = $acteur;
    $this->_film = [];
    $this->_acteur->addFilm($this);
    $this->_role->addFilm($this);    
}

public function addFilm($film)
{   
 
    $this->_films[]= $film;
} 


public function getFilm()
{
    return $this->_film;
}

public function setFilm($film)
{
    $this->_film = $film;
    return $this;
}

public function getRole()
{
    return $this->_role;
}

public function setRole()
{
    $this->_role = $role;
    return $this;
}
public function getActeur()
{
    return $this->_acteur;
}

public function setActeur($acteur)
{
    $this->_acteur = $acteur;
    return $this;
}







}