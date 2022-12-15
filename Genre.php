<?php
class genre 
{
    private string $_Genre;
    private array $_films;
    
    
    public function __construct($Genre)
    {
        $this->_Genre = $Genre;
        $this->_films = [];
    }
    
   public function addFilm($film)
   {
        $this->_films[] = $film;
        return $this;
   }

    public function getGenre()
    {
        return $this->_Genre;
    }
    
   

    public function __toString()
    {
        return $this->getGenre();
    }

    
    





















}