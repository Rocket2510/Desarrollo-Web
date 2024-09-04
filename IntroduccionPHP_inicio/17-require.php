<?php 
/**
 * `include`:
 * 
 * Incluye otros archivos para reutilizar y evitar repeticion de código
 * => para añadir otros templates 
 * 
 * `require`:
 * => usar cuando tengamos funciones: Ej: Conexion a una DB
 * 
 */
include 'includes/header.php'; 

require 'funciones.php';
iniciarApp();




include 'includes/footer.php';