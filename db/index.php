<?php
	include 'db_config.php';
	if($conn){
		//echo "connected";
		$query="insert into user values(NULL,'Faruk Hauqe','faruk','3456')";
		//$query="insert into user values(NULL,'Faruk Hauqe','faruk','3456','dsfs')";
		/*if(mysqli_query($conn,$query)){
			echo "row inserted";
		}
		else{
			//echo "not inserted";
			//echo mysqli_error($conn);
			if (mysqli_errno($conn)=="1136"){
				echo"There may be prob with db insertion";
			}
		}*/
		
		//$query = "select * from user";
		$query = "select id,name from user";
		$result = mysqli_query($conn,$query);
		//var_dump($result);
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Id</th><th>Name</th>
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			//echo $row["id"]." ".$row["name"]."<br>";
			echo "<tr>";
				echo"<td>".$row["id"]."</td>";
				echo"<td>".$row["name"]."</td>";
				
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>