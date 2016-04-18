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
		if($est=="length"){$sql = "SELECT DISTINCT unidad FROM length ORDER BY unidad";}
		if($est=="surface"){$sql = "SELECT DISTINCT unidad FROM surface ORDER BY unidad";}
		if($est=="volume"){$sql = "SELECT DISTINCT unidad FROM volume ORDER BY unidad";}
		if($est=="weight"){$sql = "SELECT DISTINCT unidad FROM weight ORDER BY unidad";}
	}elseif (isset($dm)) 
	{
		if($dm=="cm" || $dm=="m" || $dm=="inch" || $dm=="foot" || $dm=="yard" || $dm=="mile"){$sql = "SELECT DISTINCT unidad FROM length ORDER BY unidad";}
		if($dm=="cm2" || $dm=="m2" || $dm=="inch2" || $dm=="foot2" || $dm=="yard2" || $dm=="mile2"){$sql = "SELECT DISTINCT unidad FROM surface ORDER BY unidad";}
		if($dm=="cm3" || $dm=="l" || $dm=="m3" || $dm=="inch3" || $dm=="foot3" || $dm=="gallon"){$sql = "SELECT DISTINCT unidad FROM volume ORDER BY unidad";}
		if($dm=="gr" || $dm=="kg" || $dm=="oz" || $dm=="lb" || $dm=="ton_metric" || $dm=="ton_short"){$sql = "SELECT DISTINCT unidad FROM weight ORDER BY unidad";}
	}
	else 
	{
		$sql = "SELECT unidad FROM unidades";
	}

	$clCar = new cargar($sql);

?>