<?php
	if($_POST['select0']=="1")
	{
		if(($_POST['inputV']!="0")&&($_POST['inputV']!=""))
		{
			if($_POST['select1']=='0')
			{
				$a=$_POST['inputV'];
				$H= sqrt ((pow(16,2)+pow(9,2)));
				$c= (16*$a)/$H;
				$b= (9*$a)/$H;			
				
				$c = number_format($c,3, '.', '.');
				$b = number_format($b,3, '.', '.');
				echo"<div class='alert alert-info'>Image Diagonal= ".$a." inch</div>";
				echo"<div class='alert alert-info'>Image Height= ".$b." inch</div>";
				echo"<div class='alert alert-info'>Image Length= ".$c." inch</div>";
			}
			
			if($_POST['select1']=='1')
			{
				$b=$_POST['inputV'];
				$H= sqrt ((pow(16,2)+pow(9,2)));				
				$a= ($b*$H)/9;	
				$c= (16*$a)/$H;		
				
				$c = number_format($c,3, '.', '.');
				$a = number_format($a,3, '.', '.');
				echo"<div class='alert alert-info'>Image Diagonal= ".$a." inch</div>";
				echo"<div class='alert alert-info'>Image Height= ".$b." inch</div>";
				echo"<div class='alert alert-info'>Image Length= ".$c." inch</div>";
			}				
			
			if($_POST['select1']=='2')
			{
				$c=$_POST['inputV'];
				$H= sqrt ((pow(16,2)+pow(9,2)));				
				$a= ($c*$H)/16;	
				$b= (9*$a)/$H;		
				
				$b = number_format($b,3, ',', '.');
				$a = number_format($a,3, ',', '.');
				echo"<div class='alert alert-info'>Image Diagonal= ".$a." inch</div>";
				echo"<div class='alert alert-info'>Image Height= ".$b." inch</div>";
				echo"<div class='alert alert-info'>Image Length= ".$c." inch</div>";
			}			
		}else
		{
			echo"<div class='alert alert-error'>Error! there can be zero or empty fields.</div>";
		}
	}
	
	if($_POST['select0']=="0")
	{
		if(($_POST['inputV']!="0")&&($_POST['inputV']!=""))
		{
			if($_POST['select1']=='0')
			{
				$a=$_POST['inputV'];
				$H= sqrt ((pow(4,2)+pow(3,2)));
				$c= (4*$a)/$H;
				$b= (3*$a)/$H;			
				
				$c = number_format($c,3, ',', '.');
				$b = number_format($b,3, ',', '.');
				echo"<div class='alert alert-info'>Image Diagonal= ".$a." inch</div>";
				echo"<div class='alert alert-info'>Image Height= ".$b." inch</div>";
				echo"<div class='alert alert-info'>Image Length= ".$c." inch</div>";
			}
			
			if($_POST['select1']=='1')
			{
				$b=$_POST['inputV'];
				$H= sqrt ((pow(4,2)+pow(3,2)));				
				$a= ($b*$H)/3;	
				$c= (4*$a)/$H;		
				
				$c = number_format($c,3, ',', '.');
				$a = number_format($a,3, ',', '.');
				echo"<div class='alert alert-info'>Image Diagonal= ".$a." inch</div>";
				echo"<div class='alert alert-info'>Image Height= ".$b." inch</div>";
				echo"<div class='alert alert-info'>Image Length= ".$c." inch</div>";
			}				
			
			if($_POST['select1']=='2')
			{
				$c=$_POST['inputV'];
				$H= sqrt ((pow(4,2)+pow(3,2)));				
				$a= ($c*$H)/4;	
				$b= (3*$a)/$H;		
				
				$b = number_format($b,3, ',', '.');
				$a = number_format($a,3, ',', '.');
				echo"<div class='alert alert-info'>Image Diagonal= ".$a." inch</div>";
				echo"<div class='alert alert-info'>Image Height= ".$b." inch</div>";
				echo"<div class='alert alert-info'>Image Length= ".$c." inch</div>";
			}			
		}else
		{
			echo"<div class='alert alert-error'>Error! there can be zero or empty fields.</div>";
		}
	}
?>