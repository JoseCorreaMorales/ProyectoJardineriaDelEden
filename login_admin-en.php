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
    <title>Log in</title>
</head>
<body>
    <div class="contenedor">
         <?php include("php/menu-en.php"); ?>
        <div class="formulario">
            <h5>Log in</h5>
            <input  id="user"  class="controles" type="text" placeholder="user" name="usuario">
            <input id="pw" class="controles" type="password" placeholder="password" name="contrasena">
            <input type="submit" value="get into"  id="btn" class="boton"  onClick=" return validar()">
            <br>
            <a href="index-en.php">Back to home</a>

        </div>
    </div>

    <script src="js/validar_login-en.js"> </script>
</body>
</html>