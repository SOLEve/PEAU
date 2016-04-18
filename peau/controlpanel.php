<?php 
session_start();
  include("librerias.php");
  $_SESSION["login"]=0;
  $_SESSION["conex"]=0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>PEAU</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/mediaq.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

    </head>
   
	<body>
		<div class="container" align=center>
		    <div class="row">
				<img class="span12"src="img/banner.png" >
            </div>
			
			<div class="row">
			
				<div class="span4"></div>
					<form class="span4"method="post" action="" class="form-3" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
							<label for="login"><b>User</b></label>
							<input type="text" name="User" id="login" placeholder="User">

							<label for="password"><b>Password</b></label>
							<input type="password" name="pass" id="password" placeholder="Password"> 
							
							<a href="mail.php" target= \"_blank\" style="color:#4c8bff">
							  <label for="remember">Recover Password</label>
							</a>
						  
						  <?php
							if(isset($_POST["ingresar"]))
							{
							  $consulta="SELECT login FROM usuario WHERE login='".$_POST["User"]."' AND clave='".$_POST["pass"]."'";
							  $res=consultar1($consulta);
							  $fila=mysqli_fetch_row($res);
							  if(isset($fila[0]))
								{
								$_SESSION['login']=$fila[0];
								$_SESSION["conex"]=1;
								validar();
								}else
								  {
								  $_SESSION["conex"]=0;
								  echo 'USUARIO O CLAVE INCORRECTA';
								  }
							}
						  ?>
						<button type="submit" name="ingresar" value="Ingresar" class="btn btn-primary" >Sign In</button>
					</form>
			</div>
		</div>
	</body>
	<footer>
		<div class="container">
			<p  class="span12" id="estiloparticular"style="-webkit-border-radius: 15px 15px 5px;background-image:url('img/881.png');margin-left: 0px;text-align:right;"><b>Peau Productions © 2014</b></p>
		</div>
   </footer>
</html>