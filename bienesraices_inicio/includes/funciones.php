<?php
define('TEMPLATES_URL', __DIR__.'/template');
define('FUNCIONES_URL', __DIR__.'funciones.php');
function incluirTemplate(string $nombre, bool $inicio = false){
    include TEMPLATES_URL."/${nombre}.php";
}

function usuarioAutenticado(){
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }

}

function debug($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}