<!DOCTYPE html>
<html>
   <head>
		<!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
		
		<script language="JavaScript" type="text/javascript">
			addEventListener('load',inicio,false);
		
			//funcion que detecta el cambio en el select
			function inicio()
			{
				document.getElementById('select2').addEventListener('change',cambioselect,false);
			}
		  
			//funcion que hace agrega o pone la opcion de distorsion dependiendo del lente seleccionado
			function cambioselect()
			{
				cadena = document.getElementById('select2').value;
				if(cadena=="0")
				{
					document.getElementById("optionsRadiosF").hidden= true;
					document.getElementById("optionsRadiosR").hidden= true;
					document.getElementById("labelR").style.display = 'none';
					document.getElementById("labelF").style.display = 'none';
					document.getElementById("labelT").style.display = 'none';
				}
				if(cadena=="1")
				{
					document.getElementById("optionsRadiosF").hidden= false;
					document.getElementById("optionsRadiosR").hidden= false;
					document.getElementById("labelR").style.display = 'inherit';
					document.getElementById("labelF").style.display = 'inherit';
					document.getElementById("labelT").style.display = 'inherit';
				}
				
			}
			
			//funcion que valdia solo numeros en los campos numericos
			function justNumbers(e)
			{
				var keynum = window.event ? window.event.keyCode : e.which;
				if ((keynum == 8) || (keynum == 46))
				return true;			 
				return /\d/.test(String.fromCharCode(keynum));
			}
			

			//funciones que muestran los resultados del calculo sin recargar la pagina
			$(document).ready(function() 
			{
				$().ajaxStart(function() 
				{
					$('#loading').show();
					$('#result').hide();
				}).ajaxStop(function() 
				{
					$('#loading').hide();
					$('#result').fadeIn('slow');
				});
				$('#form, #fat, #fo3').submit(function() 
				{
					$.ajax(
					{
						type: 'POST',
						url: $(this).attr('action'),
						data: $(this).serialize(),
						success: function(data) 
						{
							$('#result').html(data);

						}
					})
					
					return false;
				}); 
			}) 

			$(document).ready(function() {
				$().ajaxStart(function() {
					$('#loading').show();
					$('#result1').hide();
				}).ajaxStop(function() {
					$('#loading').hide();
					$('#result1').fadeIn('slow');
				});
				$('#form, #fat, #fo4').submit(function() {
					$.ajax({
						type: 'POST',
						url: $(this).attr('action'),
						data: $(this).serialize(),
						success: function(data) {
							$('#result1').html(data);

						}
					})
					
					return false;
				}); 
			})	

			$(document).ready(function() {
				$().ajaxStart(function() {
					$('#loading').show();
					$('#result2').hide();
				}).ajaxStop(function() {
					$('#loading').hide();
					$('#result2').fadeIn('slow');
				});
				$('#form, #fat, #fo5').submit(function() {
					$.ajax({
						type: 'POST',
						url: $(this).attr('action'),
						data: $(this).serialize(),
						success: function(data) {
							$('#result2').html(data);

						}
					})
					
					return false;
				}); 
			}) 
			
		</script>	
   
   </head>
   <body> 
		<div class="container">
            <img class="col-md-12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?>	<!-- menu principal-->
			
			<div class="row">
				<!-- menu acordeon-->
				<div class="panel-group" id="accordion">
					
					<!-- option FIND OUT WHAT LENS TO USE-->
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000">
						<div class="panel-heading">
							<h4 class="panel-title">
								<strong>FIND OUT WHAT LENS TO USE</strong>
							 </h4>
						</div>
						</a>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-4" align=center></div>
								<div class="col-md-4" align=center>
									<p  id="estiloparticular"><b>LENS CALCULATOR</b></p>
									<form method="post"  action="envio.php" id="fo3" name="fo3" class="target">						
										
										<div id="result"></div>
										<br>
										<p>Please Choose Your Camera</p>
										<select name="select1">
										<option value="1">GoPro Hero 3</option>
										<option value="0">Playstation Eye</option>
										
										</select>
										<br><br>
										<p>Please enter your image size Horizontal x Vertical</p>
										
										<label class="radio" align=left>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="H" checked>
										  Horizontal
										</label>
										<label class="radio" align=left>
										  <input type="radio" name="optionsRadios" id="optionsRadios2" value="V">
										  Vertical
										</label>
										
										<b>Size: </b> 
										<input name="inputHV" onkeypress="return justNumbers(event);" type="text" placeholder="number" class="col-md-12">
										<br><br><p>Distance from image to camera: </p> 
										<input name="inputD" onkeypress="return justNumbers(event);" type="text" placeholder="number" class="col-md-12">
										<input name="hiden" type="hidden" value="1">
										<br><br>
										<p>Click on the section below to calculate!</p>	
										<button type="submit" name="calcular1" class="btn btn-primary" >Calculate</button>																			
									</form>
								</div>	
							</div>
						</div>
					</div>
					
					<!-- option FIND LENS HORIZONTAL FOV-->
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000">
							<div class="panel-heading">
								<h4 class="panel-title">
									<strong>FIND LENS HORIZONTAL FOV</strong>
								 </h4>
							</div>
						</a>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-4" align=center></div>
								<div class="col-md-4" align=center>
									<p  id="estiloparticular"><b>HORIZONTAL FIELD OF VIEW CALCULATOR</b></p>
									<form method="post"  action="envio.php" id="fo4" name="fo4" class="target1">
										<div id="result1"></div>
										<br>
										<p>Please Choose Your Camera</p>
										<select name="select2" id="select2">
										<option value="1">GoPro Hero 3</option>
										<option value="0">Playstation Eye</option>										
										</select>
										<br><br>
										
										<p id="labelT">Please choose the type of distortion</p>
										<label id="labelF" class="radio" align=left>
										  <input type="radio" name="optionsRadios" id="optionsRadiosF" value="F" checked>
										  Fisheye
										</label>
										<label id="labelR" class="radio" align=left>
										  <input type="radio" name="optionsRadios" id="optionsRadiosR" value="R">
										  Rectilinear (No-Distortion)
										</label>
										
										<p>Please enter your lens focal length in mm</p>
										<b>Lens focal: </b><br>
										<input name="inputLF" onkeypress="return justNumbers(event);" type="text" placeholder="number" class="col-md-12">
										<input name="hiden" type="hidden" value="2">
										<br><br><p>Click on the section below to calculate!</p>	
										<button type="submit" name="calcular2" class="btn btn-primary" >Calculate</button>																				
									</form>
								</div>	
							</div>
						</div>
					</div>
					
					<!-- option CALCULATE THE DISTANCE TO AN OBJECT-->
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style="color:#000000">
							<div class="panel-heading">
								<h4 class="panel-title">
									<strong>CALCULATE THE DISTANCE TO AN OBJECT</strong>
								 </h4>
							</div>
						</a>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-4" align=center></div>
								<div class="col-md-4" align=center>
									<p  id="estiloparticular"><b>DISTANCE CALCULATOR</b></p>
									<form method="post"  action="envio.php" id="fo5" name="fo5" class="target2">
										
										<div id="result2"></div>
										
										<br>
										
										<p>Please Choose Your Camera</p>
										<select name="select3">
										<option value="1">GoPro Hero 3</option>
										<option value="0">Playstation Eye</option>										
										</select>
										
										<br><br>
										
										<p>Please enter your lens focal length in mm</p>
										<b>Lens Focal: </b><br>
										<input name="inputLF" onkeypress="return justNumbers(event);" type="text" placeholder="number" class="col-md-12">
										<br><br>
										
										<p>Please enter your image size Horizontal x Vertical</p>										
										<label class="radio" align=left>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="H" checked>
										  Horizontal
										</label>
										<label class="radio" align=left>
										  <input type="radio" name="optionsRadios" id="optionsRadios2" value="V">
										  Vertical
										</label>
										
										<b>Size: </b><br>
										<input name="inputHV" onkeypress="return justNumbers(event);" type="text" placeholder="number" class="col-md-12">
										<br><p>Result will be same units as image dimension units"</p>
										
										<input name="hiden" type="hidden" value="3">
										<br>
										<p>Click on the section below to calculate!</p>	
										<button type="submit" name="calcular3" class="btn btn-primary" >Calculate</button>
										</form>
								</div>	
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>	

   </body>   
   
   <!-- pie de pagina-->
	<footer>
		<?php pie();?>
	</footer>
</html>
