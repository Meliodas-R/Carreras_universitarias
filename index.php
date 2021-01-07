<!DOCTYPE html>
<!--
Página de acceso para usuarios registrados.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="Estilo_basico.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Acceso de usuarios</h1>
        <form action="Menu.php" method="post">
            Usuario: <input type="text" name="usuario">
            <br>
            Contraseña: <input type="password" name="clave">
            <br><br>
            <input type="submit" name="enviar" value="Acceder">
        </form>
    </body>
</html>
