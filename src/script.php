<?php

$path(dirname(dirname(__DIR__)));
$dao = '/src/Shared/Dao';

if (mkdir($path . $dao , 0755, true) === false) {
    $this->error('Error al crear la carpeta: ' . $path.$dao);
    return false;
}

