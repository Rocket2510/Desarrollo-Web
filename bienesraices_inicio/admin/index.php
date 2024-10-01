<?php
    //Importar la Conexion a la DB
    require '../includes/config/database.php';
    $db = conectarDB();

    //Escribir el Query
    $query = "SELECT * FROM propiedades";

    //Consultar la DB
    $resultadoQuery = mysqli_query($db, $query);


    //muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    //incluye un template
    require '../includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>
        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio creado Correctamente</p>

        <?php endif?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde"> Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- .mostrar los resultados de la DB -->
                <?php while($propiedad = mysqli_fetch_assoc($resultadoQuery)):?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="" class="imagen-tabla"></td>
                    <td><?php echo "$".$propiedad['precio']; ?></td>
                    <td>
                        <a href="admin/propiedades/borrar.php" class="boton-rojo-block">Eliminar</a>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" 
                        class="boton-amarillo-block" >Editar</a>
                    </td>
                </tr>

                <?php endwhile ?>
            </tbody>
        </table>
    </main>

<?php
    //(Opcional) Cerrar la conexion a la DB
    mysqli_close($db);
    incluirTemplate('footer'); 
?>