<?php
include("../../database/db_conection.php");
if(isset($_POST['id_titulo']) && isset($_POST['id_titulo']) != "")
{
    $titulo_id = $_POST['id_titulo'];
    $query = "SELECT * FROM artistas_titulos_obtenidos WHERE id_titulos_obtenidos = '$titulo_id'";

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