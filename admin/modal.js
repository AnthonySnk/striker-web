$('.galeria__img').click(function(e){
  var img = e.target.src;

  var id = $(this).attr('id'); //tomo el id del las imagenes
  var entero = parseInt(id); //tranformo el id en entero para poder trabajarlo mas adelante

  var modal ='<div class="modal" id="modal"><div class="modal__mas" id="modal__mas"><</div>  <img src="'+ img + '" class="modal__img"><div class="modal__boton" id="modal__boton">X</div><div class="modal__menos" id="modal__menos">></div></div>';             
  $('body').append(modal);
  $('#modal__boton').click(function(){
    $('#modal').remove();	
  })

//mover a la siguiente imagen
$('#modal__menos').click(function(){ 

	if (entero < 13 ) { //el 10 es para que se detenga al llegar a la ultima imagen que es la numero 10

		entero = entero + 1; //le sumo 1 al id, ya que la siguiente imagen es el siguiente numero
		var imgN = $('#'+entero).attr('src'); //asigno el SRC de la siguiente imagen a imgN
	  	
		$('.modal__img').attr('src', imgN); //cambio el src de la imagen del modal por el nuevo src
}

});


$('#modal__mas').click(function(){
	if (entero > 0) {

		entero = entero - 1;
		var imgN = $('#'+entero).attr('src');
  	
		$('.modal__img').attr('src', imgN);
	}

});



});


$(document).keyup(function(e){
  if (e.which==27) {
 
   $('#modal').remove()
  }
})

