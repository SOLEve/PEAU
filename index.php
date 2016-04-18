<!DOCTYPE html>
<html>
	<head>
		 <!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>		
	</head>
	
	<body style="height: 100%;">
		<div class="container">
			<img class="col-md-12" style =" width: 100%;" src="img/banner.png" > <!-- imagen del banner-->
			<?php  menuinicial("#","active","contact.php","inactive"); ?><!-- menu principal -->
			
			<!--  menu acordeon -->
			<div class="panel-group" id="accordion" >
				<!--  menu acordeon tools y products-->
				<?php menu_acordeon("touch.php","procaps.php","software.php","calculator.php","triangle.php","units.php","lens.php"); ?>
				
				<div class="panel panel-default">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000">
					<div class="panel-heading">
						<h4 class="panel-title">
							<strong>INFORMATION</strong>
						</h4>
					</div>
					</a>
					<div id="collapseThree" class="panel-collapse collapse" style="background-color:black">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12" style="-webkit-border-radius: 15px 15px 5px;background-image:url('img/881.png');">
									<div class="texto3">
										<p  id="estiloparticular">Here at <b>PEAU PRODUCTIONS</b> we know that the human touch is often the most common way you interact
												whit your technology. Our company embodies this interaction by providing an ever - expanding
												line of hardware and software for you to complete your interactive project. Whether you are
												converting a television into a giant multitouch screen with our <b>Infrared Touch Frame Overlays</b>
												, buying ready-to-use <b>Capacitive Touch Televisions</b> for your business, or researching
												<b>Inexpensive DIY Parts</b> to complete your school project, we have everything you need in our
												<b> Store </b>. We've even expanded our product line to include <b> GoPro Camera Accessories</b>
												 and various <b> 3D Printed Parts </b>. Please feel free to use our Contact form to reach out to use
												  with questions about your project or to obtain a quote.
												  <br>
												 Browse our <b>YOUTUBE</b> channel for tutorial videos on how simple building your own interactive setup can be.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="panel panel-default" >
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000">
					<div class="panel-heading">
						<h4 class="panel-title">
							<strong>VIDEOS</strong>
						</h4>
					</div>
					</a>
					<div id="collapseFour" class="panel-collapse collapse" style="background-color:black">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="video-container">
										<iframe src="http://www.youtube.com/embed/mR_RqHJSxuI" width="800" height="450" frameborder="0"></iframe>
									</div>
								</div>
								<div class="col-md-6">
									<div class="video-container">
										<iframe src="http://www.youtube.com/embed/Rba0t5In9Hw" width="800" height="450" frameborder="0"></iframe>
									</div>
								</div>
							</div>			
							<div class="row">
								<div class="col-md-6">
									<div class="video-container">
										<iframe src="http://www.youtube.com/embed/Wp6CcdMdq-E" width="800" height="450" frameborder="0"></iframe>
									</div>
								</div>
								<div class="col-md-6">
									<div class="video-container">
										<iframe src="http://www.youtube.com/embed/bq4qtwSpevo" width="800" height="450" frameborder="0"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>				
		</div>		
		
   </body>   
   <!--  pie de pagina -->
	<footer>
		<?php pie();?>
	</footer>
</html>
