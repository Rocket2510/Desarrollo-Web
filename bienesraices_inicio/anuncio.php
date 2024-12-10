<?php
    require 'includes/funciones.php';
    incluirTemplate('header');

     //importar la DB
     require 'includes/config/database.php';
     $db = conectarDB();
 
     //consultar
     $query = "SELECT * FROM propiedades";
 
     //Obtener los resultados
     $resultado = mysqli_query($db, $query);
    
?>

    <main class="contenedor seccion contenido-centrado">
        <?php while($propiedad = mysqli_fetch_assoc($resultado)):?>
        <h1><?php echo $propiedad['titulo'] ?></h1>

        <picture>
            <img loading="lazy" src="build/img/<?php echo $propiedad['imagen'] ?>" alt="imagen propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio']; ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
            </ul>

            <p><?php echo $propiedad['descripcion']; ?></p>

            
        </div>
        <?php endwhile;?>   
    </main>

    <?php 
        incluirTemplate('footer');
    ?>
   