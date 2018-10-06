<?php
	// include Database connection file 
	include("../../database/db_conection.php");
	session_start();
	$id_user=$_SESSION['id'];

	$select_artista="SELECT *FROM artistas_urbanos where usuarios_id_usuario='$id_user'";
	$run_select=mysqli_query($dbcon,$select_artista);

	while($row_artista=mysqli_fetch_array($run_select)){
    	$id_artista=$row_artista['id_artistas'];
	}
	// Design initial table header 
	$data = '<table class="table">
						<tr>
							<th>Grupo</th>
							<th>Duracion</th>
							<th>Año</th>
							<th>Lugar</th>
							<th class="text-right white">
                                <a  class="btn btn-success white" href="" data-toggle="modal" data-target="#agrupaciones"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
							
							
						</tr>';


	$query="SELECT * FROM artistas_agrupaciones where artistas_urbanos_id_artistas='$id_artista'";


	if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	while($row = mysqli_fetch_assoc($result))
    	{


    		$data .= '<tr>
				<td>'.$row['grupo'].'</td>
				<td>'.$row['duracion'].'</td>
				<td>'.$row['anio'].'</td>
				<td>'.$row['lugar'].'</td>
				<td class="text-right">
					<a onclick="GetAgrupacionDetails('.$row['id_agrupaciones'].')" class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
			
					<a onclick="DeleteAgrupacion('.$row['id_agrupaciones'].')" class="btn btn-danger"><i class="fa fa-trash white" aria-hidden="true"></i></a>
				</td>
    		</tr>';
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6"></td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>