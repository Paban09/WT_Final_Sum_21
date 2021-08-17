<?php include 'C:\xampp\htdocs\WT_Final\Seller Project\controller/seller_register_controller.php'; ?>
<html>
	<head></head>
	<?php include 'C:\xampp\htdocs\WT_Final\Seller Project\js/seller_login_js.js'; ?>
	<body>
		<center>
		<form action="" onsubmit="return validate()" method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b>Seller Register Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input id="s_name" type="text" name="s_name" value="<?php echo $s_name;?>"> </td><td><span id="err_s_name"><span><?php echo $err_s_name;?></span></td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input id="s_password" type="password" name="s_password" value="<?php echo $s_password;?>"> </td><td><span id="err_s_password"><span><?php echo $err_s_password;?></span></td>
				</tr>

               <tr>
			   
			   <td>
			   <input type="Submit" name="seller_register" value="confirm">
			   </td>
			  
				</tr>

				</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
				
				