<?php
	include("librerias.php");	
	//error_reporting(0);
?>
<!DOCTYPE html>
<html>
   <head>
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
		
	<script language="JavaScript" type="text/javascript">
		// creando objeto XMLHttpRequest de Ajax
		var obXHR;
		try {
			obXHR=new XMLHttpRequest();
		} catch(err) {
			try {
				obXHR=new ActiveXObject("Msxml2.XMLHTTP");
			} catch(err) {
				try {
					obXHR=new ActiveXObject("Microsoft.XMLHTTP");
				} catch(err) {
					obXHR=false;
				}
			}
		}

		function cargarjs(url,obId) {
			var obCon = document.getElementById(obId);
			obXHR.open("GET", url);
			obXHR.onreadystatechange = function() {
				if (obXHR.readyState == 4 && obXHR.status == 200) {
					obXML = obXHR.responseXML;
					obDes = obXML.getElementsByTagName("descri");
					obCon.length=obDes.length;
					for (var i=0; i<obDes.length;i++) {
						obCon.options[i].value=obDes[i].firstChild.nodeValue;
				  obCon.options[i].text=obDes[i].firstChild.nodeValue;
					}
				}
			}
			obXHR.send(null);
		}
		
		function justNumbers(e)
		{
		var keynum = window.event ? window.event.keyCode : e.which;
		if ((keynum == 8) || (keynum == 46))
		return true;
		 
		return /\d/.test(String.fromCharCode(keynum));
		}

	</script>		
   
   </head>
   <body onload="cargarjs('cargar3.php','sEst')"> 
		<div class="container">
            <img class="span12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?>	
			
			<div class="row">
				<div class="panel-group" id="accordion">
					<?php menu_acordeon("touch.php","procaps.php","software.php","calculator.php","triangle.php","#","lens.php"); ?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong>TRIANGLE SOLVER IMAGE RATIO</strong></a>
							 </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="row">
									<div class="span12"style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
										<form method="post"  action="#" >
											<?php 
												if(isset($_POST['b_consultar']))
												{
													if(isset($_POST['inputunidad']))
													{
															$consulta="
															SELECT 
															".$_POST['destino']."
															FROM
															".$_POST['inputunidad']."
															WHERE
															unidad = '".$_POST['origen']."'";
															$res=consultar($consulta);
															$fila=mysql_fetch_array($res);
															$resultado =$_POST['inputnumero']*$fila[0];
															
													}
												}
											?>
											<fieldset>
											<legend>Unit Converter</legend>
											
											<label><b>Unit of Measure: </b></label>
											 <select id="sEst"  name="inputunidad" onchange="cargarjs('cargar3.php?est='+this.value,'sDM')" class="span2"> </select>

											<b>Convert Number: </b>
											<input name="inputnumero" onkeypress="return justNumbers(event);" type="text" placeholder="number" class="span2">

											<b>Unit of Measure: </b>					
											<select name="origen" id="sDM" onchange="cargarjs('cargar3.php?dm='+this.value,'sDM1')" class="span2"></select>
											<b> to : </b>
											
											<select name="destino" id="sDM1" class="span2"></select>
											<br>
											
											<button type="submit" name="b_consultar" class="btn btn-primary" >Calculate</button>
											<br><br>
											<b>Result: </b>
											<input class="span3" onkeypress="return justNumbers(event);" type="text" placeholder="...." value="<?php echo(isset($resultado)? $resultado:""); echo" ".(isset($_POST['destino'])? $_POST['destino']:"");?>">	
											
										  </fieldset>
										</form>
									</div>
								</div>	
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
