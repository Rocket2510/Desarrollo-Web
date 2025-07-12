<?php include 'includes/header.php';
// CONECTAR A LA BD DE CON PDO
$db = new PDO('mysql:host=127.0.0.1; dbname=bienesraices_crud', 'root', 'admin2510');

$query = "SELECT titulo, imagen FROM propiedades";

/*SIN SENTENCIAS PREPARADAS*/
//consultar la BD
$propiedades = $db -> query($query) -> fetchColumn();

var_dump($propiedades);

echo "<br><br>";
echo "-- SENTENCIAS PREPARADAS --";
echo "<br>";

/*CON SENTENCIAS PREPARADAS*/
$stmt = $db -> prepare($query);
$stmt -> execute();

$resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
endforeach;

echo "<pre>";
var_dump($resultado);
echo "</pre>";

include 'includes/footer.php';