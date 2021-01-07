<html LANG="es">
    <head>
        <link REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>

    <body>
        <?php
        // Variables de formulario.
        $nombreCarrera = $_REQUEST['nombreCarrera'];
        $idCarrera = $_REQUEST['idCarrera'];

        // Conectar con el servidor de base de datos.
        $conexion = mysqli_connect("localhost", "Aser", "kk")
                or die("No se ha podido conectar con el servidor.");

        // Seleccionar base de datos.
        mysqli_select_db($conexion, "carreras")
                or die("No se ha podido seleccionar la base de datos.");

        // Enviar consulta.
        $instruccion = "UPDATE `carrera` SET `NOMBRE_CARRERA` = '$nombreCarrera' WHERE `carrera`.`ID_CARRERA` = $idCarrera;";
        $consulta = mysqli_query($conexion, $instruccion)
                or die("No se ha podido realizar la modificacion.");

        // Mostrar resultados de la consulta.
        if($instruccion == false){
            echo("La modificacion ha fallado.");
        } else {
            echo ("Se ha modificado un registro.");
        }

        // Cerrar conexion.
        mysqli_close($conexion);
        ?>

    </body>
</html>
