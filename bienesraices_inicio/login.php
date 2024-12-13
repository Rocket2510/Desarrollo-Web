<?php

    //conexion a la BD
    require 'includes/config/database.php';
    $db = conectarDB();


    //Autenticar el usuario
    $errores = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $email = mysqli_real_escape_string($db,filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ;
        $password =mysqli_real_escape_string($db,$_POST['password']);

        if (!$email) {
            $errores[] = "El email, es obligatorio o no es valido";
        }

        if (!$password) {
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)){
            $errores [] = ""
        }
    }


    //Incluye el Header
    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php  foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
                
        <?php endforeach; ?>

        <form method="POST" action="" class="formulario">
            <fieldset>
                    <legend>Email y Password</legend>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Tu E-mail" id="email" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Tu Password" id="pasword" required>
                </fieldset>

                <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>