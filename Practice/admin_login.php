<?php include 'main_header.php'?>
<?php include 'C:\xampp\htdocs\WT_Final\Practice\controller/admin_controller.php'; ?>

	<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b> Admin Log in Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>

               

				<tr>
					<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" name="email" placeholder = "Enter your official email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>

				<tr>
					<td><span>Userid:</span></td>
					<td></td>
					<td><input type="text" name="Userid" placeholder = "Enter your official id" value="<?php echo $Userid;?>"> </td><td><span><?php echo $err_Userid;?></span></td>
				</tr>

				<tr>
				<td >
				<input type="Submit" name="submit" value="login">
				</td>
				</tr>
				
				</table>
	</fieldset>
		</form>
		</center>
	</body>
	
<?php include 'main_footer.php'?>
</html>
				
				