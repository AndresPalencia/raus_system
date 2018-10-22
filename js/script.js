// Cargar informacion en tablas

function readRecords() {
    $.get("ajax/estudios_artista/readRecords.php", {}, function (data, status) {
        $(".estudios_realizados_content").html(data);
    });
    $.get("ajax/titulos_artista/readRecords.php", {}, function (data, status) {
        $(".titulos_obtenidos_content").html(data);
    });
    $.get("ajax/agrupaciones_artista/readRecords.php", {}, function (data, status) {
        $(".agrupaciones_content").html(data);
    });
    $.get("ajax/especialidades_artista/readRecords.php", {}, function (data, status) {
        $(".especialidades_content").html(data);
    });
    $.get("ajax/redes_artista/readRecords.php", {}, function (data, status) {
        $(".redes_content").html(data);
    });
    $.get("ajax/redes_ente/readRecords.php", {}, function (data, status) {
        $(".redes_sociales_entes_content").html(data);
    });
}

// Añadir record Estudio
function addRecordEstudio() {

    // obtiene valores del formulario de estudios realizados
    var estudio = $("#estudio").val();
    var institucion = $("#institucion").val();
    var duracion = $("#duracion").val();
    var anio = $("#anio").val();

    if (estudio=="" || institucion=="" || duracion=="" || anio=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/estudios_artista/addRecord.php", {
            estudio: estudio,
            institucion: institucion,
            duracion: duracion,
            anio: anio
        }, function (data, status) {
            // cierra el popup
            $("#estudios_realizados").modal("hide");

            // carga informacion en la tabla otra vez
            readRecords();

            // Limpia los campos del formulario estudios realizados del popup
            $("#estudio").val("");
            $("#institucion").val("");
            $("#duracion").val("");
            $("#anio").val("");
            alertify.success("Estudio Realizado Agregado!");
        });
    }
}

// Elimina un estudio realizado

function DeleteEstudio(id) {
    $.post("ajax/estudios_artista/deleteEstudio.php", {
            id: id
        },
        function (data, status) {
            // Recarga la informacion en las tablas usando readRecords();
            readRecords();
        }
    );
}

function GetEstudioDetails(id) {
    // Carga la informacion de un estudio en el formulario para su futura edicion
    $("#hidden_user_id").val(id);
    $.post("ajax/estudios_artista/readEstudioDetails.php", {
            id: id
        },
        function (data, status) {
            var user = JSON.parse(data);
            $("#update_estudio").val(user.estudio);
            $("#update_institucion").val(user.institucion);
            $("#update_duracion").val(user.duracion);
            $("#update_anio").val(user.anio);
        }
    );
    // Abre el popup
    $("#update_estudios_realizados").modal("show");
}

function UpdateEstudioDetails() {
    var estudio = $("#update_estudio").val();
    var institucion = $("#update_institucion").val();
    var duracion = $("#update_duracion").val();
    var anio = $("#update_anio").val();
    var id = $("#hidden_user_id").val();

    $.post("ajax/estudios_artista/updateEstudioDetails.php", {
            id: id,
            estudio: estudio,
            institucion: institucion,
            duracion: duracion,
            anio: anio
        },
        function (data, status) {
            $("#update_estudios_realizados").modal("hide");
            readRecords();
        }
    );
}

$(document).ready(function () {
    readRecords(); // llama la funcion al cargar la pagina
});

function addRecordTitulo() {
    var titulo = $("#titulo").val();
    var institucion_titulo= $("#institucion_titulo").val();
    var anio_titulo = $("#anio_titulo").val();
    if (titulo=="" || institucion_titulo=="" || anio_titulo=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/titulos_artista/addRecord.php", {
            titulo: titulo,
            institucion_titulo: institucion_titulo,
            anio_titulo: anio_titulo
        }, function (data, status) {
            $("#titulos_obtenidos").modal("hide");
            readRecords();
            $("#titulo").val("");
            $("#institucion_titulo").val("");
            $("anio_titulo").val("");
            alertify.success("Titulo Obtenido Agregado!");
        });
    }
}

function GetTituloDetails(id_titulo) {
    $("#hidden_user_id_titulo").val(id_titulo);
    $.post("ajax/titulos_artista/readTituloDetails.php", {
            id_titulo: id_titulo
        },
        function (data, status) {
            var titulo = JSON.parse(data);
            $("#update_titulo").val(titulo.titulo);
            $("#update_institucion_titulo").val(titulo.institucion);
            $("#update_anio_titulo").val(titulo.anio);
        }
    );
    $("#update_titulos_obtenidos").modal("show");
}

function UpdateTituloDetails() {
    var titulo = $("#update_titulo").val();
    var institucion_titulo = $("#update_institucion_titulo").val();
    var anio_titulo = $("#update_anio_titulo").val();
    var id = $("#hidden_user_id_titulo").val();

    $.post("ajax/titulos_artista/updateTituloDetails.php", {
            id: id,
            titulo: titulo,
            institucion_titulo: institucion_titulo,
            anio_titulo: anio_titulo
        },
        function (data, status) {
            $("#update_titulos_obtenidos").modal("hide");
            readRecords();
        }
    );
}

function DeleteTitulo(id) {
    $.post("ajax/titulos_artista/deleteTitulo.php", {
            id: id
        },
        function (data, status) {
            readRecords();
        }
    );

}

function addRecordAgrupacion() {
    var grupo = $("#grupo").val();
    var duracion_agru = $("#duracion_agru").val();
    var anio_agru = $("#anio_agru").val();
    var lugar = $("#lugar").val();

    if (grupo=="" || duracion_agru=="" || anio_agru=="" || lugar=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/agrupaciones_artista/addRecord.php", {
            grupo: grupo,
            duracion_agru: duracion_agru,
            anio_agru: anio_agru,
            lugar: lugar
        }, function (data, status) {
            $("#agrupaciones").modal("hide");
            readRecords();
            $("#grupo").val("");
            $("#duracion_agru").val("");
            $("#anio_agru").val("");
            $("#lugar").val("");
            alertify.success("Agrupacion Agregada!");
        });
    }
}

function GetAgrupacionDetails(id_agrupacion) {
    $("#hidden_user_id_agru").val(id_agrupacion);
    $.post("ajax/agrupaciones_artista/readAgrupacionDetails.php", {
            id_agrupacion: id_agrupacion
        },
        function (data, status) {
            var agrupacion = JSON.parse(data);
            $("#update_grupo").val(agrupacion.grupo);
            $("#update_duracion_agru").val(agrupacion.duracion);
            $("#update_anio_agru").val(agrupacion.anio);
            $("#update_lugar").val(agrupacion.lugar);
        }
    );
    $("#update_agrupaciones").modal("show");
}

function UpdateAgrupacionDetails() {
    var grupo = $("#update_grupo").val();
    var duracion_agru = $("#update_duracion_agru").val();
    var anio_agru = $("#update_anio_agru").val();
    var lugar = $("#update_lugar").val();
    var id = $("#hidden_user_id_agru").val();
    $.post("ajax/agrupaciones_artista/updateAgrupacionDetails.php", {
            id: id,
            grupo: grupo,
            duracion_agru: duracion_agru,
            anio_agru: anio_agru,
            lugar : lugar
        },
        function (data, status) {
            $("#update_agrupaciones").modal("hide");
            readRecords();
        }
    );
}

function DeleteAgrupacion(id) {
    $.post("ajax/agrupaciones_artista/deleteAgrupacion.php", {
            id: id
        },
        function (data, status) {
            readRecords();
        }
    );

}

function addRecordEstudio() {
    var estudio = $("#estudio").val();
    var institucion = $("#institucion").val();
    var duracion = $("#duracion").val();
    var anio = $("#anio").val();
    if (estudio=="" || institucion=="" || duracion=="" || anio=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/estudios_artista/addRecord.php", {
            estudio: estudio,
            institucion: institucion,
            duracion: duracion,
            anio: anio
        }, function (data, status) {
            $("#estudios_realizados").modal("hide");
            readRecords();
            $("#estudio").val("");
            $("#institucion").val("");
            $("#duracion").val("");
            $("#anio").val("");
            alertify.success("Estudio Realizado Agregado!");
        });
    }

}

function addRecordEspecialidad() {
    var especialidad_artistica = $("#especialidad_artistica").val();
    if (especialidad_artistica=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/especialidades_artista/addRecord.php", {
            especialidad_artistica: especialidad_artistica
        }, function (data, status) {
            $("#esp_artisticas").modal("hide");
            readRecords();
            $("#especialidad_artistica").val("");
            alertify.success("Especialidad Artistica Agregada!");
        });
    }
}

function GetEspecialidadDetails(id_esp) {
    $("#hidden_user_id_esp").val(id_esp);
    $.post("ajax/especialidades_artista/readEspecialidadDetails.php", {
            id_esp: id_esp
        },
        function (data, status) {
            var especialidad = JSON.parse(data);
            $("#update_especialidad_artistica").val(especialidad.esp_artisticas_id_esp_artistica);
        }
    );
    $("#update_esp_artisticas").modal("show");
}

function UpdateEspecialidadDetails() {
    var update_especialidad_artistica = $("#update_especialidad_artistica").val();
    var id = $("#hidden_user_id_esp").val();
    $.post("ajax/especialidades_artista/updateEspecialidadDetails.php", {
            id: id,
            update_especialidad_artistica: update_especialidad_artistica
        },
        function (data, status) {
            $("#update_esp_artisticas").modal("hide");
            readRecords();
        }
    );
}

function DeleteEspecialidad(id) {
    $.post("ajax/especialidades_artista/deleteEspecialidad.php", {
            id: id
        },
        function (data, status) {
            readRecords();
        }
    );
}

function addRecordRed() {
   var redes_sociales = $("#redes_sociales").val();
    var url = $("#url").val();
    if (redes_sociales=="0" || url=="" ) {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/redes_artista/addRecord.php", {
            redes_sociales: redes_sociales,
            url: url
        }, function (data, status) {
            $("#redes_sociales_popup").modal("hide");
            readRecords();
            $("#redes_sociales").val("");
            $("#url").val("");
            alertify.success("Red Social Agregada!");
        });
    }
}

function GetRedDetails(id_red) {
    $("#hidden_user_id_red").val(id_red);

    $.post("ajax/redes_artista/readRedDetails.php", {
            id_red: id_red
        },
        function (data, status) {
            var red = JSON.parse(data);
            $("#update_redes_sociales").val(red.redes_sociales_id_redes_sociales);
            $("#update_url").val(red.url_red_social);
        }
    );
    $("#update_redes_sociales_popup").modal("show");
}

function UpdateRedDetails() {
    var update_redes_sociales = $("#update_redes_sociales").val();
    var update_url = $("#update_url").val();
    var id = $("#hidden_user_id_red").val();

   $.post("ajax/redes_artista/updateRedDetails.php", {
            id: id,
            update_redes_sociales: update_redes_sociales,
            update_url: update_url
        },
        function (data, status) {
            $("#update_redes_sociales_popup").modal("hide");
            readRecords();
        }
    );
}

function DeleteRed(id) {
    $.post("ajax/redes_artista/deleteRed.php", {
            id: id
        },
        function (data, status) {
            readRecords();
        }
    );

}

function addRecordRed_Ente() {
    var redes_sociales = $("#redes_sociales").val();
    var url = $("#url").val();
    if (redes_sociales=="0" || url=="" ) {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/redes_ente/addRecord.php", {
            redes_sociales: redes_sociales,
            url: url
        }, function (data, status) {
            $("#redes_sociales_popup").modal("hide");
            readRecords();
            $("#redes_sociales").val("");
            $("#url").val("");
            alertify.success("Red Social Agregada!");
        });
    }
}

function GetRed_EnteDetails(id_red) {
    $("#hidden_user_id_red").val(id_red);
    $.post("ajax/redes_ente/readRedDetails.php", {
            id_red: id_red
        },
        function (data, status) {
            var red = JSON.parse(data);
            $("#update_redes_sociales").val(red.redes_sociales_id_redes_sociales);
            $("#update_url").val(red.url_red_social);
        }
    );
   $("#update_redes_sociales_popup").modal("show");
}

function UpdateRedDetails_Ente() {
    var update_redes_sociales = $("#update_redes_sociales").val();
    var update_url = $("#update_url").val();
    var id = $("#hidden_user_id_red").val();
    $.post("ajax/redes_ente/updateRedDetails.php", {
            id: id,
            update_redes_sociales: update_redes_sociales,
            update_url: update_url
        },
        function (data, status) {
            $("#update_redes_sociales_popup").modal("hide");
            readRecords();
        }
    );
}

function Delete_EnteRed(id) {
    $.post("ajax/redes_ente/deleteRed.php", {
            id: id
        },
        function (data, status) {
            readRecords();
        }
    );
}