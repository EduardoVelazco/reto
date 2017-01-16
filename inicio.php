
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
  <script src ="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
</head>

<body> 
	<body style="background:#448AFF">
	<a href="logout.php"><button id="boton4" class="btn btn-danger  btn-lg">Salir</button></a>
 <img style= "-webkit-user-select: none" src="http://192.168.0.102:8081/">
 	<div class="row">
  <div class="col-md-9">
  	<div class="col-md-3">
      <button id="botonAdelante" class="btn btn-success btn-lg ">Izquierda</button></div>
      <div class="col-md-3">
      	<button id="botonAdelante" class="btn btn-success btn-lg ">Avanzar</button></div>
      
      <button id="botonAdelante" class="btn btn-success btn-lg ">Derecha</button>
      
      <div class="row">
      	<div class="col-md-3"></div>
      	<div class="col-md-3">
      <button id="botonAdelante" class="btn btn-success btn-lg ">Detener</button>
      <button id="botonAdelante" class="btn btn-success btn-lg ">Atras</button>
      </div>
       
      
      
     </div>
      <div class="col-md-6">
        <div class="col -md-4">
	<input type="text" class="form-control"></div>
	<button id="sensorIzquierda" class="btn btn-default btn-lg">Sensor izquierdo</button>
<div class="col -md-4">
	<input type="text" class="form-control"></div>
	<button id="sensorIzquierda" class="btn btn-default btn-lg">Sensor Frontal</button>
      <div class="col -md-4">
	<input type="text" class="form-control"></div>
	<button id="sensorIzquierda" class="btn btn-default btn-lg">Sensor Derecho</button>
      </div>
    </div>
 
  </div>
  
	 <script>
		 	$('#botonAdelante').click(function(){
		 		$.ajax({
		 			url:'php/adelante.php'
		 			type:'POST'
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
		 		type:'POST'
		 		});
		 	});
		 	$('#botonIzquierda').click(function(){
		 		$.ajax({
		 			url:'php/izquierda.php'
		 		type:'POST'
		 		});
		 	});
		 	$('#botonDerecha').click(function(){
		 		$.ajax({
		 			url:'php/derecha.php'
		 		type:'POST'
		 		});
		 	});
		 </script>
			
 	   <script src="js/jquery.js"</script>
    	<script src="js/bootstrap.min.js"</script>
    		

    </body>
</html>
