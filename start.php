<?php 
// booelen = 2 valeurs pour une var qui stocke un booleen soit true ou false 

$test1 = "true";// string
$test2 = true;// mot clef du langage php 
$test3 = false ;// valeur a part entiere 


// realiser des operations de comparaison entre plusieurs valeurs et le résultat ets un booleen
$testMajeur = 18 > 12; // ordi va transfomrer cette comparaison en booleen true et le sotcke alors dans 
// est majeur 
var_dump($testMajeur);
$true = false ; // non conseillé mais possible de creer une variable $true
// differents operateurs de comparaison:
    //> strictement supérieur
    // <strictement inf 
    // >= supérieur ou égal  attention => n existe pas , pas d espace
    //<= attention =< n existe pas 
    // != different
    // == égale en valeur
    // === egale en type et en valeur (egalité stricte)
    //!== strictement different 
    
    $isOk ="bonjour"=="hello";// false 
    var_dump($isOk);
    $isOk2 ="bonjour"!="hello";// true
    var_dump($isOk2);
    // difference entre == et === 
    $verif1 = 2 ==2;
    var_dump($verif1);
    $verif2 = "2 "==2;// valeur est la m^me mais le type est different
    var_dump($verif2);// true; transtypage ou coersition de type 
    //(php va mettre de lui meme dans le meme type)
    $verif3 = "2px" == 2;
    var_dump($verif3);// true 

    $verif4 ="2"===2;// on demande a php de verifier valeur et type// false // js et php le m^me cmportement
    var_dump($verif4);
   // $verif5 ="2" = 2;// cela declenhe une erreur = permet une affectation ou un stockage une valeur dans une variable
    // le mieux ===garantit de ne pas avior  des valeurs etranges en utilisant des chiffres ( on peut utiliser == si texte)
    $toto = 2 + "4";
    var_dump($toto );// 6
    $toto2 = 12 + "20px";//32 on peut mettre @(12 + "20px"), 
    //on aura le même résultat ;bizarrerie de php, cela ne marchera pas en JS 
    var_dump($toto2);

    // opérateurs booleen && et||   et !  
    //                    AND OR        XOR 
    // alt+ maj + L donne |
    // pour aller sur un site internet on nous demande de saisir notre mail et mot de pass , les 2 doievnet etre 
    //corrects en m^me temps ; on utilise &&
    $loginBdd ="alain";
    $mdpBdd ="azerty";
    $seConnecterABoiteMailGmail = "Alain"== $loginBdd && "azerty" == $mdpBdd ;
    //                                  false                      true
    // est ce que Alain est egal a la variable de la bdd alain : false  azerty = true
    var_dump($seConnecterABoiteMailGmail);
    // les identifiants saisis ne sont pas confomres , reessayer 
    $seConnecterABoiteMailGmail2 = "alain"== $loginBdd && "azerty" == $mdpBdd ;
    var_dump($seConnecterABoiteMailGmail2);// => bienvenue sur votre boite mail gmail
    // true && true => true
    // true && false => false
    // false && false => false 
    // on peut remplacer && par AND 
    // || pipe, si un condition est vraie elle retourne true
    // si la personne habite dans le 92 ou le 93 : elle habite en région parissienne 
    $departement = 92;
    $isParisien = $departement === 92 || $departement === 93;
    //                         92===92        92===92
    //                         true           false
    //                                  true
    var_dump($isParisien);

    // ! operateur unaire : on a bseoin d une seule var
    // ! NOT va transformer true en false et false en true 
    $isAdmin = true;
    var_dump(!$isAdmin);//false 
    

    $auteur = "victor hugo";
    var_dump(!$auteur);// il considere que chaine de carcatere"string" non vide en true ; transtypage 

    $auteur = "";
    var_dump(!$auteur );// true 

    $prix = 123;
    var_dump(!$prix); // false ; il considere que les chffres (meme avec virgule) même neg en  true 
    //il transforme le chiffre zero en false 

    $prix1 = 0;
    var_dump(!$prix1);