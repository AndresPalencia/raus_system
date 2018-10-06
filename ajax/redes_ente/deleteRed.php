<?php
// check request

if(isset($_POST['id']) && isset($_POST['id']) != "")
{


    // include Database connection file
    include("../../database/db_conection.php");

    // get user id
    $red_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM entes_redes_sociales WHERE identes_redes_sociales = '$red_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>