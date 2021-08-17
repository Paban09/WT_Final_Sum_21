<?php session_start(); ?>
<?php
	 include 'C:\xampp\htdocs\WT_Final\Seller Project\model/DBConfig.php';
	$s_name="";
	$err_s_name="";
	
	$s_password="";
	$err_s_password="";
	$hasError=false;
	$err_db="";
	
if	(isset($_POST["seller_login"]))
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
				$_SESSION['name']=$_POST["s_name"];
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
			}
			
			
			if(!$hasError){
			if(authenticateUser($s_name,$s_password)){
				header("Location: seller_dashboard.php");
			}
			$err_db = "Invalid User!";
		  }
		  
}  
		  
		  function authenticateUser($s_name,$s_password){
		$query = "select * from seller where s_name='$s_name' and s_password='$s_password'";
		$rs = get($query);
		if(count($rs)>0){
			
			return true;
			
		}
		return false;
	}





	?>