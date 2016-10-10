<?php
session_start();
include 'serv.php';
if(isset($_SESSION['user'])){
	echo '<script>window.location="inicio.php"; </script>';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>logeo de pagina</title>
	      
	<meta name="viewport" content="width=device-width; user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/reset.css">
     </head>
	
	<body>
		
		<div class="contain">
			<div id="close" class="close"></div>
		</div>
		 
		 <div class="containmain">
		 	<div  class="center">
		 		<div class="profile">
		 		</div>
		 		<form role="form" method="post" action="validar.php">
		  <input type="text" class="from-control" name="user" placeholder="Usuario" required><br><br>
		  <input type="password" class="from-control" name="pw" placeholder="Introduce su contraseña" required><br><br>	
		   <input type="submit" class="btn btn-default btn-block btn-lg" name="login" value="Entrar">
	         </form>
		 		
		 	</div>
		 </div>
		 
		
				
		
	
		
		
	
	
	
	<script src="js/jquery.js"</script>
    	<script src="js/bootstrap.min.js"</script>
	</body>
</html>