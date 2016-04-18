<?php
	require("mailphp/class.phpmailer.php");
	require("mailphp/class.smtp.php");
?>
<!DOCTYPE html>
<html>
   <head>
		<?php 
			include("diseno.php"); 
			cabecera();
		?>
		<link href="img/icono.ico" type="image/x-icon" rel="shortcut icon" /> 	
   </head>
   
   <body>  
		<div class="container">
            <img class="span12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?>	
			
			<div class="panel-group" id="accordion">
				<?php menu_acordeon("touch.php","procaps.php","#","calculator.php","triangle.php","units.php","lens.php"); ?>
					  
				<div class="panel panel-default" style='background-color:black'>
					<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong>INFORMATION</strong></a>
						  </h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="row">
								<div class="span12" style="-webkit-border-radius: 15px 15px 5px;background-image:url('img/881.png');">
									<div class="texto3">
										<p  id="estiloparticular"><b>Custom Software Request</b><br>If you are interested in a quote for some
											of our products, email us and we will respond.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><strong>SOFTWARE REQUEST</strong></a>
						  </h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="row">
								<div style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
									<form method="post"  action="#" >
										<div class="texto3">
											<?php 
												if(isset($_POST['b_consultar']))
												{ 
												//Especificamos los datos y configuración del servidor
													$mail = new PHPMailer();
													$mail->IsSMTP();
													$mail->SMTPAuth = true;
													$mail->SMTPSecure = "ssl";
													$mail->Host = "smtp.gmail.com";
													$mail->Port = 465;
													 
													//Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
													$mail->Username = "jesusegarcia@gmail.com";
													$mail->Password = "masvalecholo";
													 
													//Agregamos la información que el correo requiere
													$mail->From = "jesusegarcia@gmail.com";
													$mail->FromName = $_POST['inputName'];
													$mail->Subject = "Software Request";
													$mail->AltBody = "";
													$mail->MsgHTML("<h3>".$_POST['inputBody']."</h3>");
													//$mail->AddAttachment("adjunto.txt");
													$mail->AddAddress("jesusegarcia@gmail.com", "Usuario Prueba");
													$mail->IsHTML(true);
													 
													//Enviamos el correo electrónico
													//$mail->Send();
													if(!$mail->Send()) 
													{
														echo "<div class=\"alert alert-error\">";
														echo "Error: " . $mail->ErrorInfo;
														echo "</div>";
													  
													} else 
													{
														echo "<div class=\"alert alert-success\">";
														echo "Success! The email has been sent!";
														echo "</div>";
													}
												}
											?>
											<fieldset>
											<legend>Peau Productions LLC</legend>
											<label>Name: </label>
											<input type="text" name="inputName" class="form-control" placeholder="Type name...">
											<br>
											<label>Text: </label>
											<textarea class="form-control" rows="3" name="inputBody"></textarea>
											<br>
											<button type="submit" name="b_consultar" class="btn btn-primary">SEND</button>
											</fieldset>
										</div>
									</form>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>   
	<footer>
		<?php pie();?>
	</footer>
</html>
