<div class="modal fade" id="solicitar_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Solicitar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p align="justify">
                </form>
                <div class="form-row">
                    <input type="text" name="lugar" class="form-control" id="lugar" placeholder="Lugar" />
                </div>
                <br>
                <div class="form-row">
                    <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha"  />
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="hora" class="form-control" id="hora" placeholder="Hora"  />
                </div>
                <br>
                <div class="form-row">
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="7" placeholder="Mensaje"></textarea>
                    
                </div>
                <br>
                <div class="form-row">
                    <input type="text" hidden name="id_usuario" class="form-control" id="id_usuario" value="<?php echo $id_usuario; ?>" />
                </div>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="solicitar()">Aceptar</button>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>