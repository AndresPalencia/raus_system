<?php
include("../../database/db_conection.php");
if(isset($_POST['id_red']) && isset($_POST['id_red']) != "")
{
    $red_id = $_POST['id_red'];
    $query = "SELECT * FROM artistas_redes_sociales WHERE id_artistas_redes_sociales = '$red_id'";

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
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}