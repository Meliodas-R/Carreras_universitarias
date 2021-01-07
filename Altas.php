<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="altas">

        <h1>Registrar alumno</h1>

        <form action="Alta_alumno.php" method="post">
            Nombre: <input type="text" name="nombre">
            <br>
            Apellidos: <input type="text" name="apellidos">
            <br>
            DNI: <input type="text" name="dni">
            <br>
            Clave: <input type="text" name="clave">
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
    </body>
</html>

