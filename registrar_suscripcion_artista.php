<?php
include("database/db_conection.php");
include("includes/estados.php");
include('session.php');
$id_user=$_SESSION['id'];

$select_artista="SELECT *FROM artistas_urbanos where usuarios_id_usuario='$id_user'";
$run_select=mysqli_query($dbcon,$select_artista);

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
    <!-- JavaScript Libraries -->
    <script
  src="http://code.jquery.com/jquery-1.11.3.js"
  integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0="
  crossorigin="anonymous"></script>
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
    <a href="https://www.twitter.com/rausystem?lang=es" class=" icon icon-twitter"  target="_blank"></a>
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
    <section>
        <div class="container">
            <br>
            <br>
            <div class="section-header">
                <h3>Suscripci&oacute;n</h3>
            </div>

            <form action="functions/suscribir_artista.php" id="suscripcion" name="suscripcion" method="post" >
                <br>
                <br>
                <div>
                    <h4><strong>Resumen Artistico</strong></h4>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="resumen" id="resumen" rows="7" required></textarea>
                    <div class="validation"></div>
                </div>
                <br>
                <div  id="div_estudios">
                    <div >
                       <h4><strong>Estudios Realizados</strong></h4>
                    </div>
                <div class="estudios_realizados_content"></div>

                <br>
                <div >
                    <div >
                        <h4><strong>Titulos Obtenidos</strong></h4>
                    </div>
                </div>
                <div class="titulos_obtenidos_content"></div>
                <br>
                <div >
                    <div >
                        <h4><strong>Participaci&oacute;n en Agrupaciones</strong></h4>
                    </div>

                </div>
                <div class="agrupaciones_content"></div>
                <br>
                <div >
                    <div >
                        <h4><strong>Especialidades Artisticas</strong></h4>
                    </div>

                </div>
                <div class="especialidades_content">
                </div>

                <br>
                <div >
                    <div >
                        <h4><strong>Redes Sociales / Sitio Web</strong></h4>
                    </div>

                </div>
                <div class="redes_content"></div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="checkbox" name="contrato" value="1" required> Aceptar
                        <a href="" data-toggle="modal" data-target="#exampleModal">Contrato</a><br>
                    </div>

                </div>
                 <?php
            include ("estudios_realizados.php");
            include ("titulos_obtenidos.php");
            include ("agrupaciones.php");
            include ("especialidades_artisticas.php");
            include ("redes_sociales_artistas.php");

            ?>

                <div>
                    <input class="text-center btn btn-lg btn-block" type="submit" value="Enviar" name="suscripcion" >

                </div>



                </form >
                <?php
                include ("contrato.php");

                ?>

      
               </div>
</div>
</section>
<br>
<br>
</main>

<?php
include("footer.php");
?>
</body>
</html>
