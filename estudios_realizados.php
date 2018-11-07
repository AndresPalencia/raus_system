<div class="modal fade" id="estudios_realizados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p align="justify">
                </form>
                <div class="form-row">
                    <input type="text" name="estudio" class="form-control" id="estudio" placeholder="Estudio" />
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="institucion" class="form-control" id="institucion" placeholder="Institucion"  />
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="duracion" class="form-control" id="duracion" placeholder="Duracion"  />
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="anio" class="form-control" id="anio" placeholder="Año"  />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="addRecordEstudio()">Aceptar</button>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="update_estudios_realizados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="form-row">
                    <input type="text" name="update_estudio" class="form-control" id="update_estudio" placeholder="Estudio"/>
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="update_institucion" class="form-control" id="update_institucion" placeholder="Institucion" />
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="update_duracion" class="form-control" id="update_duracion" placeholder="Duracion" />
                </div>
                <br>
                <div class="form-row">
                    <input type="text" name="update_anio" class="form-control" id="update_anio" placeholder="Año" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="UpdateEstudioDetails()">Aceptar</button>
                    <input type="hidden" id="hidden_user_id">
                </div>
                </p>
            </div>
        </div>
    </div>
</div>

