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

// READ records
function readRecords() {
    $.get("ajax/estudios_artista/readRecords.php", {}, function (data, status) {
        $(".estudios_realizados_content").html(data);
    });
}


function DeleteEstudio(id) {

        $.post("ajax/estudios_artista/deleteEstudio.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                  alert("hol");
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