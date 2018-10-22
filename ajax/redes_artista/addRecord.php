<?php
session_start();
$id_user=$_SESSION['id'];

if(isset($_POST['redes_sociales']) && isset($_POST['url']))
{
    include("../../database/db_conection.php");
    $redes_sociales = $_POST['redes_sociales'];
    $url = $_POST['url'];
    $select_artista="SELECT * FROM artistas_urbanos WHERE usuarios_id_usuario='$id_user'";
    $run_select=mysqli_query($dbcon,$select_artista);

    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_red_soc = "INSERT INTO artistas_redes_sociales (url_red_social, artistas_urbanos_id_artistas, redes_sociales_id_redes_sociales ) VALUES ('$url','$id_artista','$redes_sociales')" or die($insert_red_soc);
        $run_red_soc = mysqli_query($dbcon, $insert_red_soc);
    }
}
?>