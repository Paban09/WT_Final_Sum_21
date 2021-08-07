<?php include 'C:\xampp\htdocs\WT_Final\Practice\controller/login_controller.php'; ?>
<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b>Log in Pannel</b></h1></legend>
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
			   
			   <td>
			   <input type="Submit" name="submit" value="confirm">
			   
				
				
				</td>
				</tr>

				</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
				
				