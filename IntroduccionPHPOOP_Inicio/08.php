<?php include 'includes/header.php';
//Incluir las otras clases
//require 'clases/Clientes.php';
//require 'clases/Detalles.php';

//AUTO LOAD de clases
/**
 * un metodo en PHP para automatizar la importaciones de clases 
 * 
 */
function mi_autoload($clase){
    require __DIR__ . '/clases/' . $clase . ".php";
}

spl_autoload_register('mi_autoload');

$detalles = new Detalles();
$clientes = new Clientes();



include 'includes/footer.php';