<?php include 'includes/header.php';

//ARREGLOS ASOCIATIVOS
$cliente = [
    'nombre' => 'Edgar',
    'saldo' => 200,
    'informacion' => [
        'tipo'=> 'Premium',
        'diponible'=> 100,
    ]
];

//echo $cliente['informacion']['diponible'];

/**
 * AGREGAR MAS ELEMENTOS AL ARREGLO
 */

 $cliente['codigo'] = 1231423223; 

 $cliente['informacion']['sucursal'] = 'Polanco';
 $cliente['informacion']['edad'] = 24;

 echo "<pre>"; 
 var_dump($cliente);
 echo "</pre>";
 
 echo $cliente['codigo'];

include 'includes/footer.php';