
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
    $('.listabarraprincipal').on('click', '.link_cuenta', function(event) {
        if ($('.active').length) {
            $('.link_cuenta').removeClass('active');
        }

        $(this).addClass('active');
        $('.link_cuenta a').css('color','#85A796');
    });

    $('.cuerpo').on('click', '#infoDrive', function(event) {
        event.preventDefault();
        link('welcome/drive', '.cuerpoCuenta');
        $('.link_cuenta a').css('color','#036975');
        $(this).css('color','#85A796');

    });
    $('.cuerpo').on('click', '#infoDropbox', function(event) {
        event.preventDefault();
        link('welcome/dropbox', '.cuerpoCuenta');
        $('.link_cuenta a').css('color','#036975');
        $(this).css('color','#85A796');
    });
    $('.cuerpo').on('click', '#infoMega', function(event) {
        event.preventDefault();
        link('welcome/mega', '.cuerpoCuenta');
        $('.link_cuenta a').css('color','#036975');
        $(this).css('color','#85A796');
    });
    $('.cuerpo').on('click', '#info', function(event) {
        event.preventDefault();
        link('welcome/general', '.cuerpoCuenta');
        $('.link_cuenta a').css('color','#036975');
        $(this).css('color','#85A796');
    });
    //Validacion CambiarContraseña
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

    /*Funcion Cambiar contrasenia*/
    $('.cuerpo').on('click', '#btn-cambiar-contrasenia', function(){
        var url = 'usuario/cambiar';
        console.log(url);
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: $('#form-cambiar-contrasenia').serialize(),
            success: function(data){

                if(data.estado=="error"){
                    $('#msg-errores').append(data.errores);
                }else if(data.estado=="success"){
                    //DO ANOTHER THING
                }
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


