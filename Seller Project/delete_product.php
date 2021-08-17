<?php include 'C:\xampp\htdocs\WT_Final\Seller Project\controller/product_controller.php'; ?>

<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Delete Product : </h3>
			
			<form action="" method="post">
			    <div>
				    <h4>Product Name:</h4>
					<input type = "text" name = "p_name" value="<?php echo $p_name; ?>"/>
					<span> <?php echo $err_p_name; ?> </span>
				</div>
				
					<input type = "submit" name = "delete_product" value = "Delete" />
				</div>
			</form>
		</div>
	</body>
    
</html>