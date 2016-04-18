    <form  method="post"  action="#"enctype="multipart/form-data" class="form-horizontal" >
	<strong>Title: </strong><input type="text" name="titulo">
	<strong>PDF: </strong><input type="file" name="pdf">
	<button type="submit" name="b_agregar" class="btn-danger">SEND</button>      
      <?php
        if(isset($_POST["b_agregar"]))
        {
			include("pdf2.php");
		}              
		?>        
    </form>