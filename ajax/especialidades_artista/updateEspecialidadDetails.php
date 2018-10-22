<?php
include("../../database/db_conection.php");

if(isset($_POST))
{
    $id = $_POST['id'];
    $esp_artistica = $_POST['update_especialidad_artistica'];

    $query = "UPDATE artistas_esp_artisticas SET esp_artisticas_id_esp_artistica = '$esp_artistica' WHERE id_esp_artisticas = '$id'";

    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}