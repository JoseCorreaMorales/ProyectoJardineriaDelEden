<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistemas computacionales">
	<meta name="keywords" content="MySql, Conexión, Wamp">
	<meta name="author" content="Josue Gonzalez, Jose Correa, Jose Palacios, Sistemas">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="contenedor">
         <?php include("php/menu.php"); ?>
        <div class="formulario">
            <h5>Iniciar sesión</h5>
            <input  id="user"  class="controles" type="text" placeholder="usuario" name="usuario">
            <input id="pw" class="controles" type="password" placeholder="contraseña" name="contrasena">
            <input type="submit" value="ingresar"  id="btn" class="boton"  onClick=" return validar()">
            <br>
            <a href="index.php">Volver al inicio</a>

        </div>
    </div>

    <script src="js/validar_login.js"> </script>
</body>
</html>