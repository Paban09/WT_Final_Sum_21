<?php
	 include 'C:\xampp\htdocs\WT_Final\Seller Project\model/DBConfig.php';
	$s_name="";
	$err_s_name="";
	
	$hasError=false;
	$err_db="";
	
if	(isset($_POST["forget_seller_password"]))
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
				
			}
			if(!$hasError){
			if(authenticateUser($s_name)){
				header("Location: update_seller.php");
			}
			$err_db = "Invalid User!";
		  }
		  
}  

 function authenticateUser($s_name){
		$query = "select * from seller where s_name='$s_name'";
		$rs = get($query);
		if(count($rs)>0){
			
			return true;
			
		}
		return false;
	}


	?>