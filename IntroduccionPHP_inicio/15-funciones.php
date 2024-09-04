<?php 
declare(strict_types= 1);
include 'includes/header.php';


function sumar(int $num1 = 0, int $num2 = 0){
    echo $num1 + $num2;
}

sumar(1, 12);


include 'includes/footer.php';