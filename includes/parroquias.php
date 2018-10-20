<?php
include("../database/db_conection.php");
	
	$id_municipio = $_POST['id_municipio'];
	
	$queryP = "SELECT * FROM parroquias WHERE municipios_id_municipio='$id_municipio' ORDER BY parroquia";
	$resultadoP=mysqli_query($dbcon,$queryP);
	$html= "<option value=''>Seleccionar Parroquia</option>";

	while($rowP = $resultadoP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['id_parroquia']."'>".$rowP['parroquia']."</option>";
	}
	echo $html;
?>