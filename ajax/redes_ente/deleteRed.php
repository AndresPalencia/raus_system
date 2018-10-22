<?php
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("../../database/db_conection.php");
    $red_id = $_POST['id'];
    $query = "DELETE FROM entes_redes_sociales WHERE identes_redes_sociales = '$red_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>