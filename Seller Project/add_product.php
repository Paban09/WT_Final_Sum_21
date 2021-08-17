<?php include 'C:\xampp\htdocs\WT_Final\Seller Project\controller/product_controller.php'; ?>

<html>
    <head></head>
	
	<body>
	    <div align="center">
		    <h3>Add Product</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action=""  method="post">
			    <div>
				    <h4>Product Name:</h4>
					<input  type = "text" name = "p_name" value="<?php echo $p_name; ?>"/>
					<span > <?php echo $err_p_name; ?> </span>
				</div>
				
				<div>
				    <h4>Product Price:</h4>
					<input  type = "text" name = "p_price" value="<?php echo $p_price; ?>"/>
					<span > <?php echo $err_p_price; ?> </span>
				</div>
				
				<div>
				    <h4>Product Quantity:</h4>
					<input  type = "text" name = "p_quantity" value="<?php echo $p_quantity; ?>"/>
					<span > <?php echo $err_p_quantity; ?> </span>
				</div>
				
				<div>
				    <h4>Shop ID:</h4>
					<input  type = "text" name = "sh_id" value="<?php echo $sh_id; ?>"/>
					<span > <?php echo $err_sh_id; ?> </span>
				</div>
				
				<div>
					<input type = "submit" name = "add_product" value = "Add" />
				</div>
			</form>
		</div>
	</body>
    
</html>