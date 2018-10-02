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
                <form action="functions/agregar_agrupacion.php" id="form_agru" name="form_agru" method="post">
                    <div class="form-row">
                        <input type="text" name="grupo" class="form-control" id="grupo" placeholder="Grupo" required/>
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="duracion" class="form-control" id="duracion" placeholder="Duraci&oacute;n" required />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="anio" class="form-control" id="anio" placeholder="Año" required />
                    </div>
                    <br>
                    <div class="form-row">
                        <input type="text" name="lugar" class="form-control" id="lugar" placeholder="Lugar" required/>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" name="form_agru">Aceptar</button>
                    </div>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>