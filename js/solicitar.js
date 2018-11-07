function solicitar() {

    // Obtiene valores del formulario de estudios realizados
    var lugar = $("#lugar").val();
    var fecha = $("#fecha").val();
    var hora = $("#hora").val();
    var mensaje = $("#mensaje").val();
    var id_usuario = $("#id_usuario").val();

    if (lugar=="" || fecha=="" || hora=="" || mensaje=="") {
        alertify.error("Todos los campos son obligatorios!");
    } else{
        $.post("functions/solicitar.php", {
            lugar: lugar,
            fecha: fecha,
            hora: hora,
            mensaje: mensaje,
            id_usuario: id_usuario

        }, function (data, status) {
            // Cierra el popup
          
            $("#solicitar_popup").modal("hide");

            // Carga informacion en la tabla otra vez
            

            // Limpia los campos del formulario estudios realizados del popup
            $("#lugar").val("");
            $("#fecha").val("");
            $("#hora").val("");
            $("#mensaje").val("");
            $("#id_usuario").val("");
            alertify.success("Pauta Creada Exitosamente!");
           // window.open('gestion_artista.php','_self');
        });
    }
}