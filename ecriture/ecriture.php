<?php
$resource = fopen('fichier.txt', 'w');

fwrite($resource, 'Hello');
fwrite($resource, 'world');
fwrite($resource, '!');

fclose($resource);

var_dump(file_get_contents('fichier.txt'));

file_put_contents('fichier.txt', 'Hello world !' . PHP_EOL);
file_put_contents('fichier.txt', ['Texte', 'supplémentaire'], FILE_APPEND);

var_dump(file_get_contents('fichier.txt'));