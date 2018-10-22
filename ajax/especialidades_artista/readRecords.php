<?php
include("../../database/db_conection.php");
session_start();
$id_user=$_SESSION['id'];
$select_artista="SELECT *FROM artistas_urbanos WHERE usuarios_id_usuario='$id_user'";
$run_select=mysqli_query($dbcon,$select_artista);

while($row_artista=mysqli_fetch_array($run_select)){
    $id_artista=$row_artista['id_artistas'];
}
$data = '<table class="table">
						<tr>
							<th>Especialidad Artistica</th>
							<th class="text-right white">
                                <a  class="btn btn-success white" href="" data-toggle="modal" data-target="#esp_artisticas"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>							
						</tr>';

$query="SELECT artistas_esp_artisticas.artistas_urbanos_id_artistas, 
esp_artisticas.nombre_especialidad_artistica,artistas_esp_artisticas.id_esp_artisticas FROM artistas_esp_artisticas 
INNER JOIN esp_artisticas ON artistas_esp_artisticas.esp_artisticas_id_esp_artistica 
=esp_artisticas.id_esp_artistica 
WHERE artistas_esp_artisticas.artistas_urbanos_id_artistas='$id_artista'";

if (!$result = mysqli_query($dbcon, $query)) {
    exit(mysqli_error($dbcon));
}

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $data .= '<tr>
				<td>'.$row['nombre_especialidad_artistica'].'</td>

				<td class="text-right">
					<a onclick="GetEspecialidadDetails('.$row['id_esp_artisticas'].')" class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
			
					<a onclick="DeleteEspecialidad('.$row['id_esp_artisticas'].')" class="btn btn-danger"><i class="fa fa-trash white" aria-hidden="true"></i></a>
				</td>
    		</tr>';
    }
}

else
{
    $data .= '<tr><td colspan="6"></td></tr>';
}
$data .= '</table>';
echo $data;
?>