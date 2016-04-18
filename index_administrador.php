<?php
	//aqui se inicia sesion
	session_start();
	// se incluye el archivo de la conexion de la base de datos
	include("librerias.php");
	//se valida si la seion esta activa
	if(isset($_SESSION["conex"]))
	{
		if($_SESSION["conex"]==0)
		{ 
		echo '<script language="JavaScript" type="text/javascript">
			document.location= "controlpanel.php";
			</script>';
		}  
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>

    </head>
   
	<body  >
		<div class="container" align=center>
		    <img  style =" width: 100%;" src="img/banner.png" >
			<!-- botones para crear registros de productos y sus caracteristicas-->
			<div class="row">
				<div class="col-md-2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='crearproducto.php'" >Product</button>
					</p>
				</div>
				<div class="col-md-2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Frame'" >Frames</button>
					</p>
				</div>
				<div class="col-md-2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Image'" >Imagery</button>
					</p>
				</div>
				<div class="col-md-2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Included'" >Included</button>
					</p>
				</div>
				<div class="col-md-2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Touch Points'" >Touch Points</button>
					</p>
				</div>
				<div class="col-md-2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Pdf'" >Pdf</button>
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Description'" >Description</button>
					</p>
				</div>
				<div class="col-md-3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Operating System'" >Operating System</button>
					</p>
				</div>
				<div class="col-md-3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Touch'" >Touch</button>
					</p>
				</div>
				<div class="col-md-3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Video'" >Videos</button>
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-3">
				<button class="btn btn-large btn-block btn btn-warning" type="button" onClick="location.href='controlpanel.php'" >Sign Out</button><!-- boton de cerrar sesion-->
				</div>
			</div>
			
		</div>
	</body>
	<!-- pie de pagina -->
	<footer>
		<?php pie();?>
	</footer>
</html>