<?php
session_start();
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/bootstrap.css">
    <script src="js/alertify/alertify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
</head>

<body>
<?php
include("header_recuperar.php");
?>

<div class="social-bar">
    <a href="https://www.twitter.com/rausystem?lang=es" class=" icon icon-twitter"  target="_blank"></a>
    <a href="https://www.facebook.com/Rausystem-173642113498124/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://www.instagram.com/rausystem.ccs/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCav1I7tqBt5kHrSG8oV9bsw" class="icon icon-youtube" target="_blank"></a>
</div>
<section id="call-to-action" class="wow fadeIn">
</section>

    <div class="form" >
        <section id="contact" class="">
            <div class="container">
                <div id="errormessage"></div>
                <form action="functions/cambiar_contrasenia.php" id="cambiar_contrasenia" name=cambiar_contrasenia" method="post" novalidate">
                    <div align="right">
                        <a href='index.php'>Regresar</a>
                    </div>
                    <br>
                    <div class="section-header">
                        <h3>Recuperar Contraseña</h3>
                    </div>

                    
                    <br>
                    <div class="required">* Todos los campos son requeridos</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="user_cambio" class="form-control" id="user_cambio" placeholder="Ingrese su C.I o Num de Registro"/>
                            <input type="text" hidden name="contra_vali" class="form-control" id="contra_vali"/>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="pregunta" class="form-control" id="pregunta" placeholder="Pregunta de seguridad"/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="respuesta" class="form-control" id="respuesta" placeholder="Respuesta de seguridad"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña"/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="repass" class="form-control" id="repass" placeholder="Repetir Contraseña"/>
                        </div>
                    </div>
                    <div>
                        <input 
                            class="text-center btn btn-lg btn-block"
                            data-sitekey="6LdJYXkUAAAAAN7nEXYw3OneFG_rZ3aaaDBaATX4" 
                            data-callback='onSubmit'
                            type="submit" 
                            id="cambio_btn" 
                            value="Cambiar Contraseña">
                    </div>
                </form>
            </div>
    </div>
 

<?php
include("footer.php");
?>

<script src="js/cambiar_contrasenia.js"></script>
</body>
</html>



