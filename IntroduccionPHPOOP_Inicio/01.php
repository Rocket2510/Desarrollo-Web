<?php 
declare (strict_types = 1);
include 'includes/header.php';
//Definir clase
class Producto{
    //Agregar atributos
     public $nombre; // EN PHP 8 ya no es necesario declarar asi los atributos 
     public $precio;
     public $disponible;

    /**
     * El constructor es una funcion que se va a mandar llamar automaticamente
     * una vez que se haya creado una nueva instancia 
     */
     public function __construct(string $nombre, int $precio, bool $disponible){
        /**
         * En PHP 8 ya no es necesario declarar asi los atributos del constructor
         */
         $this -> nombre = $nombre;
         $this -> precio = $precio;
         $this -> disponible = $disponible;

        
     }

     /**
      * En el mismo constructor se pueden declarar los atributos en PHP 8
      */
     //public function __construct(public string $nombre,public int $precio,public bool $disponible){}

     /** METODOS EN CLASES */
     public function mostrarProducto(){
        echo "El Producto es: " . $this->nombre . " y su Precio es: " . $this->precio;
     }
}

//Instanciar la clase
$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();

// $producto -> nombre = 'Tablet'; 
// $producto -> precio = 200; 
// $producto -> disponible = true; 

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2->mostrarProducto();
// $producto2 -> nombre = 'Monitor Curvo';
// $producto2 -> precio = 300;
// $producto2 -> disponible = true;

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';

