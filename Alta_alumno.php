<html LANG="es">
    <head>
        <link REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>

    <body>
        <?php
        // Variables de formulario.
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $dni = $_REQUEST['dni'];
        $clave = $_REQUEST['clave'];

        // Conectar con el servidor de base de datos.
        $conexion = mysqli_connect("localhost", "Aser", "kk")
                or die("No se ha podido conectar con el servidor.");

        // Seleccionar base de datos.
        mysqli_select_db($conexion, "carreras")
                or die("No se ha podido seleccionar la base de datos.");

        // Enviar consulta.
        $instruccion = "INSERT INTO ALUMNO (`NOMBRE_ALUMNO`, `APELLIDOS`,`DNI`,`CLAVE`) VALUES ('$nombre', '$apellidos', '$dni', '$clave')";
        $consulta = mysqli_query($conexion, $instruccion)
                or die("No se ha podido realizar la consulta.");


        // Mostrar resultados de la consulta.
        if($instruccion == false){
            echo("La insercion ha fallado");
        } else {
            echo ("Se ha insertado un registro.");
        }

        // Cerrar conexion.
        mysqli_close($conexion);
        ?>

    </body>
</html>

