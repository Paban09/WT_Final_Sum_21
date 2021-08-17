<?php include 'C:\xampp\htdocs\WT_Final\Seller Project\controller/forget_seller_password_controller.php'; ?>
<html>
	<head></head>
	<body>
		<center>
		<form action=""  method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b>Seller Forget Password Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="s_name" value="<?php echo $s_name;?>"> </td><td><span ><span><?php echo $err_s_name;?></span></td>
				</tr>
				<tr>
			   
			   <td>
			   <input type="Submit" name="forget_seller_password" value="confirm">
			   </td>
			   </tr>
			   </table>
	</fieldset>
		</form>
		</center>
	</body>
</html>