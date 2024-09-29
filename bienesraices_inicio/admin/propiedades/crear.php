<?php
    //Data Base
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo con mensajes de errrores
    $errores = [];

    //Ejecuta el código después de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // echo "<pre>";
        //     var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

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

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)){
            //Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId )
            VALUES('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

            //echo $query;

            $resultado = mysqli_query($db, $query);

            // if($resultado){
            //     echo "Insertado Correctamente";
            // }
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

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información  Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="0"> -- Selecciones una opción -- </option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input class="boton boton-verde" type="submit" value="Crear Propiedad">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>