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

public function setRole()
{
    $this->_casting = $casting;
    return $this;    
}

public function __toString()
{
    return "Le role joué est ".$this->getRole();
}
{



























}

