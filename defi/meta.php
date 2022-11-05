<?php
var_dump(filectime('fichier.txt'));
var_dump(filectime('fichier.txt'));
var_dump(posix_getpwuid(fileowner('fichier.txt')));
var_dump(substr(sprintf('%o', fileperms('fichier.txt')), -4));
// 4 recupere les 4 derniers caractères 
var_dump(filesize('fichier.txt'));

function listFilesAndDirectories(string $path): void
{
    $path = realpath($path) . DIRECTORY_SEPARATOR;
    $elements = scandir($path);

    foreach ($elements as $element) {
        echo $element;
        echo ' a été créé le ' . date('d/m/Y à H:i:s', filectime($path . $element));
        echo ' et modifié le ' . date('d/m/Y à H:i:s', filemtime($path . $element));
        echo PHP_EOL;
    }
}