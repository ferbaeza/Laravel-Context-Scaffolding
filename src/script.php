<?php

$path = (dirname(dirname(__DIR__)));
$dao = '/src/Shared/Dao';

if (mkdir($path . $dao , 0777, true) === false) {
    echo('Error al crear la carpeta: ' . $path.$dao);
    return false;
}

