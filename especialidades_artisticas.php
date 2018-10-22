<?php
$select_especialidad="SELECT * FROM esp_artisticas";
$run_query=mysqli_query($dbcon,$select_especialidad);
$run_query_update=mysqli_query($dbcon,$select_especialidad);
?>
<div class="modal fade" id="esp_artisticas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p align="justify">
                    <select name="especialidad_artistica" class="form-control" id="especialidad_artistica" placeholder="Especialidad Artistica">
                        <option value="">Especialidad Artistica</option>
                        <?php while($row = $run_query->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_esp_artistica']; ?>"><?php echo $row['nombre_especialidad_artistica']; ?></option>
                        <?php } ?>
                    </select>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="addRecordEspecialidad()">Aceptar</button>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="update_esp_artisticas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p align="justify">
                    <select name="update_especialidad_artistica" class="form-control" id="update_especialidad_artistica" placeholder="Especialidad Artistica">
                        <option value="">Especialidad Artistica</option>
                        <?php while($row_update = $run_query_update->fetch_assoc()) { ?>
                            <option value="<?php echo $row_update['id_esp_artistica']; ?>"><?php echo $row_update['nombre_especialidad_artistica']; ?></option>
                        <?php } ?>
                    </select>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="UpdateEspecialidadDetails()">Aceptar</button> <input type="hidden" id="hidden_user_id_esp">
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
