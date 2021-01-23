<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="altas">

        <?php
        /**
         * Si el usuario ya ha ha iniciado sesión podrá acceder a los contenidos
         * sin inconveniente. Si el usuario no está autenticado no podrá ni ver
         * ni interactuar con la página.
         */
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            // Conectamos con el servidor de base de datos.
            $conexion = mysqli_connect("localhost", "Aser", "kk")
                    or die("No se ha podido conectar con el servidor.");

            // Seleccionar base de datos.
            mysqli_select_db($conexion, "carreras")
                    or die("No se ha podido seleccionar la base de datos.");

            // Enviar consulta.
            $instruccion = "SELECT * FROM `usuario` WHERE `NOMBRE_USUARIO` LIKE '" . $_SESSION['usuario'] . "'";
            $consulta = mysqli_query($conexion, $instruccion)
                    or die("No se ha podido realizar la consulta.");
            /**
             * Creamos una variable que recoge la respuesta de la consulta. 
             * Despues creamos una nueva variable en la que guardaremos el id
             * de la consulta resultante.
             */
            $resultado = mysqli_fetch_array($consulta);
            $id = $resultado['ID_USUARIO'];
            if ($consulta->num_rows > 0) {
                $instruccion = "SELECT * FROM `usuario_rol` WHERE `ID_USUARIO` LIKE '$id'";
                $consulta = mysqli_query($conexion, $instruccion)
                        or die("No se ha podido realizar la consulta.");
                $resultado = mysqli_fetch_array($consulta);
                $rol = $resultado['NOMBRE_ROL'];
                if ($rol == "Alumno") {
                    ?>
                <center>Usted no tiene privilegios para acceder a este contenido.</center>

                <div id="menuVolver">
                    <form action="Menu.php" method="post">
                        <br><br>
                        <input type="submit" name="enviar" value="Volver" id="botonVolver">
                    </form>
                </div>
                <?php
            }

            if ($rol == "Profesor") {
                ?>
                <h1>Registrar alumno</h1>

                <form action="Alta_alumno.php" method="post">
                    Nombre: <input type="text" name="nombre">
                    <br>
                    Apellidos: <input type="text" name="apellidos">
                    <br>
                    DNI: <input type="text" name="dni">
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>

                <hr>

                <h1>Registrar nota</h1>

                <form action="Alta_nota.php" method="post">
                    Id alumno: <input type="text" name="idAlumno">
                    <br>
                    Id asignatura: <input type="text" name="idAsignatura">
                    <br>
                    Nota: <input type="text" name="nota">
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>

                <hr>

                <div id="menuVolver">
                    <form action="Menu.php" method="post">
                        <br><br>
                        <input type="submit" name="enviar" value="Volver" id="botonVolver">
                    </form>
                </div>
                <?php
            }

            if ($rol == "Administrador") {
                ?>
                <h1>Registrar alumno</h1>

                <form action="Alta_alumno.php" method="post">
                    Nombre: <input type="text" name="nombre">
                    <br>
                    Apellidos: <input type="text" name="apellidos">
                    <br>
                    DNI: <input type="text" name="dni">
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>

                <hr>

                <h1>Registrar asignatura</h1>

                <form action="Alta_asignatura.php" method="post">
                    Nombre asignatura: <input type="text" name="nombreAsignatura">
                    <br>
                    Id carrera: <input type="text" name="idCarrera">
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>

                <hr>

                <h1>Registrar carrera</h1>

                <form action="Alta_carrera.php" method="post">
                    Nombre carrera: <input type="text" name="nombreCarrera">
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>

                <hr>

                <h1>Registrar nota</h1>

                <form action="Alta_nota.php" method="post">
                    Id alumno: <input type="text" name="idAlumno">
                    <br>
                    Id asignatura: <input type="text" name="idAsignatura">
                    <br>
                    Nota: <input type="text" name="nota">
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>

                <hr>

                <div id="menuVolver">
                    <form action="Menu.php" method="post">
                        <br><br>
                        <input type="submit" name="enviar" value="Volver" id="botonVolver">
                    </form>
                </div>
                <?php
            }
            ?> 

            <?php
        } else {
            echo("Usted no ha iniciado sesion. Por favor, inicie sesion para "
            . "poder ver los contenidos.");
        }
    }
    ?>

</body>
</html>

