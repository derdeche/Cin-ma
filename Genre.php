<?php
class genre 
{
    private string $_nomGenre;
    private array $_films;
    
    
    public function __construct($_nomGenre)
    {
        $this->_nomGenre = $_nomGenre;
        $this->_films = [];
    }
    
   
    public function getnomGenre()
    {
        return $this->_nomGenre;
    }
    
   
    public function setnomGenre($_nomGenre)
    {
        $this->_nomGenre = $_nomGenre;
    
        return $this;
    }

    public function addFilm($film)
    {
        $this->_films[]= $film;
    }

     
    





















}