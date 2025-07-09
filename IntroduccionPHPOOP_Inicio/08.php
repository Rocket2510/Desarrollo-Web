<?php include 'includes/header.php';
require "vendor/autoload.php";


use App\Clientes;
use App\Detalles;

use Firebase\JWT\JWT; //libreria extraida a través de composer

//Incluir las otras clases
//require 'clases/Clientes.php';
//require 'clases/Detalles.php';

//AUTO LOAD de clases
/**
 * un metodo en PHP para automatizar la importaciones de clases 
 * 
 * SE UTILIZO COMPOSER PARA AUTOMATIZAR EL AUTOLOAD Y LOS NAMESPACES
 */
// function mi_autoload($clase){
//     $partes = explode('\\', $clase);
    
//     require __DIR__ . '/clases/' . $partes[1] . ".php";
// }

// spl_autoload_register('mi_autoload');

// class Clientes{
//     public function __construct(){
//         echo "Desde 08.php que contiene los clientes";
//     }
// }

//Namespaces
/**
 * Evitamos que una clase choque con otra clase del mismo nombre
 */
$detalles = new Detalles();
$clientes = new Clientes();
//$clientes2 = new Clientes();


include 'includes/footer.php';