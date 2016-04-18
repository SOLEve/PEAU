<!DOCTYPE html>
<html>
   <head>
		<!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
		<link rel='stylesheet' type='text/css' href='css/triangle.css'>

		<script language="JavaScript" type="text/javascript">
			//funcion para validar solo numeros
			function justNumbers(e)
			{
				var keynum = window.event ? window.event.keyCode : e.which;
				if ((keynum == 8) || (keynum == 46))
				return true;
				return /\d/.test(String.fromCharCode(keynum));
			}
			
			//funciones para mostrar el resultado sin recargar la pagina
			$(document).ready(function() 
			{
				$().ajaxStart(function() 
				{
					$('#loading').show();
					$('#result1').hide();
				}).ajaxStop(function() 
					{
						$('#loading').hide();
						$('#result1').fadeIn('slow');
					});
				$('#form, #fat, #fo1').submit(function() 
				{
					$.ajax(
					{
						type: 'POST',
						url: $(this).attr('action'),
						data: $(this).serialize(),
						success: function(data) 
						{
							$('#result1').html(data);
						}
					})
					return false;
				}); 
			}) 

			$(document).ready(function() 
			{
				$().ajaxStart(function() 
				{
					$('#loading').show();
					$('#result2').hide();
				}).ajaxStop(function() 
				{
					$('#loading').hide();
					$('#result2').fadeIn('slow');
				});
				$('#form, #fat, #fo2').submit(function() 
				{
					$.ajax(
					{
						type: 'POST',
						url: $(this).attr('action'),
						data: $(this).serialize(),
						success: function(data) 
						{
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
			<div class="panel-group" id="accordion"><!-- menu acordeon-->					
					<!-- option triangle solver image ratio-->
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000">
						<div class="panel-heading">
							  <h4 class="panel-title">
								<strong>TRIANGLE SOLVER IMAGE RATIO</strong>
							  </h4>
							</div>
						</a>
							<div id="collapseThree" class="panel-collapse collapse in">
								
								<div class="panel-body">
										<img src="img/diagonal-monitor.jpg"  class="img-responsive" alt="Responsive image">
										<div id="hoveroutput" style="display: none; position: absolute; padding: 0.5em; background-color: rgb(255, 255, 255); border: 1px solid rgb(128, 192, 255); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;"></div>
								
									<br>
									<form method="post"  action="envio1.php" id="fo1" name="fo1">
										<p>Please Choose the Image Ratio</p>
										<select name="select0">
										<option value="1">Image Ratio 16:9</option>
										<option value="0">Image Ratio 4:3</option>										
										</select><br><br>
										
										<p>Please Choose the known value</p>
										<select name="select1">
										<option value="0">Image Diagonal (a)</option>
										<option value="1">Image Height (b)</option>
										<option value="2">Image Length (c)</option>
										</select><br><br>
										<input name="hiden" type="hidden" value="1">
										<p>Please enter the known value</p>
										<input name="inputV" onkeypress="return justNumbers(event);" type="text" placeholder="0" class="col-md-2" style="margin-left: 0px;">
										<br><button type="submit" name="calcular1" class="btn btn-primary" >Calculate</button>	
										<div id="result1"></div>
									</form>
								</div>
							</div>
					</div>
					
					<!-- option triangle solver custom-->
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"style="color:#000000">
							<div class="panel-heading">
								<h4 class="panel-title">
									<strong>TRIANGLE SOLVER CUSTOM</strong>
								</h4>
							</div>
						</a>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<img src="img/labelled-triangle-diagram.png" class="img-responsive" alt="Responsive image" >
									<div id="diagramcontainer" style="position:relative;margin:0em auto; ">
										<div id="hoveroutput" style="display: none; position: absolute; padding: 0.5em; background-color: rgb(255, 255, 255); border: 1px solid rgb(128, 192, 255); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;"></div>
									</div>
									<form action="" method="get" onsubmit="solve(); return false">
										<div class="table-responsive">
											<table class="table" >
												<thead>
													<tr>
														<th>Variable</th>
														<th>Input</th>
														<th>Solution 1</th>
														<th>Solution 2</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><label for="sideAin">Side <var>a</var> (units):</label></td>
														<td><input type="number" id="sideAin" autocomplete="off" style="width:3em" oninput="solve()"></td>
														<td id="sideAout"></td>
														<td id="sideAout2"></td>
													</tr>
													<tr>
														<td><label for="sideBin">Side <var>b</var> (units):</label></td>
														<td><input type="number" id="sideBin" autocomplete="off" style="width:3em" oninput="solve()"></td>
														<td id="sideBout"></td>
														<td id="sideBout2"></td>
													</tr>
													<tr>
														<td><label for="sideCin">Side <var>c</var> (units):</label></td>
														<td><input type="number" id="sideCin" autocomplete="off" style="width:3em" oninput="solve()"></td>
														<td id="sideCout"></td>
														<td id="sideCout2"></td>
													</tr>
													<tr>
														<td><label for="angleAin">Angle <var>A</var> (degrees):</label></td>
														<td><input type="number" id="angleAin" autocomplete="off" style="width:3em" oninput="solve()"></td>
														<td id="angleAout"></td>
														<td id="angleAout2"></td>
													</tr>
													<tr>
														<td><label for="angleBin">Angle <var>B</var> (degrees):</label></td>
														<td><input type="number" id="angleBin" autocomplete="off" style="width:3em" oninput="solve()"></td>
														<td id="angleBout"></td>
														<td id="angleBout2"></td>
													</tr>
													<tr>
														<td><label for="angleCin">Angle <var>C</var> (degrees):</label></td>
														<td><input type="number" id="angleCin" autocomplete="off" style="width:3em" oninput="solve()"></td>
														<td id="angleCout"></td>
														<td id="angleCout2"></td>
													</tr>
													<tr>
														<td>Area (square units):</td>
														<td></td>
														<td id="areaout"></td>
														<td id="areaout2"></td>
													</tr>
													<tr>
														<td>Status:</td>
														<td colcol-md-="3" id="status"></td>
													</tr>
													<tr>
														<td></td>
														<td colcol-md-="3"><input value="Solve" type="submit"> <input value="Clear" type="reset" onclick="clearOutputs()"></td>
													</tr>
													</tbody>
											</table>
										</div>
									</form>
							</div>
						</div>
					</div>

			</div>	
			</div>
		</div>
		<!-- script para los calculos de triangle solver custom-->
	<script type="text/javascript" src="js/triangle-solver.js"></script>		
   </body> 
	
	<!-- pie de pagina-->   
	<footer>
		<?php pie();?>
	</footer>
</html>
