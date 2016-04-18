<?php
	//aqui incluimos el archivo que se conecta con la base de datos y realzia las consultas
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

			<!--  funcion que llama a cargar.php para mostrar la opcion de lso select desde la base de datos-->
			function cargarjs(url,obId) 
			{
				var obCon = document.getElementById(obId);
				obXHR.open("GET", url);
				obXHR.onreadystatechange = function() 
				{
					if (obXHR.readyState == 4 && obXHR.status == 200) 
					{
						obXML = obXHR.responseXML;
						obDes = obXML.getElementsByTagName("descri");
						obCon.length=obDes.length;
						for (var i=0; i<obDes.length;i++) 
						{
							obCon.options[i].value=obDes[i].firstChild.nodeValue;
							obCon.options[i].text=obDes[i].firstChild.nodeValue;
						}
					}
				}
				obXHR.send(null);
			}
		</script>	
	</head>
   
   <body style="background-color:black" onload="cargarjs('cargar.php','sEst')"> 
		<div class="container">
            <img class="col-md-12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?><!-- menu principal-->
			
			<!-- menu acordeon-->
			<div class="panel-group" id="accordion">
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
										<p  id="estiloparticular"><b>Touch Frame</b><br>These thin metal frames have alternating infrared (IR)
										LEDs and IR detectors around the inside edges which track objects obstructing the sensors normal view.
										The advanced software driver determines the location of up to 32 objects on-screen and sends x,y positions
										as touch points to the computer's mouse driver software. The number of touch points recognized by a program 
										is based on how many points are programmed by the software developers for interaction. Always try and get a
										frame that supports more touch points than you think you'll need as you can always not use them but can never
										add more after you receive it.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="panel panel-default">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000">
						<div class="panel-heading">
							<h4 class="panel-title">
								<strong>SEE OUR PRODUCTS</strong>
							</h4>
						</div>
					</a>
					<div id="collapseFour" class="panel-collapse collapse in" style="background-color:black">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12"style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
									<!-- aqui se realzia la consulta del producto y se muestra por pantalla-->
									<form method="post"  action="#" >
										<div class="texto3">
											<?php 
											if(isset($_POST['b_consultar']))
											{   
												$consulta="SELECT 
												nombre,
												medida,
												precio,
												tiempo,
												idglass,
												idtipo_producto,
												finger_t_a,
												report_r,
												idinterface,
												warranty,
												touch_point,
												logo
												FROM producto 
												WHERE nombre='".$_POST["input_touch"]."'";
												  
												$res=consultar($consulta);
												$fila=mysql_fetch_array($res);
												$_POST["nombre"]    		=$fila[0];
												$_POST["medida"]    		=$fila[1];
												$_POST["precio"]    		=$fila[2];
												$_POST["tiempo"]    		=$fila[3];
												$_POST["idglass"]    		=$fila[4];
												$_POST["idtipo_producto"]	=$fila[5];
												$_POST["finger_t_a"]   		=$fila[6];
												$_POST["report_r"]   		=$fila[7];
												$_POST["idinterface"]   	=$fila[8];
												$_POST["warranty"]   		=$fila[9];
												$_POST["touch_point"]   	=$fila[10];
												$_POST["logo"]   			=$fila[11];
												  
												  
												$consulta2="
												SELECT 
												titulo,
												descripcion
												FROM descripcion 
												WHERE iddescripcion= ANY
													(select 
													iddescripcion 
													from descripcion_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";
												  
												$consulta3 =
												"
												SELECT
												descripcion_glass
												FROM
												glass
												WHERE idglass = (SELECT idglass FROM producto WHERE nombre='".$_POST["input_touch"]."')
												";
												$res3=consultar($consulta3);
												$fila3=mysql_fetch_array($res3);
												$_POST["descripcion_glass"]    =$fila3[0];
												
												$consulta4="
												SELECT 
												nombre_touch,
												descripcion_touch
												FROM touch 
												WHERE idtouch= ANY
													(select 
													idtouch 
													from touch_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";  
												 
												$consulta5 =
												"
												SELECT
												descripcion_interface
												FROM
												interface
												WHERE idinterface = (SELECT idinterface FROM producto WHERE nombre='".$_POST["input_touch"]."')
												";
												$res5=consultar($consulta5);
												$fila5=mysql_fetch_array($res5);
												$_POST["descripcion_interface"]    =$fila5[0];								
												
												$consulta6 =
												"
												SELECT
												descripcion_ps
												FROM
												power_supply
												WHERE idpower_supply = (SELECT idpower_supply FROM producto WHERE nombre='".$_POST["input_touch"]."')
												";
												$res6=consultar($consulta6);
												$fila6=mysql_fetch_array($res6);
												$_POST["descripcion_ps"]    =$fila6[0];
												
												$consulta7="
												SELECT 
												ruta
												FROM videos 
												WHERE idvideos= ANY
													(select 
													idvideos 
													from videos_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";
																				
												$consulta8="
												SELECT 
												ruta
												FROM imagenes 
												WHERE idimagenes= ANY
													(select 
													idimagenes 
													from imagenes_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";
												 
												$consulta9="
												SELECT 
												numero
												FROM n_point 
												WHERE idn_point= ANY
													(select 
													idn_point 
													from n_point_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";
												 
												$consulta10="
												SELECT 
												titulo,
												ruta
												FROM pdf 
												WHERE idpdf= ANY
													(select 
													idpdf 
													from pdf_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";

												$consulta11="
												SELECT 
												descripcion
												FROM so 
												WHERE idso= ANY
													(select 
													idso 
													from so_producto 
													where idproducto= ANY
														(SELECT 
														idproducto 
														from producto 
														where nombre= '".$_POST["input_touch"]."'))				  
												 ";								 

											}?>
											<div class="col-md-12">
												<h4>1) Select the Type of Infrared Touch Frame Overlays</h4>
												<select id="sEst" onchange="cargarjs('cargar.php?est='+this.value,'sDM')"></select>
												<h4>2) Select the Infrared Touch Frame Overlays</h4>
												<select id="sDM" name="input_touch" ></select>
												<h4></h4>
												<button type="submit" name="b_consultar" class="btn-inverse" >Consult</button>
									
											</div>	
											<div class="col-md-11">
												<?php
													if(isset($_POST["input_touch"]))
													{										
														if(isset($_POST["logo"]))
														{echo"<img width=\"25%\" src=\"img/".$_POST["logo"]."\" >";}
														
														echo "<h4>Specification</h4>";										
														if(isset($_POST["nombre"]))
														{
															echo "<p><b>Name: </b>";
															echo (isset($_POST["nombre"])? $_POST["nombre"]:"");
															echo" </p>";
														}										
														
														if(isset($_POST["medida"]))
														{
															echo "<p><b>Measure: </b>";
															echo (isset($_POST["medida"])? $_POST["medida"]:"");
															echo" Inch</p>";
														}										
														
														if(isset($_POST["precio"]))
														{
															echo "<p><b>Price: </b>";
																echo (isset($_POST["precio"])? $_POST["precio"]:"");
															echo" $</p>";
														}									
														
														if(isset($_POST["tiempo"]))
														{
															if($_POST["tiempo"]!="")
															{
																echo "<p><b>Delivery Time: </b>";
																echo (isset($_POST["tiempo"])? $_POST["tiempo"]:"");
																echo" </p>";
															}
														}								

														$res2=consultar($consulta2);
														while($row=mysql_fetch_array($res2))
														{
															$_POST["titulo"]    	=$row[0];
															$_POST["descripcion"] 	=$row[1];
															echo "<p><b>";
															echo (isset($_POST["titulo"])? $_POST["titulo"]:"");echo" </b>";
															echo (isset($_POST["descripcion"])? $_POST["descripcion"]:"");
															echo"</p>";
														}
														
														if(isset($_POST["idglass"]))
														{
															if($_POST["descripcion_glass"]!="None")
															{
															echo "<p><b>Glass: </b>";
															echo (isset($_POST["descripcion_glass"])? $_POST["descripcion_glass"]:"");
															echo" </p>";
															}
														}
														
														if(isset($_POST["finger_t_a"]))
														{
															if($_POST["finger_t_a"]!="")
															{
																echo "<p><b>Finger Touch Accuracy: </b>";
																echo (isset($_POST["finger_t_a"])? $_POST["finger_t_a"]:"");
																echo" </p>";
															}
														}										
														
														if(isset($_POST["report_r"]))
														{
															if($_POST["report_r"]!="")
															{
																echo "<p><b>Report Resolution: </b>";
																echo (isset($_POST["report_r"])? $_POST["report_r"]:"");
																echo" </p>";
															}
														}
														
														$res4=consultar($consulta4);
														while($row=mysql_fetch_array($res4))
														{
															$_POST["nombre_touch"]    	=$row[0];
															$_POST["descripcion_touch"] 	=$row[1];
															
															if($_POST["nombre_touch"]!="None")
															{
																echo "<p><b> ";
																echo (isset($_POST["nombre_touch"])? $_POST["nombre_touch"]:"");echo"</b> ";
																echo (isset($_POST["descripcion_touch"])? $_POST["descripcion_touch"]:"");
																echo" </p>";
															}
														}
														
														if(isset($_POST["descripcion_interface"]))
														{
															if($_POST["descripcion_interface"]!="None")
															{
																echo "<p><b>Interface: </b>";
																echo (isset($_POST["descripcion_interface"])? $_POST["descripcion_interface"]:"");
																echo" </p>";
															}
														}										
														
														if(isset($_POST["warranty"]))
														{
															if($_POST["warranty"]!="")
															{
																echo "<p><b>Warranty: </b>";
																echo (isset($_POST["warranty"])? $_POST["warranty"]:"");
																echo" </p>";
															}
														}										
														
														if(isset($_POST["touch_point"]))
														{
															echo "<p><b>Touch point: </b>";
															echo (isset($_POST["touch_point"])? $_POST["touch_point"]:"");
															echo" </p>";
														}
														
														if(isset($_POST["descripcion_ps"]))
														{
															if($_POST["descripcion_ps"]!="None")
															{
																echo "<p><b>Power Supply: </b>";
																echo (isset($_POST["descripcion_ps"])? $_POST["descripcion_ps"]:"");
																echo" </p>";
															}
														}	
														
														$cont=0;
														$res11=consultar($consulta11);
														while($row=mysql_fetch_array($res11))
														{
															$_POST["descripcion"]    	=$row[0];
															if($_POST["descripcion"]!="None")
															{
																if($cont==0){echo "<p><b>Operating System: </b>";$cont++;}									
																echo (isset($_POST["descripcion"])? $_POST["descripcion"]:"");echo"";
																echo" </p>";
															}
															
														}
														
														$res10=consultar($consulta10);
														while($row=mysql_fetch_array($res10))
														{
															$_POST["titulo"]    	=$row[0];
															$_POST["ruta"] 	=$row[1];
															echo "<p><b> ";
															echo (isset($_POST["titulo"])? $_POST["titulo"]:"");echo"</b> ";
															echo "<a style=\"color:#4c8bff;\" href=\"pdf/".$_POST["ruta"]."\" target=\"_blank\">Download Pdf</a>";
															echo" </p>";
														}
														
														$res9=consultar($consulta9);										
														$cont=0;
														while($row=mysql_fetch_array($res9))
														{
															$_POST["numero"]    	=$row[0];
															if($_POST["numero"]!="0")
															{
																if($cont==0){echo "<p><b>Number of Touch Points </b> ";$cont++;}
																echo "<br>";
																echo $_POST["numero"];
																
															}							
														}
														echo" </p>";
												
													echo"</div>";
											
													$res7=consultar($consulta7);
													while($row=mysql_fetch_array($res7))
													{
														$_POST["ruta"]    	=$row[0];
														
														if($_POST["ruta"]!=".None"){
															echo"<div class=\"col-md-6\">
															<div class=\"video-container\">";
															echo"<iframe src=\"http://www.youtube.com/embed/".$_POST["ruta"]."\" frameborder=\"0\"></iframe>";
															echo"</div>
															</div>";
														}
													}										
													
													$res8=consultar($consulta8);
													while($row=mysql_fetch_array($res8))
													{
														echo"<div class=\"col-md-6\">";
															$_POST["ruta"]    	=$row[0];
															if($_POST["ruta"]!="None")
																{echo"<img src=\"img/".$_POST["ruta"]."\" >";}
														echo"</div>";
													}
												}				
										?>
										</div>	
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
