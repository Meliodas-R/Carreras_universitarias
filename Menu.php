<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="menu">
        <?php
        /**
         * Comprobamos si se han definido las variables de sesion. Si el 
         * usuario ya se ha autenticado ante la base de datos y se ha definido
         * su variable de sesion podra acceder a los respectivos contenidos
         * sin inconveniente.
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
                    <div class="menuCentrado">
                        <h1>Menú principal</h1>

                        <article id="elementosMenu">
                            <form method="get" action="Consultas.php">
                                <button type="submit" id="botonVolver">Consultas</button>
                            </form>
                        </article>
                    </div>
                    <?php
                }

                if ($rol == "Profesor") {
                    ?>
                    <div class="menuCentrado">
                        <h1>Menú principal</h1>

                        <article id="elementosMenu">
                            <form method="get" action="Altas.php">
                                <button type="submit" id="botonVolver">Altas</button>
                            </form>    
                        </article>

                        <article id="elementosMenu">
                            <form method="get" action="Bajas.php">
                                <button type="submit" id="botonVolver">Bajas</button>
                            </form>
                        </article>

                        <article id="elementosMenu">
                            <form method="get" action="Modificaciones.php">
                                <button type="submit" id="botonVolver">Modificaciones</button>
                            </form> 
                        </article>

                        <article id="elementosMenu">
                            <form method="get" action="Consultas.php">
                                <button type="submit" id="botonVolver">Consultas</button>
                            </form>
                        </article>
                    </div>
                    <?php
                }

                if ($rol == "Administrador") {
                    ?>
                    <div class="menuCentrado">
                        <h1>Menú principal</h1>

                        <article id="elementosMenu">
                            <form method="get" action="Altas.php">
                                <button type="submit" id="botonVolver">Altas</button>
                            </form>    
                        </article>

                        <article id="elementosMenu">
                            <form method="get" action="Bajas.php">
                                <button type="submit" id="botonVolver">Bajas</button>
                            </form>
                        </article>

                        <article id="elementosMenu">
                            <form method="get" action="Modificaciones.php">
                                <button type="submit" id="botonVolver">Modificaciones</button>
                            </form> 
                        </article>

                        <article id="elementosMenu">
                            <form method="get" action="Consultas.php">
                                <button type="submit" id="botonVolver">Consultas</button>
                            </form>
                        </article>
                    </div>
                    <?php
                }
            }
            ?>
            <?php
        } else {
            // Recogemos los valores que se han introducido en el formulario.
            $usuario = $_REQUEST['usuario'];
            $clave = $_REQUEST['clave'];

            // Conectamos con el servidor de base de datos.
            $conexion = mysqli_connect("localhost", "Aser", "kk")
                    or die("No se ha podido conectar con el servidor.");

            // Seleccionar base de datos.
            mysqli_select_db($conexion, "carreras")
                    or die("No se ha podido seleccionar la base de datos.");

            // Enviar consulta.
            $instruccion = "SELECT * FROM `usuario` WHERE `NOMBRE_USUARIO` = '$usuario' AND `CLAVE` = '$clave';";
            $consulta = mysqli_query($conexion, $instruccion)
                    or die("No se ha podido realizar la consulta.");

            // Comprobamos si el resultado de la consulta es mayor que 0. 
            // Si es mayor que 0 es que la tabla contiene un resultado que coincide
            // con los datos enviados desde el formulario.
            if ($consulta->num_rows > 0) {
                $_SESSION['loggedin'] = true;
                $_SESSION['usuario'] = $usuario;

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
                        <div class="menuCentrado">
                            <h1>Menú principal</h1>

                            <article id="elementosMenu">
                                <form method="get" action="Consultas.php">
                                    <button type="submit" id="botonVolver">Consultas</button>
                                </form>
                            </article>
                        </div>
                        <?php
                    }

                    if ($rol == "Profesor") {
                        ?>
                        <div class="menuCentrado">
                            <h1>Menú principal</h1>

                            <article id="elementosMenu">
                                <form method="get" action="Altas.php">
                                    <button type="submit" id="botonVolver">Altas</button>
                                </form>    
                            </article>

                            <article id="elementosMenu">
                                <form method="get" action="Bajas.php">
                                    <button type="submit" id="botonVolver">Bajas</button>
                                </form>
                            </article>

                            <article id="elementosMenu">
                                <form method="get" action="Modificaciones.php">
                                    <button type="submit" id="botonVolver">Modificaciones</button>
                                </form> 
                            </article>

                            <article id="elementosMenu">
                                <form method="get" action="Consultas.php">
                                    <button type="submit" id="botonVolver">Consultas</button>
                                </form>
                            </article>
                        </div>
                        <?php
                    }

                    if ($rol == "Administrador") {
                        ?>
                        <div class="menuCentrado">
                            <h1>Menú principal</h1>

                            <article id="elementosMenu">
                                <form method="get" action="Altas.php">
                                    <button type="submit" id="botonVolver">Altas</button>
                                </form>    
                            </article>

                            <article id="elementosMenu">
                                <form method="get" action="Bajas.php">
                                    <button type="submit" id="botonVolver">Bajas</button>
                                </form>
                            </article>

                            <article id="elementosMenu">
                                <form method="get" action="Modificaciones.php">
                                    <button type="submit" id="botonVolver">Modificaciones</button>
                                </form> 
                            </article>

                            <article id="elementosMenu">
                                <form method="get" action="Consultas.php">
                                    <button type="submit" id="botonVolver">Consultas</button>
                                </form>
                            </article>
                        </div>
                        <?php
                    }
                }
                ?>
                <?php
            } else {
                echo("<center>El usuario o la contraseña introducidos son incorrectos. Por favor, intentelo de nuevo.</center>");
            }
        }
        ?>

        <div id="menuVolver">
            <form action="Index.php" method="post">
                <br><br>
                <input type="submit" name="enviar" value="Volver" id="botonVolver">
            </form>
        </div>
    </body>
</html>