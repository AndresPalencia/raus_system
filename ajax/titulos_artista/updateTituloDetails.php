<?php
// include Database connection file
include("../../database/db_conection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $institucion_titulo = $_POST['institucion_titulo'];
    $anio_titulo = $_POST['anio_titulo'];

    // Updaste User details
    $query = "UPDATE artistas_titulos_obtenidos SET titulo = '$titulo', institucion = '$institucion_titulo', anio = '$anio_titulo' WHERE id_titulos_obtenidos = '$id'";



    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}