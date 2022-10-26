<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* Le format timestamp Unix est une représentation numérique du nombre de secondes écoulées entre une date spécifique et le 1er janvier 1970.*/
      $startDate = 1577836800; // 01/01/2020 00:00:00
      $endDate = 1577901600; // 01/01/2020 18:00:00
      
      if ($startDate < $endDate) {
        echo 'La date de départ est avant celle de fin'; 
      }
    ?>

    <?php
      $startDate = 1577836800; // 01/01/2020 00:00:00
      $endDate = 1577901600; // 01/01/2020 18:00:00
      $randomDate = 1199145600; // 01/01/2008 00:00:00
      $dates = [$startDate, $endDate, $randomDate];
      
      echo 'tableau initial :<br>';
      foreach ($dates as $date) {
        echo $date.'<br>';
      }

      sort($dates);
      echo 'tableau trié :<br>';
      foreach ($dates as $date) {
        echo $date.'<br>';
      }
    ?>
    <?php 
    $timestamps = [1654863436, 1407673368, 1581337036, 1644495436, 1399724236, 1586521368, 1628598168];
    $comparaisonTimestam =  1654552800;
    // lien pour convertir timestamp: https://123timestamp.fr/
    $comparisonFunction = function ($timestamp) use ($comparisonTimestamp) {
      return $timestamp <= $comparisonTimestamp;
  };
  print_r(array_filter($timestamps, $comparisonFunction));
  //La fonction time(), qui retourne la date courante du serveur au format timestamp Unix.
  //La fonction microtime(), qui retourne la date courante du serveur au format timestamp Unix en précisant les microsecondes
  //Il est possible de passer la valeur true à la fonction microtime pour qu'elle retourne la date actuelle sous forme d'un nombre flottant exprimé en secondes depuis le 1er janvier 1970.
    ?>

    <?php      
      echo 'time : '.time().'<br>';
      echo 'microtime : '.microtime().'<br>';
      echo 'microtime flottant : '.microtime(true);
      //Lorsque nous devons manipuler des dates autres que la date actuelle, PHP nous offre la possibilité de convertir une date pour nous retourner sa valeur au format timestamp Unix.
    //Le fonction mktime() permet de récupérer le timestamp d’ une date voulue.
    //si la fonction mktime() n’est pas remplie alors elle retournera false. 
    //mktime(-2) avec une valeur négative sur le paramètre heure cela nous 
    //indique que le timestamps se calcule à -2h du point de départ du jour 
    //actuel soit 22h de la journée d’hier (on peut considérer minuit comme 
    //le point 0 entre 2 journées)


    ?>

    <?php

// On calcul le timeStamp et on le met au format souhaité avec date()
echo "Réalisé le 02/12/2021 à 14h15 : ".date('Y-m-d H:i:s', mktime(-2))."<br>";
// affiche Réalisé le 02/12/2021 à 14h15 : 2021-12-01 22:15:32

echo "Réalisé le 02/12/2021 à 14h15 : ".date('Y-m-d H:i:s', mktime(2));
// affiche Réalisé le 02/12/2021 : 2021-12-01 02:15:32
?>
    <?php      
  echo 'time : '.time().'<br>';
  echo '01/01/2020 00:00:00 : '.mktime(0,0,0,1,1,2020);
?>

    <?php      
      echo '03/01/2020 00:00:00 : '.mktime(0, 0, 0, 12, 34, 2019).'<br>'; //Ajout de (34-31) jours au 1er janvier 2020
      echo '01/12/2018 00:00:00 : '.mktime(0, 0, 0, 0, 1, 2019).'<br>'; // Soustraction d'un mois depuis le 01/01/2019
      echo '01/11/2018 00:00:00 : '.mktime(0, 0, 0, -1, 1, 2019).'<br>'; // Soustraction de deux mois depuis le 01/01/2019
      echo '01/01/2020 00:00:00 : '.mktime(0, 0, 0, 1, 1, 2020).'<br>';
      echo'01/01/2020 00:00:00 : '. mktime(0, 0, 0, 1, 1, 20); // Format d'année sur deux chiffres
   //https://www.php.net/manual/fr/function.time.php
   //https://www.php.net/manual/fr/function.microtime.php
   //https://www.php.net/manual/fr/function.mktime.php
   
   ?>
    <?php

// 1
echo mktime(0, 41, 0, 12, 21, 2012) . PHP_EOL;

// 2
echo mktime(0, 0, 0) . PHP_EOL;

// 3
echo mktime(12, 0, 0);
?>
    <?php

$start = microtime(true);

$result = 1;

for ($i = 1; $i <= 10000000; $i++) {
	$result = $i * $result;
}

echo 'Script terminé en '.(microtime(true) - $start).' secondes';
// https://www.php.net/manual/fr/function.date.php
////La fonction date() attend en paramètres une chaîne de caractères 
//représentant le format d'affichage souhaité et, optionnellement, 
//une date au format timestamp Unix.

//La définition du format de retour souhaité se fait sous la forme 
//d'un masque contenant un code, sous la forme d'une lettre, 
//pour chaque composante de la date
/*Ainsi, par exemple, un masque de la forme 'd/m/Y H:i:s' affichera le jour sur deux chiffres suivi d'un '/', le mois sur deux chiffres suivi d'un '/', l'année sur quatre chiffres, puis un espace et l'heure au format 24 h sur deux chiffres suivis de ':', les minutes sur deux chiffres 
suivis de ':' et les secondes sur deux chiffres.
*/
// date()
?>
    <?php
      echo '03/01/2020 00:00:00 : '.date('d/m/Y H:i:s', mktime(0, 0, 0, 12, 34, 2019)).'<br>';
      echo '01/12/2018 00:00:00 : '.date('d/m/y h:i:s', mktime(0, 0, 0, 0, 1, 2019)).'<br>';
      echo '01/11/2018 00:00:00 : '.date('l jS \of F Y h:i:s A', mktime(0, 0, 0, -1, 1, 2019));
    ?>
    <!DOCTYPE html>
    <html>

    <body>

        <?php
// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
?>



        <?php
// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
/*Dans cet exemple, chaque composante de la date est obtenue grâce 
à un appel à la fonction date()pour être passée à la fonction 
mktime()qui retourne alors un timestamp Unix, 
lui-même formaté par la fonction date()pour le rendre lisible.
Pour rappel, les paramètres attendus par la fonction mktime()sont des entiers. 
Il est donc possible d'effectuer des opérations de calcul sur chacun d'entre eux.
*/


// 1
echo 'Nous sommes en semaine '.date('W')  . PHP_EOL;;

// 2
echo 'La date d\'aujourd\'hui au format ISO 8601 est : '.date('c', mktime(0, 0, 0))  . PHP_EOL;;

// 3
$nextXmas = mktime(0, 0, 0, 12, 25, date('Y') + 1);
echo 'Le 25 décembre '.date('Y', $nextXmas).' nous serons un '.date('l', $nextXmas) . PHP_EOL;;?>


    </html>