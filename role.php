<?php

class role 
{
    private $_role;
    private array $_casting;

public function __construct($role)
{
    $this->_role = $role;
    $this->_casting = [];
}

public function addCasting($casting)
{
    $this->_casting[] = $casting;
    return $this;
}

public function getRole()
{
    return $this->_role;
}
 


public function __toString()
{
    return "Le role joué est ".$this->getRole();
}

public function afficherCasting()
{
    echo 'l acteur' .$this. 'a  joué le role de'. $this->getRole();
    foreach($this->_casting as $casting)
    {
        echo $casting."<br>";
    }
 
    
  






























}

