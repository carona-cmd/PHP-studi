<?php
$chiffre1= 40;
$chiffre2= 10;
// soustraction;
$soustraction= $chiffre1- $chiffre2;
var_dump($soustraction);
// idem $division, multiplication, addition
// chiffre a virgule = float
// puissance et le reste entier 
// 2 puissance 3 => 2x2X2
$puissance = 2**3;
var_dump($puissance);
// reste entier 
// % 
// 10/5 => résultat=> 2 reste 0
$resteEntier =10 % 5;
 
var_dump($resteEntier);
$resteEntier2 =10 % 3;
var_dump($resteEntier2);
// est ce que un chiffre est un multiple d un autre ?
// est ce que 30 est un multiple de 2??
// estce le reste entier == 0
$$resteEntier2teEntier3 = 30 % 2;//15 0
var_dump($resteEntier3 == 0);
// % modulo

// opérateurs unaires => variable operateur: calcul sur la vairable suelement avec un chiffre et un operateur 
$operation = 12 + 10 ;// opératuer + entouré de 2 chiffres
// opérateur un chiffre
// +=
// -=
//*=
// /=
// ++
// --
$total = 100 ;
// prendre total et l augmenter de 10
$total = $total +10;
var_dump($total);
// une autre maniere : opérateur unaire pour eraliser exactement la m^me op
$total += 10;
var_dump($total );
// enlever 30 au total
$total = $total -30;
$total-=30;
var_dump($total);
// augmenter de 20 % : appliquer la TVA
$total = $total* 1.2;
$total *= 1.2;
var_dump($total);
// m^me si le resultat est entier il cnsifère comme un float pusique on multiplie par un float 
// ++ : permet d augmenter la valeur sotckée dans al varaible de +1
$distance = 10;
$distance = $distance +1;
$distance +=1;
$distance ++;//ou ++$distance(preincrementation)vs post incrementation
var_dump($distance);// tres utilisée dans les boucles avec le mot clef for

$largeur = 30;
$a = $largeur++; 
var_dump($a ,$largeur );// a =30 $largeur= 31;l augmentation s execute a la ligne suivante
// 30 31
$hauteur= 12;
$b = ++$hauteur;
var_dump($b,$hauteur);//b augmente des la premiere ligne 13 13
$test = 10;
$test **= 2;
var_dump($test);// 100 

$test2 = 5;
$test2 %= 2;
var_dump($test2);// 1