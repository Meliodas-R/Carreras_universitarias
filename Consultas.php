<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultas</title>
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="consultas">

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
                    <h1>Consultar asignatura</h1>

                    <form action="Consulta_asignatura.php" method="post">
                        ID de asignatura: <input type="text" name="idAsignatura">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar carrera</h1>

                    <form action="Consulta_carrera.php" method="post">
                        ID de carrera: <input type="text" name="idCarrera">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar nota</h1>

                    <form action="Consulta_nota.php" method="post">
                        ID del alumno: <input type="text" name="idAlumno">
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

                if ($rol == "Profesor") {
                    ?>
                    <h1>Consultar alumno</h1>

                    <form action="Consulta_alumno.php" method="post">
                        ID de alumno: <input type="text" name="idAlumno">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar asignatura</h1>

                    <form action="Consulta_asignatura.php" method="post">
                        ID de asignatura: <input type="text" name="idAsignatura">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar carrera</h1>

                    <form action="Consulta_carrera.php" method="post">
                        ID de carrera: <input type="text" name="idCarrera">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar nota</h1>

                    <form action="Consulta_nota.php" method="post">
                        ID del alumno: <input type="text" name="idAlumno">
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
                    <h1>Consultar alumno</h1>

                    <form action="Consulta_alumno.php" method="post">
                        ID de alumno: <input type="text" name="idAlumno">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar asignatura</h1>

                    <form action="Consulta_asignatura.php" method="post">
                        ID de asignatura: <input type="text" name="idAsignatura">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar carrera</h1>

                    <form action="Consulta_carrera.php" method="post">
                        ID de carrera: <input type="text" name="idCarrera">
                        <br><br>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>

                    <hr>

                    <h1>Consultar nota</h1>

                    <form action="Consulta_nota.php" method="post">
                        ID del alumno: <input type="text" name="idAlumno">
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

