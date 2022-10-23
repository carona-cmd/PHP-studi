<?php
//5 grandes catégories de variables 
// variable / constante

// chaine de caractère => string
$auteur ="victor hugo";
$auteur2 ='Geoarges sand ';//methode qu ils ocnseillent;
$citation = "victor hugo a dit '"ou est donc or nin car "'
$citation = "victor hugo a dit '\"ou est donc or nin car \"'
// anti slash alt maj /

$phrase = 'bonjour les amis comment allez vous aujourd \'hui';
// nombre entier : nombre entier 1,2 
//        float : avec virgule 1.2
$prix= 12.5;
define ("REDUCTION ", 0.2);
$temperature =-5;// a coller 
var_dump($temperature)
// xdebug
//< pre></pre>
echo "<pre>";
echo '<br>';
print_r(REDUCTION);
echo <'pre'>;

// booleen 
$isRedacteur = true // true est un mot clef du lanagage phpcomme define()echo 
//true est une valeur 
$isRedacteur ='true'// ce n est pas un booeleen : string ;
$isAdmin = false ;
$isAvailable = 10 >3;
// string / number(int/float)/ booeleen
//valeur primitve 
// 1 valeur = 1 seule valeur 

// valeurs scalaires 
// stocker das une variable plusiuers valeurs en m^me temeps 
// 2 mnieres de creer des tableaux en php
// vielle methode :
$saison = array ("été","printemps","automne", "hiver");
// à aprtir de la version 5.3 => 2 eme methode 
$fleurs = ["jasmin","rose","lilas"];
// echo n affiche pas le tableau 
// il faut mettre print_r
echo"<pre>";  
print_r($saisons);
echo"</pre>";
var_dump($saisons)

$paramètres =[2, "toto", true, []]