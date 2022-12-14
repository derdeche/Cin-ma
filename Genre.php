<?php
class genre 
{
    private string $_nomGenre;
    private array $_films;
    
    
    public function __construct($nomGenre)
    {
        $this->_nomGenre = $nomGenre;
        $this->_films = [];
    }
    
   public function addFilm($film)
   {
        $this->_films[] = $film
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