<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="modificaciones">

        <?php
        /**
         * Si el usuario ya ha ha iniciado sesión podrá acceder a los contenidos
         * sin inconveniente. Si el usuario no está autenticado no podrá ni ver
         * ni interactuar con la página.
         */
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            ?> 
            <h1>Modificar alumno</h1>

            <form action="Modificar_alumno.php" method="post">
                Nombre: <input type="text" name="nombreAlumno">
                <br>
                Apellidos: <input type="text" name="apellidos">
                <br>
                DNI: <input type="text" name="dni">
                <br>
                Id alumno a modificar: <input type="text" name="idAlumno">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

            <hr>

            <h1>Modificar asignatura</h1>

            <form action="Modificar_asignatura.php" method="post">
                Nombre asignatura: <input type="text" name="nombreAsignatura">
                <br>
                Id carrera: <input type="text" name="idCarrera">
                <br>
                Id asignatura: <input type="text" name="idAsignatura">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

            <hr>

            <h1>Modificar carrera</h1>

            <form action="Modificar_carrera.php" method="post">
                Nombre carrera: <input type="text" name="nombreCarrera">
                <br>
                Id carrera: <input type="text" name="idCarrera">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

            <hr>

            <h1>Modificar nota</h1>

            <form action="Modificar_nota.php" method="post">
                Id asignatura: <input type="text" name="idAsignatura">
                <br>
                Nota: <input type="text" name="nota">
                <br>
                Id alumno: <input type="text" name="idAlumno">
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
        } else {
            echo("Usted no ha iniciado sesion. Por favor, inicie sesion para "
            . "poder ver los contenidos.");
        }
        ?>
    </body>
</html>

