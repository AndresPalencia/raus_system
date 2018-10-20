<?php
include("database/db_conection.php");
include("includes/estados.php");
include('session.php');
$id_user=$_SESSION['id'];


$select_ente="SELECT * FROM entes_culturales where usuarios_id_usuario='$id_user'";
$run_select=mysqli_query($dbcon,$select_ente) or die($select_ente);

while($row_ente=mysqli_fetch_array($run_select)){
    $id_ente_select=$row_ente['id_ente_cultural'];
}
while($row_artista=mysqli_fetch_array($run_select)){
    $id_artista=$row_artista['id_artistas'];
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RAUSystem</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  -->
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
<script
  src="http://code.jquery.com/jquery-1.11.3.js"
  integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0="
  crossorigin="anonymous"></script>
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
     <script src="js/script.js"></script>
    
<link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.css">
<link rel="stylesheet" type="text/css" href="js/alertify/css/themes/bootstrap.css">
<script src="js/alertify/alertify.js"></script>

</head>

<body>

<?php
include("header_suscripcion.php");
?>

<div class="social-bar">
    <a href="https://twitter.com/rausystem?lang=es" class=" icon icon-twitter"  target="_blank"></a>
    <a href="https://www.facebook.com/Rausystem-173642113498124/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://www.instagram.com/rausystem.ccs/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCav1I7tqBt5kHrSG8oV9bsw" class="icon icon-youtube" target="_blank"></a>
</div>



<!--==========================
  Suscripcion Section
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

            <form action="functions/suscribir_ente.php" id="suscripcion" name="suscripcion" method="post" role="form" >


                <br>
                <br>

                <div class="form-row">
                    <input type="text" hidden value="<?php echo $user; ?>" name="user_ente" class="form-control" id="user_ente" placeholder="Nombre del ente"/>

                    <div class="form-group col-md-6">
                        <input type="text" name="nombre_ente" class="form-control" id="nombre_ente" placeholder="Nombre del ente" required />
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="rif_ente" class="form-control" id="rif_ente" placeholder="RIF del ente" required />
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="ubicacion" id="ubicacion" rows="5" placeholder="Ubicaci&oacute;n"></textarea>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="razon" id="razon" rows="5" placeholder="Raz&oacute;n Social"></textarea>
                </div>
                <div >
                    <div >
                        <h4><strong>Redes Sociales</strong></h4>
                    </div>

                </div>
                <div class="redes_sociales_entes_content">
                   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="checkbox" name="contrato" value="1" required> Aceptar
                        <a href="" data-toggle="modal" data-target="#exampleModal">Contrato</a><br>
                    </div>

                </div>

                <div>
                    <input class="text-center btn btn-lg btn-block" type="submit" value="Enviar" name="suscripcion" >

                </div>
                <?php
                include("redes_sociales_entes.php");
                include ("contrato.php");
                ?>


            </form>
        </div>

</div>
</section>



</main>

<?php

include("footer.php");
?>

<!-- JavaScript Libraries -->
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
<!-- Contact Form JavaScript File -->


<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


</body>
</html>


