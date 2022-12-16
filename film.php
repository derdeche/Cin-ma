<?php

class Film
{
    private string $_titrefilm;
    private string $_datesortie;
    private int $_duree;
    private Réalisateur $_unirealisateur;
    private Genre $_genre;
    private array $_casting;

    
    public function __construct($titrefilm, $datesortie, $duree, $unirealisateur, $genre)
    {
        $this->_titrefilm = $titrefilm;
        $this->_datesortie = $datesortie;
        $this->_duree = $duree;
        $this->_unirealisateur = $unirealisateur;
        $this->_genre = $genre;
        $this->_casting = [];
        $this->_unirealisateur->addFilm($this);
        $this->_genre->addFilm($this);
        
    }
    
    public function addCasting($casting)
    {
        $this->_casting[] = $casting;
        return $this;
    }
    
    public function getTitrefilm()
    {
        return $this->_titrefilm;
}



public function getDatesortie()
{
    return $this->_datesortie;
}


public function getDuree()
{
    return $this->_duree;
}


public function getUnirealisateur()
{
    return $this->_unirealisateur;
}


public function getGenre()
{
    return $this->_genre;
}

public function getInfofilm()
{
    return "Titre du film : ". $this->_titrefilm ."<br>". "Date de sortie :  ". $this->_datesortie."<br>"." Durée :  " .$this->getDuree()."min"."<br>" .$this->getUnirealisateur();
}


public function __tostring()
{
    return  $this->_titrefilm ."<br>";

}
/*public function afficherInfo()
{
    echo $this;
    foreach ($this->_casting as $casting)
{
        echo $casting."<br>";
    
}*/

    


    
       
       
       
       
    




}