<?php
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("../../database/db_conection.php");
    $user_id = $_POST['id'];
    $query = "DELETE FROM artistas_estudios_realizados WHERE id_estudios_realizados = '$user_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>