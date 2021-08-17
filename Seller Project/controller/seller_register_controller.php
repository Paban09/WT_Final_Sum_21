<?php
	 include 'C:\xampp\htdocs\WT_Final\Seller Project\model/DBConfig.php';
	$s_name="";
	$err_s_name="";
	
	$s_password="";
	$err_s_password="";
	$hasError=false;
	$err_db="";
	
if	(isset($_POST["seller_register"]))
{
	if (strlen($_POST["s_name"])<6)

			{   $hasError=true;
				$err_s_name="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["s_name"]," "))
			{    $hasError=true;
				$err_s_name="Space is not allowed!";
			}
			else
			{
				$s_name=$_POST["s_name"];
				setcookie("s_name","$s_name",time()+60);
			}

         
if(empty($_POST["s_password"]))
{
			$hasError = true;
			$err_s_password = "Password Required";
		
}
			elseif (strlen($_POST["s_password"])<8)
			{
				$hasError=true;
				$err_s_password="Password must contain at least 8 characters";
			}

			 elseif ((!strpos($_POST["s_password"],"2"))||(!strpos($_POST["s_password"],"3")))
				{
				$hasError=true;
				$err_s_password="Password must contain at least 8 characters and 2 special character!";
				} 

				elseif(strpos($_POST["s_password"]," "))
			{    $hasError=true;
				$err_s_password="Space is not allowed!";
			}

			else
			{
				$s_password=$_POST["s_password"];
				setcookie("s_password","$s_password",time()+60);
			}
			
			$query = "INSERT INTO `seller`(`s_name`, `s_password`) VALUES ('$s_name','$s_password')";
			if(!$hasError){
				
				if(!$hasError){
				$rs = execute($query);
				$err_db = "Invalid";
				header("Location: seller_login.php");
				}else{
				$err_db = "Invalid";
				} 
		  }
		  
}  
		  
		





	?>