<?php
include("../database/db_conection.php");
session_start();
if(isset($_POST['suscripcion'])) {
    $nombre_ente = $_POST['nombre_ente'];
    $rif_ente = $_POST['rif_ente'];
    $ubicacion = $_POST['ubicacion'];
    $razon = $_POST['razon'];
    $contrato = $_POST['contrato'];
    $user_ente = $_SESSION['id'];

    $updateUser="UPDATE usuarios SET licencia_contrato ='$contrato' WHERE id_usuario='$user_ente'";
    $run_update_user=mysqli_query($dbcon,$updateUser);

    $updateEnte="UPDATE entes_culturales SET nombre_ente='$nombre_ente', rif_ente='$rif_ente', 
      ubicacion_ente='$ubicacion', razon_social='$razon' WHERE usuarios_id_usuario='$user_ente'";
    $run_update_ente=mysqli_query($dbcon,$updateEnte);

    if ($run_update_ente && $run_update_user){
        echo"<script>window.open('../logout.php','_self')</script>";
    }else{
        echo "update user: ".$updateUser." update ente: ".$updateEnte;
    }
}
?>