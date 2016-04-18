    <form  method="post"  action="#"enctype="multipart/form-data" class="form-horizontal" >
	<strong>Image: </strong><input type="file" name="foto">
	<button type="submit" name="b_agregar" class="btn-danger">SEND</button>      
      <?php
        if(isset($_POST["b_agregar"]))
        {
			include("foto2.php");
		}              
		?>        
    </form>
