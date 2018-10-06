<?php
// check request

if(isset($_POST['id']) && isset($_POST['id']) != "")
{


    // include Database connection file
    include("../../database/db_conection.php");

    // get user id
    $agrupacion_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM artistas_agrupaciones WHERE id_agrupaciones = '$agrupacion_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>