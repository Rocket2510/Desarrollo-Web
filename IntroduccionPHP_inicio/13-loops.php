<?php include 'includes/header.php';

/**
 * while
 */

// $i = 1; //incremento
// while($i < 10){
//     echo $i.'<br>';

//     $i++;
// }

// echo'<br>';
/**
 * Do-while
 */
// $i = 11;
// do{
//     echo $i.'<br>';
//     $i++;
// }while($i < 10);
// echo'<br>';

/**
 * For Loop
 */

// for($i = 0; $i <= 10; $i++){
//     if($i % 3 === 0 && $i % 5 === 0){
//         echo $i.': es fizzbuzz';
//         echo'<br>';
//     }else if($i % 3 === 0){
//         echo $i.': es fizz';
//         echo'<br>';
//     }elseif($i % 5 === 0){
//         echo $i.': es buzz';
//         echo'<br>';
//     }
// }

/**
 * for Each
 */

$clientes = ['Pedro', 'Juan', 'Edgar'];

foreach($clientes as $cliente){
    echo $cliente. '<br>';
}
echo '<br>';
// for($i=0; $i < count($clientes); $i++){
//     echo $clientes[$i]. '<br>';

// }

$cliente = [
    'nombre' => 'EDGAR',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach($cliente as $key => $c){
    echo $key. "-".$c. '<br>';
}

include 'includes/footer.php';