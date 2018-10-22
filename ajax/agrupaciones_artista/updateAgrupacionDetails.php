<?php
include("../../database/db_conection.php");

if(isset($_POST))
{
    $id = $_POST['id'];
    $grupo = $_POST['grupo'];
    $duracion = $_POST['duracion_agru'];
    $anio = $_POST['anio_agru'];
    $lugar = $_POST['lugar'];

    $query = "UPDATE artistas_agrupaciones SET grupo = '$grupo', duracion = '$duracion', anio = '$anio', lugar = '$lugar' WHERE id_agrupaciones = '$id'";

    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}