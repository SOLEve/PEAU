<?php 
	//aqui se inicia sesion
	session_start();
	error_reporting(0);
	//aqui se incluye la libreria de conexion con la base de datos
	include("librerias.php");
	
	if(isset($_SESSION["conex"]))
	{
		if($_SESSION["conex"]==0)
		{
			echo '<script language="JavaScript" type="text/javascript">
				document.location= "controlpanel.php";
				</script>';
		}  
	}
?>
<!DOCTYPE html>
<html>
    <head>
	<!-- aqui se incluye el archivo diseno.php-->
	<?php 
		include("diseno.php"); 
		cabecera();
	?>
		
	<script language="javascript">
		
	//variables contador para contar el numero de caracteristicas que se pueden agregar a un producto	
	var contador=0,contador1=0,contador2=0,contador3=0,contador4=0;
	var contador5=0,contador6=0,contador7=0,contador8=0;
	
	
	<!-- todas las funciones llamadas agregar fila son las que hacen que se puedan agregar mas filas a las caracteristicas de un producto ejemplo agregar 1 o mas sistemas operativos a un producto-->
	function agregaFila()
	{
		contador++;
		var TABLE = document.getElementById("tabla");
		var TROW = document.getElementById("celda");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control'  name='frame_\"+contador+\"'  class='col-md-6'>";
				$consulta="SELECT idframes,nombre,descripcion FROM frames ORDER BY idframes";
				$res=consultar($consulta);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value='$row[idframes]'>$row[nombre]---$row[descripcion]</option>";
				}  
					echo"</select></td>";?>"
		newCell.innerHTML = txt
	}
		
	function agregaFila1()
	{
		contador1++;
		var TABLE = document.getElementById("tabla1");
		var TROW = document.getElementById("celda1");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td> <select class='form-control' name='imagen_\"+contador1+\"' class='col-md-6'>";
				$consulta="SELECT idimagenes,ruta FROM imagenes ORDER BY idimagenes";
				$res=consultar($consulta);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value='$row[idimagenes]'>$row[ruta]</option>";
				}  
				echo"</select></td>";
		?>"
		newCell.innerHTML = txt	  
	}
		
	function agregaFila2()
	{
		contador2++;
		var TABLE = document.getElementById("tabla2");
		var TROW = document.getElementById("celda2");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td> <select class='form-control' name='included_\"+contador2+\"' class='col-md-6'>";
				$consulta="SELECT idincluded,descripcion FROM included ORDER BY idincluded";
				$res=consultar($consulta);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value='$row[idincluded]'>$row[descripcion]</option>";
				}  
				echo"</select></td>";
		?>"
		  newCell.innerHTML = txt	  
	}				

	function agregaFila3()
	{
		contador3++;
		var TABLE = document.getElementById("tabla3");
		var TROW = document.getElementById("celda3");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control' name='n_point_\"+contador3+\"' class='col-md-6'>";
				$consulta="SELECT idn_point,numero FROM n_point ORDER BY idn_point";
				$res=consultar($consulta);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value='$row[idn_point]'>$row[numero]</option>";
				}  
				echo"</select></td>";
		?>"
		  newCell.innerHTML = txt	  
	}		
		
	function agregaFila4()
	{
		contador4++;
		var TABLE = document.getElementById("tabla4");
		var TROW = document.getElementById("celda4");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control' name='pdf_\"+contador4+\"' class='col-md-6'>";
				$consulta="SELECT idpdf,ruta,titulo FROM pdf ORDER BY idpdf";
				$res=consultar($consulta);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value='$row[idpdf]'>$row[titulo]</option>";
				}  
					echo"</select></td>";
		?>"
		newCell.innerHTML = txt	  
	}
		
	function agregaFila5()
	{
		contador5++;
		var TABLE = document.getElementById("tabla5");
		var TROW = document.getElementById("celda5");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control' name='so_\"+contador5+\"' class='col-md-6'>";
				$consulta="SELECT idso,descripcion FROM so ORDER BY idso";
				$res=consultar($consulta);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value='$row[idso]'>$row[descripcion]</option>";
				}  
				echo"</select></td>";
				?>"
		  newCell.innerHTML = txt	  
	}		
		
	function agregaFila6()
	{
		contador6++;
		var TABLE = document.getElementById("tabla6");
		var TROW = document.getElementById("celda6");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control' name='touch_\"+contador6+\"' class='col-md-6'>";
					$consulta="SELECT idtouch,nombre_touch,descripcion_touch FROM touch ORDER BY idtouch";
					$res=consultar($consulta);
					while($row=mysql_fetch_array($res))
					{
						echo "<option value='$row[idtouch]'>$row[nombre_touch]--$row[descripcion_touch]</option>";
					}  
					echo"</select></td>";
				?>"
		 newCell.innerHTML = txt	  
	}	
		
	function agregaFila7()
	{
		contador7++;
		var TABLE = document.getElementById("tabla7");
		var TROW = document.getElementById("celda7");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control' name='video_\"+contador7+\"' class='col-md-6'>";
					$consulta="SELECT idvideos,ruta,titulo FROM videos ORDER BY idvideos";
					$res=consultar($consulta);
					while($row=mysql_fetch_array($res))
						{
							echo "<option value='$row[idvideos]'>$row[titulo]</option>";
						}  
					echo"</select></td>";
				?>"
		 newCell.innerHTML = txt	  
	}
		
	function agregaFila8()
	{
		contador8++;
		var TABLE = document.getElementById("tabla8");
		var TROW = document.getElementById("celda8");
		var content = TROW.getElementsByTagName("td");
		var newRow = TABLE.insertRow(-1);
		  
		newRow.className = TROW.attributes['class'].value;		  
 
		var newCell = newRow.insertCell(newRow.cells.length)
		txt = "<?php echo "<td><select class='form-control' name='descripcion_\"+contador8+\"' class='col-md-6'>";
					$consulta="SELECT iddescripcion,Titulo FROM descripcion ORDER BY iddescripcion";
					$res=consultar($consulta);
					while($row=mysql_fetch_array($res))
					{
						echo "<option value='$row[iddescripcion]'>$row[Titulo]</option>";
					}  
						echo"</select></td>";
				?>"
		newCell.innerHTML = txt	  
	}
		
	</script>
	
	<?php
		//aqui se insertan los registros en la base de datos
		if(isset($_POST['b_consultar']))
			{	
				$cont=0;
				$insertar="INSERT INTO producto(nombre) VALUES('')";				
				if(!actualizar_bd($insertar)) 
				{
					echo "<div class=\"alert alert-error\">";
					echo "Error! record could not be created.";
					echo "</div>";								  
				} else 
				{
					echo "<div class=\"alert alert-success\">";
					echo "Success! the record was created.";
					echo "</div>";
				}
								
				$consulta="SELECT MAX(idproducto) AS id FROM producto";
				$res=consultar($consulta);
				$fila=mysql_fetch_array($res);
				$id    		=$fila[0];
				
				if(isset($_POST['nombre'])){$act="UPDATE producto SET nombre='".$_POST['nombre']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['medida'])){$act="UPDATE producto SET medida='".$_POST['medida']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['precio'])){$act="UPDATE producto SET precio='".$_POST['precio']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['tiempo'])){$act="UPDATE producto SET tiempo='".$_POST['tiempo']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['finger_t_a'])){$act="UPDATE producto SET finger_t_a='".$_POST['finger_t_a']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['report_r'])){$act="UPDATE producto SET report_r='".$_POST['report_r']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['warranty'])){$act="UPDATE producto SET warranty='".$_POST['warranty']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['tipo'])){$act="UPDATE producto SET idtipo_producto='".$_POST['tipo']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['glass'])){$act="UPDATE producto SET idglass='".$_POST['glass']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['power_supply'])){$act="UPDATE producto SET idpower_supply='".$_POST['power_supply']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['interface'])){$act="UPDATE producto SET idinterface='".$_POST['interface']."' WHERE idproducto='$id'";actualizar_bd($act);}
				if(isset($_POST['logo'])){$act="UPDATE producto SET logo='".$_POST['logo']."' WHERE idproducto='$id'";actualizar_bd($act);}
				
				
				while(isset($_POST["frame_".$cont]))
				{	
					$insertar="INSERT INTO frames_producto(idframes,idproducto) VALUES('".$_POST["frame_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}
				
				$cont=0;
				while(isset($_POST["imagen_".$cont]))
				{					
					$insertar="INSERT INTO imagenes_producto(idimagenes,idproducto) VALUES('".$_POST["imagen_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;
				
				
				while(isset($_POST["included_".$cont]))
				{
					$insertar="INSERT INTO included_producto(idincluded,idproducto) VALUES('".$_POST["included_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;
								
				while(isset($_POST["n_point_".$cont]))
				{
					$insertar="INSERT INTO n_point_producto(idn_point,idproducto) VALUES('".$_POST["n_point_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;				
				
				while(isset($_POST["pdf_".$cont]))
				{
					$insertar="INSERT INTO pdf_producto	(idpdf,idproducto) VALUES('".$_POST["pdf_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;
				
				while(isset($_POST["so_".$cont]))
				{
					echo $cont;
					$insertar="INSERT INTO so_producto	(idso,idproducto) VALUES('".$_POST["so_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;
								
				while(isset($_POST["touch_".$cont]))
				{
					$insertar="INSERT INTO touch_producto(idtouch,idproducto) VALUES('".$_POST["touch_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;
				
				while(isset($_POST["video_".$cont]))
				{
					$insertar="INSERT INTO videos_producto(idvideos,idproducto) VALUES('".$_POST["video_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}$cont=0;
				
				while(isset($_POST["descripcion_".$cont]))
				{

					$insertar="INSERT INTO descripcion_producto(iddescripcion,idproducto) VALUES('".$_POST["descripcion_".$cont]."','".$id."')";
					actualizar_bd($insertar);
					$cont++;
				}

			}
		?>
    </head>
   
	<body>
		<div class="container" align=center>
		    <img  style =" width: 100%;" src="img/banner.png" >
			
			<div class="row">
				<div class="col-md-12" style="-webkit-border-radius: 15px 15px 5px;background-image:url('img/881.png');">
					<p id="estiloparticular"><b><h1>Create Product</h1></b></p>
				</div>
			</div>
			
			<div class="row" align=left>
				<div class="col-md-12" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
					<!-- aqui se muestran los campos para registrar un nuevo producto-->
					<form method="post"  action="#" >
					
						<div class="col-md-4"><b>Product name:</b></div>			<div class="col-md-5"><input name="nombre" class="form-control"  type="text"/>		<br></div>
						<div class="col-md-4"><b>Measure:</b></div>					<div class="col-md-5"><input name="medida" class="form-control" type="text"/>		<br></div>
						<div class="col-md-4"><b>Price:</b></div>					<div class="col-md-5"><input name="precio" class="form-control" type="text"/>		<br></div>
						<div class="col-md-4"><b>Delivery time:</b></div>			<div class="col-md-5"><input name="tiempo" class="form-control" type="text"/>		<br></div>
						<div class="col-md-4"><b>Finger Touch Accuracy:</b></div>	<div class="col-md-5"><input name="finger_t_a" class="form-control" type="text"/>	<br></div>
						<div class="col-md-4"><b>Report Resolution:</b></div>		<div class="col-md-5"><input name="report_r" class="form-control" type="text"/>		<br></div>
						<div class="col-md-4"><b>Warranty:</b></div>				<div class="col-md-5"><input name="warranty" class="form-control" type="text"/>		<br></div>
						<div class="col-md-4"><b>Product Type:</b></div>
																			<div class="col-md-5">
																				<select name="tipo" class="form-control">
																					  <?php
																						$consulta="SELECT idtipo_producto FROM tipo_producto ORDER BY idtipo_producto";
																						$res=consultar($consulta);
																						while($row=mysql_fetch_array($res))
																						{
																						  echo "<option value=\"$row[idtipo_producto]\">$row[idtipo_producto]</option>";
																						}
																					  ?>  
																				</select>
																			</div>
						<div class="col-md-4"><br><b>Glass: 				</b></div>
																			<div class="col-md-5"><br>
																				<select name="glass" class="form-control">
																					  <?php
																						$consulta="SELECT idglass,descripcion_glass FROM glass ORDER BY idglass";
																						$res=consultar($consulta);
																						while($row=mysql_fetch_array($res))
																						{
																						  echo "<option value=\"$row[idglass]\">$row[descripcion_glass]</option>";
																						}
																					  ?>  
																				</select>
																			</div>
					  	<div class="col-md-4"><br><b>Power Supply: 		</b></div>
																			<div class="col-md-5"><br>
																				<select name="power_supply" class="form-control">
																					  <?php
																						$consulta="SELECT idpower_supply,descripcion_ps FROM power_supply ORDER BY idpower_supply";
																						$res=consultar($consulta);
																						while($row=mysql_fetch_array($res))
																						{
																						  echo "<option value=\"$row[idpower_supply]\">$row[descripcion_ps]</option>";
																						}
																					  ?>  
																				</select>
																		  </div>
					  	<div class="col-md-4"><br><b>Interface: 		</b></div>
																			<div class="col-md-5"><br>
																				<select name="interface" class="form-control">
																					  <?php
																						$consulta="SELECT idinterface,descripcion_interface FROM interface ORDER BY idinterface";
																						$res=consultar($consulta);
																						while($row=mysql_fetch_array($res))
																						{
																						  echo "<option value=\"$row[idinterface]\">$row[descripcion_interface]</option>";
																						}
																					  ?>  
																				</select>
																		  </div>
					  	<div class="col-md-4"><br><b>Logo: 		</b></div>
																			<div class="col-md-5"><br>
																				<select name="logo" class="form-control">
																					  <?php
																						$consulta="SELECT idimagenes,ruta FROM imagenes ORDER BY idimagenes";
																						$res=consultar($consulta);
																						while($row=mysql_fetch_array($res))
																						{
																						  echo "<option value=\"$row[ruta]\">$row[ruta]</option>";
																						}
																					  ?>  
																				</select>
																		  </div>
						
						<div class="col-md-7">
						<table class="table table-striped" id="tabla">
								<thead>
									<tr >
										<th>Frame: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda\" id=\"celda\" name=\"celda\">
											<td> <select class=\"form-control\" name=\"frame_0\" class=\"col-md-6\">";
												$consulta="SELECT idframes,nombre,descripcion FROM frames ORDER BY idframes";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idframes]\">$row[nombre]---$row[descripcion]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
						<table class="table table-striped" id="tabla1">
								<thead>
									<tr >
										<th>Images: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda1\" id=\"celda1\" name=\"celda1\">
											<td> <select class=\"form-control\" name=\"imagen_0\" class=\"col-md-6\">";
												$consulta="SELECT idimagenes,ruta FROM imagenes ORDER BY idimagenes";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idimagenes]\">$row[ruta]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila1(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
						<table class="table table-striped" id="tabla2">
								<thead>
									<tr >
										<th>Included: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda2\" id=\"celda2\" name=\"celda2\">
											<td> <select class=\"form-control\" name=\"included_0\" class=\"col-md-6\">";
												$consulta="SELECT idincluded,descripcion FROM included ORDER BY idincluded";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idincluded]\">$row[descripcion]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila2(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
						<table class="table table-striped" id="tabla3">
								<thead>
									<tr >
										<th>Number of Touch Points: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda3\" id=\"celda3\" name=\"celda3\">
											<td> <select class=\"form-control\" name=\"n_point_0\" class=\"col-md-6\">";
												$consulta="SELECT idn_point,numero FROM n_point ORDER BY idn_point";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idn_point]\">$row[numero]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila3(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
							<table class="table table-striped" id="tabla4">
								<thead>
									<tr >
										<th>Pdf: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda4\" id=\"celda4\" name=\"celda4\">
											<td><select class=\"form-control\" name=\"pdf_0\" class=\"col-md-6\">";
												$consulta="SELECT idpdf,ruta,titulo FROM pdf ORDER BY idpdf";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idpdf]\">$row[titulo]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila4(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
						<table class="table table-striped" id="tabla5">
								<thead>
									<tr >
										<th>Operating System: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda5\" id=\"celda5\" name=\"celda5\">
											<td><select class=\"form-control\" name=\"so_0\" class=\"col-md-6\">";
												$consulta="SELECT idso,descripcion FROM so ORDER BY idso";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idso]\">$row[descripcion]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila5(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
							<table class="table table-striped" id="tabla6">
								<thead>
									<tr >
										<th>Touch: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda6\" id=\"celda6\" name=\"celda6\">
											<td><select class=\"form-control\" name=\"touch_0\" class=\"col-md-6\">";
												$consulta="SELECT idtouch,nombre_touch,descripcion_touch FROM touch ORDER BY idtouch";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idtouch]\">$row[nombre_touch]--$row[descripcion_touch]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila6(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
							<table class="table table-striped" id="tabla7">
								<thead>
									<tr >
										<th>Videos: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda7\" id=\"celda7\" name=\"celda7\">
											<td><select class=\"form-control\" name=\"video_0\" class=\"col-md-6\">";
												$consulta="SELECT idvideos,ruta,titulo FROM videos ORDER BY ruta";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[idvideos]\">$row[titulo]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila7(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-7">
							<table class="table table-striped" id="tabla8">
								<thead>
									<tr >
										<th>Decription: </th>
									</tr>
								</thead>
								<tbody>
									<?php
										echo "<tr class=\"celda8\" id=\"celda8\" name=\"celda8\">
											<td><select class=\"form-control\" name=\"descripcion_0\" class=\"col-md-6\">";
												$consulta="SELECT iddescripcion,Titulo FROM descripcion ORDER BY iddescripcion";
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo "<option value=\"$row[iddescripcion]\">$row[Titulo]</option>";
												}  
												echo"</select></td>
											</tr>";
																		
									?>
								</tbody>
								</table>
									<input type="button" class="btn-primary" value="Add Row" onClick="agregaFila8(event)" alt="Adicionar">
						</div>
						
						<div class="col-md-6">
							<br>
							<button type="submit" name="b_consultar" class="btn btn-danger" >Save Product</button><br><br>
						</div>
						
					</form>
					
				</div>
			</div>

			<div class="row">
				<div class="col-md-3" >
					<button class="btn btn-large btn-block btn btn-warning" type="button" onClick="location.href='index_administrador.php'" >Back</button>
				</div>
			</div>	
		</div>
	</body>
	<!-- pie de pagina-->
	<footer>
		<?php pie();?>
	</footer>
</html>