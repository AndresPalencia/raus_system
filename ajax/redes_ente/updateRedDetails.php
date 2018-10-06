<?php
// include Database connection file
include("../../database/db_conection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $redes_sociales = $_POST['update_redes_sociales'];
    $redes_url = $_POST['update_url'];

    // Updaste User details
    $query = "UPDATE entes_redes_sociales SET redes_sociales_id_redes_sociales = '$redes_sociales', url_red_social= '$redes_url' WHERE identes_redes_sociales = '$id'";



    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}