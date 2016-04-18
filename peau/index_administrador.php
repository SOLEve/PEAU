<?php 
  session_start();
//error_reporting(0);
  include("librerias.php");
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
				<div class="span2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='crearproducto.php'" >Product</button>
					</p>
				</div>
				<div class="span2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Frame'" >Frames</button>
					</p>
				</div>
				<div class="span2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Image'" >Imagery</button>
					</p>
				</div>
				<div class="span2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Included'" >Included</button>
					</p>
				</div>
				<div class="span2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Touch Points'" >Touch Points</button>
					</p>
				</div>
				<div class="span2">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Pdf'" >Pdf</button>
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="span3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Description'" >Description</button>
					</p>
				</div>
				<div class="span3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Operating System'" >Operating System</button>
					</p>
				</div>
				<div class="span3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Touch'" >Touch</button>
					</p>
				</div>
				<div class="span3">
					<p>
					  <button class="btn btn-large btn-block btn-primary" type="button" value="nombre" onClick="location.href='registrarfilas.php?id=Video'" >Videos</button>
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="span4"></div>
				<div class="span3">
				<button class="btn btn-large btn-block btn btn-warning" type="button" onClick="location.href='controlpanel.php'" >Sign Out</button>
				</div>
			</div>
			
		</div>
	</body>
	<footer>
		<div class="container">
			<p  class="span12" id="estiloparticular"style="-webkit-border-radius: 15px 15px 5px;background-image:url('img/881.png');margin-left: 0px;text-align:right;"><b>Peau Productions © 2014</b></p>
		</div>
   </footer>
</html>