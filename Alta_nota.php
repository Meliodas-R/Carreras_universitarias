<?php
session_start();
?>
<html LANG="es">
    <head>
        <link REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>

    <body>
        <?php
        // Variables de formulario.
        $idAlumno = $_REQUEST['idAlumno'];
        $idAsignatura = $_REQUEST['idAsignatura'];
        $nota = $_REQUEST['nota'];

        // Conectar con el servidor de base de datos.
        $conexion = mysqli_connect("localhost", "Aser", "kk")
                or die("No se ha podido conectar con el servidor.");

        // Seleccionar base de datos.
        mysqli_select_db($conexion, "carreras")
                or die("No se ha podido seleccionar la base de datos.");

        // Enviar consulta.
        $instruccion = "INSERT INTO NOTA (`ID_ALUMNO`, `ID_ASIGNATURA`, `NOTA`) VALUES ('$idAlumno', '$idAsignatura', '$nota')";
        $consulta = mysqli_query($conexion, $instruccion)
                or die("No se ha podido realizar la consulta.");

        // Mostrar resultados de la consulta.
        if ($instruccion == false) {
            echo("La insercion ha fallado");
        } else {
            echo ("Se ha insertado una nueva nota.");
        }

        // Cerrar conexion.
        mysqli_close($conexion);
        ?>

    </body>
</html>