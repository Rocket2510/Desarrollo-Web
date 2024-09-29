<?php

function conectarDB():mysqli{
    //Conexion mac
    $db = mysqli_connect('127.0.0.1', 'root', 'admin2510', 'bienesraices_crud');

    //Conexion Ubuntu
    //$db = mysqli_connect('127.0.0.1', 'root', 'Admin2510.', 'bienesraices_crud');
    
    if(!$db){
        echo "fallo la conexion";
        exit;
    }   

    return $db;
}

//conectarDB();