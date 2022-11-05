<?php 
echo time();
echo microtime();
echo microtime(true);
?>
<?php 
$microtimeBefore = microtime(true);
echo"bonjour".PHP_EOL;
$microTimeAfter = microtime(true);
echo $microTimeAfter-$microtimeBefore .PHP_EOL;
// cela sert a verifier combien une action prend du temps pour 
// etre executée

$heure =13;
$minutes =56;
$secondes = 12;
$mois = 3;
$jour =21;
$$année= 2021;
echo mktime($heure,$minutes,$secondes,$mois, $jour,$année); // prend 6 parametres() , make time

$heure1 = 0;
$minutes1 =0;
$secondes1 = 0;
$mois1 = 2;
$jour1 =29;
$année1= 2031;
echo mktime($heure1,$minutes1,$secondes1,$mois1, $jour1,$année1); // si je veux savoir le lendemain du 28 
// fevr 2031 sera quel jour
// on peut utiliser - , pour revenir un mois en arriere on
//met 0 , 2 mois en arriere :1
//les jours commencent a 1 , le jour 0 correspond a la veille du  mois 
//numero 1 
$heure2 = -1;
$minutes2 =0;
$secondes2 = 0;
$mois3 = 2;
$jour4 =24;
$année5= 2031;
$timestamp = mktime($heure2,$minutes2,$secondes3,$mois3, $jour4,$année5);
echo date ('d/m/Y H:i:s',$timestamp);
// https://www.php.net/manual/fr/function.date.php