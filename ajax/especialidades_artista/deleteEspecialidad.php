<?php
// check request

if(isset($_POST['id']) && isset($_POST['id']) != "")
{


    // include Database connection file
    include("../../database/db_conection.php");

    // get user id
    $especialidad_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM artistas_esp_artisticas WHERE id_esp_artisticas = '$especialidad_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>