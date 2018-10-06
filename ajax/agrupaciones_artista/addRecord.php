<?php
session_start();
$id_user=$_SESSION['id'];
	if(isset($_POST['grupo']) && isset($_POST['duracion_agru']) && isset($_POST['anio_agru']) && isset($_POST['lugar']))
	{
		// include Database connection file 
		include("../../database/db_conection.php");

		// get values 
		$grupo = $_POST['grupo'];
		$duracion = $_POST['duracion_agru'];
		$anio = $_POST['anio_agru'];
		$lugar = $_POST['lugar'];

		    $select_artista="select * from artistas_urbanos where usuarios_id_usuario='$id_user'";

    $run_select=mysqli_query($dbcon,$select_artista);
    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_agru="insert into artistas_agrupaciones (grupo, duracion, anio, lugar, artistas_urbanos_id_artistas) values 
  ('$grupo','$duracion','$anio','$lugar','$id_artista')" or die($insert_agru);
        $run_agru=mysqli_query($dbcon,$insert_agru);
  


    }
	}
?>