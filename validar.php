<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Validando...</title>	
	</head>
<body>
	<?php
	include 'serv.php';
	if(isset($_POST['login'])){
		$usuario=$_POST['user'];
		$pw=$_POST['pw'];
		$log=mysqli_query($enlace,"SELECT * FROM admin WHERE user='$usuario' AND pw='$pw'");
		if(mysqli_num_rows($log)>0){
			$row=mysqli_fetch_array($log);
			$_SESSION ["user"]=$row['user'];
			echo 'iniciando sesion para',$_SESSION['user'],'<p>';
			echo '<script>window.location="inicio.php"; </script>';
		}
		else {
			echo '<script>alert("Usuario o contraseña incorrectos.");</script>';
			echo'<script>window.location="index.php"; </script>';
		}
	}
	?>
	
</body>
</html>