<div class="modal fade" id="titulos_obtenidos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="institucion_titulo" class="form-control" id="institucion_titulo" placeholder="Instituci&oacute;n"  />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="anio_titulo" class="form-control" id="anio_titulo" placeholder="Año" />
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="addRecordTitulo()">Aceptar</button>
                    </div>
                </p>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="update_titulos_obtenidos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="text" name="update_titulo" class="form-control" id="update_titulo" placeholder="Titulo" />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="update_institucion_titulo" class="form-control" id="update_institucion_titulo" placeholder="Instituci&oacute;n"  />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="update_anio_titulo" class="form-control" id="update_anio_titulo" placeholder="Año" />
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="UpdateTituloDetails()">Aceptar</button>
                    </div>  <input type="hidden" id="hidden_user_id_titulo">
                </p>
            </div>

        </div>
    </div>
</div>

