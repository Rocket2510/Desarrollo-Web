<?php include 'includes/header.php';

//ARREGLOS INDEXADOS
$carrito = ["tablet", "television", "computadora"];

echo "<pre>"; //util para ver el contenido de un array
var_dump($carrito);
echo "</pre>";

echo $carrito[1];//acceder a un elemento del array

//Añade elemento en el indice proporcionado
$carrito[3] = "Nuevo producto...";

//Añadir un elemento nuevo al final del array
array_push($carrito, "Audifonos");

//Añadir un elemento nuevo al principio del array
array_unshift($carrito, "SmartWatch");

echo "<pre>"; 
var_dump($carrito);
echo "</pre>";

$clientes = array("Juan", "edgar", "lluvia");
echo "<pre>"; 
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';