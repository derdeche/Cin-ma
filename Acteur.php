<?php
class Acteur extends Personne
{

    private array $_casting;


    public function __construct($nom,$prenom, $sexe, $datenaissance)
{
    parent::__construct($nom,$prenom, $sexe, $datenaissance);

    $this->_casting = [];
}

    public function addCasting($casting)
{   
 
    $this->_casting[]= $casting;
} 


    public function __toString()
{
    return $this->getNom()." ".$this->getPrenom()." ".$this->getSexe()." ".$this->getDatenaissance();
}


                       /*public function affichage casting acteur*/
    public function afficherActeur(){

    echo "<br> L'acteur " .$this->getPrenom()." ".$this->getNom(). " a joué dans les films :<br>";

    foreach($this->_casting as $casting)
    {

        echo $casting->getFilm();

    }

        echo " dans lequel il incarne le role de " .$casting->getRole()."<br>";

}  
    
 
 
    


}
