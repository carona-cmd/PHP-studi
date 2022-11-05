<?php

function getUsersFromFile(string $file): ?array
{
    $users = [];

    if (!is_file($file)) {
        return null;
    }

    $resource = fopen($file, 'r');

    if (!$resource) {
        return null;
    }

    while (($user = fgets($resource)) !== false) {
        $users[] = trim($user);
    }

    fclose($resource);

    return $users;
}