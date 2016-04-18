    <?php
            $nombrefoto=$_FILES['foto']['name'];
            $ruta=$_FILES['foto']['tmp_name'];
            $destino = "img/".$nombrefoto;
            copy($ruta,$destino);
            $insertar="insert into imagenes set ruta='$nombrefoto'";
			actualizar_bd($insertar);             
    ?>