<?php

function conectarDB():mysqli{
    $db = mysqli_connect('127.0.0.1', 'root', 'admin2510', 'bienesraices_crud');

    if(!$db){
        echo "fallo la conexion";
        exit;
    }   

    return $db;
}

//conectarDB();