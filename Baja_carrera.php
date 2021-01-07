<html LANG="es">
    <head>
        <link REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>

    <body>
        <?php
        // Variables de formulario.
        $idCarrera = $_REQUEST['idCarrera'];

        // Conectar con el servidor de base de datos.
        $conexion = mysqli_connect("localhost", "Aser", "kk")
                or die("No se ha podido conectar con el servidor.");

        // Seleccionar base de datos.
        mysqli_select_db($conexion, "carreras")
                or die("No se ha podido seleccionar la base de datos.");

        // Enviar consulta.
        $instruccion = "DELETE FROM `carrera` WHERE `carrera`.`ID_CARRERA` = $idCarrera ";
        $consulta = mysqli_query($conexion, $instruccion)
                or die("No se ha podido realizar la consulta.");

        // Mostrar resultados de la consulta.
        if ($instruccion == false) {
            echo("No se ha podido dar de baja la carrera.");
        } else {
            echo ("Se ha eliminado una carrera.");
        }

        // Cerrar conexion.
        mysqli_close($conexion);
        ?>

    </body>
</html>