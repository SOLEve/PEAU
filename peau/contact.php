<!DOCTYPE html>
<html>
   <head>
		<?php 
			include("diseno.php"); 
			cabecera();
		?>		
		
		<script type="text/javascript">    
			function direccion()
			{
				location.href='direccion';
			}
		</script>	
		
   </head>
   <body style="background-color:black"> 
		<div class="container" >
            <img class="span12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","#","active"); ?>
			
			<div class="panel-group" id="accordion">
				<?php menu_acordeon("touch.php","procaps.php","software.php","calculator.php","triangle.php","units.php","lens.php"); ?>
				
				<div class="panel panel-default"style="background-color:black">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong>CONTACT</strong></a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							<div align=center class="span10"style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
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
					</div>
				</div>	  
			
			</div>
		</div>		
   </body>   
	<footer>
		<?php pie();?>
	</footer>
</html>
