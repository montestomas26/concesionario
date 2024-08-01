<?php
function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'concesionaria');
    if (!$db) {
        echo "Fallo la conexión";
    }
    return $db;
}