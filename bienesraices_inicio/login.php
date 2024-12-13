<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <form  class="formulario" action="">
            <fieldset>
                    <legend>Email y Password</legend>

                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Tu E-mail" id="email">

                    <label for="password">Password</label>
                    <input type="password" placeholder="Tu Password" id="pasword">
                </fieldset>

                <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>