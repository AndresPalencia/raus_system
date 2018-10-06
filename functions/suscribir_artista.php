<?php
include("../database/db_conection.php");

if(isset($_POST['suscripcion'])) {
    session_start();
    $resumen = $_POST['resumen'];
    $contrato = $_POST['contrato'];
    $user_artista = $_SESSION['id']; 

    $updateUser="Update usuarios set licencia_contrato ='$contrato' where id_usuario='$user_artista'";
    $run_update_user=mysqli_query($dbcon,$updateUser) or die($updateUser);

    $updateArtista="Update artistas_urbanos set resumen_artistico='$resumen' where usuarios_id_usuario='$user_artista'";
    $run_update_artista=mysqli_query($dbcon,$updateArtista)or die($updateArtista);

    if ($run_update_artista && $run_update_user){
        echo"<script>window.open('../logout.php','_self')</script>";
    }else{
        echo "update user: ".$updateUser." update ente: ".$updateArtista;
    }

}
?>