// READ records
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

// Add Record
function addRecordEstudio() {
    
    // get values
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
        // close the popup
        $("#estudios_realizados").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#estudio").val("");
        $("#institucion").val("");
        $("#duracion").val("");
        $("#anio").val("");
        alertify.success("Estudio Realizado Agregado!");
    });
    } // Add record
    
  
}


function DeleteEstudio(id) {

        $.post("ajax/estudios_artista/deleteEstudio.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

}

function GetEstudioDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);

    $.post("ajax/estudios_artista/readEstudioDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_estudio").val(user.estudio);
            $("#update_institucion").val(user.institucion);
            $("#update_duracion").val(user.duracion);
            $("#update_anio").val(user.anio);
        }
    );
    // Open modal popup
    $("#update_estudios_realizados").modal("show");
}

function UpdateEstudioDetails() {
    // get values
    var estudio = $("#update_estudio").val();
    var institucion = $("#update_institucion").val();
    var duracion = $("#update_duracion").val();
    var anio = $("#update_anio").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();


    // Update the details by requesting to the server using ajax
    $.post("ajax/estudios_artista/updateEstudioDetails.php", {
            id: id,
            estudio: estudio,
            institucion: institucion,
            duracion: duracion,
            anio: anio
        },
        function (data, status) {
            // hide modal popup
            $("#update_estudios_realizados").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});

function addRecordTitulo() {
    
    // get values
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
        // close the popup
        $("#titulos_obtenidos").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#titulo").val("");
        $("#institucion_titulo").val("");
        $("anio_titulo").val("");
        alertify.success("Titulo Obtenido Agregado!");
    });
    } // Add record
    
  
}

function GetTituloDetails(id_titulo) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id_titulo").val(id_titulo);

    $.post("ajax/titulos_artista/readTituloDetails.php", {
            id_titulo: id_titulo
        },
        function (data, status) {
            // PARSE json data
            var titulo = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_titulo").val(titulo.titulo);
            $("#update_institucion_titulo").val(titulo.institucion);
            $("#update_anio_titulo").val(titulo.anio);
        }
    );
    // Open modal popup
    $("#update_titulos_obtenidos").modal("show");
}

function UpdateTituloDetails() {
    // get values
    var titulo = $("#update_titulo").val();
    var institucion_titulo = $("#update_institucion_titulo").val();
    var anio_titulo = $("#update_anio_titulo").val();

    // get hidden field value
    var id = $("#hidden_user_id_titulo").val();


    // Update the details by requesting to the server using ajax
    $.post("ajax/titulos_artista/updateTituloDetails.php", {
            id: id,
            titulo: titulo,
            institucion_titulo: institucion_titulo,
            anio_titulo: anio_titulo
        },
        function (data, status) {
            // hide modal popup
            $("#update_titulos_obtenidos").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function DeleteTitulo(id) {

        $.post("ajax/titulos_artista/deleteTitulo.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

}

function addRecordAgrupacion() {
    
    // get values
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
        // close the popup
        $("#agrupaciones").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#grupo").val("");
        $("#duracion_agru").val("");
        $("#anio_agru").val("");
        $("#lugar").val("");
        alertify.success("Agrupacion Agregada!");
    });
    } // Add record
    
  
}

function GetAgrupacionDetails(id_agrupacion) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id_agru").val(id_agrupacion);

    $.post("ajax/agrupaciones_artista/readAgrupacionDetails.php", {
            id_agrupacion: id_agrupacion
        },
        function (data, status) {
            // PARSE json data
            var agrupacion = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_grupo").val(agrupacion.grupo);
            $("#update_duracion_agru").val(agrupacion.duracion);
            $("#update_anio_agru").val(agrupacion.anio);
            $("#update_lugar").val(agrupacion.lugar);
            
        }
    );
    // Open modal popup
    $("#update_agrupaciones").modal("show");
}

function UpdateAgrupacionDetails() {
    // get values
    var grupo = $("#update_grupo").val();
    var duracion_agru = $("#update_duracion_agru").val();
    var anio_agru = $("#update_anio_agru").val();
    var lugar = $("#update_lugar").val();

    // get hidden field value
    var id = $("#hidden_user_id_agru").val();


    // Update the details by requesting to the server using ajax
    $.post("ajax/agrupaciones_artista/updateAgrupacionDetails.php", {
            id: id,
            grupo: grupo,
            duracion_agru: duracion_agru,
            anio_agru: anio_agru,
            lugar : lugar
        },
        function (data, status) {
            // hide modal popup
            $("#update_agrupaciones").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function DeleteAgrupacion(id) {

        $.post("ajax/agrupaciones_artista/deleteAgrupacion.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

}

function addRecordEstudio() {
    
    // get values
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
        // close the popup
        $("#estudios_realizados").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#estudio").val("");
        $("#institucion").val("");
        $("#duracion").val("");
        $("#anio").val("");
        alertify.success("Estudio Realizado Agregado!");
    });
    } // Add record
    
  
}

function addRecordEspecialidad() {
    
    // get values
    var especialidad_artistica = $("#especialidad_artistica").val();

    if (especialidad_artistica=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/especialidades_artista/addRecord.php", {
        especialidad_artistica: especialidad_artistica
    }, function (data, status) {
        // close the popup
        $("#esp_artisticas").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#especialidad_artistica").val("");
        alertify.success("Especialidad Artistica Agregada!");
    });
    } // Add record
    
  
}

function GetEspecialidadDetails(id_esp) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id_esp").val(id_esp);

    $.post("ajax/especialidades_artista/readEspecialidadDetails.php", {
            id_esp: id_esp
        },
        function (data, status) {
            // PARSE json data
            var especialidad = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_especialidad_artistica").val(especialidad.esp_artisticas_id_esp_artistica);

        }
    );
    // Open modal popup
    $("#update_esp_artisticas").modal("show");
}

function UpdateEspecialidadDetails() {
    // get values
    var update_especialidad_artistica = $("#update_especialidad_artistica").val();

    // get hidden field value
    var id = $("#hidden_user_id_esp").val();


    // Update the details by requesting to the server using ajax
    $.post("ajax/especialidades_artista/updateEspecialidadDetails.php", {
            id: id,
            update_especialidad_artistica: update_especialidad_artistica
        },
        function (data, status) {
            // hide modal popup
            $("#update_esp_artisticas").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function DeleteEspecialidad(id) {

        $.post("ajax/especialidades_artista/deleteEspecialidad.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

}

function addRecordRed() {
    
    // get values
    var redes_sociales = $("#redes_sociales").val();
    var url = $("#url").val();

    if (redes_sociales=="0" || url=="" ) {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/redes_artista/addRecord.php", {
        redes_sociales: redes_sociales,
        url: url
    }, function (data, status) {
        // close the popup
        $("#redes_sociales_popup").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#redes_sociales").val("");
        $("#url").val("");
        alertify.success("Red Social Agregada!");
    });
    } // Add record
    
  
}

function GetRedDetails(id_red) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id_red").val(id_red);

    $.post("ajax/redes_artista/readRedDetails.php", {
            id_red: id_red
        },
        function (data, status) {
            // PARSE json data
            var red = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_redes_sociales").val(red.redes_sociales_id_redes_sociales);
            $("#update_url").val(red.url_red_social);

        }
    );
    // Open modal popup
    $("#update_redes_sociales_popup").modal("show");
}

function UpdateRedDetails() {
    // get values
    var update_redes_sociales = $("#update_redes_sociales").val();
    var update_url = $("#update_url").val();

    // get hidden field value
    var id = $("#hidden_user_id_red").val();


    // Update the details by requesting to the server using ajax
    $.post("ajax/redes_artista/updateRedDetails.php", {
            id: id,
            update_redes_sociales: update_redes_sociales,
            update_url: update_url
        },
        function (data, status) {
            // hide modal popup
            $("#update_redes_sociales_popup").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function DeleteRed(id) {

        $.post("ajax/redes_artista/deleteRed.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

}

function addRecordRed_Ente() {
    
    // get values
    var redes_sociales = $("#redes_sociales").val();
    var url = $("#url").val();

    if (redes_sociales=="0" || url=="" ) {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("ajax/redes_ente/addRecord.php", {
        redes_sociales: redes_sociales,
        url: url
    }, function (data, status) {
        // close the popup
        $("#redes_sociales_popup").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#redes_sociales").val("");
        $("#url").val("");
        alertify.success("Red Social Agregada!");
    });
    } // Add record
    
  
}

function GetRed_EnteDetails(id_red) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id_red").val(id_red);

    $.post("ajax/redes_ente/readRedDetails.php", {
            id_red: id_red
        },
        function (data, status) {
            // PARSE json data
            var red = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_redes_sociales").val(red.redes_sociales_id_redes_sociales);
            $("#update_url").val(red.url_red_social);

        }
    );
    // Open modal popup
    $("#update_redes_sociales_popup").modal("show");
}

function UpdateRedDetails_Ente() {
    // get values
    var update_redes_sociales = $("#update_redes_sociales").val();
    var update_url = $("#update_url").val();

    // get hidden field value
    var id = $("#hidden_user_id_red").val();


    // Update the details by requesting to the server using ajax
    $.post("ajax/redes_ente/updateRedDetails.php", {
            id: id,
            update_redes_sociales: update_redes_sociales,
            update_url: update_url
        },
        function (data, status) {
            // hide modal popup
            $("#update_redes_sociales_popup").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function Delete_EnteRed(id) {

        $.post("ajax/redes_ente/deleteRed.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );

}