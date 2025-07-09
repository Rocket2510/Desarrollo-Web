<?php include 'includes/header.php';

//Conectar a la BD con Mysqli con la forma Orientada a objetos

$db = new mysqli('127.0.0.1', 'root', '', 'bienesraices_crud');

$query = "SELECT titulo FROM propiedades";
$resultado = $db -> query($query);

while($row = $resultado->fetch_assoc()):
    var_dump($row);
endwhile;
//var_dump($resultado->fetch_assoc());
echo "<br><br>";

/**
 * SENTENCIAS PREPARADAS
 * Son mas seguras, evitan sql injection
 */

echo "-- SENTENCIAS PREPARADAS --";
echo "<br>";
//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//preparamos el query
$stmt = $db -> prepare($query);

//Se ejecuta el Query
$stmt->execute();

//creamos la variable
$stmt->bind_result($titulo, $imagen);

//asignamos el resultado
//$stmt->fetch();

//Leemos el resultado
while($stmt->fetch()):
    var_dump($titulo, $imagen);
endwhile;

echo "<br>";



include 'includes/footer.php';