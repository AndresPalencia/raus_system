<?php
include("database/db_conection.php");
include('session.php');

$id_user=$_SESSION['id'];


$gestion="SELECT entes_culturales.id_ente_cultural,entes_culturales.nombre_ente,usuarios.numero_unico_registro, usuarios.id_usuario, usuarios.licencia_contrato ,parroquias.parroquia FROM entes_culturales INNER JOIN usuarios ON entes_culturales.usuarios_id_usuario=usuarios.id_usuario INNER JOIN parroquias ON usuarios.parroquias_id_parroquia=parroquias.id_parroquia WHERE usuarios.licencia_contrato=1";
$run_gestion=mysqli_query($dbcon,$gestion);




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
    <script src="http://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script>
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
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/bootstrap.css">
    <script src="js/alertify/alertify.js"></script>
     <script src="js/timer.js"></script>
    
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

<section id="call-to-action" class="wow fadeIn">
</section>

<div class="form">
        <div class="container">
            <br>
            <br>
            <div class="section-header">
                <h3>Gesti&oacute;n</h3>
            </div>
          <br><br>      
        </div>
        <div class="container">
            <table class="table">
                        <tr>
                            <th>Usuario</th>
                            <th>Ente</th>
                            <th>Parroquia</th>
                            <th>Ver Ente</th>                         
                        </tr>
            <?php
            if(mysqli_num_rows($run_gestion) > 0)
            {
                while($row = mysqli_fetch_assoc($run_gestion))
                {
                    echo '<tr>
                            <td>'.$row['numero_unico_registro'].'</td>
                            <td>'.$row['nombre_ente'].'</td>
                            <td>'.$row['parroquia'].'</td>
                            <td>
                            <a href="ver_consulta_ente.php?id_ente='.$row['id_ente_cultural'].'" >Ver Ente</a>
                          </td>
                        </tr>';
                }
            }
            ?>
            </table>
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
