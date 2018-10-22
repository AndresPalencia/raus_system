<?php
session_start();
$id_user=$_SESSION['id'];

if(isset($_POST['titulo']) && isset($_POST['institucion_titulo']) && isset($_POST['anio_titulo']))
{
    include("../../database/db_conection.php");
    $titulo = $_POST['titulo'];
    $institucion = $_POST['institucion_titulo'];
    $anio = $_POST['anio_titulo'];
    $select_artista="SELECT * FROM artistas_urbanos WHERE usuarios_id_usuario='$id_user'";
    $run_select=mysqli_query($dbcon,$select_artista);

    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_titulo="INSERT INTO artistas_titulos_obtenidos (titulo, institucion, anio, artistas_urbanos_id_artistas) VALUES ('$titulo','$institucion','$anio','$id_artista')" or die($insert_titulo);
        $run_titulo=mysqli_query($dbcon,$insert_titulo);
    }
}
?>