 <?php
    include 'C:\xampp\htdocs\WT_Final\Seller Project\model/DBConfig.php';
    $p_id="";
	$err_p_id="";
	
	$sh_id="";
	$err_sh_id="";
	
	$p_name="";
    $err_p_name="";
	
    $p_quantity="";
    $err_p_quantity="";
	
	$p_price="";
    $err_p_price="";
	
    $err_db="";    
	$hasError = false;

    if(isset($_POST["add_product"])){
		if(empty($_POST["p_name"])){
		    $err_p_name = "Product Name Required!";
			$hasError = true;
	    }
		else{
		    $p_name = $_POST["p_name"];
	    }

	    if(empty($_POST["p_quantity"])){
		    $err_p_quantity = "Product quantity Required!!";
			$hasError = true;
	    }
		else{
		    $p_quantity = $_POST["p_quantity"];
	    }
		
		 if(empty($_POST["p_price"])){
		    $err_p_price = "Product quantity Required!";
			$hasError = true;
	    }
		else{
		    $p_price = $_POST["p_price"];
	    }
		
		
		if(empty($_POST["sh_id"])){
		    $err_sh_id = "Shop Id!!";
			$hasError = true;
	    }
		else{
		    $sh_id = $_POST["sh_id"];
	    }
		
		if(!$hasError){
			$rs = insert_product($p_name,$p_quantity,$sh_id,$p_price,$p_id);
			if($rs === true){
				header("Location: view_all_product.php");
			}
			$err_db = $rs;
		}
	}
	
	elseif(isset($_POST["delete_product"])){
		if(empty($_POST["p_name"])){
		    $err_p_name = "Product Name Required!";
			$hasError = true;
	    }
		else{
		    $p_name = $_POST["p_name"];
	    }

		
		if(!$hasError){
			$rs = delete_product($p_name);
			if($rs === true){
				header("Location:  view_all_product.php");
			}
			$err_db = $rs;
		}
	}

					
	function insert_product($p_name,$p_quantity,$sh_id,$p_price,$p_id){
		$query = "INSERT INTO `product`(`p_name`, `p_quantity`,`sh_id`,`p_price`,`p_id`) VALUES ('$p_name','$p_quantity','$sh_id','$p_price',Null)";
		return execute($query);
	}
	
	function delete_product($p_name){
		$query="DELETE FROM product WHERE p_name='$p_name'";		
		$rs = execute($query);
		
		return $rs;
	}

	
?>