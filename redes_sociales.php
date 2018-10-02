<?php

$select_redes_sociales="select * from redes_sociales";
$run_query=mysqli_query($dbcon,$select_redes_sociales);
?>


<div class="modal fade" id="redes_sociales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="functions/agregar_redes_sociales.php" id="form_red_soc" name="form_red_soc" method="post">

                   <div>
                       <select name="redes_sociales" class="form-control" id="redes_sociales" placeholder="Redes Sociales" required>
                           <option value="">--- Redes Sociales ---</option>
                           <?php while($row = $run_query->fetch_assoc()) { ?>
                               <option value="<?php echo $row['id_redes_sociales']; ?>"><?php echo $row['red_social']; ?></option>
                           <?php } ?>
                       </select>
                   </div>
                    <br>
                    <div class="form-row">
                        <textarea rows="5" name="url" class="form-control" id="url" placeholder="URL" required/></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" name="form_red_soc">Aceptar</button>
                    </div>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>