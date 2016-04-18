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
	$sql = "SELECT DISTINCT nombre FROM producto WHERE idtipo_producto='$est' ORDER BY nombre";
}
elseif (isset($dm)) {
	$sql = "SELECT * FROM producto  where idtipo_producto='$dm'";
}else {
	$sql = "SELECT idtipo_producto FROM tipo_producto WHERE tipo='touch'";
}

$clCar = new cargar($sql);

?>