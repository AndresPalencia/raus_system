<?php
include("database/db_conection.php");
include('session.php');

$id_usuario = $_GET['id_artista'];

	$consulta="SELECT * FROM artistas_urbanos WHERE id_artistas='$id_usuario'";
	$run_consulta=mysqli_query($dbcon,$consulta);

     if(mysqli_num_rows($run_consulta) > 0)
        {
            while($row = mysqli_fetch_assoc($run_consulta))
            {
               $aka=$row['aka'];
               $resumen=$row['resumen_artistico'];
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


        <div class="container">
            <br>
            <br>
            <div align="right">
                <?php 
                        if ($_SESSION['tipo_usuario']=="2") {
                            echo "<a href='consulta_artista.php'>Regresar</a>";
                        }else{
                            echo "<a href='consulta_ente.php'>Regresar</a>";
                        }
                     ?>    
            </div><br>
            <div class="section-header">
                <h3><?php echo $aka; ?></h3>
            </div>
          <br><br>      
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 ">
                    <div >
                        <h5><strong>Resumen Artistico</strong></h5>
                    </div>
    	            <?php
    	                    echo 
    	                    $resumen;
    	            ?>
                    <br>
                      <br>
                    <div >
                        <h5><strong>Estudios Realizados</strong></h5>
                    </div>
    	       
                     <table class="table">
                        <tr>
                            <th>Estudio</th>
                            <th>Institución</th>
                            <th>Duracion</th>
                            <th>Año</th>
                        </tr>
                        
                        <?php
                        $query_estudios = "SELECT * FROM artistas_estudios_realizados WHERE artistas_urbanos_id_artistas='id_usuario'";

                        if (!$result_estudios = mysqli_query($dbcon, $query_estudios)) {
                            exit(mysqli_error($dbcon));
                        }

                        if(mysqli_num_rows($result_estudios) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result_estudios))
                            {
                                echo '<tr>
                                            <td>'.$row['estudio'].'</td>
                                            <td>'.$row['institucion'].'</td>
                                            <td>'.$row['duracion'].'</td>
                                            <td>'.$row['anio'].'</td>
                                          </tr>';
                            }
                        }
                        ?>
                        </table>
        	         <br>
                     <div>
                        <h5><strong>T&iacute;tulos Obtenidos</strong></h5>
                    </div>
                 
                    <table class="table">
                        <tr>
                            <th>Titulo</th>
                            <th>Institución</th>
                            <th>Año</th>
                        </tr>
                    <?php 
                      
                        $query_titulo ="SELECT * FROM artistas_titulos_obtenidos WHERE artistas_urbanos_id_artistas='$id_usuario'";

                        if (!$result_titulo = mysqli_query($dbcon, $query_titulo)) {
                            exit(mysqli_error($dbcon));
                        }

                        if(mysqli_num_rows($result_titulo) > 0)
                        {
                            while($row_titulo = mysqli_fetch_assoc($result_titulo))
                            {
                                echo '<tr>
                                        <td>'.$row_titulo['titulo'].'</td>
                                        <td>'.$row_titulo['institucion'].'</td>
                                        <td>'.$row_titulo['anio'].'</td>
                                    </tr>';
                        }
                    }?>
                    </table> 
                    <br>
                    <div>
                        <h5><strong>Participacion en Agrupaciones</strong></h5>
                    </div>   
        	        
                    <table class="table">
                        <tr>
                            <th>Grupo</th>
                            <th>Duracion</th>
                            <th>Año</th>
                            <th>Lugar</th>
                        </tr>

                    <?php 
                        $query_agrupaciones="SELECT * FROM artistas_agrupaciones where artistas_urbanos_id_artistas='$id_usuario'";
                        if (!$result_agrupaciones = mysqli_query($dbcon, $query_agrupaciones)) {
                            exit(mysqli_error($dbcon));
                        }

                        if(mysqli_num_rows($result_agrupaciones) > 0)
                        {
                            while($row_agrupaciones = mysqli_fetch_assoc($result_agrupaciones))
                            {
                                echo '<tr>
                                        <td>'.$row_agrupaciones['grupo'].'</td>
                                        <td>'.$row_agrupaciones['duracion'].'</td>
                                        <td>'.$row_agrupaciones['anio'].'</td>
                                        <td>'.$row_agrupaciones['lugar'].'</td>
                                    </tr>';
                            }
                        }
                    ?>
                    </table>
                    <br>
                    <div>
                        <h5><strong>Especialidades Artisticas</strong></h5>
                    </div>

                    <table class="table">
                        <tr>
                            <th>Especialidad Artistica</th>                   
                        </tr>
                    <?php 
                        $query_especialidad="SELECT artistas_esp_artisticas.artistas_urbanos_id_artistas, 
                        esp_artisticas.nombre_especialidad_artistica,artistas_esp_artisticas.id_esp_artisticas FROM artistas_esp_artisticas 
                        INNER JOIN esp_artisticas ON artistas_esp_artisticas.esp_artisticas_id_esp_artistica 
                        =esp_artisticas.id_esp_artistica 
                        WHERE artistas_esp_artisticas.artistas_urbanos_id_artistas='$id_usuario'";

                        if (!$result_especialidad = mysqli_query($dbcon, $query_especialidad)) {
                            exit(mysqli_error($dbcon_especialidad));
                        }

                        if(mysqli_num_rows($result_especialidad) > 0)
                        {
                            while($row_especialidad = mysqli_fetch_assoc($result_especialidad))
                            {
                                echo '<tr>
                                        <td>'.$row_especialidad['nombre_especialidad_artistica'].'</td>
                                    </tr>';
                            }
                        }
                    ?>
                    </table>
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
                        $query_redes="SELECT artistas_redes_sociales.id_artistas_redes_sociales, 
                        artistas_redes_sociales.url_red_social, redes_sociales.red_social FROM artistas_redes_sociales 
                        INNER JOIN redes_sociales ON artistas_redes_sociales.redes_sociales_id_redes_sociales
                        =redes_sociales.id_redes_sociales 
                        WHERE artistas_redes_sociales.artistas_urbanos_id_artistas='$id_usuario'";

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
                    <?php 
        	        	if ($_SESSION['tipo_usuario']=="2") {
        	        		echo "<a href='consulta_artista.php'>Regresar</a>";
        	        	}else{
        	        		echo "<a href='consulta_ente.php'>Regresar</a>";
        	        	}
        	         ?>
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