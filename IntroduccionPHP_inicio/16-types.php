<?php
declare(strict_types=1); 
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string{
    if($autenticado) {
        return 'El Usuario esta Atenticado';

    }else{
        return 'El Usuario No esta Atenticado';
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';