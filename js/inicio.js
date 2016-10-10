$(function(){
	  $("#boton1").click(function(){
		  $("contenedor2").fadeOut(300, function(){
			  $("contenedor1").fadeIn(300);
		  });
	  });

$("#boton2").click(function(){
	  $("contenedor1").fadeOut(300,function(){
		  $("contenedor2").fadeIn(300);
	  });
});
});