<?php
session_start();
session_destroy();
session_unset();
?>
<!--
Página de acceso para usuarios registrados.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Login.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="contenedor">
        <div class="caja-login">
            <div class="logo">
                <img src="Imagenes/duck.png" alt="" id="imgLogo">
            </div>
            <div class="titulo">
                <h1>INICIAR SESION</h1>
            </div>
            <form action="Menu.php" method="post" name="formulario">
            <div class="textbox">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Usuario" name="usuario">
            </div>
            <div class="textbox">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Clave" name="clave">
            </div>
            <div class="checkbox">
                <input type="checkbox" id="recuerdame">
                <label for="recuerdame">Recordar clave</label>
                <p><a href="#">Clave olvidada</a></p>
            </div>
            <input type="submit" class="boton" value="Acceder">
            </form>
        </div>
    </div>

</body>
</html>
