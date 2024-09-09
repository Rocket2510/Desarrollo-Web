<?php

function obtener_servicios(){
    try {
        //1. Importar Credenciales 
        require 'database.php';
        
        //2. Consulta SQL
        $sql = "SELECT * FROM servicios;";
        //3. Realizar Consulta
        $query = mysqli_query($db, $sql);
        //4. Acceder a los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($query));
        echo "</pre>";
        //5. Cerrar la conexion (--Opcional--)
        $close_con = mysqli_close($db);

        echo $close_con;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();