
<?php
session_start();
$id_user=$_SESSION['id'];

include ("../database/db_conection.php");
if(isset($_POST['form_estudios'])){
    $estudios=$_POST['estudio'];
    $institucion=$_POST['institucion'];
    $duracion=$_POST['duracion'];
    $anio=$_POST['anio'];

    $select_artista="select * from artistas_urbanos where usuarios_id_usuario='$id_user'";

    $run_select=mysqli_query($dbcon,$select_artista);
    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_estudio="insert into artistas_estudios_realizados (estudio, institucion, duracion, anio, artistas_urbanos_id_artistas) values 
  ('$estudios','$institucion','$duracion','$anio','$id_artista')" or die($insert_estudio);
        $run_estudios=mysqli_query($dbcon,$insert_estudio);
        echo "<script>window.open('../registrar_suscripcion_artista.php','_self')</script>";


    }



}

?>