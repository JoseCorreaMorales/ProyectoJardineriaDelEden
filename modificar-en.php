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
                <form id="form1" name="form1" method="post" action="actualizar_registro-en.php"
                    onsubmit="return validarForm(this);">
                    <div style="overflow-x:auto;">
                        <!-- añadiedo barra de navegacion horizontal -->
                        <table>

                            <?php 
                                echo '<h3>El Regrsitro a modifcar es: </h3>' . $_GET['id'];
                                echo '<br><br><br>';
                                //invocar la funcion select y la tabla
                                $result = select_id("macetas", "bd_codigo", $_GET['id']);
                                // Realizamos un bucle que muestre el resultado
                                if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_object($result)) {
                                ?>


                            <!-- NO -->
                                        <!-- disabled -->
                            <tr>
                            <td> <p><label for="text_codigo">Code </label><br></td>
                            <td><input type="text" name="text_codigo" id="txt_Codigo" hidden
                            onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_codigo; ?>"  >
                            </p></td>
                            </tr>
                            
                   
                        <tr>
                            <td><p>
                                <label for="lst_Categoria">Category</label><br><br></td>

                            <td>
                            <select name="lst_Categoria" id="lst_Categoria">
                                    <!-- <option>Selecciona una categoria...</option> -->
                                    <option ><?php echo $row->bd_categoria; ?></option>
                                    <option> Pot 501 </option>
                                     <option> Conical curved pot </option>
                                     <option> Wood type </option>
                                </select>
                            </p>
                            </td>
                        </tr>
                            

                        <tr>
                        <td>
                        <p><label for="txt_Precio">Price </label><br>
                        </td>

                        <td> <input type="text" name="txt_Precio" id="txt_Precio" 
                        onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_precio; ?>">
                            </p></td>

                        </tr>
                           
                              
                        <tr>
                        <td><p><label for="txt_Cantidad">Quantity </label><br></td>
                        <td><input type="text" name="txt_Cantidad" id="txt_Cantidad"
                        onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_cantidad; ?>">
                            </p></td>
                        </tr>

                        <tr>
                        
                        <td>
                        <p>
                            <p>Observations</p>
                        </td>

                        <td><!-- onkeyup="javascript:this.value=this.value.toUpperCase();" -->
                        <textarea id="area_observaciones" name="area_observaciones"
                        onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_observaciones; ?>"
                               ></textarea>
                            </p>
                        </td>
                        </tr> 
                               
                        

                        <tr>
                        <td>
                        <p>
                            <p>Size</p>    
                        </td>

                        <td>
                        <input type="radio" id="rad_Chica" name="rad_tamano" value="Chica"
                        onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_tamano; ?>"><!-- f -->
                        <!-- </td> -->

                        <!-- <td> -->
                        <label for="rad_Chica">little

                       <!--  <td> -->

                     <input type="radio" id="rad_Mediana" name="rad_tamano" value="Mediana"
                     onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_tamano; ?>">
                     <!-- </td> -->

                    <!--  <td> -->
                     <label for="rad_Mediana">Medium</label><br>
                     <!-- </td> -->

                    <!--  <td> -->
                     <input type="radio" id="rad_Grande" name="rad_tamano" value="Grande"
                     onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->bd_tamano; ?>"> 
                     <!-- </td> -->

                    <!--  <td> -->
                     <label for="rad_Grande">Big</label>
                            </p>
                            <br>
                     </td>
                        </tr>

                            <!-- side bar -->                      

                        <tr>
                    <td>
                    <p>
                    <label for="lst_Color">Color</label><br><br>
                    </td>

                    <td>
                    <select name="lst_Color" id="lst_Color">
                                   <!--  <option>Selecciona un color...</option> -->
                                   <option ><?php echo $row->bd_color; ?></option>
                                    <option>Black</option>
                                    <option>Brown</option>
                                    <option>White</option>
                                </select>
                            </p>
                    </td>

                        </tr>

                        </table>
                        <button name="btn_guardar" class="btn_muestrame">Update</button><br></br><br>
                        <p>&nbsp;</p>
                    </div> <!-- div del contenedor del la tabla responsive -->
                </form>
         
                <tr>
              <td><?php echo $row->bd_codigo; ?></td>
              <td></td>
              <td><?php echo $row->bd_categoria; ?></td>
              <td><?php echo $row->bd_precio; ?></td>
              <td><?php echo $row->bd_observaciones; ?></td>
              <td><?php echo $row->bd_tamano; ?></td>
              <td><?php echo $row->bd_color; ?></td>

            </tr>

            <?php 
               }
               
            } else {
                echo "There is no record";
              }
            
            ?>
            </table>

            </div>
        </div>
        <!-- ---------------------------------------- -->

        <div id="footer">
            <h2 style="border-bottom: 3px solid black;">Garden of Eden Project </h2>
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

    </div><!-- container -->
    <script src="js/validar-en.js"></script>
    <script>

    </script>
</body>

</html>