<?php 
// empty () isset ():> focntiosn natives ( existent par defaut)
// empty verifie; est ec que la varaible existe et sa valeur n est pas vide 
// est ce que  var a été cree avant 
// et est ce que la var contient une valeur vide ou() null)
$verif1 = empty($a); 
var_dump($verif1);// true 
$b = null ; 
$verif2 = empty($b);
var_dump($verif2);
// var stocke "" 0 []

$c = 0 ; 
var_dump(empty($c));// true

var_dump(empty(""));// true 
var_dump(empty(0));// true 
var_dump(empty([]));// true 
var_dump(empty(null));// true 
var_dump(empty(false ));// true  varoiable ; existe et savaleur est de empty
$texte = "coucou les mais ";
var_dump(empty ($texte));// false 

$tableau =[1];
var_dump(empty($tableau)); //false

// isset verifie que la variable existe 
$taat = "comment vas tu ?";
var_dump(isset($tata));//true, var tata existe quelque soit savaleur
var_dump(isset($toto)) ; // false 

$titre = "article1";
var_dump(isset ($titre)); // true existe;
var_dump(empty ($titre )); // false 

$formation = [
"budget "=> 100,
"unité"=> "euros"       , 
"description"=>"",

];
var_dump(isset($formation ["description"])); // true 
var_dump(empty($formation ["description"]) );// false 

//empty = existance et valeur; isset est la valeur
// ex formulaire;