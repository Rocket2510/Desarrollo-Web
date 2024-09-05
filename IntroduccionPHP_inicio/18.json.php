<?php include 'includes/header.php';

$productos = [
    [
        'nombre'=> 'Tablet',
        'precio'=> 200,
        'disponible'=> true,
    ],
    [
        'nombre'=> 'Television 24',
        'precio'=> 300,
        'disponible'=> true,
    ],
    [
        'nombre'=> 'Monitor Curvo 24',
        'precio'=> 400,
        'disponible'=> false,
    ]
];

echo '<pre>';
var_dump( $productos );

/**
 * `json_encode()`
 * va a tomar un arreglo y lo va a convertir en un string ideal para consumirlo con JavaScript
 */
$json = json_encode( $productos, JSON_UNESCAPED_UNICODE);

/**
 * `json_decode()`
 * va a tomar un string y lo va a convertir en un arreglo ideal para consumirlo con JavaScript
 */

$json_array = json_decode($json, JSON_OBJECT_AS_ARRAY);
echo '<br>';
echo ' ----------------- ----------------- <br>';
var_dump( $json );
echo '<br>';
echo ' ----------------- ----------------- <br>';
var_dump( $json_array );
echo '</pre>';







include 'includes/footer.php';