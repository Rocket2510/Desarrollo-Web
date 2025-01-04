<?php include 'includes/header.php';
//Definir clase
class Producto{
    //Agregar atributos
    public $nombre;
    public $precio;
    public $disponible;

}

//Instanciar la clase
$producto = new Producto();

$producto -> nombre = 'Tablet'; 
$producto -> precio = 200; 
$producto -> disponible = true; 

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto();
$producto2 -> nombre = 'Monitor Curvo';
$producto2 -> precio = 300;
$producto2 -> disponible = true;

echo "<pre>";
var_dump($producto2);
echo "</pre>";



include 'includes/footer.php';

