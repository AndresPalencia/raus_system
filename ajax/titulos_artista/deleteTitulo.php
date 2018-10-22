<?php
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("../../database/db_conection.php");
    $user_id = $_POST['id'];
    $query = "DELETE FROM artistas_titulos_obtenidos WHERE id_titulos_obtenidos = '$user_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>