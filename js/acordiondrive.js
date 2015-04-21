$(function(){
  //Ocultamos el contenido de todos los bloques <div class="block">
   $('.block').hide();
  //Definimos qué sucede cuando hacemos clic sobre el título li
   $('.acordion ul li a').on('click',function(){
    //Si el contenido del bloque ya está visible,
     if($(this).next().is(':visible')){
      //entonces se ocultará deslizándose hacia arriba.
        $(this).next().slideUp();
        $(this).css('background', 'url('+'../img/icon_plus.png'+') 96% no-repeat');
     }
     //Si el contenido del bloque está oculto,
     if($(this).next().is(':hidden')){
        //ocultamos el contenido del bloque que se encuentre visible deslizándolo hacia arriba y
        $('.acordion ul li a').next().slideUp();
        //mostramos el contenido del bloque seleccionado deslizándolo hacia abajo.
        $(this).next().slideDown();
        $(this).css('background', 'url('+'../img/icon_minus.png'+') 96% no-repeat');

    }
   });
 })