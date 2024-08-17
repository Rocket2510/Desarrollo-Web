<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//convertirlo a mayusculas
echo strtoupper($nombreCliente);

//convertirlo a minusculas
echo strtolower($nombreCliente);

//validar strings
$mail = "correo@correo.com";
$mail2 = "Correo@correo.com";

//remplazar algun lugar del string
var_dump(strtolower($mail) == strtolower($mail2));

echo str_replace('Juan', 'Javier', $nombreCliente);

//Revisar si un String existe o no
echo strpos($nombreCliente, 'Juan');

$tipoCliente = "Premium";
echo "<br>";
echo "El cliente ".$tipoCliente." es ".$nombreCliente;
//echo "El usuario {$nombreCliente} {$tipoCliente}";
include 'includes/footer.php';