<?php

class cargar {
	var $cn;		
	var $rs;		
	var $sql;

	function __construct($sql) {
		$this->sql=$sql;
		$this->cn = mysql_connect("localhost","vis11777_cloud","mysqladmin*01");
		mysql_select_db("vis11777_peau");
		$this->cargar();
	}

	function cargar() {
     	$this->rs=mysql_query($this->sql);
		header('Content-Type: text/xml');
		echo "<?xml version='1.0' encoding='ISO-8859-1' standalone='yes'?>\n";
		echo "<datos>\n";
		echo "<descri>Seleccione</descri>";
		while (list($descri) = mysql_fetch_row($this->rs))
		{
			echo "<descri>$descri</descri>\n";
		}
		echo "</datos>\n";
	}

	function __destruct() {
   	mysql_close($this->cn);
	}
}
extract($_GET);

if (isset($est)) 
{
	if($est=="Length"){$sql = "SELECT DISTINCT unidad FROM length ORDER BY unidad";}
	if($est=="Surface"){$sql = "SELECT DISTINCT unidad FROM surface ORDER BY unidad";}
	if($est=="Volume"){$sql = "SELECT DISTINCT unidad FROM volume ORDER BY unidad";}
	if($est=="weight"){$sql = "SELECT DISTINCT unidad FROM weight ORDER BY unidad";}
}elseif (isset($dm)) 
{
	if($dm=="cm" || $dm=="m" || $dm=="inch" || $dm=="foot" || $dm=="yard" || $dm=="mile"){$sql = "SELECT DISTINCT unidad FROM length ORDER BY unidad";}
	if($dm=="cm2" || $dm=="m2" || $dm=="inch2" || $dm=="foot2" || $dm=="yard2" || $dm=="mile2"){$sql = "SELECT DISTINCT unidad FROM surface ORDER BY unidad";}
	if($dm=="cm3" || $dm=="l" || $dm=="m3" || $dm=="inch3" || $dm=="foot3" || $dm=="gallon"){$sql = "SELECT DISTINCT unidad FROM volume ORDER BY unidad";}
	if($dm=="gr" || $dm=="kg" || $dm=="oz" || $dm=="lb" || $dm=="ton_metric" || $dm=="ton_short"){$sql = "SELECT DISTINCT unidad FROM weight ORDER BY unidad";}
}
else {
	$sql = "SELECT unidad FROM unidades";
}

$clCar = new cargar($sql);

?>