$("#phone").inputmask({"mask": "999-9999"});
$(document).ready(function(){
    $("#cbx_estado").change(function () {
        $('#cbx_parroquia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        $("#cbx_estado option:selected").each(function () {
            id_estado = $(this).val();
            $.post("includes/municipios.php", { id_estado: id_estado }, function(data){
                $("#cbx_municipio").html(data);
            });
        });
    })
});
$(document).ready(function(){
    $("#cbx_municipio").change(function () {
        $("#cbx_municipio option:selected").each(function () {
            id_municipio = $(this).val();
            $.post("includes/parroquias.php", { id_municipio: id_municipio }, function(data){
                $("#cbx_parroquia").html(data);
            });
        });
    })
});

$("#login").click(function(){
    username=$("#user").val();
    password=$("#password").val();
    $.ajax({
        type: "POST",
        url: "login.php",
        data: "user="+username+"&password="+password,
        success: function(html){
            if(html=='ente_suscripcion')
            {
                window.open('registrar_suscripcion_ente.php','_self');
            }else if(html=='ente'){
                window.open('raus.php','_self');
            }else if (html=='artista_suscripcion') {
                window.open('registrar_suscripcion_artista.php','_self');
            } else if (html=='artista') {
                window.open('raus.php','_self');
            }else
            {
                alertify.error("Alguno de sus datos son incorrectos.");
            }
        },
        beforeSend:function()
        {
            $("#add_err").html("Cargando...")
        }
    });
    return false;
});

$("#registro_btn").click(function(){
    name=$('#name').val();
    lastname=$('#lastname').val();
    id_doc=$('#id_doc').val();
    pre_id_doc=$('#pre_id_doc').val();
    pass=$('#pass').val();
    repass = $("#repass").val();
    estado = $("#cbx_estado").val();
    municipio = $("#cbx_municipio").val();
    address=$('#address').val();
    phone=$('#phone').val();
    cod_tel=$('#cod_tel').val();
    email=$('#email').val();
    cbx_parroquia=$('#cbx_parroquia').val();
    cbx_tipo_user=$('#cbx_tipo_user').val();
    val_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    val_pass = /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/

    if($.trim(cbx_tipo_user) == ""){
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
        alertify.error('Escriba su C.I');
        document.getElementById("id_doc").focus();
        return false;
    }

    $.ajax({
        type: "POST",
        url: "functions/registrar.php",
        data: "name="+name+
            "&lastname="+lastname+
            "&id_doc="+id_doc+
            "&pre_id_doc="+pre_id_doc+
            "&pass="+pass+
            "&address="+address+
            "&phone="+phone+
            "&cod_tel="+cod_tel+
            "&email="+email+
            "&cbx_parroquia="+cbx_parroquia+
            "&cbx_tipo_user="+cbx_tipo_user,
        success: function(html){

            if(html=='email_repetido')
            {
                alertify.error("El email ya se encuentra en uso por otro usuario");
                document.getElementById("email").focus();
                exit();
            }else if(html=='doc_repetido'){
                alertify.error("El Documento de indentidad ya se encuentra en uso por otro usuario");
                document.getElementById("id_doc").focus();
                exit();
            }else if (html=='artista_suscripcion') {
                alertify.success("Usuario Registrado Existosamente.");
                window.open('registrar_suscripcion_artista.php','_self');
            }else if (html=='ente_suscripcion') {
                alertify.success("Usuario Registrado Existosamente.");
                window.open('registrar_suscripcion_ente.php','_self');
            }
            else if(html=='error')
            {
                alertify.error("Error al Registrar");
            }
            if($.trim(pass).length <8 ){
                alertify.error('La contraseña debe ser mayor de 8 caracteres');
                document.getElementById("pass").focus();
                return false;
            }
            if(!val_pass.test(pass)) {
                alertify.error('La contraseña debe contener al menos 1 mayuscula, 1 numero y un caracter especial (#$%/@=&).');
                document.getElementById("pass").focus();
                return false
            }
            if($.trim(repass).length <1 ){
                alertify.error('Repita su contraseña');
                document.getElementById("repass").focus();
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
            if($.trim(cbx_parroquia) == ""){
                alertify.error('Seleccione Parroquia');
                document.getElementById("cbx_parroquia").focus();
                return false;
            }
            if($.trim(address) == ""){
                alertify.error('Escriba su Direccion');
                document.getElementById("address").focus();
                return false;
            }
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
    });
    return false;
});