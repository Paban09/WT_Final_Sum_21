<?php include 'C:\xampp\htdocs\WT_Final\js validation\controller/registerController.php'; ?>

<html>	
	<head>
		<h1> Club Member Registration </h1>
	</head>
	<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length <=6){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 6 characters";
			}
			return !hasError;
		}
		
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			
		}
			
    </script>
	<body>
		<form action="" onsubmit="return validate()"  method="post">
			<table>
				
				<tr>
					<td align="right">Name</td>
					<td>:<input id="name" name="name" value="<?php echo $name;?>" type="text"><br>
					<span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text" placeholder="Enter Username"> <br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				
				

				<tr>
					<td align="right">Address</td>
					<td>:<input name="address" value="<?php echo $address;?>" type="text" placeholder="street Address"> <br>
					<span><?php echo $err_address;?></span></td>
				</tr>


				
				
			

				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				
				
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" name="signup" value="Register"></td>
				</tr>
				
			</table>
		</form>
	</body>
</html>
