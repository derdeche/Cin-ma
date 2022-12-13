<?php
class casting
{
    private $_film;
    private $_role;
    private $_acteur;


public function __construct($film, $role, $acteur)
{
    $this->_film = $film;
    $this->_role = $role;
    $this->_acteur = $acteur;
}

}