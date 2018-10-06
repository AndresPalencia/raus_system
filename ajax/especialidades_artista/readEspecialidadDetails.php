<?php
// include Database connection file
include("../../database/db_conection.php");

// check request
if(isset($_POST['id_esp']) && isset($_POST['id_esp']) != "")
{
    // get User ID
    $especialidad_id = $_POST['id_esp'];

    // Get User Details
    $query = "SELECT * FROM artistas_esp_artisticas where id_esp_artisticas = '$especialidad_id'";

    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}