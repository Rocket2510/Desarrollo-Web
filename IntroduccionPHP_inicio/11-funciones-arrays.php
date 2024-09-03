<?php include 'includes/header.php';
/**
 * `in_array()`:
 * busca elementos en un arreglo
 */
 
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('audifonos', $carrito));

/**
 * `sort()`:
 * Ordenar elementos de un arreglo de menor a mayor
 * 
 * `rsort()`:
 * Ordenar elementos de un arreglo de mayor a menor
 * 
 */
$numeros = [1, 3, 4, 5, 1, 2];
//rsort($numeros);

//echo "<pre>";
//var_dump($numeros);
//echo "</pre>";

/**
 * Ordenar arreglo asociativo
 */
$cliente = [
    'saldo' => 200,
    'tipo'=> 'Premium',
    'nombre'=> 'Juan'
];

/**
 * `asort()`
 * 
 * Ordena por valores (orden alfabetico)
 */
//asort( $cliente);

/**
 * `ksort()`
 * 
 * Ordena por llaves (orden alfabetico)
 */
//ksort( $cliente);

/**
 * `krsort()`
 * 
 * Ordena por llaves (orden alfabetico, DE LA `Z` A LA `A`)
 */
//krsort( $cliente);

/**
 * `arsort()`
 * 
 * Ordena por valores (Z primero)
 */
arsort( $cliente);

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';