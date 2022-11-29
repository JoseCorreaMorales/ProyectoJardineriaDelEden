<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistemas computacionales">
	  <meta name="keywords" content="MySql, Conexión, Wamp">
	  <meta name="author" content="Josue Gonzalez, Jose Correa, Jose Palacios, Sistemas">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/hero_seccion.css">
    <link rel="stylesheet" href="css/footer_estaticos_body.css">
    <link rel="stylesheet" href="css/tarjetas.css">
    <link rel="stylesheet" href="css/encabezados.css">
    <link rel="stylesheet" href="css/seccion_contacto.css">
    <link rel="stylesheet" href="css/etiquetas_prodcutos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Garden of Eden</title>
</head>
<body>
        <!-- Menu -->
        <?php include("php/menu-en.php");?>

      <!-- Elementos fijos, go top y Whatsapp -->
      <div class="gototop"><a href="#"><img src="img/arrow.png" alt="" width="25px"></a></div>
      <div class="whatsapp"><a href="https://wa.me/527861015488/?text=Hola, ¿Qué tal?" target="_blank">
          <img src="img/whatsapp-icon.png" alt="" width="50px"></a></div>



      <!-- hero seccion -->
      <div class="row">
        <div class="column">
          <h1 class="titulo">Garden of Eden</h1>
          <p>Live your life, live your plants</p>
          <button class="btn_muestrame"><a href="#link" class="btn_muestrame">Show me! 🌱</a></button>
        </div>
        <div class="column" style="text-align: center;">
            <img src="img/maceta.jpg" alt="" width="450px">
        </div>
      </div>


      <!-- seccion de productos -->
        <h1 style="text-align: center;" id="link">Products</h1>


      <div class="contenedor_tarjeta" style="border: 2px red solid;">

        <div class="tarjeta">
            <div class="contenido_tarjeta">
                <div class="img_tarjeta"><img src="img/macetas_501A.jpg" alt="" width="250px"></div>
                <h2>501 Flowerpot</h2>
                <span class="label_negro">Black</span><span class="label_cafe">Brown</span><span class="label_blanco">White</span>
                <p><b>little:</b> $200 MXN</p>
                <p><b>Medium:</b> $500 MXN</p>
                <p><b>Big:</b> $720 MXN</p>
                <button class="btn_tarjetas">I want</button>
            </div>
        </div>

        <div class="tarjeta">
            <div class="contenido_tarjeta">
                <div class="img_tarjeta"><img src="img/maceta_curva_conica.png" alt="" height="150px"></div>
                <h2>401 Curved conical</h2>
                <span class="label_negro">Black</span><span class="label_cafe">Brown</span><span class="label_blanco">White</span>
                <p><b>Medium:</b> $450 MXN</p>
                <p><b>Big:</b> $750 MXN</p>
                <button class="btn_tarjetas">I want !!</button>
            </div>
        </div>

        <div class="tarjeta">
            <div class="contenido_tarjeta">
                <div class="img_tarjeta"><img src="img/maceta_tipo_madera_601.png" alt="" height="150px"></div>
                <h2>601 Wood type</h2>
                <span class="label_negro">Black</span><span class="label_cafe">Brown</span><span class="label_blanco">White</span>
                <p><b>Medium:</b> $480 MXN</p>
                <p><b>Big:</b> $530 MXN</p>
                <button class="btn_tarjetas">I want !!</button>
            </div>
        </div>

    </div>
        
         <!-- MAPA -->
        <h1 class="encabezado_mapa">Find us here</h1>

      <div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.297644006493!2d-100.5556954850891!3d19.69994818673303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbb85ee02b51%3A0x470edba264059f8c!2sNicol%C3%A1s%20Bravo%20198%2C%20Centro%2C%2061100%20Cd%20Hidalgo%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1637719704531!5m2!1ses-419!2smx" width="1200" height="450" style="border:2; margin-left: 70px; " allowfullscreen="" loading="lazy"></iframe>
      </div>
          

            <!-- Blog -->
            <h1 class="encabezado" style="text-align: center;">My blog and things you would like to read 🍃🍁</h1>
      <div class="contenedor_tarjeta" style="border: 2px solid blue;">

        <div class="tarjeta">
            <div class="contenido_tarjeta">
                <div class="img_tarjeta"><img src="https://static01.nyt.com/images/2019/08/05/fashion/01InteligenciaPlantas01/merlin_155848368_ea1d8ed2-8b4b-4ce8-b337-0abca129635c-articleLarge.jpg?quality=75&auto=webp&disable=upscale" alt="" height="170px"></div>
                <h2>Do plants have something to say?</h2>
                <p>Wait for it very soon!</p>
                <button class="btn_tarjetas">read</button>
            </div>
        </div>

        <div class="tarjeta" >
            <div class="contenido_tarjeta">
                <div class="img_tarjeta"><img src="https://miro.medium.com/max/1400/0*QgOSm2q5WIR7Gu0A" alt="" height="160px"></div>
                <h2>The flowerpot, an important choice</h2>
                <p>With a certain frequency, the greatest attention to our care ...</p>
                
                <a href="blog-en.php" class="link_blog"><button class="btn_tarjetas">read</button> </a>
            </div>
        </div>

        <div class="tarjeta" >
            <div class="contenido_tarjeta">
                <div class="img_tarjeta"><img src="https://ecoosfera.com/wp-content/imagenes/2018/08/055ba64548f38e8f38df7dbf7c837998.jpg" alt="" height="160px"></div>
                <h2>About music and nature</h2>
                <p>Wait for it very soon!</p>
                <button class="btn_tarjetas">read</button>
            </div>
        </div>

      </div>

       
      <!-- CONTACTO -->
        <h1 class="encabezado_mapa" style="text-align: center;" id="contactanos">Contact us</h1>

      <div class="container_form">
        <form action="jose.c00rrea.morales@gmail.com">
      
          <label for="fname">Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name...">
      
          <label for="lname">Last name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name...">
      
      
          <label for="subject">message</label>
          <textarea id="subject" name="subject" placeholder="Write something...." style="height:200px"></textarea>
      
          <input type="submit" value="Send">
      
        </form>
      </div> 
      
      <!-- Footer -->
     <?php include("php/footer-en.php"); ?>
</body>
</html>