<?php session_start(); ?>
<?php
	include 'C:\xampp\htdocs\WT_Final\Seller Project\model/DBConfig.php';
	$conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
	if($conn){
	$query = "select p_id,p_name,p_quantity,p_price,sh_id from product";
	$result = mysqli_query($conn,$query);
		//var_dump($result);
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Product Id</th><th>Product Name</th><th>Product Quantity</th><th>Product price</th><th>Shop ID</th>
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			
			echo "<tr>";
				echo"<td>".$row["p_id"]."</td>";
				echo"<td>".$row["p_name"]."</td>";
				echo"<td>".$row["p_quantity"]."</td>";
				echo"<td>".$row["p_price"]."</td>";
				echo"<td>".$row["sh_id"]."</td>";
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>
