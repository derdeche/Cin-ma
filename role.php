<?php

class Role 
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
    return $this->getRole();
}

public function afficherCasting()
{
    echo 'l acteur' .$this. 'a  joué le role de'. $this->getRole();
    foreach($this->_casting as $casting)
    {
        echo $casting."<br>";
    }

    
}

public function afficherRole(){

    echo "<br> Le role  ".$this. " a été joué par :<br>";

    foreach($this->_casting as $casting)
    {

        echo $casting->getActeur()."<br>";

    }

        

} 
}
