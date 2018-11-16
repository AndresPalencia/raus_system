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
                window.open('gestion_ente.php','_self');
            }else if (html=='artista_suscripcion') {
                window.open('registrar_suscripcion_artista.php','_self');
            } else if (html=='artista') {
                window.open('gestion_artista.php','_self');
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

$("#cambio_btn").click(function(){
   
    user= $('#user_cambio').val();
    pass= $('#pass').val();
    repass = $("#repass").val();
    pregunta=$('#pregunta').val();
    respuesta = $("#respuesta").val();
    contra_vali="0";
    val_pass = /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/
   
   if($.trim(pass).length <8 ){
        contra_vali="0";
    }
    else if(!val_pass.test(pass)) {
        contra_vali="0";
    }
    else if($.trim(repass).length <1 ){
       contra_vali="0";
    }
    else if($.trim(pass) != "" && pass !=repass){
        contra_vali="0";
    }else{
        contra_vali="1";
    }
    
 
    $.ajax({
        type: "POST",
        url: "functions/cambiar_contrasenia.php",
        data: "user="+user+
            "&pass="+pass+
            "&pregunta="+pregunta+
            "&contra_vali="+contra_vali+
            "&respuesta="+respuesta,
        success: function(html){
            
            if($.trim(user) == ""){
                alertify.error('Ingrese CI o N° unico de registro');
                document.getElementById("user_cambio").focus();
                return false;
            }
            if(html=='usuario_incorrecto')
            {
                alertify.error("La CI o el N° unico de registro no son correctos");
                document.getElementById("user_cambio").focus();
                exit();
            }
            else if (html=='pregunta') {
                alertify.error("Ingrese su pregunta de seguridad");
                document.getElementById("pregunta").focus();
                exit();
            }
            else if (html=='respuesta') {
                alertify.error("Ingrese la respuesta a su pregunta de seguridad");
                document.getElementById("respuesta").focus();
                exit();
            }
            else if (html=='pregunta_incorrecta') {
                alertify.error("La pregunta o respuesta de seguridad son incorrectas");
                document.getElementById("pregunta").focus();
                exit();
            }else if(html=='done')
            {
                alertify.success("Contraseña Cambiada Exitosamente.");
                window.open('index.php','_self');
            }
            if($.trim(pregunta) == ""){
                alertify.error('Ingrese una pregunta de seguridad');
                document.getElementById("pregunta").focus();
                return false;
            }
            if($.trim(respuesta) == ""){
                alertify.error('Ingrese la respuesta a la pregunta de seguridad');
                document.getElementById("repuesta").focus();
                return false;
            }
            if($.trim(pass).length <8 ){
                alertify.error('La contraseña debe ser mayor de 8 caracteres');
                document.getElementById("pass").focus();
                return false;
            }
            if(!val_pass.test(pass)) {
                alertify.error('Minimo Una Letra Mayuscula, Un Numero, Un Caracter Especial (#$%/@=&)');
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
            
            
        
        }
    });
    return false;
});
