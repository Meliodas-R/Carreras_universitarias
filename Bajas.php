<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="bajas">
        
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
        
    </body>
</html>