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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {
            //Elimina el archivo
            $query = "SELECT imagen FROM propiedades WHERE id = $id";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $propiedad['imagen']);

            //Elimina la propiedad
            $queryDelete = "DELETE FROM propiedades WHERE id = ${id}";
            $resultado = mysqli_query($db, $queryDelete);

            if($resultado){
                header('location: /admin?resultado=3');
            }
        }
    }

    //incluye un template
    require '../includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>
        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php elseif(intval($resultado) === 2):?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p>
        <?php elseif(intval($resultado) === 3):?>
            <p class="alerta exito">Anuncio Eliminado Correctamente</p>
            
        <?php endif;?>

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
                        <form method="POST" class="w-100" action="">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id'];?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" 
                        class="boton-amarillo-block" >Editar</a>
                    </td>
                </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php
    //(Opcional) Cerrar la conexion a la DB
    mysqli_close($db);
    incluirTemplate('footer'); 
?>