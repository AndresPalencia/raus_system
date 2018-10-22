<?php
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("../../database/db_conection.php");
   $agrupacion_id = $_POST['id'];
   $query = "DELETE FROM artistas_agrupaciones WHERE id_agrupaciones = '$agrupacion_id'";
    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}
?>