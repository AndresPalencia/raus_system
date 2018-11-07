<?php
include("database/db_conection.php");
include('session.php');

$id_usuario = $_GET['id_ente'];

	$consulta="SELECT * FROM entes_culturales WHERE id_ente_cultural='$id_usuario'";
	$run_consulta=mysqli_query($dbcon,$consulta);

     if(mysqli_num_rows($run_consulta) > 0)
        {
            while($row = mysqli_fetch_assoc($run_consulta))
            {
               $nombre_ente=$row['nombre_ente'];
               $pre_rif=$row['pre_rif'];
               $rif_ente=$row['rif_ente'];
               $razon_social=$row['razon_social'];
            }
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
    <script src="js/solicitar.js"></script>
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

<section id="call-to-action" class="wow fadeIn">
</section>


        <div class="container"><br><br>
            <div align="right">
                <?php 
                        if ($_SESSION['tipo_usuario']=="2") {
                            echo "<a href='consulta_artista.php'>Regresar</a>";
                        }else{
                            echo "<a href='consulta_ente.php'>Regresar</a>";
                        }
                     ?>    
            </div>
            <br>
            <div class="section-header">
                <h3><?php echo $nombre_ente; ?></h3>

            </div>
          <br><br>      
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 ">
                    <div >
                        <h5><strong>RIF</strong></h5>
                    </div>
    	            <?php
    	                    echo 
    	                    $pre_rif."-".$rif_ente;
    	            ?>
                    <br>
                    <br>
                    <div >
                        <h5><strong>Razon Social</strong></h5>
                    </div>
                     <?php
                            echo 
                            $razon_social;
                    ?>
                    <br>
                    <br>
                    <div>
                        <h5><strong>Redes Sociales / Sitio Web</strong></h5>
                    </div>

                    <table class="table">
                        <tr>
                            <th>Red Social / Sitio Web</th>
                            <th>URL</th>
                        </tr>
                    <?php  
                        $query_redes="SELECT entes_redes_sociales.identes_redes_sociales, entes_redes_sociales.url_red_social, 
                        redes_sociales.red_social FROM entes_redes_sociales INNER JOIN redes_sociales 
                        ON entes_redes_sociales.redes_sociales_id_redes_sociales=redes_sociales.id_redes_sociales 
                        WHERE entes_redes_sociales.entes_culturales_id_ente_cultural='$id_usuario'";

                        if (!$result_redes = mysqli_query($dbcon, $query_redes)) {
                            exit(mysqli_error($dbcon));
                        }

                        if(mysqli_num_rows($result_redes) > 0)
                        {
                            while($row_redes = mysqli_fetch_assoc($result_redes))
                            {
                                echo '<tr>
                                        <td>'.$row_redes['red_social'].'</td>
                                        <td><a href="'.$row_redes['url_red_social'].'">'.$row_redes['url_red_social'].'</a></td>
                                    </tr>';
                            }
                        }
                     ?>
                    </table>
                    <br>
                   
                     <br>
                     <center>
                         <a  class="btn btn-success white" href="" data-toggle="modal" data-target="#solicitar_popup"> Crear Pauta</a>
                     </center>
                    <br>
	            </div>
        	</div>    	
		</div>
        <?php
            include ("solicitar_popup.php");
        ?>
</section>

<br>
<br>
</main>
<?php
include("footer.php");
?>
</body>
</html>