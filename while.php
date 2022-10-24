<?PHP 

// while : 3 instructions, creer une variable, creer une condition de sortie puis l increment
$j = 2;
while ($j < 12){
    var_dump($j);
    $j+= 2; 
}
// 2 4 6 8 
// on peut augmenter avnat de faire les instructions, 
// condition de sortie tres important sinon ce sera des boucles infinies 
// ex : boucle infinie 
/*$k = 13 ;
while($k >12){
    var_dump($k);
    $k++; 

}*/

// boucles dans un tableau 

$jours = ["lundi","mardi","mercredi", "jeudi","vendredi","samedi","dimanche"];
for ($i=0 ; $i <count($jours); $i++){
    var_dump($jours[$i]);

}
// pour les tableaux on peut utiliser foreach: alias : cela fait la m^me chose 
foreach ($jours as $jours  ) {
    var_dump($jours);
    # code...
}

// tableau associatifs :

$sommaire = [
    "partie1" => "introduction à php",// clef => valeur
    "partie2" => "les variables primitives ",
    "partie3" => "conclusion",

];
/* pn ne peut pas utiliser quand on a des clefs */
foreach ($sommaire as $texte  ) {
     var_dump($texte);
}
foreach ($sommaire as $cle => $texte) {
    var_dump($cle,$texte);
    # code...
}
foreach ($sommaire as $cle => $texte) {
    var_dump($sommaire[$cle]);// idem $texte, des fois on doit verifier si la cle a une certaine valeur
    // on affiche la valeur
    # code...
}

foreach ($sommaire as $cle => $texte) {
    if ($cle != "partie1") {
        var_dump($sommaire[$cle]);   
        # code...
    }
    // idem $texte, des fois on doit verifier si la cle a une certaine valeur
    // on affiche la valeur
    # code...
}