<?php
session_start();
$id_user=$_SESSION['id'];

if(isset($_POST['estudio']) && isset($_POST['institucion']) && isset($_POST['duracion']) && isset($_POST['anio']))
{
    include("../../database/db_conection.php");
    $estudio = $_POST['estudio'];
    $institucion = $_POST['institucion'];
    $duracion = $_POST['duracion'];
    $anio = $_POST['anio'];
    $select_artista="SELECT * FROM artistas_urbanos WHERE usuarios_id_usuario='$id_user'";
    $run_select=mysqli_query($dbcon,$select_artista);

    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_estudio="INSERT INTO artistas_estudios_realizados (estudio, institucion, duracion, anio, artistas_urbanos_id_artistas) VALUES ('$estudio','$institucion','$duracion','$anio','$id_artista')" or die($insert_estudio);
        $run_estudios=mysqli_query($dbcon,$insert_estudio);
    }
}
?>