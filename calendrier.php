<?php 
//https://www.timestamp-converter.com/
//fonction PHP permet de récupérer uniquement le timestamp Unix courant: time()
//fonction PHP permet de récupérer le timestamp Unix d'une date donnée : mktime()
//fonction PHP permet d'afficher une date dans un format humainement lisible: date()
//omment récupère-t-on le timestamp Unix du 31 mars 2020 à minuit ?mktime(0, 0, 0, 3, 31, 2020))
//Comment récupère-t-on le timestamp Unix d'hier à 8 h 15 ?
//mktime(8, 15, 0, date('m'), date('d') - 1, date('Y'))
//Quel masque permet d'afficher une date au format mercredi 1 avril 2020 ?
//l j F Y
//Quel masque permet d'afficher une heure au format 08h05 EDT ?
//H\hi T


$currentMonth = (int) date('m');
$currentYear = date('Y');
$numDaysInMonth = (int) date('t');
$firstDayOfMonth = (int) date('N', mktime(0, 0, 0, $currentMonth, 1, $currentYear));

?>
<table>
    <caption><?php echo date('m/Y') ?></caption>
    <thead>
        <tr>
            <th>L</th>
            <th>M</th>
            <th>M</th>
            <th>J</th>
            <th>V</th>
            <th>S</th>
            <th>D</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php

            if (1 !== $firstDayOfMonth) {
                echo '<td colspan="' . ($firstDayOfMonth - 1) . '"></td>';
            }
            
            for ($i = 1; $i <= $numDaysInMonth; $i++) {
                echo '<td>'.$i.'</td>';
                
                if ((int) date('N', mktime(0, 0, 0, $currentMonth, $i, $currentYear)) === 7) {
                    echo '</tr><tr>';
                }
            }
            
            $daysLeft = ($numDaysInMonth + $firstDayOfMonth) % 7;
            if (0 !== $daysLeft) {
                echo '<td colspan="' . ((7 - $daysLeft) + 1) . '"></td>';
            }

            ?>
        </tr>
    </tbody>
</table>