<?php

	class cargar 
	{
		var $cn;		
		var $rs;		
		var $sql;

		//	funcion que se conecta con la base de datos
		function __construct($sql) 
		{
			$this->sql=$sql;
			$this->cn = mysql_connect("localhost","root","");
			mysql_select_db("peau");
			$this->cargar();
		}

		// funcion que carga el select
		function cargar() 
		{
			$this->rs=mysql_query($this->sql);
			header('Content-Type: text/xml');
			echo "<?xml version='1.0' encoding='ISO-8859-1' standalone='yes'?>\n";
			echo "<datos>\n";
			echo "<descri>Select</descri>";
			while (list($descri) = mysql_fetch_row($this->rs))
			{
				echo "<descri>$descri</descri>\n";
			}
			echo "</datos>\n";
		}
		
		//funcion que cierra la conexion
		function __destruct() 
		{
		mysql_close($this->cn);
		}
	}
	
	extract($_GET);

	//condiciones para cargar el 2do select dependiendo de la opcion del primer select
	if (isset($est)) 
	{
		$sql = "SELECT nombre FROM producto WHERE idtipo_producto='$est' ORDER BY nombre";
	}
	elseif (isset($dm)) 
	{
		$sql = "SELECT * FROM producto where idtipo_producto='$dm'";
	}else 
	{
		$sql = "SELECT idtipo_producto FROM tipo_producto WHERE tipo='procaps'";
	}

	$clCar = new cargar($sql);

?>