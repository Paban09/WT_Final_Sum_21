<?php session_start(); ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Seller Dashboard</h3>
			<tr>
				
				<h2><?php echo "Welcome ".$_SESSION['name']." to your Seller Page"?></h2>
				<td><button><a target="_blank" href="Home.php" >logout </a></button>
				<td><button><a target="_blank" href="update_seller.php" >update</a></button>
				<td><button><a target="_blank" href="view_all_seller.php" >all seller</a></button>
				<td><button><a target="_blank" href="view_all_product.php" >own shop</a></button>
			</tr>
		</div>
		

	</body>
    <?php include 'main_footer.php'?>
</html>