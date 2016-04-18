    <?php
			//include("librerias.php");
            $nom=$_POST['titulo'];
			$nombrefoto=$_FILES['pdf']['name'];
            $ruta=$_FILES['pdf']['tmp_name'];
            $destino = "pdf/".$nombrefoto;
            copy($ruta,$destino);
            $insertar="INSERT INTO pdf (ruta,Titulo) VALUES ('$nombrefoto','$nom')";
			if (!actualizar_bd($insertar)) 
			{
					  echo "<div class=\"alert alert-error\">";
					  echo "Error! the record is not created!".$insertar;
					echo "</div>";
			}
			else
			{
					echo "<div class=\"alert alert-success\">";
					echo "Success! the record has been created!";
					echo "</div>";
			}     
    ?>