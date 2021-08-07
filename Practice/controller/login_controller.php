<?php
	
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	$hasError=false;
	
if	($_SERVER["REQUEST_METHOD"]=="POST")
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
				$err_password="Password must contain at least 8 characters and 1 special character!";
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
			
				header("Location: dashboard.php");
			}
/*echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
*/
}


	?>