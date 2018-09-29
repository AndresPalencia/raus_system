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
                <p align="justify">
                <form action="functions/agregar_estudio_realizado.php" id="form_estudios" name="form_estudios" method="post">
                    <div class="form-row">
                            <input type="text" name="estudio" class="form-control" id="estudio" placeholder="Estudio" required/>
                    </div>
                    <br>
                    <div class="form-row">
                            <input type="text" name="institucion" class="form-control" id="institucion" placeholder="Instituci&oacute;n" required />
                    </div>
                    <br>
                    <div class="form-row">
                            <input type="text" name="duracion" class="form-control" id="duracion" placeholder="Duraci&oacute;n" required />
                    </div>
                    <br>
                    <div class="form-row">
                            <input type="text" name="anio" class="form-control" id="anio" placeholder="Año" required />
                    </div> <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" name="form_estudios">Aceptar</button>

                    </div>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>

