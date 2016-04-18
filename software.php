<?php
	//aqui importamos los archivos apra poder enviar emails
	require("mailphp/class.phpmailer.php");
	require("mailphp/class.smtp.php");
?>
<!DOCTYPE html>
<html>
   <head>
		<!-- aqui se incluye el archivo diseno.php-->
		<?php 
			include("diseno.php"); 
			cabecera();
		?>	
   </head>
   
   <body>  
		<div class="container">
            <img class="col-md-12" style =" width: 100%;" src="img/banner.png" >
			<?php  menuinicial("index.php","inactive","contact.php","inactive"); ?>	<!-- menu principal -->
			
			<!-- menu acordeon-->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default" >
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000">
						<div class="panel-heading">
							  <h4 class="panel-title">
								<strong>INFORMATION</strong>
							  </h4>
						</div>
					</a>
					<div id="collapseThree" class="panel-collapse collapse"style='background-color:black'>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12" style="-webkit-border-radius: 15px 15px 5px;background-image:url('img/881.png');">
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
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000">
						<div class="panel-heading">
							  <h4 class="panel-title">
								<strong>SOFTWARE REQUEST</strong>
							  </h4>
						</div>
					</a>
					<div id="collapseFour" class="panel-collapse collapse in"style='background-color:black'>
						<div class="panel-body">
							<div class="row">
								<div style="-webkit-border-radius: 15px 15px 5px;background-color:White;">
									<!-- aqui se envia el correo-->
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
													$mail->Host = "mail.gmail.com";
													$mail->Port = 465;
													 
													//Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
													$mail->Username = "jesusegarcia@gmail.com";
													$mail->Password = "su pasword";
													 
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
	<!-- pie de pagina-->
	<footer>
		<?php pie();?>
	</footer>
</html>
