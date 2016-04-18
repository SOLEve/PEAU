<!DOCTYPE html>
<html>
   <head>
   <!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
   </head>
   <body style="background-color:black"> 
		<div class="container" >
            <img class="col-md-12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","#","active"); ?><!-- menu principal -->
			
			 <!-- formulario de contacto-->
				<div align=center class="col-md-12"style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
					<form method="post"  action="#" >
						<fieldset>
							<legend>Contact</legend>
							<b>Peau Productions LLC</b><br>
							<p>10855 Sorrento Valley Road<br>
											Suite 204<br>
											San Diego, CA 92121 USA<br>
											Toll Free: +1 (877) 949-1684<br>
											Local: +1 (619) 630-7328<br>							
											Email: <a href="mailto:info@peauproductions.com" style="color:#4c8bff;">info@peauproductions.com</a>
											<br><br>
											<b>Nolan Ramseyer</b><br>
											Title: CEO<br>
											Email: <a href="mailto:nolan@peauproductions.com" style="color:#4c8bff;">nolan@peauproductions.com</a><br>
								<br>
								<b>Wali Sekandar</b><br>
								Title: Logistics Coordinator<br>
								Email: <a href="mailto:wali@peauproductions.com" style="color:#4c8bff;">wali@peauproductions.com</a><br>
							</p>
						</fieldset>
					</form>
				</div>

		</div>		
   </body>  
   
<!-- pie de pagina -->   
	<footer>
		<?php pie();?>
	</footer>
</html>
