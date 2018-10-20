<?php
include("../database/db_conection.php");

	$id_estado= $_POST['id_estado'];

	$queryM="SELECT * FROM municipios WHERE estados_id_estado='$id_estado' ORDER BY municipio ASC";
	$resultadoM=mysqli_query($dbcon,$queryM);

	$html= "<option value=''>Seleccionar Municipio</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
	}
	
	echo $html;
?>