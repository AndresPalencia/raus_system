<?php

include("database/db_conection.php");
include("includes/estados.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>RAUSystem</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="css/font.css">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

<?php
include("header_suscripcion.php");
?>

  <div class="social-bar">
    <a href="https://www.twitter.com/rausystem?lang=es" class=" icon icon-twitter"  target="_blank"></a>
    <a href="https://www.facebook.com/Rausystem-173642113498124/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://www.instagram.com/rausystem.ccs/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCav1I7tqBt5kHrSG8oV9bsw" class="icon icon-youtube" target="_blank"></a>
  </div>

    <!--==========================
      Contact Section
    ============================-->

  <section id="call-to-action" class="wow fadeIn">
             
  </section>
      <div class="form">
        <section id="contact" class="">
      <div class="container">
          <br>
          <br>
      <div class="section-header">
          <h3>Suscripci&oacute;n</h3>
    </div>
         
    <div id="errormessage"></div>
          <form action="registrar.php" id="registro" name="registro" method="post" role="form" >
           
            <br>
            <br>

            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña" data-rule="required" data-msg="Ingrese su password" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="required" data-msg="Ingrese su nombre" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="lastname" class="form-control" name="lastname" id="lastname" placeholder="Apellido" data-rule="required" data-msg="Ingrese su apellido" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="id" class="form-control" name="id_doc" id="id_doc" placeholder="C.I / RIF / Pasaporte" data-rule="required" data-msg="Ingrese su n&uacute;mero de documento" />
                <div class="validation"></div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <select name="cbx_estado" class="form-control" id="cbx_estado" placeholder="Estado" data-rule="required" data-msg="Seleccione estado">
                  <option value="0">Seleccionar Estado</option>
                  <?php while($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
                  <?php } ?>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-4">
                <select name="cbx_municipio" id="cbx_municipio" class="form-control" placeholder="Municipio" data-rule="required" data-msg="Seleccione municipio">
                  <option value="0">Seleccionar Municipio</option>
                </select>
                <div class="validation"></div>
              </div>
              
              <div class="form-group col-md-4">
                <select name="cbx_parroquia" id="cbx_parroquia" class="form-control"  placeholder="Parroquia" required data-msg="Seleccione parroquia">
                  <option value="0">Seleccionar Parroquia</option>
                </select>  
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="address" rows="5"  data-msg="" placeholder="Direcci&oacute;n"></textarea>
              <div class="validation"></div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="phone" name="phone" class="form-control" id="phone" placeholder=" Telefono (0000) 000-00-00" data-rule="phone" data-msg="Ingrese un telefono valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Ingrese un correo valido" />
                <div class="validation"></div>
            </div>
    </div>
            
       <!--
            <center>
              <div class="form-group col-md-4">
                Cargar Resumen Curricular 
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
             </div>
            </center>
        -->    

            <div> 
            <input class="text-center btn btn-lg btn-block" type="submit" value="Registrarse" name="registro" >

            </div>
          </form>
        </div>
      </div>
</section><!-- #contact -->

  </main>

  <?php
  include("footer.php");
  ?>

  <!-- JavaScript Libraries -->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>


