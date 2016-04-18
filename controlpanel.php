<?php 
	// inicio de la sesion e incluimos las librerias de conexion con al base de datos
	session_start();
	include("librerias.php");
	$_SESSION["login"]=0;
	$_SESSION["conex"]=0;
?>
<!DOCTYPE html>
<html>
    <head>
		<!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>
    </head>
   
	<body>
		<div class="container" align=center>
			<img  style =" width: 100%;" src="img/banner.png" >
			
			<div class="row">
				<div class="col-md-4" ></div>
				<div class="col-md-4" style="background-color:White">					
				<form method="post" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
					<div class="row">
						<div class="col-md-6" >
							<label for="login"><b>User</b></label><!-- campo de nombre de usuario-->
							<br><label for="password"><b>Password</b></label><!-- campo del password del usuario-->
						</div>
						<div class="col-md-6" >
								<input type="text" name="User" id="login" placeholder="User">						
							<br><input type="password" name="pass" id="password" placeholder="Password"> 
						</div>
						
						
								
						<a href="mail.php" target= \"_blank\" style="color:#4c8bff">
						  <label for="remember">Recover Password</label>
						</a>
							 
						<!-- aqui se valida el nombre y contraseña del administrador-->				
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
						<br>
						<button type="submit" name="ingresar" value="Ingresar" class="btn btn-primary" >Sign In</button><!-- boton de iniciar sesion-->
					</div>
				</form>
				</div>
				<div class="col-md-4" ></div>

			</div>
		</div>
	</body>
	<!-- pie de pagina  -->
	<footer>
		<?php pie();?>
	</footer>
</html>