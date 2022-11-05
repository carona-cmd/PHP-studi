<?php

$resource = fopen('fichier.txt', 'c+');

if ($resource) {
    while (($buffer = fgets($resource)) !== false) {
        echo $buffer;
    }

    fclose($resource);
}