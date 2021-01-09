<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="bajas">

        <?php
        /**
         * Si el usuario ya ha ha iniciado sesión podrá acceder a los contenidos
         * sin inconveniente. Si el usuario no está autenticado no podrá ni ver
         * ni interactuar con la página.
         */
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            ?>    
            <h1>Eliminar alumno</h1>

            <form action="Baja_alumno.php" method="post">
                ID alumno: <input type="text" name="idAlumno">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

            <hr>

            <h1>Eliminar asignatura</h1>

            <form action="Baja_asignatura.php" method="post">
                ID asignatura: <input type="text" name="idAsignatura">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

            <hr>

            <h1>Eliminar carrera</h1>

            <form action="Baja_carrera.php" method="post">
                ID carrera: <input type="text" name="idCarrera">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

            <hr>

            <h1>Eliminar nota</h1>

            <form action="Baja_nota.php" method="post">
                ID alumno: <input type="text" name="idAlumno">
                <br>
                ID asignatura: <input type="text" name="idAsignatura">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
            </form>

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