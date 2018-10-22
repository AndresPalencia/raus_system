<?php
session_start();
$id_user=$_SESSION['id'];

if(isset($_POST['redes_sociales']) && isset($_POST['url']))
{
    include("../../database/db_conection.php");
    $redes_sociales = $_POST['redes_sociales'];
    $url = $_POST['url'];
    $select_ente="SELECT * FROM entes_culturales WHERE usuarios_id_usuario='$id_user'";
    $run_select=mysqli_query($dbcon,$select_ente);

    while($row_ente=mysqli_fetch_array($run_select)){
        $id_ente=$row_ente['id_ente_cultural'];
        $insert_red_soc = "insert into entes_redes_sociales (url_red_social, redes_sociales_id_redes_sociales, entes_culturales_id_ente_cultural) values ('$url','$redes_sociales','$id_ente')" or die($insert_red_soc);
        $run_red_soc = mysqli_query($dbcon, $insert_red_soc);
    }
}
?>