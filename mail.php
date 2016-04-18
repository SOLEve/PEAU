<?php 
 
require("mailphp/class.phpmailer.php");
require("mailphp/class.smtp.php");
include("librerias.php");

$consulta="SELECT login,clave FROM usuario";
$res=consultar($consulta);
$fila=mysql_fetch_array($res);
								
//Especificamos los datos y configuración del servidor
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
 
//Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
$mail->Username = "jesusegarcia@gmail.com";
$mail->Password = "xxxxx";
 
//Agregamos la información que el correo requiere
$mail->From = "jesusegarcia@gmail.com";
$mail->FromName = "Administrator";
$mail->Subject = "Recovery Password";
$mail->AltBody = "";
$mail->MsgHTML("<h1>Your username is: ".$fila[0]." <br>Your password is: ".$fila[1]."</h1>");
//$mail->AddAttachment("adjunto.txt");
$mail->AddAddress("jesusegarcia@gmail.com", "Usuario Prueba");
$mail->IsHTML(true);
 
//Enviamos el correo electrónico
$mail->Send();
echo "<script lenguaje=\"JavaScript\">window.close();</script>";
?>