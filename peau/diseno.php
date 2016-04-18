<?php
function cabecera (){ 

echo"<!-- Código HTML de la cabecera -->
		<title>PEAU</title>
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		
		<!-- Css-->
		<link rel='stylesheet' type='text/css' href='css/mediaq.css'>		
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>		
		<link rel='stylesheet' type='text/css' href='css/bootstrap-theme.css'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>		
		<link rel='stylesheet' type='text/css' href='css/bootstrap-theme.min.css'>
	
		<!-- Javascript-->
		
		<script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		
		<link href='img/icono.ico' type='image/x-icon' rel='shortcut icon' />   
		
		<style>
		.texto3 
		{
			 margin: 20px; 
			 padding: 10px; 
		}
		
		#estilofooter
		{
		color: #000;
		font-size: 10px;
		-webkit-border-radius: 15px 15px 5px;
		background-image:url(\"img/881.png\");
		margin-left: 0px;text-align:center;
		}
		</style>
		"; 

}

function menuinicial($menu1,$act1,$menu2,$act2)
{
			echo"<div class='row'>
						<ul class='nav nav-tabs'>
							<li class='$act1'>
								<a href='$menu1'>Home</a>
							</li>
							<li class='$act2'>
								<a href=\"$menu2\">Contact Us</a>
							</li>
						</ul>
				</div>";
}

function menu_acordeon($touch,$procaps,$software,$calculator,$triangle,$units,$lens)
{		
	echo"
			<div class='panel panel-default' style='background-color:black'>
				<div class='panel-heading'>
					<h4 class='panel-title'>					
						<a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'><strong>PRODUCTS</strong></a>							
					</h4>
				</div>
				
				<div id='collapseOne' class='panel-collapse collapse'>
					<div class='panel-body' align='center'>
						<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$touch'\" >Infrared Touch Frame Overlays</button>
						<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$procaps'\" >Projected Capacitive Touch Film</button>
						<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$software'\" >Software Request</button>
					</div>
				</div>				
			</div>
			<div class='panel panel-default' style='background-color:black'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'><strong>TOOLS</strong></a>
						</h4>
					</div>
							
					<div id='collapseTwo' class='panel-collapse collapse'>
						<div class='panel-body' align='center'>
							<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$calculator'\" >Calculator</button>
							<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$triangle'\" >Triangle Solver</button>
							<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$units'\" >Unit Converter</button>
							<button class='btn btn-default navbar-btn btn-primary' type='button' value='nombre' onClick=\"location.href='$lens'\" >Lens Calculator</button>
						</div>
					</div>
			</div>
		";
}
 
function pie (){ 

echo"<!-- Codigo HTML del pié de página --> 
		<div class='container'>
			<p  class='span12' id='estilofooter'>
			<b>Peau Productions © 2014<br><a style='color:#0B3861;' href='http://www.vista-technology-development.com/'>Powered by Vista Technology Development.
			<br><img id='idimagen' src='img/logo.jpg' ></a></b></p>
		</div>
		
		";

} 
?> 