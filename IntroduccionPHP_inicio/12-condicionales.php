<?php include 'includes/header.php';


$autenticado = false;
$admin = false;

/**
 * if()
 */

if($autenticado && $admin) {
    echo 'Usuario autenticado Correctamente';
}else{
    echo 'No tienes acceso';
}

/**
 * if() anidados
 */
$cliente = [
    'nombre'=> 'Edgar',
    'saldo'=> 200,
    'informacion'=> [
        'tipo'=> 'Premium',
    ]
];
echo '<br>';
if(!empty($cliente)){
    echo 'El arreglo de cliente no esta vacio';

    if($cliente['saldo'] > 0){
        echo 'El cliente tiene saldo disponible: $' , $cliente['saldo'];
    }else{
        echo 'no hay saldo' ;
    }
}

/**
 * else if()
 */

echo '<br>';
if($cliente['saldo'] > 0){
    echo 'el cliente tiene saldo';
}else if($cliente['informacion']['tipo'] === 'Premium'){
    echo 'el cliente es premium';
}else{
    echo 'no hay cliente definido';
}

/**
 * switch()
 */
echo '<br>';
$tecnologia = 'Java';

 switch($tecnologia){
    case 'PHP': 
        echo 'PHP, un excelente lenguaje';
        break;
    case 'Java':
        echo 'Java, es un buen lenguaje';
        break;

    default;
        echo 'Ese lenguaje no lo conozco';
        break;
 }

include 'includes/footer.php';