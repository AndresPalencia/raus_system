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
							<th>Titulo</th>
							<th>Institución</th>
							<th>Año</th>
							<th class="text-right white">
                                <a  class="btn btn-success white" href="" data-toggle="modal" data-target="#titulos_obtenidos"><i class="fa fa-plus  white" aria-hidden="true"></i> Agregar</a>
                            </th>
						</tr>';

$query ="SELECT * FROM artistas_titulos_obtenidos WHERE artistas_urbanos_id_artistas='$id_artista'";

if (!$result = mysqli_query($dbcon, $query)) {
    exit(mysqli_error($dbcon));
}

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $data .= '<tr>
                    <td>'.$row['titulo'].'</td>
                    <td>'.$row['institucion'].'</td>
                    <td>'.$row['anio'].'</td>
                    <td class="text-right">
                        <a onclick="GetTituloDetails('.$row['id_titulos_obtenidos'].')" class="btn btn-warning"><i class="fa fa-edit white" aria-hidden="true"></i></a>
                
                        <a onclick="DeleteTitulo('.$row['id_titulos_obtenidos'].')" class="btn btn-danger"><i class="fa fa-trash white" aria-hidden="true"></i></a>
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