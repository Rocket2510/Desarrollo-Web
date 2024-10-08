<?php
    //Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: /admin');
    }

    //Data Base
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Obtener datos de la propiedad
    $consultaPropiedad = "SELECT * FROM propiedades WHERE id = $id";
    $resultadoPropiedad = mysqli_query($db, $consultaPropiedad);
    $propiedad = mysqli_fetch_assoc($resultadoPropiedad);

    //Consultar para obtener a los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];
    $titulo = $propiedad['titulo'];
    $precio =  $propiedad['precio'];
    $imagenPropiedad = $propiedad['imagen'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedorId = $propiedad['vendedorId'];

    //Ejecuta el código después de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //  echo "<pre>";
        //      var_dump($_POST);
        //  echo "</pre>";

        //  echo "<pre>";
        //      var_dump($_FILES);
        //  echo "</pre>";


        $titulo = mysqli_real_escape_string( $db,$_POST['titulo']);
        $precio = mysqli_real_escape_string( $db,$_POST['precio']);
        $descripcion = mysqli_real_escape_string( $db,$_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string( $db,$_POST['habitaciones']);
        $wc = mysqli_real_escape_string( $db,$_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db,$_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string( $db,$_POST['vendedor']);
        $creado = date('Y/m/d');

        //Asignar FILES a una variable
        $imagen = $_FILES['imagen'];

        //var_dump($imagen['name']);
    
        

        if (!$titulo) {
            $errores [] = "Debes agregar un Titulo";
        }
        if (!$precio) {
            $errores [] = "El precio es Obligatorio";
        }
        if (strlen($descripcion) < 50) {
            $errores [] = "La Descripcion es Obligatoria y debe tener al menos 50 caracteres";
        }
        if (!$habitaciones ) {
            $errores [] = "El Número de Habitaciones es obligatorio";
        }
        if (!$wc) {
            $errores [] = "El Número de Baños es obligatorio";
        }
        if (!$estacionamiento) {
            $errores [] = "El Número de lugares deEestacionamiento es obligatorio";
        }
        if (!$vendedorId) {
            $errores [] = "Elige un vendedor";
        }

        //validar por tamaño de imagen 100Kb max
        $medida = 1000 * 1000;

        if($imagen['size'] > $medida){
            $errores[] = "La Imagen es muy pesada";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)){
            //Crear un carpeta
            $carpetaImagenes = '../../imagenes/';
            
            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';
            

            /* SUBIDA DE ARCHIVOS */

            if ($imagen['name']) {
                //eliminar imagen previa
                unlink($carpetaImagenes.$propiedad["imagen"]);

                //Generar nombre unico de img
                $nombreImagen =  md5(uniqid(rand(), true)).".jpg";

                //subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

            }else{
                $nombreImagen = $propiedad['imagen'];
            }
            
            

             
            
            //Actualizar en la base de datos
            $query = "UPDATE propiedades SET titulo = '$titulo', precio = '$precio', 
                imagen = '$nombreImagen' ,descripcion = '$descripcion', habitaciones = $habitaciones, 
                wc = $wc, estacionamiento = $estacionamiento, vendedorId = $vendedorId
                WHERE id = $id";

            //echo $query;
            

            $resultado = mysqli_query($db, $query);

            if($resultado){
                //Redireccionar al Usuario
                 header('Location: /admin?resultado=2');
             }
        }
        
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
    //GET = Expone los datos en la URL
    // POST = Envia los datos al servidor
    
?>

    <main class="contenedor seccion">
        <h1>Editar Propiedad</h1>


        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error;?>

            </div>
        <?php endforeach?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio?>">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" alt="" class="imagen-small">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información  Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento?>">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option disabled selected> -- Seleccione una opción -- </option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)):?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected': '';?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " ". $vendedor['apellido']; ?> 
                        </option>
                
                    <?php endwhile?>
                </select>
            </fieldset>

            <input class="boton boton-verde" type="submit" value="Actualizar Propiedad">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>