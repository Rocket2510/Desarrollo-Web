<?php


$db = mysqli_connect('127.0.0.1','root','admin2510', 'appsalon');

if(!$db){
    echo "Hubo un error";
    exit;
}else{
    echo "Conexion Exitosa!!!";
}
