<?php
$ressource = openFile('fichier1');
// Affichera resource(5) of type (stream) par exemple
var_dump($ressource);

$isClosed = closeFile($ressource);
// Affichera bool(true)
var_dump($ressource);

$ressource = openFile('fichier-inexistant');
// Affichera bool(false)
var_dump($ressource);

$isClosed = closeFile($ressource);
// Affichera bool(false)
var_dump($ressource);


function openFile(string $file)
{
    if (!is_file($file)) {
        return false;
    }

    return fopen($file, 'r');
}

function closeFile($resource)
{
    if (!is_resource($resource)) {
        return false;
    }

    return fclose($resource);
}