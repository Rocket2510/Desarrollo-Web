<?php
    //Data Base
    require '../../includes/config/database.php';
    $db = conectarDB();
    //Consultar para obtener a los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errrores
    $errores = [];
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

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

        if(!$imagen['name'] || $imagen['error']){
            $errores[] = "La Imagen es Obligatoria";
        }

        //validar por tamaño de imagen 100Kb max
        $medida = 1000 * 100;

        if($imagen['size'] > $medida){
            $errores[] = "La Imagen es muy pesada";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)){
            /* SUBIDA DE ARCHIVOS */

            //Crear un carpeta
            $carpetaImagenes = '../../imagenes/';
            
            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);

            }

            //Generar nombre unico de img
            $nombreImagen =  md5(uniqid(rand(), true)).".jpg";

            //subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            
            //Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, imagen ,descripcion, habitaciones, wc, estacionamiento, creado ,vendedorId )
            VALUES('$titulo', '$precio', '$nombreImagen' ,'$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado' ,'$vendedorId')";

            //echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado){
                //Redireccionar al Usuario
                 header('Location: /admin?resultado=1');
             }
        }
        
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
    //GET = Expone los datos en la URL
    // POST = Envia los datos al servidor
    
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>


        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error;?>

            </div>
        <?php endforeach?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio?>">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" name="imagen">

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

            <input class="boton boton-verde" type="submit" value="Crear Propiedad">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>