<?php
include("../database/db_conection.php");
if(isset($_POST['suscripcion'])) {
    session_start();
    $aka = $_POST['aka'];
    $resumen = $_POST['resumen'];
    $user_artista = $_SESSION['id'];
    if ($_SESSION['licencia'] == "1"){
        $contrato="1";
    }else{
        $contrato = $_POST['contrato'];
    }
    

    $updateUser="UPDATE usuarios SET licencia_contrato ='$contrato' where id_usuario='$user_artista'";
    $run_update_user=mysqli_query($dbcon,$updateUser) or die($updateUser);

    $updateArtista="UPDATE artistas_urbanos SET aka='$aka', resumen_artistico='$resumen' where usuarios_id_usuario='$user_artista'";
    $run_update_artista=mysqli_query($dbcon,$updateArtista) or die($updateArtista);

    if ($run_update_artista && $run_update_user){
        echo"<script>window.open('../logout.php','_self')</script>";
    }else{
        echo "update user: ".$updateUser." update ente: ".$updateArtista;
    }
}
?>