<?php
include("database/db_conection.php");
include("includes/estados.php");
include('session.php');
include("tiempo_inactividad.php");

$id_user=$_SESSION['id'];
$select_ente="SELECT * FROM entes_culturales WHERE usuarios_id_usuario='$id_user'";
$run_select=mysqli_query($dbcon,$select_ente) or die($select_ente);
while($row_ente=mysqli_fetch_array($run_select)){
    $id_ente_select=$row_ente['id_ente_cultural'];
    $nombre=$row_ente['nombre_ente'];
    $pre_rif=$row_ente['pre_rif'];
    $rif_ente=$row_ente['rif_ente'];
    $ubicacion=$row_ente['ubicacion_ente'];
    $razon_social=$row_ente['razon_social'];
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
    <script src="http://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/bootstrap.css">
    <script src="js/alertify/alertify.js"></script>
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

<section id="call-to-action" class="wow fadeIn">
</section>
<div class="form">
    <section id="contact" class="">
        <div class="container">
            <br>
            <br>
            <div class="section-header">
                 <h3>
                    <?php if ($_SESSION['licencia'] == 0){
                        echo "Suscripci&oacute;n";
                    }else{
                        echo "Usuario ".$_SESSION['numero_unico_registro'];
                    } 
                    ?>
                </h3>
            </div><div class="required">* Todos los campos son obligatorios</div>
            <form action="functions/suscribir_ente.php" id="suscripcion" name="suscripcion" method="post" role="form" >
                <br>
                <br>
                <div class="form-row">
                    <input type="text" hidden value="<?php echo $user; ?>" name="user_ente" class="form-control" id="user_ente" placeholder="Nombre del ente"/>
                    <div class="form-group col-md-6">
                        <input type="text" name="nombre_ente" class="form-control" id="nombre_ente" value="<?php echo $nombre;?>" placeholder="Nombre del ente" required />
                    </div>
                    <div class="form-group col-md-1">
                            <select name="pre_rif" class="form-control" id="pre_rif" value="<?php echo $pre_rif;?>">
                                <option value="J">J</option>
                                <option value="G">G</option>
                            </select>
                        </div>
                    <div class="form-group col-md-5">
                        <input type="text" name="rif_ente" class="form-control" id="rif_ente" value="<?php echo $rif_ente;?>"placeholder="RIF del ente" required />
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="ubicacion" id="ubicacion"  rows="5" placeholder="Ubicacion"><?php echo $ubicacion;?></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="razon" id="razon" rows="5" placeholder="Razon Social"><?php echo $razon_social;?></textarea>
                </div>
                <div >
                    <div >
                        <h4><strong>Redes Sociales / Sitio Web</strong></h4>
                    </div>
                </div>
                <div class="redes_sociales_entes_content">
                </div>
               
                <?php if ($_SESSION['licencia'] == 0){
                        echo '
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="checkbox" name="contrato" value="1" required> Aceptar
                                    <a href="" data-toggle="modal" data-target="#exampleModal">Contrato</a><br>
                                </div>
                            </div>';
                    }
                ?>


                <div>
                    <input class="text-center btn btn-lg btn-block" type="submit" value="Guardar" name="suscripcion" >
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

</body>
</html>


