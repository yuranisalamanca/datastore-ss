
function cambiarTab(tabs,tabActual){
	//id del tab actual (tab2)
	tabActual=document.getElementById(tabActual.id);
	//tabs
	listaTabs=document.getElementById(tabs.id);
	//id del contenido actual
	ctabActual = document.getElementById('c'+tabActual.id);
	//contenidotabs (id del div que tiene los contenidos)
	listaCTabs = document.getElementById('contenido'+tabs.id);
	i=0;

	while (typeof listaCTabs.getElementsByTagName('div')[i] != 'undefined'){
        $(document).ready(function(){
            $(listaCTabs.getElementsByTagName('div')[i]).css('display','none');
            $(listaTabs.getElementsByTagName('li')[i]).css('background','');
            $(listaTabs.getElementsByTagName('li')[i]).css('padding-bottom','');
        });
	i += 1;
    }
    $(document).ready(function(){
        // Muestra el contenido de la pestaña pasada como parametro a la funcion,
        // cambia el color de la pestaña y aumenta el padding para que tape el  
        // borde superior del contenido que esta juesto debajo y se vea de este 
        // modo que esta seleccionada.
        $(ctabActual).css('display','');
        $(tabActual).css('background','rgba(133, 167, 150, 0.35)');
        $(tabActual).css('padding-bottom','2px'); 
    });
};



$(document).ready(function() {

    //Validacion de la funcion CambiarContraseña
    $('.cuerpo').on('keyup', '#passwordcheck', function(event){
        var passwordNew = $('#passwordnew').val();
        var passwordCheck = $('#passwordcheck').val();
        if(passwordnew.value != passwordcheck.value)
        {
            $("#passwordcheck").css("background-color","#ebccd1" ); //El input se pone rojo
            return false;
        }
        else if(passwordnew.value == passwordcheck.value)
        {
            $("#passwordcheck").css("background-color","#d6f9b6"); //El input se ponen verde
            $("#mensaje3").fadeOut();
            return false;
        }
    });

    /*Evento para cerrar o desaparecer el div de excepciones*/
    $('.cuerpo').on('click','#close-exception', function(){
       $('#msg-errores').hide(10);
    });

    /*Funcion agregar cuenta de un usuario*/
    $('.cuerpo').on('click', '#btn-crear-cuenta', function(){
        if (document.getElementById( "close-exception" )) {
            $('#msg-errores').text('');
            $('#btn-close-exception').remove();
        }
        
        var url = 'usuario/createuser';
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: $('#form-crear-usuario').serialize(),
            success: function(data){
                if(data.estado == 'success'){
                    //window.location.href = "";
                    alert(data.mensaje);
                }else if(data.estado == 'error'){
                    $('#msg-errores').css('display','');
                    $('#msg-errores').attr({'class':"alert alert-danger alert-dismissible"});
                    $('#msg-errores').append($('<button>').
                        attr("type","button").
                        attr("class","close").
                        attr("data-dismiss", "alert").
                        attr("aria-label", "Close").
                        attr("id", "btn-close-exception"));

                    $('#btn-close-exception').append($('<span>&times;</span>').
                        attr("aria-hidden", "true").
                        attr("id","close-exception"));

                    $('#msg-errores').append(data.errores);
                }
            }
        });
        return false;
    });

     //Funcion Recuperar
    $('.cuerpo').on('click', '#btn-recuperar', function(){
        var url = 'usuario/recuperar';
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: $('#form-recuperar-contrasenia').serialize(),
            success: function(data){
                if(data.estado == 'success'){
                    window.location.href = "";
                    alert(data.mensaje);
                }else if(data.estado == 'error'){
                    $('#msg-errores').css('display','');
                    $('#msg-errores').attr({'class':"alert alert-danger alert-dismissible"});
                    $('#msg-errores').append($('<button>').
                        attr("type","button").
                        attr("class","close").
                        attr("data-dismiss", "alert").
                        attr("aria-label", "Close").
                        attr("id", "btn-close-exception"));

                    $('#btn-close-exception').append($('<span>&times;</span>').
                        attr("aria-hidden", "true").
                        attr("id","close-exception"));

                    $('#msg-errores').append(data.errores);
                }
            } 
        });
        return false;
    });
     

     /*Funcion Cambiar contrasenia*/
    $('.cuerpo').on('click', '#btn-cambiar-contrasenia', function(){

        if (document.getElementById( "close-exception" )) {
            $('#msg-errores').text('');
            $('#btn-close-exception').remove();
        }

        var url = 'usuario/cambiar';
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: $('#form-cambiar-contrasenia').serialize(),
            success: function(data){

                if(data.estado=="error"){
                    $('#msg-errores').css('display','');
                    $('#msg-errores').attr({'class':"alert alert-danger alert-dismissible"});
                    $('#msg-errores').append($('<button>').
                        attr("type","button").
                        attr("class","close").
                        attr("data-dismiss", "alert").
                        attr("aria-label", "Close").
                        attr("id", "btn-close-exception"));

                    $('#btn-close-exception').append($('<span>&times;</span>').
                        attr("aria-hidden", "true").
                        attr("id","close-exception"));

                    $('#msg-errores').append(data.errores);

                }else if(data.estado=="success"){
                    window.location.href = "";
                    alert(data.mensaje);
                }
            }
        });
        return false;
    });

    //Prueba Funcion Validar Dropbox 

    $('.cuerpo').on( 'click', '#validarDropbox', function () {
        //alert("Hola");
        var url = 'usuario/imprimirDropbox';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            success: function(data){

                alert("Sera redirigido a una pagina para validar Dropbox con nuestra aplicación");
                window.open(data.url);
                
                //window.location.href = "";
                

        }
    });
        return false;
    });

    $('#registrar').click(function(event) {
        event.preventDefault();
        link('welcome/cuenta', '.cuerpo');
    });

    $('#recuperar').click(function(event){
        event.preventDefault();
        link('welcome/recuperar', '.cuerpo');
    });

    $('#cambiar').click(function(event){
        event.preventDefault();
        link('welcome/cambiar', '.cuerpo');
    });




}
);

    function link(url, update) {
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'html',
        success: function(respuesta)
        {
            $(update).html(respuesta);
            
        }
    });}


