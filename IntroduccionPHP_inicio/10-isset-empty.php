<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');

$cliente = [
    'nombre' => 'Edgar',
    'saldo'=> 200
];

/**
 * EMPTY:
 * Revisa si un arreglo esta vacio => true || false
 */
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

/**
 * ISSET:
 * Revisa si un arreglo esta creado o una propiedad esta definida
 * Tambien revisa si una propiedad existe en un arreglo
 */
echo'<br>';
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));
var_dump(isset($clientes4));

//Permite revisar si una propiedad de un arreglo asociativo existe 
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));






include 'includes/footer.php';