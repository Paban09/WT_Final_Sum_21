<?php
	
	$name="";
	$err_name="";
	
	$uname="";
	$err_uname="";
	
	$pass="";
	$err_pass="";

	$gender="";
	$err_gender="";	
		
	$address="";
	$err_address="";
	
	
	
	$hasError=false;
		
	
	if(isset($_POST["signup"])){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=6){
			$hasError = true;
			$err_name = "Name must be greater than 6 characters";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="Username Required";
		}
		elseif (strlen($_POST["uname"]) <=6){
			$hasError = true;
			$err_uname = "Name must be greater than 6 characters";
		}
		else{
			$uname = $_POST["uname"];
		}
	

		
		if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address Required";
		}
		
		else{
			$address = $_POST["address"];
		}
	

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}

		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["address"]."<br>";
					
			
			
		}
		
	}
	
?>

