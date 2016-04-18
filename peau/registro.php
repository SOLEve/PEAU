<?php
	include("librerias.php");
	//variables POST
	$nom=$_POST['nombre'];

	//registra los datos del empleados
	$id= $_GET["id"];
	
	if($id==1){$ape=$_POST['apellido'];$insertar="INSERT INTO frames (nombre, descripcion) VALUES ('$nom', '$ape')";}
	
	if($id==2){$insertar="INSERT INTO included (descripcion) VALUES ('$nom')";}
	
	if($id==3){$insertar="INSERT INTO n_point (numero) VALUES ('$nom')";}
	
	if($id==4){$ape=$_POST['apellido'];$insertar="INSERT INTO descripcion (Titulo, descripcion) VALUES ('$nom', '$ape')";}
	
	if($id==5){$insertar="INSERT INTO so (descripcion) VALUES ('$nom')";}
	
	if($id==6){$ape=$_POST['apellido'];$insertar="INSERT INTO touch (nombre_touch, descripcion_touch) VALUES ('$nom', '$ape')";}
	
	if($id==7){$ape=$_POST['apellido'];$insertar="INSERT INTO videos (ruta,titulo) VALUES ('$nom','$ape')";}
	
	if($id==8)
	{
		
		$ape=$_POST['apellido'];
		mkdir("img/".$ape);
		$nombrefoto=$_FILES['nombre']['name'];		
		$ruta=$_FILES['nombre']['tmp_name'];        
		copy($ruta,$destino);
		
		//$insertar="INSERT INTO imagenes (ruta) VALUES ('$nombrefoto')";
	}
	
	if($id==9){$insertar="INSERT INTO frames (nombre, descripcion) VALUES ('$nom', '$ape')";}
	
	if($id==10){$insertar="INSERT INTO frames (nombre, descripcion) VALUES ('$nom', '$ape')";}
	
	if (!actualizar_bd($insertar)) 
    {
              echo "<div class=\"alert alert-error\">";
              echo "Error! the record is not created!";
            echo "</div>";
    }
    else
    {
            echo "<div class=\"alert alert-success\">";
			echo "Success! the record has been created!";
            echo "</div>";
	}

	if($id==1)
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
			
	if($id==2)
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
		
	if($id==3)
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
	
	if($id==4)
	{
		echo"<div id=\"resultado\" style=\"background-color:White;\" >
			<table style=\"color:#000099;background-color:White;\">
				<tr style=\"background:#4c8bff;\">
					<td>Title</td>
					<td>Description</td>
				</tr>";						
				$consulta="SELECT * FROM descripcion";
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
	
	if($id==5)
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
	
	if($id==6)
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
	
	if($id==7)
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
	?>
	