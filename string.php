<?php 
$prenom = "victor";
$nom = "hugo";
// additionner 2 variables qui contiennet du string => concaténation
// .
$auteurFr = $prenom."".$nom;
var_dump($auteurFr); // fatal eror si string + string
// victor hugo a ecrit les misérables
$phrase1 = $prenom ."". $nom.""."a écrit les misérables";
var_dump($phrase1 );
$phrase2 ="$prenom $nom a écrit les misérables";// ne fonctionne que s il y a des chaines de caracteres
// avec des guilemets, si un guillemet les varibales vont echapper 
var_dump($phrase2);

// phrase avec des sauts de ligne
$articleHtml = "
<h2> je suis un article </h2>
<p> lorem ipsum</>
";
var_dump($articleHtml);// garde le saut de ligne // on peut sauter des lignes dans les guillemts 
// on peut mettre des apostrophes 
$listeHtml = '
<ul> 
<li>  pomme    </li>;
<li>  $prenom    </li>;
<li>  poire    </li>;
</ul>
';
var_dump($listeHtml);// si on met une guillemnt la variable ne sera pas executée 
// javascript il est posisble de faire un saut de ligne via les backtick(n'existe pas en php)

define ("URL","https://google.fr");// je nomme la cte
var_dump(URL);

$action = "je vais sur URL";// ne comprend pas que c 'est une consigne
var_dump($action);

$action1 = "je vais sur"." ".URL;
var_dump($action1);

// opératuer unaire pour les concaténations sur php 
//.=

$page = "<h1>titre page </h1>\n";// new ligne \veut dire que php comprend qu il doit echapper 
$page = $page . "<h1>titre page </h1>\n";
$page .= "<h1>titre page </h1>";
var_dump($page);
// \n permet un saut de lignes 

//{}
$a = "hello";
$b = "les amis ";

$salutation = "$a $b";
var_dump($salutation);

$salutation2 = "{$a} {$b}";// utilisée plutot quand il y a des tableaux 
var_dump($salutation2);

// tableau 
$options = [
"largeur "=> 20,
"longeur"=> 10,
"unite"=> "px"

];
// la fenetre a une largeur de 20 px 
$infos = "la fenetre a une largeur de " . $options ["largeur"]. $options[ "unité"];
var_dump($infos);

$infos2 = "la fenetre a une largeur de {$options["largeur"]}{$options["unité"]}";
var_dump($infos2);
// constante PHP_EOL end of line  equivalent a \n
$z = "bonjour" . PHP_EOL . "COUCOU";
var_dump($z);

$z = "bonjour \n coucou";
var_dump($z);

// vardump fait un saut de ligne , si on utilsie echo ; ne fait aps de saut de ligne automatiquement
//
$presentation = "coucou <br> comment allez vous <br> les amis";
echo $presentation;
var_dump($presentation);// n interprete les br 