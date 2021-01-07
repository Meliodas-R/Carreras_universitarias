<html LANG="es">
    <head>
        <link REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>

    <body>
        <?php
        // Variable de formulario.
        $idCarrera = $_REQUEST['idCarrera'];

        // Conectar con el servidor de base de datos.
        $conexion = mysqli_connect("localhost", "Aser", "kk")
                or die("No se ha podido conectar con el servidor.");

        // Seleccionar base de datos.
        mysqli_select_db($conexion, "carreras")
                or die("No se ha podido seleccionar la base de datos.");

        // Enviar consulta. Si el valor recibido desde el formulario es un
        // asterisco, se muestran todos los alumnos.
        if ($idCarrera == "*") {
            $instruccion = "select * from `carrera`";
            $consulta = mysqli_query($conexion, $instruccion)
                    or die("No se ha podido realizar la consulta.");
        } else {
            $instruccion = "select * from `carrera` where ID_CARRERA=$idCarrera";
            $consulta = mysqli_query($conexion, $instruccion)
                    or die("No se ha podido realizar la consulta.");
        }

        // Mostrar resultados de la consulta.
        $nfilas = mysqli_num_rows($consulta);
        if ($nfilas > 0) {
            print ("<TABLE>\n");
            print ("<TR>\n");
            print ("<TH>ID_CARRERA</TH>\n");
            print ("<TH>NOMBRE_CARRERA</TH>\n");
            print ("</TR>\n");

            for ($i = 0; $i < $nfilas; $i++) {
                $resultado = mysqli_fetch_array($consulta);
                print ("<TR>\n");
                print ("<TD>" . $resultado['ID_CARRERA'] . "</TD>\n");
                print ("<TD>" . $resultado['NOMBRE_CARRERA'] . "</TD>\n");
                print ("</TR>\n");
            }

            print ("</TABLE>\n");
        } else {
            print ("No se han encontrado carreras.");
        }

        // Cerrar conexion.
        mysqli_close($conexion);
        ?>

    </body>
</html>