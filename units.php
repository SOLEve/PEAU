<?php
	//incluimos el archivo que hace conexion con la base de datos
	include("librerias.php");	
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
   <head>
		<!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
	
	<!-- funciones javascript-->
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

		//funcion que envia la informacion del select al archivo cargar3.php
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
		
		//funcion para validar la entrada de solo numeros
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
            <img class="col-md-12" style =" width: 100%;" src="img/banner.png" >
				<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?>	<!-- menu principal-->
				<div class="col-md-12" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
					<!-- formulario donde se realzia el calculo de conversion-->
					<form method="post"  action="#" >
						<?php 
							if(isset($_POST['b_consultar']))
							{
								if(isset($_POST['inputunidad']))
								{
									$consulta="SELECT 
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
							<legend style="padding-left: 15px;">Unit Converter</legend>
											
							<label><b>Unit of Measure: </b></label>
							<select id="sEst"  name="inputunidad" onchange="cargarjs('cargar3.php?est='+this.value,'sDM')" > </select>
							<br><br>
							<b>Convert Number: </b>
							<input name="inputnumero" onkeypress="return justNumbers(event);" type="text" placeholder="number" >
							<br><br>
							<b>Unit of Measure: </b>					
							<select name="origen" id="sDM" onchange="cargarjs('cargar3.php?dm='+this.value,'sDM1')"></select>
							<br><br>
							<b> to : </b>											
							<select name="destino" id="sDM1" ></select>
							<br><br>
											
							<button type="submit" name="b_consultar" class="btn btn-primary" >Calculate</button>
							<br><br>
							<b>Result: </b>
							<input onkeypress="return justNumbers(event);" type="text" placeholder="...." value="<?php echo(isset($resultado)? $resultado:""); echo" ".(isset($_POST['destino'])? $_POST['destino']:"");?>">	
											
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
