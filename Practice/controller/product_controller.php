<?php
	 include 'C:\xampp\htdocs\WT_Final\Practice\model/DBConfig.php';
	
	$p_name="";
	$err_p_name="";
		
	$p_quanity="";
	$err_p_quanity="";	
	
	
	
	$hasError=false;
	
	//if(isset($_POST["product"])){
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["p_name"])){
			$hasError=true;
			$err_p_name="Product Name Required";
		}
		elseif (strlen($_POST["p_name"]) <=6){
			$hasError = true;
			$err_p_name = "Name must be greater than 6 characters ";
		}
		else{
			$p_name = $_POST["p_name"];
		}
		
		if(!isset($_POST["p_quantity"])){
			$hasError = true;
			$err_p_quantity = "Quantity Required";
		}
		else{
			$p_quantity = $_POST["p_quantity"];
		}
		
	
		
		if(!$hasError){
			
			echo $_POST["p_name"]."<br>";
			echo $_POST["p_quanity"]."<br>";
			
			
			
		}
		
	}


?>
