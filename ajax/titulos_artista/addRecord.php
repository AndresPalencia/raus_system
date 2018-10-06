<?php
session_start();
$id_user=$_SESSION['id'];
	if(isset($_POST['titulo']) && isset($_POST['institucion_titulo']) && isset($_POST['anio_titulo']))
	{
		// include Database connection file 
		include("../../database/db_conection.php");

		// get values 
		$titulo = $_POST['titulo'];
		$institucion = $_POST['institucion_titulo'];
		$anio = $_POST['anio_titulo'];

		    $select_artista="select * from artistas_urbanos where usuarios_id_usuario='$id_user'";

    $run_select=mysqli_query($dbcon,$select_artista);
    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_titulo="insert into artistas_titulos_obtenidos (titulo, institucion, anio, artistas_urbanos_id_artistas) values 
  ('$titulo','$institucion','$anio','$id_artista')" or die($insert_titulo);
        $run_titulo=mysqli_query($dbcon,$insert_titulo);
  


    }
	}
?>