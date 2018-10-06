<?php
// include Database connection file
include("../../database/db_conection.php");

// check request
if(isset($_POST['id_red']) && isset($_POST['id_red']) != "")
{
    // get User ID
    $red_id = $_POST['id_red'];

    // Get User Details
    $query = "SELECT * FROM artistas_redes_sociales where id_artistas_redes_sociales = '$red_id'";

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