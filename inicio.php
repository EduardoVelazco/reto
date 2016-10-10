
<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])){
	echo "";
	
}else{
	echo'<script>window.location="index.php";</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  
  <title>inicio</title>
  <meta name="description" content="">
  <meta name="author" content="Eduardo">
  <meta name="viewport" content="width=device-width; user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/inicio.js">  </script>
</head>

<body> 
	<div class="contain">	
		
	<div class="salir">
	<a href="logout.php"><button id="boton4" class="btn btn-danger  btn-lg">Salir</button></a>		
	</div>
	<div class="cam">
		<button id="cam" class="btn- btn-default btn-lg">Camara</button>
	</div>
		<div class="sensorDerecho">
			<button id="sensorDerecho " class="btn btn-default btn-lg">Activar sensor Derecho</button>
		</div>
		<div class="sensorIzquierda">
			<button id="sensorIzquierda" class="btn btn-default btn-lg">Activar sensor izquierdo</button>
		</div>
		
	</div>
	<div class="contenedor2">
		
	<div class="adelante">
		<button id="botonAdelante" class="btn btn-success btn-lg ">Avanzar</button>
	</div>
	<div class="detener">
		<button id="botoIzquierda" class="btn btn-success btn-lg">Izquierda</button>
		<button id="botonDetener" class="btn btn-danger btn-lg">Detener</button>
	 <button id="botonDerecha" class="btn btn-success btn-lg">Derecha</button>
	
	</div>
	<div class="atras">
		 <button id="botonAtras" class="btn btn-success btn-lg">Atras</button>
	</div>
	
	
	</div>
	

	 <script>
		 	$('#botonAdelante').click(function(){
		 		$.ajax({
		 			url:'php/adelante.php'
		 		});
		 	});
		 	$('#botonAtras').click(function(){
		 		$.ajax({
		 			url:'php/atras.php'
		 		type:'POST',
		 		});
		 	});
		 	$('#botonDetener').click(function(){
		 		$.ajax({
		 			url:'php/detener.php'
		 		});
		 	});
		 	$('#botonIzquierda').click(function(){
		 		$.ajax({
		 			url:'php/izquierda.php'
		 		});
		 	});
		 	$('#botonDerecha').click(function(){
		 		$.ajax({
		 			url:'php/derecha.php'
		 		});
		 	});
		 </script>
			
 	
  
  
  
    <script src="js/jquery.js"</script>
    	<script src="js/bootstrap.min.js"</script>
    		

    </body>
</html>
