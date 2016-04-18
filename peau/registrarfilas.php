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
<html>
  <head>
  	<title>PEAU</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mediaq.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  	
	<script language="JavaScript" type="text/javascript">		
		function justNumbers(e)
		{
		var keynum = window.event ? window.event.keyCode : e.which;
		if ((keynum == 8) || (keynum == 46))
		return true;
		 
		return /\d/.test(String.fromCharCode(keynum));
		}
		
		function abrir(url) { 
		open(url,'','top=300,left=300,width=300,height=300') ; 
		} 		
		
		function abrir1(url) { 
		open(url,'','top=200,left=200,width=500,height=500') ; 
		} 
	</script>
  </head>  
  <body>
  
		<div class="container" align=center>
            <div class="row">
				<img class="span12" src="img/banner.png" >
            </div>
		
			<div class="row">
				<div class="span12" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
					<?php 
					$id1= $_GET["id"];	

						if($id1=="Frame")
						{
							echo"<form name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(1); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
									<table>
									
									<tr><td>Name</td><td><label><input name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>Description</td><td><label><input name=\"apellido\" type=\"text\"></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}
						
						if($id1=="Included")
						{
							echo"<form name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(2); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
									<table>
									
									<tr><td>Name</td><td><label><input name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}	
						
						if($id1=="Touch Points")
						{
							echo"<form name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(3); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
									<table>
									
									<tr><td>Number of Points</td><td><label><input onkeypress=\"return justNumbers(event);\" name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}
						
						if($id1=="Description")
						{
							echo"<form class=\"span12\" name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(4); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
									<table>
									
									<tr><td>Name</td><td><label><input name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>Description</td><td><textarea  rows=\"10\" name=\"apellido\" type=\"text\"></textarea></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}						
						
						if($id1=="Operating System")
						{
							echo"<form name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(5); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
									<table>
									
									<tr><td>Name</td><td><label><input name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}
						
						if($id1=="Touch")
						{
							echo"<form name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(6); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
									<table>
									
									<tr><td>Name</td><td><label><input name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>Description</td><td><label><input name=\"apellido\" type=\"text\"></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}						
						
						if($id1=="Video")
						{
							echo"<form name=\"nuevo_empleado\" onsubmit=\"enviarDatosEmpleado(7); return false\">
								
								<h2>New ";echo $id1;echo"</h2>
								<p>In the ID field just copy the youtube video id, for example the following video<b>
								https://www.youtube.com/watch?v=T4FSkePavZA </b><br> just have to save all the text 
								that is followed by the letter <b>&ldquo;v =&rdquo;</b> ie <b>T4FSkePavZA</b></p>
									<table>
									
									<tr><td>Id</td><td><label><input name=\"nombre\" type=\"text\" /></label></td></tr>
									<tr><td>Title</td><td><label><input name=\"apellido\" type=\"text\"></label></td></tr>
									<tr><td>&nbsp;</td><td><label><input type=\"submit\" name=\"Submit\" value=\"Save\" /></label></td></tr>
									
									</table>
							</form>";
						}

						if($id1=="Image")
						{
							echo"<h2>New ";echo $id1;echo"</h2>";
							include("foto.php");
						}	
						
						if($id1=="Pdf")
						{
							echo"<h2>New ";echo $id1;echo"</h2>";
							include("pdf.php");
						}							
						
					?>
				</div>
			</div>
		
 
			<?php
				if($id1=="Frame")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>Name</td>
								<td>Description</td>
							</tr>";						
								$consulta="SELECT * FROM frames";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."</td>";
									echo "<td>".$row[2]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}				
				
				if($id1=="Included")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>Name</td>
							</tr>";						
								$consulta="SELECT * FROM included";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}
				
				if($id1=="Touch Points")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>Number of Points</td>
							</tr>";						
								$consulta="SELECT * FROM n_point";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}
			
				if($id1=="Description")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table class=\"table table-striped\" >
							<tr style=\"background:#4c8bff;\">
								<td style=\"background-color:#58ACFA;\">Title</td>
								<td style=\"background-color:#58ACFA;\">Description</td>
							</tr>";						
								$consulta="SELECT * FROM descripcion";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td  class=\"span3\">".$row[1]."</td>";
									echo "<td>".$row[2]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";				
				}
			
				if($id1=="Operating System")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>Name</td>
							</tr>";						
								$consulta="SELECT * FROM so";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}
			
				if($id1=="Touch")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>Name</td>
								<td>Description</td>
							</tr>";						
								$consulta="SELECT * FROM touch";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."</td>";
									echo "<td>".$row[2]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}
			
				if($id1=="Video")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>ID</td>
								<td>Title</td>
							</tr>";						
								$consulta="SELECT * FROM videos";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."</td>";
									echo "<td>".$row[2]."</td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}				
				
				if($id1=="Image")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
						<h1>List of Images</h1>
							<tr style=\"background:#4c8bff;\">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>";						
								$consulta="SELECT * FROM imagenes";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[1]."<a href=\"javascript:abrir('img/".$row[1]."')\"><img class=\"span1\" src=\"img/".$row[1]."\" ></a></td>";
									
									$row=mysql_fetch_array($res);
									if($row[1]!=""){echo "";
									echo "<td>".$row[1]."<a href=\"javascript:abrir('img/".$row[1]."')\"><img class=\"span1\" src=\"img/".$row[1]."\" ></a></td>";
									}
									
									$row=mysql_fetch_array($res);
									if($row[1]!=""){
									echo "<td>".$row[1]."<a href=\"javascript:abrir('img/".$row[1]."')\"><img class=\"span1\" src=\"img/".$row[1]."\" ></a></td>";
									}
									
									$row=mysql_fetch_array($res);
									if($row[1]!=""){
									echo "<td>".$row[1]."<a href=\"javascript:abrir('img/".$row[1]."')\"><img class=\"span1\" src=\"img/".$row[1]."\" ></a></td>";
									}
									
									$row=mysql_fetch_array($res);
									if($row[1]!=""){
									echo "<td>".$row[1]."<a href=\"javascript:abrir('img/".$row[1]."')\"><img class=\"span1\" src=\"img/".$row[1]."\" ></a></td>";
									echo "</tr>";}
								}						
						echo"</table>
					</div>";
				}
			
				if($id1=="Pdf")
				{
					echo"<div id=\"resultado\" style=\"background-color:White;\" >
						<table style=\"color:#000099;background-color:White;\">
							<tr style=\"background:#4c8bff;\">
								<td>Title</td>
								<td>Filename</td>
							</tr>";						
								$consulta="SELECT * FROM pdf";
								$res=consultar($consulta);
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>".$row[2]."</td>";
									echo "<td><a style=\"color:#000099;\" href=\"javascript:abrir1('pdf/".$row[1]."')\">".$row[1]."</a></td>";
									echo "</tr>";
								}						
						echo"</table>
					</div>";
				}
			?>
			<div class="row">
				<div class="span3" style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
					<button class="btn btn-large btn-block btn btn-warning" type="button" onClick="location.href='index_administrador.php'" >Back</button>
				</div>
			</div>
			
		</div>
    </body>
</html>