var timeout;


window.onload = function(){ 
  contadorSesion(); //aqui cargamos la funcion de inactividad
} 

function contadorSesion() {
    setTimeout(function () {
        $.confirm({
            title: 'Alerta de Inactividad!',
            content: 'La Sesión esta a punto de expirar.',
            autoClose: 'expirar|10000',
            type: 'orange',
            buttons: {
                expirar: {
                    text: 'Expirar',
                    btnClass: 'btn-warning',
                    action: function () {
                        salir();
                    }
                },
                permanecer: function () {
                    contadorSesion(); //reinicia el conteo
                
                }
            }
        });
    }, 10000);
}

function salir() {
    window.location.href = "logout.php"; //esta función te saca
}
    