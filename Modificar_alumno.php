<html LANG="es">
    <head>
        <link REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>

    <body>
        <?php
        // Variables de formulario.
        $nombreAlumno = $_REQUEST['nombreAlumno'];
        $apellidos = $_REQUEST['apellidos'];
        $dni = $_REQUEST['dni'];
        $clave = $_REQUEST['clave'];
        $idAlumno = $_REQUEST['idAlumno'];

        // Conectar con el servidor de base de datos.
        $conexion = mysqli_connect("localhost", "Aser", "kk")
                or die("No se ha podido conectar con el servidor.");

        // Seleccionar base de datos.
        mysqli_select_db($conexion, "carreras")
                or die("No se ha podido seleccionar la base de datos.");

        // Enviar consulta.
        $instruccion = "UPDATE `alumno` SET `NOMBRE_ALUMNO` = '$nombreAlumno', `APELLIDOS` = '$apellidos', `DNI` = '$dni', `CLAVE` = '$clave' WHERE `alumno`.`ID_ALUMNO` = $idAlumno;";
        $consulta = mysqli_query($conexion, $instruccion)
                or die("No se ha podido realizar la modificacion.");


        // Mostrar resultados de la consulta.
        if($instruccion == false){
            echo("La modificacion ha fallado");
        } else {
            echo ("Se ha modificado un registro.");
        }

        // Cerrar conexion.
        mysqli_close($conexion);
        ?>

    </body>
</html>

