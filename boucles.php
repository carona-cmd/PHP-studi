<?php 
 // loop = boucle
// il est possible de faire repeter des isntructions sans avoir a les ecrire plusieurs fois 
// ecrire 1 fois une instruction => php va execuetr cete instructuon plusisurs fois sans avoir a la reecrire
// for()
// while 
// cas particuleir pour les tableaux quand on vet parcurir un tableau 
// foreach
// for: dans les parentheses de for on a 3 instructions: 
    // $i =0 on cree une variable et on l initialise a 0 (i pour iterateur)
    // 2 eme instruction$i <3(boleene conditiond esortie de la boucle )
    // l increment $i++ pas de point virgule a la fin, on augmente la valeur d e$i de 1 te on restocke les valeurs dans i
    // tant que la condition est true, executer les isntructions dans les accolades de la bouclefor 
    for( $i = 0 ; $i<3; $i = $i ++ ) {
                  // condition de sortie de al boucle 
                  //      $i = $i + 1 
                  //      $i = 0 + 1 
                  //      $i = 1
            // $i<3  => true
                  //      $i = $i + 1 
                  //      $i = 1 + 1
                  //      $i = 2 
            // 2 < 3 => true
            //      $i = $i + 1 
            //      $i = 2 + 1
            //      $i = 3
            
            // 3  <3 = > false : j arret d executer ; tant que la condition de sortie est vraie on l execute
            

        echo "$i<br>";

    //}
    // si on veut executer 2 fois ce code , on ferait une boucle imbriquée ? 
    for ($i = 0 ; $i<2 ;  $i++) {
        for($j = 0 ; $j< 3 ; $j++){
            echo $j."<br>";
        }
    }

    
?>
