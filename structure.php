<?php 
// if () {} à l interier de if on met une condition, si elle est true , on execute ce qu il y a 
// dans les accolades, si elle est false , j ignore ec qu il y a dans les {}

$age= 30;
if ($age>= 18){
    echo"je suis  majeur<br>";
}

// if elseif en js else if en php elseif ou else if 

$distance = 5; 
if($distance<= 10 ){// false 
    echo" vous etes près du travail";
}
elseif ($distance<=150) {//false
    echo "vous etes a la palge ";# code...
}

elseif ($distance<=250) {// true
    echo "vous etes a la montagne ";# code...
}

else {
    echo "valeur incorrecte";
}

$poids = 50;
if ($poids < 100){
    echo 'je suis le cas numero 1 <br>';
} else  {
    echo 'je suis le cas numero 2';
}

echo ($poids <100) ?'je suis le cas numero 1 ' : 'je suis le cas numero 2';
//                 if $poids<100 echo          else       cela s appelle if teranire
// dans cette formule on n eput avoir qu une seule condition qui fait un seul traitement 

$poids = 50;
$age = 12 ;
if ($poids < 100){
    echo 'je suis le cas numero 1' . '<br>'. $age ;
} else  {
    echo 'je suis le cas numero 2';
}
// on peut utiliser var_dump à la place de echo 
// var_dump(($poids <100) ?'je suis le cas numero 1 ' : 'je suis le cas numero 2');

$stock = 5 ;
$isdisponible = ($stock >10) ? $stock : 0;
var_dump($isdisponible);

$stock = 5 ;
$isdisponible1 = ($stock >0) ? $stock : 0;
//                             $ texte ou chiffre 'je suis un texte'
var_dump($isdisponible1);

// on ne peut verifier qu une seule valeur 
// switch case 

$formation = "PHP";
switch ($formation ) {
    case"javascript":// ==
        echo "j 'adore Js";
    case "css":
        echo "je fais mon cv";
    case "PHP":// dès qu une condition est vraie il execute toutes les suivantes 
        echo"j'ai les langages back";
    default :
        echo "langage inconnu";

}
 
$formation1 = "css";
switch ($formation1 ) {
    case"javascript":// ==
        echo "j \'adore Js";
        break;
    case "css":
        echo "je fais mon cv";
        break;
    case "PHP":// dès qu une condition est vraie il execute toutes les suivantes 
        echo"j'ai les langages back";
        break;
    default :
        echo "langage inconnu";

}