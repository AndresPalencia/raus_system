<?php
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("../../database/db_conection.php");
    $especialidad_id = $_POST['id'];
    $query = "DELETE FROM artistas_esp_artisticas WHERE id_esp_artisticas = '$especialidad_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>