<div class="modal fade" id="agrupaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
             
                    <div class="form-row">
                        <input type="text" name="grupo" class="form-control" id="grupo" placeholder="Grupo"/>
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="duracion_agru" class="form-control" id="duracion_agru" placeholder="Duraci&oacute;n" />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="anio_agru" class="form-control" id="anio_agru" placeholder="Año" />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="lugar" class="form-control" id="lugar" placeholder="Lugar"/>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="addRecordAgrupacion()">Aceptar</button>
                    </div>

                </p>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="update_agrupaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="form-row">
                        <input type="text" name="update_grupo" class="form-control" id="update_grupo" placeholder="Grupo" required/>
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="update_duracion_agru" class="form-control" id="update_duracion_agru" placeholder="Duraci&oacute;n" />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="update_anio_agru" class="form-control" id="update_anio_agru" placeholder="Año"/>
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="update_lugar" class="form-control" id="update_lugar" placeholder="Lugar" />
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="UpdateAgrupacionDetails()">Aceptar</button>
                        <input type="hidden" id="hidden_user_id_agru">
                    </div>

                </form>
                    
                </p>
            </div>

        </div>
    </div>
</div>