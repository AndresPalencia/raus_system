<?php
include("../../database/db_conection.php");

if(isset($_POST))
{
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $institucion_titulo = $_POST['institucion_titulo'];
    $anio_titulo = $_POST['anio_titulo'];

    $query = "UPDATE artistas_titulos_obtenidos SET titulo = '$titulo', institucion = '$institucion_titulo', anio = '$anio_titulo' WHERE id_titulos_obtenidos = '$id'";

    if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }
}