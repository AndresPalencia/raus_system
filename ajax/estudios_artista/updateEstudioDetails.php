<?php
include("../../database/db_conection.php");

if(isset($_POST))
{
    $id = $_POST['id'];
    $estudio = $_POST['estudio'];
    $institucion = $_POST['institucion'];
    $duracion = $_POST['duracion'];
    $anio = $_POST['anio'];

    $query = "UPDATE artistas_estudios_realizados SET estudio = '$estudio', institucion = '$institucion', duracion = '$duracion', anio = '$anio' WHERE id_estudios_realizados = '$id'";

    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}