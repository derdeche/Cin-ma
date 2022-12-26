<?php
class Genre 
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
                      /*  function pour affichage du genre de film*/ 
    public function afficherGenre()
    {
        echo 'les films du genre '. $this." "."sont : " ."<br>";
        foreach($this->_films as $film)
        {
            echo $film."<br>";
        }
    }

   

    

}