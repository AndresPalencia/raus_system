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
							<th>Red Social</th>
							<th>URL</th>
							<th class="text-right white">
                                <a  class="btn btn-success white" href="" data-toggle="modal" data-target="#redes_sociales_popup"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
							
							
						</tr>';


$query="SELECT artistas_redes_sociales.id_artistas_redes_sociales, 
artistas_redes_sociales.url_red_social, redes_sociales.red_social FROM artistas_redes_sociales 
INNER JOIN redes_sociales ON artistas_redes_sociales.redes_sociales_id_redes_sociales
=redes_sociales.id_redes_sociales 
WHERE artistas_redes_sociales.artistas_urbanos_id_artistas='$id_artista'";



	if (!$result = mysqli_query($dbcon, $query)) {
        exit(mysqli_error($dbcon));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	while($row = mysqli_fetch_assoc($result))
    	{


    		$data .= '<tr>
				<td>'.$row['red_social'].'</td>
				<td><a href="'.$row['url_red_social'].'">'.$row['url_red_social'].'</a></td>

				<td class="text-right">
					<a onclick="GetRedDetails('.$row['id_artistas_redes_sociales'].')" class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
			
					<a onclick="DeleteRed('.$row['id_artistas_redes_sociales'].')" class="btn btn-danger"><i class="fa fa-trash white" aria-hidden="true"></i></a>
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