<?php
	 include 'C:\xampp\htdocs\WT_Final\Practice\model/DBConfig.php';
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	$hasError=false;
	$err_db="";
	
if	(isset($_POST["login"]))
{
	if (strlen($_POST["username"])<6)

			{   $hasError=true;
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{    $hasError=true;
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}

         
if(empty($_POST["password"]))
{
			$hasError = true;
			$err_password = "Password Required";
		
}
			elseif (strlen($_POST["password"])<8)
			{
				$hasError=true;
				$err_password="Password must contain at least 8 characters";
			}

			 elseif ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$hasError=true;
				$err_password="Password must contain at least 8 characters and 2 special character!";
				} 

				elseif(strpos($_POST["password"]," "))
			{    $hasError=true;
				$err_password="Space is not allowed!";
			}

			else
			{
				$password=$_POST["password"];
			}
			
			
			if(!$hasError){
			if(authenticateUser($username,$password)){
				header("Location: dashboard.php");
			}
			$err_db = "Invalid User!";
		  }
		  
}  
		  
		  function authenticateUser($username,$password){
		$query = "select * from login where username='$username' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			
			return true;
			
		}
		return false;
	}





	?>