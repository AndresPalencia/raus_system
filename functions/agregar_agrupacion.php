<?php
session_start();
$id_user=$_SESSION['id'];

include ("../database/db_conection.php");
if(isset($_POST['form_agru'])){

    $grupo=$_POST['grupo'];
    $duracion=$_POST['duracion'];
    $anio=$_POST['anio'];
    $lugar=$_POST['lugar'];

    $select_artista="select * from artistas_urbanos where usuarios_id_usuario='$id_user'";

    $run_select=mysqli_query($dbcon,$select_artista);
    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_agru="insert into artistas_agrupaciones (grupo, duracion, anio, lugar, artistas_urbanos_id_artistas) values 
  ('$grupo','$duracion','$anio','$lugar','$id_artista')" or die($insert_agru);
        $run_agru=mysqli_query($dbcon,$insert_agru);
        echo "<script>window.open('../registrar_suscripcion_artista.php','_self')</script>";


    }


}

?>