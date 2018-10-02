<?php
session_start();
$id_user=$_SESSION['id'];

include ("../database/db_conection.php");
if(isset($_POST['form_esp_art'])){
    $especialidad_artistica=$_POST['especialidad_artistica'];

    $select_artista="select * from artistas_urbanos where usuarios_id_usuario='$id_user'";

    $run_select=mysqli_query($dbcon,$select_artista);
    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_esp_art="insert into artistas_esp_artisticas (artistas_urbanos_id_artistas, esp_artisticas_id_esp_artistica) values 
  ('$id_artista','$especialidad_artistica')" or die($insert_esp_art);
        $run_esp_art=mysqli_query($dbcon,$insert_esp_art);
        echo "<script>window.open('../registrar_suscripcion_artista.php','_self')</script>";


    }



}

?>