<?php 
  session_start();
//error_reporting(0);
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
<html lang="en">
    <head>
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
    </head>
   
	<body>
		<div class="container" align=center>
		    <img  style =" width: 100%;" src="img/banner.png" >
			

			<div class="row" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
				<?php 
						$id1= $_GET["id"];
						if(isset($_POST['Submit1']))
						{
							$eliminar="DELETE FROM frames WHERE idframes='".$_POST["selecframe"]."'";
							if (!actualizar_bd($eliminar)) 
							{
								  echo "<div class=\"alert alert-error\">";
								  echo "Error! no record has been eliminated!";
								echo "</div>";
							}
							else
							{
								echo "<div class=\"alert alert-success\">";
								echo "Success! Record has been Deleted successfully!";
								echo "</div>";
							}
							 
						}
						if($id1=="Frame")
						{
							echo"
								<form method='post' action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Frame:</b>
										<br>
											<select name='selecframe' class='form-control'>";
												$consulta='SELECT * FROM frames ORDER BY idframes';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idframes]'>$row[nombre]</option>";
												}
											echo"</select>
											<br>
											<button type='submit' name='Submit1' class='btn-danger'>DELETE</button>
										</div>									
								</form>
								";
						}
						if($id1=="Included")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Included:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM included ORDER BY idincluded';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idincluded]'>$row[descripcion]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}
						
						if($id1=="Touch")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Touch Points:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM touch ORDER BY idtouch';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idtouch]'>$row[nombre_touch]---$row[descripcion_touch]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}
						
						if($id1=="Description")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Description:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM descripcion ORDER BY iddescripcion';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[iddescripcion]'>$row[Titulo]---$row[descripcion]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}
						
						if($id1=="Operating System")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Description:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM so ORDER BY idso';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idso]'>$row[descripcion]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}
												
						if($id1=="Touch Points")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Touch Points:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM n_point ORDER BY idn_point';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idn_point]'>$row[numero]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}
						
						if($id1=="Video")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Videos:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM videos ORDER BY idvideos';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idvideos]'>$row[titulo]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}
						
						if($id1=="Image")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>Images:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM imagenes ORDER BY idimagenes';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idimagenes]'>$row[ruta]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}	
						
						if($id1=="Pdf")
						{
							echo"
								<form method='post'  action='#' >
										<div class='col-md-4'></div>
										<div class='col-md-4'>
										<b>PDF:</b>
										<br>
											<select name='tipo' class='form-control'>";
												$consulta='SELECT * FROM pdf ORDER BY idpdf';
												$res=consultar($consulta);
												while($row=mysql_fetch_array($res))
												{
													echo"<option value='$row[idpdf]'>$row[Titulo]</option>";
												}
											echo"</select>
											<br>
											<input type=\"submit\" name=\"Submit\" value=\"DELETE\" />
										</div>									
								</form>
								";
						}	
				?>
			</div>
			
			
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-3">
				<?php echo"
					<button class='btn btn-large btn-block btn btn-warning' type='button' onClick=\"location.href='registrarfilas.php?id=".$id1."'\" >BACK</button>
				 ";?>
				</div>
			</div>
			
		</div>
	</body>
	<footer>
		<?php pie();?>
	</footer>
</html>