<?php include 'C:\xampp\htdocs\WT_Final\Practice\controller/product_controller.php'; ?>
<html>
	<head>
		<title> Product </title>
	</head>
	<body>
	
		
	<form action="" method="post">
		<table>
			<tr>
				<td>
				<img src="Product.png"alt= "This is Product logo" width="150" height="130">
				</td>
				<td>
				<h2><span style="background-color:gold;color:black">Product</h2></span>
				</td>
			</tr>
			
			<tr>
					<td align="right">Product Name</td>
					<td>:<input name="p_name" value="<?php echo $p_name;?>" type="text"><br>
					<span><?php echo $err_p_name;?></span></td>
			</tr>
			
			<tr>
					<td align="right">Product Quantity</td>
					<td>:<input name="$p_quanity" value="<?php echo $p_quanity;?>" type="text"><br>
					<span><?php echo $err_p_quanity;?></span></td>
			</tr>
			
			
				
				
				
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="product"></td>
				</tr>
			
		</table>
	</form>
	</body>
</html>