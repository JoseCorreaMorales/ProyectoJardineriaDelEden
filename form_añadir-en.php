<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="Sistemas computacionales">
	<meta name="keywords" content="MySql, Conexión, Wamp">
	<meta name="author" content="Josue Gonzalez, Jose Correa, Jose Palacios, Sistemas">
    <link rel="stylesheet" href="css/crud.css">
    <link rel="stylesheet" href="css/contacto.css">
     <link rel="shortcut icon" href="img/favicon.ico">
    <title>Add</title>

    
    <?php include("php/conexion.php");  ?>
</head>

<body style="font-family: sans-serif;">
    <div id="container">
        <?php include("php/menu-en.php");?>


        <div id="content">
            <div id="section">
                <form id="form1" name="form1" method="post" action="crear_registro-en.php"
                    onsubmit="return validarForm(this);">

                    <!-- NO -->
                    <p><label for="text_codigo">Code </label><br>
                        <input type="text" name="text_codigo" id="txt_Codigo" disabled><!-- ID auto_increment -->
                    </p>


                    <p>
                        <label for="lst_Categoria">Category</label><br><br>
                        <select name="lst_Categoria" id="lst_Categoria">
                            <option>select a category...</option>
                            <option>Flowerpot 501</option>
                            <option>Conical curved pot</option>
                            <option>Wood type</option>
                        </select>
                    </p>


                    <p><label for="txt_Precio">price </label><br>
                        <input type="text" name="txt_Precio" id="txt_Precio">
                    </p>

                    <p><label for="txt_Cantidad">Quantity </label><br>
                        <input type="text" name="txt_Cantidad" id="txt_Cantidad">
                    </p>

                    <p>
                    <p>Observations</p>
                    <textarea id="area_observaciones" name="area_observaciones"
                        onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                    </p>


                        <!-- side bar -->
                        <p>
                        <p>Size</p>
                        <input type="radio" id="rad_Chica" name="rad_tamano" value="Chica">
                        <label for="rad_Chica">little</label><br>

                        <input type="radio" id="rad_Mediana" name="rad_tamano" value="Mediana">
                        <label for="rad_Mediana">Medium</label><br>

                        <input type="radio" id="rad_Grande" name="rad_tamano" value="Grande">
                        <label for="rad_Grande">Big</label>
                        </p>
                        <br>

                        <p>
                            <label for="lst_Color">Color</label><br><br>
                            <select name="lst_Color" id="lst_Color">
                                <option>Select a color...</option>
                                <option>Black</option>
                                <option>Brown</option>
                                <option>White</option>
                            </select>
                        </p>


                    <button name="btn_guardar" class="btn_muestrame">Save</button><br></br><br>

                </form>

                <?php $result = select("macetas");?>

            <div style="overflow-x:auto;"><!-- añadiedo barra de navegacion horizontal -->
                <table>
                    <thead><!-- encabezados -->
                        <td>ID</td>
                        <td>category</td>
                        <td>price</td>
                        <td> Quantity </td>
                         <td> Size </td>
                         <td> Observations </td>
                         <td> Color </td>
                         <td> Modify </td>
                         <td> Delete </td>
                    </thead>


                    <?php
                     if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_object($result)) {
                     ?>

                    <tr>
                        <td><?php echo $row->bd_codigo; ?></td>
                        <td><?php echo $row->bd_categoria; ?></td>
                        <td><?php echo $row->bd_precio; ?></td>
                        <td><?php echo $row->bd_cantidad; ?></td>
                        <td><?php echo $row->bd_tamano; ?></td>
                        <td><?php echo $row->bd_observaciones; ?></td>
                        <td><?php echo $row->bd_color; ?></td>

                        <td><a href="modificar-en.php?id=<?php echo $row->bd_codigo; ?>
                            "class="buttonDeleteUpdate">Modify </a></td>

                        <td><a href="eliminar-en.php?id=<?php echo $row->bd_codigo; ?>
                        "onclick="return confirmation()" class="buttonDelete">Delete</a></td></tr>
                    <?php

                }
                    } else {
                     echo "there is no record";}
                ?>
                </table>

            </div>    <!-- div del contenedor del la tabla responsive -->

            </div>
        </div>


        <!-- ---------------------------------------- -->

        <div id="footer">
            <h2 style="border-bottom: 3px solid black;"> Garden of Eden Project </h2>
            <ol>
                <li>
                    <p>Jose Correa Morales </p>
                </li>
                <li>
                    <p>Jose Octavio Palacio Flores</p>
                </li>
                <li>
                    <p>Josue Guadalupe González Colin</p>
                </li>
            </ol>
        </div>

    </div>
    <script src="js/validar-en.js"></script>
    <script >
  function confirmation() 
    if (confirm("Do you really want to delete the record?")) {
      return true;
    }
    return false;
  

</script>
</body>

</html>