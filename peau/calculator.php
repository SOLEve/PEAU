<!DOCTYPE html>
<html>
   <head>
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
		
   </head>
   
	<body> 
		<div class="container">
            <img class="span12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?>	

				<div class="panel-group" id="accordion">
					<?php menu_acordeon("touch.php","procaps.php","software.php","#","triangle.php","units.php","lens.php"); ?>
									
					<div class="panel panel-default" style='background-color:black'>
						<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong>CALCULATOR</strong></a>
							  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" align="center">
							<div class="panel-body">
								<div class="span4">
									<iframe width="95%" height="320" src="http://web2.0calc.es/widgets/minimal/" scrolling="no" style="border: 1px solid #silver; "> </iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	<script src="scripts/app.js" type="text/javascript"></script>
   </body>   
	<footer>
		<?php pie();?>
	</footer>
</html>
