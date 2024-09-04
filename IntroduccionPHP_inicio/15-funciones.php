<?php 
declare(strict_types= 1);
include 'includes/header.php';


function sumar(int $num1 = 0, int $num2 = 0){
    echo $num1 + $num2;
}

sumar(1, 12);

//parametros nombrados
//sumar(num1: 30, num2: 40);


include 'includes/footer.php';