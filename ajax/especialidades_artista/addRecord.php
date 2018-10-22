<?php
session_start();
$id_user=$_SESSION['id'];

if(isset($_POST['especialidad_artistica']))
{
    include("../../database/db_conection.php");
    $especialidad_artistica = $_POST['especialidad_artistica'];
    $select_artista="SELECT * FROM artistas_urbanos WHERE usuarios_id_usuario='$id_user'";
    $run_select=mysqli_query($dbcon,$select_artista);

    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_esp_art="INSERT INTO artistas_esp_artisticas (artistas_urbanos_id_artistas, esp_artisticas_id_esp_artistica) VALUES ('$id_artista','$especialidad_artistica')" or die($insert_esp_art);
        $run_esp_art=mysqli_query($dbcon,$insert_esp_art);
    }
}
?>