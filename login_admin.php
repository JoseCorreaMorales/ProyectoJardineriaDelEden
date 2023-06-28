<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Iniciar sesión</title>
</head>

<body> <?php include("php/menu.php"); ?>
 
    <div class="container">
        <div class="login">
            <h2>Login</h2>
            <form action="" method="post" class="login">
                <div class="login__field">
                    <input class="login__input" type="text" name="username" placeholder=" ">
                    <label for="username" class="login__label">👤 Username: </label>
                </div>

                <div class="login__field">
                    <input class="login__input" type="password" name="password" placeholder=" ">
                    <label for="password" class="login__label login__label--pw">🔑 Password: </label>
                </div>

                <!--login  -->
                    <input type="submit" value="Login">

                <div class="login__sign-up">
                    <a href="" class="login__sign-up">Sign up</a>
                </div>
              
            </form>


        </div>

    </div>




    <?php include("php/footer.php") ?>
    <script src="js/validar_login.js"> </script>
</body>

</html>