<?php 
declare (strict_types = 1);
include 'includes/header.php';
//Definir clase
class Producto{
    //Agregar atributos
    public $nombre;
    public $precio;
    public $disponible;

    /**
     * El constructor es una funcion que se va a mandar llamar automaticamente
     * una vez que se haya creado una nueva instancia 
     */
     public function __construct(string $nombre, int $precio, bool $disponible){
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> disponible = $disponible;
     }
}

//Instanciar la clase
$producto = new Producto('Tablet', 200, true);

// $producto -> nombre = 'Tablet'; 
// $producto -> precio = 200; 
// $producto -> disponible = true; 

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
// $producto2 -> nombre = 'Monitor Curvo';
// $producto2 -> precio = 300;
// $producto2 -> disponible = true;

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';

