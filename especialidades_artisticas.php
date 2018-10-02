<?php

$select_especialidad="select * from esp_artisticas";
$run_query=mysqli_query($dbcon,$select_especialidad);
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
                <form action="functions/agregar_especialidades_artisticas.php" id="form_esp_art" name="form_esp_art" method="post">

                    <select name="especialidad_artistica" class="form-control" id="especialidad_artistica" placeholder="Especialidad Artistica" required>
                        <option value="">Especialidad Artistica</option>
                        <?php while($row = $run_query->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_esp_artistica']; ?>"><?php echo $row['nombre_especialidad_artistica']; ?></option>
                        <?php } ?>
                    </select>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" name="form_esp_art">Aceptar</button>
                    </div>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>
