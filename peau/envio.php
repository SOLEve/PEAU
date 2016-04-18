<?php 
	if($_POST['hiden']=="3")
	{
		if(($_POST['inputHV']!="")&& ($_POST['inputLF']!=""))
		{
			if($_POST['select3']=='0')
			{
				if($_POST['optionsRadios']=='H')
				{
					$H=$_POST['inputHV'];
					$F=$_POST['inputLF'];
					$D=(($H*$F)/2.952);
					$D =round($D, 2);
					$D = number_format($D,2, '.', '.');
					echo"<div class='alert alert-info'>
					Distance to place camera=".$D."
					</div>";
				}
				
				if($_POST['optionsRadios']=='V')
				{
					$V =$_POST['inputHV'];
					$F =$_POST['inputLF'];													
					$D =(($V*$F)/3.984);
					$D =round($D, 2);
					$D = number_format($D,2, '.', '.');
					echo"<div class='alert alert-info'>
					Distance to place camera=".$D."
					</div>";
				}
				
			}
									
			if($_POST['select3']=='1')
			{
			
				if($_POST['optionsRadios']=='H')
				{
					$H=$_POST['inputHV'];
					$F=$_POST['inputLF'];
					$D=(($H*$F)/4.686);
					$D =round($D, 2);
					$D = number_format($D,2, '.', '.');
					echo"<div class='alert alert-info'>
					Distance to place camera=".$D."
					</div>";
				}
				
				if($_POST['optionsRadios']=='V')
				{
					$V =$_POST['inputHV'];
					$F =$_POST['inputLF'];													
					$D =(($V*$F)/6.248);
					$D =round($D, 2);
					$D = number_format($D,2, '.', '.');
					echo"<div class='alert alert-info'>
					Distance to place camera=".$D."
					</div>";
				}
			}
								
									
			}else
				{
					echo"<div class='alert alert-error'>
							 Error! there can be no empty fields
						</div>";
				}
	}
							
	if($_POST['hiden']=="2")
	{
		if($_POST['inputLF']!="")
		{
			if($_POST['select2']=='0')
			{			
				$F    = $_POST['inputLF'];
				$HFOV = (3.984/$F);
				$HFOV = ($HFOV*360)/(2*3.1416);
				$HFOV = round($HFOV, 2);
				$HFOV = number_format($HFOV,2, '.', '.');
				echo"<div class='alert alert-info'>
				 Horizontal Field of View=".$HFOV." degrees
				</div>";
			}
									
			if($_POST['select2']=='1')
			{
				if($_POST['optionsRadios']=='F')
				{
					$F    = $_POST['inputLF'];
					$HFOV = (6.248/$F);
					$HFOV = ($HFOV*360)/(2*3.1416);
					$HFOV = round($HFOV, 2);
					$HFOV = number_format($HFOV,2, '.', '.');
					echo"<div class='alert alert-info'>
							Horizontal Field of View=".$HFOV." degrees
						</div>";
				}
				if($_POST['optionsRadios']=='R')
				{
					$F    = $_POST['inputLF'];
					$HFOV = (2*tanh(6.248/$F*2));
					$HFOV = ($HFOV*360)/(2*3.1416);
					$HFOV = round($HFOV, 2);
					$HFOV = number_format($HFOV,2, '.', '.');
					echo"<div class='alert alert-info'>
							Horizontal Field of View=".$HFOV." degrees
						</div>";
				}

			}								
		}else
		{
			echo"<div class='alert alert-error'>
				Error! there can be no empty fields
				</div>";
		}
	}

	if($_POST['hiden']=="1")
	{
		if(($_POST['inputHV']!="")&& ($_POST['inputD']!=""))
		{
			if($_POST['select1']=='0')
			{
				if($_POST['optionsRadios']=='H')
				{
					$H =$_POST['inputHV'];
					$D =$_POST['inputD'];
					$F =2.952*($D/$H);
					$F =round($F, 2);
					$F = number_format($F,2, '.', '.');
					echo"<div class='alert alert-info'>
							Lens Recommended=".$F." mm
							</div>";
				}
				
				if($_POST['optionsRadios']=='V')
				{
					$V =$_POST['inputHV'];
					$D =$_POST['inputD'];								
					$F =3.984*($D/$V);
					$F =round($F, 2);
					$F = number_format($F,2, '.', '.');
					echo"<div class='alert alert-info'>
							Lens Recommended=".$F." mm
							</div>";
				}
			}
									
			if($_POST['select1']=='1')
			{
				if($_POST['optionsRadios']=='H')
				{
					$H =$_POST['inputHV'];
					$D =$_POST['inputD'];
					$F =4.686*($D/$H);
					$F =round($F, 2);
					$F = number_format($F,2, '.', '.');
					echo"<div class='alert alert-info'>
							Lens Recommended=".$F." mm
							</div>";
				}
				
				if($_POST['optionsRadios']=='V')
				{
					$V=$_POST['inputHV'];
					$D=$_POST['inputD'];								
					$F =6.248*($D/$V);
					$F =round($F, 2);
					$F = number_format($F,2, '.', '.');
					echo"<div class='alert alert-info'>
							Lens Recommended=".$F." mm
							</div>";
				} 
			}
		}else
			{
				echo"<div class='alert alert-error'>
					Error! there can be no empty fields
					</div>";
			}
	}
?>