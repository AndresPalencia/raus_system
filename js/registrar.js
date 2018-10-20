
function validaCampos(){

    var tipo_user = $("#cbx_tipo_user").val();
    var name = $("#name").val();
    var lastname = $("#lastname").val();
    var id_doc = $("#id_doc").val();
    var pass = $("#pass").val();
    var repass = $("#repass").val();
    var estado = $("#cbx_estado").val();
    var municipio = $("#cbx_municipio").val();
    var parroquia = $("#cbx_parroquia").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var val_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/


//validamos campos

    if($.trim(tipo_user) == ""){
        alertify.error('Seleccione Tipo de Usuario');
        document.getElementById("cbx_tipo_user").focus();
        return false;
    }

    if($.trim(name) == ""){
        alertify.error('Escriba su Nombre');
        document.getElementById("name").focus();
        return false;
    }

    if($.trim(lastname) == ""){
        alertify.error('Escriba su Apellido');
        document.getElementById("lastname").focus();
        return false;
    }

    if($.trim(id_doc) == ""){
        alertify.error('Escriba su C.I/RIF');
        document.getElementById("id_doc").focus();
        return false;
    }

    if($.trim(pass).length <8 ){
        alertify.error('La contraseña debe ser mayor de 8 caracteres');
        document.getElementById("pass").focus();
        return false;
    }
    if($.trim(pass) != "" && pass !=repass){
        alertify.error('Las contraseñas no coinciden');
        document.getElementById("repass").focus();
        return false;
    }

    if($.trim(estado) == ""){
        alertify.error('Seleccione Estado');
        document.getElementById("cbx_estado").focus();
        return false;
    }
    if($.trim(municipio) == ""){
        alertify.error('Seleccione Municipio');
        document.getElementById("cbx_municipio").focus();
        return false;
    }

    if($.trim(parroquia) == ""){
        alertify.error('Seleccione Parroquia');
        document.getElementById("cbx_parroquia").focus();
        return false;
    }
    //alert(municipio+parroquia);

    if($.trim(phone) == ""){
        alertify.error('Escriba su Numero de Telefono');
        document.getElementById("phone").focus();
        return false;
    }

    if($.trim(email) == ""){
        alertify.error('Escriba su Correo Electronico');
        document.getElementById("email").focus();
        return false;
    }
    if(!val_email.test(email)) {
        alertify.error('El contenido del campo email no es válido.');
        document.getElementById("email").focus();

        return false
    }
}

function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
        return true;
    }
    return false;
}