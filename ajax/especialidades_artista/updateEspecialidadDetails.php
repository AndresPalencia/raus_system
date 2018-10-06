<?php
// include Database connection file
include("../../database/db_conection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $esp_artistica = $_POST['update_especialidad_artistica'];

    // Updaste User details
    $query = "UPDATE artistas_esp_artisticas SET esp_artisticas_id_esp_artistica = '$esp_artistica' WHERE id_esp_artisticas = '$id'";



    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}