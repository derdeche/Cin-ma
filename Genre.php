<?php
class genre 
{
    private string $_nomGenre;
    
    
    public function __construct( $_nomGenre)
    {
        $this->_nomGenre = $_nomGenre;
    }
    
    /**
     * Get the value of _nomGenre
     */ 
    public function get_nomGenre()
    {
        return $this->_nomGenre;
    }
    
    /**
     * Set the value of _nomGenre
     *
     * @return  self
     */ 
    public function set_nomGenre($_nomGenre)
    {
        $this->_nomGenre = $_nomGenre;
    
        return $this;
    }























}