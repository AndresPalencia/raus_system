<?php

$select_redes_sociales="select * from redes_sociales";
$run_query=mysqli_query($dbcon,$select_redes_sociales);
$run_query_update=mysqli_query($dbcon,$select_redes_sociales);
?>


<div class="modal fade" id="redes_sociales_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                   <div>
                       <select name="redes_sociales" class="form-control" id="redes_sociales" placeholder="Redes Sociales" >
                           <option value="0" active>--- Redes Sociales ---</option>
                           <?php while($row = $run_query->fetch_assoc()) { ?>
                               <option value="<?php echo $row['id_redes_sociales']; ?>"><?php echo $row['red_social']; ?></option>
                           <?php } ?>
                       </select>
                   </div>
                    <br>
                    <div class="form-row">
                        <textarea rows="5" name="url" class="form-control" id="url" placeholder="URL"/></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="addRecordRed_Ente()">Aceptar</button>
                    </div>

                </p>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="update_redes_sociales_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <form>
                    <div>
                       <select name="update_redes_sociales" class="form-control" id="update_redes_sociales" placeholder="Redes Sociales">
                           <option value="0" active>--- Redes Sociales ---</option>
                           <?php while($row_update = $run_query_update->fetch_assoc()) { ?>
                               <option value="<?php echo $row_update['id_redes_sociales']; ?>"><?php echo $row_update['red_social']; ?></option>
                           <?php } ?>
                       </select>
                   </div>
                    <br>
                    <div class="form-row">
                        <textarea rows="5" name="update_url" class="form-control" id="update_url" placeholder="URL"/></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="UpdateRedDetails_Ente()">Aceptar</button> 
                        <input type="hidden" id="hidden_user_id_red">
                    </div>

                  </form>
                   
                </p>
            </div>

        </div>
    </div>
</div>