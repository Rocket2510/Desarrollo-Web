<?php include 'includes/header.php';
$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

var_dump($numero2 === $numero4);
echo "<br>";

//-1 si el valor de la izquierda es menor
var_dump($numero1 <=> $numero2);
echo "<br>";

//0 si el valor es el mismo
var_dump($numero2 <=> $numero3);
echo "<br>";

//1 si el valor de la izquierda es mayor
var_dump($numero2 <=> $numero1);
echo "<br>";


include 'includes/footer.php';