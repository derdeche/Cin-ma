<h1>POO-CINEMA</h1>
<p>Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que leur réalisateur 
(unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis) pourra éventuellement être renseigné.
Chaque film est caractérisé par 
un seul genre cinématographique (science-fiction, aventure, action, ...).<br>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, 
le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).<br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre en place correctement !<br>
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs.)<br>
On doit pouvoir :<br>
Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, …)<br>
Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br>
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade Runner, ...)<br>
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br>
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>

<h2>Résultat</h2>

<?php

require_once "film.php";
require_once "Genre.php";
require_once "Personne.php";
require_once "Réalisateur.php";
require_once "role.php";
require_once "acteur.php";
require_once "Casting.php";

//Listes Réalisateurs//

$real1 = new Réalisateur(' Tim ', ' Burton ', ' male ', ' 25 août 1958 ');
$real2 = new Réalisateur(' Joel ', ' Schumacher ', ' male ', ' 29 août 1939 ' );
/*$real3 = new Réalisateur(' Christopher ', '  Nolan ', ' male ', ' 30 juillet 1970 ' );*/
/*$real4 = new Réalisateur(' Sam ', '  Raimi ', ' male ', ' 23 octobre 1959 ' );*/
/*$real5 = new Réalisateur(' Marc ', '  Webb ', ' male ', ' 31 août 1974 ' );*/
/*$real6 = new Réalisateur(' Brian ', '  De Palma ', ' male ', ' 11 septembre 1940 ' );*/
/*$real7 = new Réalisateur(' John ', '  Woo ', ' male ', ' 1 mai 1946 ' );*/
/*$real7 = new Réalisateur(' JJ ', '  Abrams ', ' male ', ' 27 juin 1966 ' );*/
/*$real8 = new Réalisateur(' Brad ', '  Bird ', ' male ', ' 24 septembre 1957 ' );*/

/*$film2 = new film ('Batman Forever ','19 juillet 1995','122',$real2,$genre2, $acteur2);*/
/*$film3 = new film ('Batman et Robin ','20 juin 1997','125',$real2,$genre3, $acteur3);*/
/*$film4 = new film ('Batman Begins ', '15 juin 2005' ,'140',$real3,$genre4, $acteur4);*/

$acteur1 = new acteur (' Michael ',' Keaton ', 'Male','5 septembre 1951');
$acteur2 = new acteur ('Val ',' Kilmer ','Male','31 décembre 1959');

$genre1 = new genre('Action');
$genre2 = new genre('Adventure');
$genre3 = new genre('Adventure');

$role1 = new role('Batman');
$role2 = new role('Batman');

$film1 = new film (' Batman  le défi ','15 juillet 1992',126,$real1,$genre1, $acteur1);
$film2 = new film ('Batman Forever ','19 juillet 1995',122, $real2,$genre2, $acteur2);

$casting1 = new Casting($role1,$acteur1,$film1);
$casting2 = new casting($role2,$acteur2,$film2);



/*$acteur1->afficherActeur();*/


/*$acteur1->afficherfilm();*/
/*echo $film1->getInfofilm();*/
/*$casting1->getCasting();*/
/*$film1->afficherInfo();*/
/*$genre1->afficherGenre();*/
$real1->afficherfilm();
$casting1->getCasting();
$genre1->afficherGenre();
$acteur1->afficherActeur();
echo "--------------------------------------------"."<br>";

$real2->afficherfilm();
$casting2->getCasting();
$genre2->afficherGenre();
$acteur2->afficherActeur();
echo "--------------------------------------------";















