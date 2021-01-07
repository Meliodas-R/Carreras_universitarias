<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultas</title>
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="consultas">
        
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
    </body>
</html>

