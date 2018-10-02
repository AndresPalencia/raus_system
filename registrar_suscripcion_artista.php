<?php
include("database/db_conection.php");
include("includes/estados.php");
session_start();
$id_user=$_SESSION['id'];

$select_artista="SELECT *FROM artistas_urbanos where usuarios_id_usuario='$id_user'";
$run_select=mysqli_query($dbcon,$select_artista);

while($row_artista=mysqli_fetch_array($run_select)){
    $id_artista=$row_artista['id_artistas'];
}


$table_estudios="SELECT * FROM artistas_estudios_realizados where artistas_urbanos_id_artistas='$id_artista'";
$run_query_estudios=mysqli_query($dbcon,$table_estudios);

$table_titulos="SELECT * FROM artistas_titulos_obtenidos where artistas_urbanos_id_artistas='$id_artista'";
$run_query_titulos=mysqli_query($dbcon,$table_titulos);

$table_agru="SELECT * FROM artistas_agrupaciones where artistas_urbanos_id_artistas='$id_artista'";
$run_query_agru=mysqli_query($dbcon,$table_agru);

$table_esp="SELECT artistas_esp_artisticas.artistas_urbanos_id_artistas, 
esp_artisticas.nombre_especialidad_artistica FROM artistas_esp_artisticas 
INNER JOIN esp_artisticas ON artistas_esp_artisticas.esp_artisticas_id_esp_artistica 
=esp_artisticas.id_esp_artistica 
WHERE artistas_esp_artisticas.artistas_urbanos_id_artistas='$id_artista'";
$run_query_esp=mysqli_query($dbcon,$table_esp);

$table_redes="SELECT artistas_redes_sociales.id_artistas_redes_sociales, 
artistas_redes_sociales.url_red_social, redes_sociales.red_social FROM artistas_redes_sociales 
INNER JOIN redes_sociales ON artistas_redes_sociales.redes_sociales_id_redes_sociales
=redes_sociales.id_redes_sociales 
WHERE artistas_redes_sociales.artistas_urbanos_id_artistas='$id_artista'";
$run_query_red=mysqli_query($dbcon,$table_redes);


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

            <form action="functions/suscribir_artista.php" id="suscripcion" name="suscripcion" method="post" role="form" >
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

                </div>

                <div>
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Estudio</th>
                            <th>Institución</th>
                            <th>Duracion</th>
                            <th>Año</th>
                            <th class="text-right white">

                                <a  class="btn btn-info white" href="" data-toggle="modal" data-target="#estudios_realizados"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($run_query_estudios)>0)
                        {
                            while($row = $run_query_estudios->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row["estudio"]) ?></td>
                                    <td><?php echo utf8_encode($row["institucion"]) ?></td>
                                    <td><?php echo utf8_encode($row["duracion"]) ?></td>
                                    <td><?php echo utf8_encode($row["anio"]) ?></td>
                                    <td class="text-right">
                                        <a  class="btn btn-danger button-red"><i class="fa fa-trash white" aria-hidden="true"></i></a>
                                        <a  class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </table>
                </div>
                <br>
                <div >
                    <div >
                        <h4><strong>Titulos Obtenidos</strong></h4>
                    </div>

                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Institución</th>
                            <th>Año</th>
                            <th class="text-right white">

                                <a  class="btn btn-info white" href="" data-toggle="modal" data-target="#titulos_obtenidos"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($run_query_titulos)>0)
                        {
                            while($rowTitulos = $run_query_titulos->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($rowTitulos["titulo"]) ?></td>
                                    <td><?php echo utf8_encode($rowTitulos["institucion"]) ?></td>
                                    <td><?php echo utf8_encode($rowTitulos["anio"]) ?></td>
                                    <td class="text-right">
                                        <a  class="btn btn-danger button-red"><i class="fa fa-trash white" aria-hidden="true"></i></a>
                                        <a  class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </table>
                </div>
                <br>
                <div >
                    <div >
                        <h4><strong>Participaci&oacute;n en Agrupaciones</strong></h4>
                    </div>

                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Grupo</th>
                            <th>Duracion</th>
                            <th>Año</th>
                            <th>Lugar</th>
                            <th class="text-right white">
                                <a  class="btn btn-info white" href="" data-toggle="modal" data-target="#agrupaciones"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($run_query_agru)>0)
                        {
                            while($rowAgru= $run_query_agru->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($rowAgru["grupo"]) ?></td>
                                    <td><?php echo utf8_encode($rowAgru["duracion"] )?></td>
                                    <td><?php echo utf8_encode($rowAgru["anio"]) ?></td>
                                    <td><?php echo utf8_encode($rowAgru["lugar"]) ?></td>
                                    <td class="text-right">
                                        <a  class="btn btn-danger button-red"><i class="fa fa-trash white" aria-hidden="true"></i></a>
                                        <a  class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </table>
                </div>
                <br>
                <div >
                    <div >
                        <h4><strong>Especialidades Artisticas</strong></h4>
                    </div>

                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Especialidad Artistica</th>

                            <th class="text-right white">
                                <a class="btn btn-info white" href="" data-toggle="modal" data-target="#esp_artisticas"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($run_query_esp)>0)
                        {
                            while($rowEsp = $run_query_esp->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($rowEsp["nombre_especialidad_artistica"]) ?></td>
                                    <td class="text-right">
                                        <a  class="btn btn-danger button-red"><i class="fa fa-trash white" aria-hidden="true"></i></a>
                                        <a  class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </table>
                </div>

                <br>
                <div >
                    <div >
                        <h4><strong>Redes Sociales</strong></h4>
                    </div>

                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Red Social</th>
                            <th>URL</th>

                            <th class="text-right white">
                                <a  class="btn btn-info white" href="" data-toggle="modal" data-target="#redes_sociales"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($run_query_red)>0)
                        {
                            while($rowRed = $run_query_red->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($rowRed["red_social"]) ?></td>
                                    <td><a href='<?php echo utf8_encode($rowRed["url_red_social"]) ?>'</a><?php echo utf8_encode($rowRed["url_red_social"]) ?></td>

                                    <td class="text-right">
                                        <a  class="btn btn-danger button-red"><i class="fa fa-trash white" aria-hidden="true"></i></a>
                                        <a  class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </table>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="checkbox" name="contrato" value="1" required> Aceptar
                        <a href="" data-toggle="modal" data-target="#exampleModal">Contrato</a><br>
                    </div>

                </div>
                <div>
                    <input class="text-center btn btn-lg btn-block" type="submit" value="Registrarse" name="suscripcion" >

                </div>
                <?php
                include ("contrato.php");

                ?>

            </form>
            <?php
            include ("estudios_realizados.php");
            include ("titulos_obtenidos.php");
            include ("agrupaciones.php");
            include ("especialidades_artisticas.php");
            include ("redes_sociales.php");

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


