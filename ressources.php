<?php
var_dump(is_file('./fichier.txt'));
$ressource = fopen('fichier.txt', 'r');
var_dump($ressource);
$result = fclose($ressource);
var_dump($result);
var_dump($ressource);