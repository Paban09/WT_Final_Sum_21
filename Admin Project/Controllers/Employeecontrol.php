 <?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
    $E_phone="";
    $err_E_phone="";
    $err_db="";
    $E_id="";
     $err_E_id="";

	$hasError = false;

    if(isset($_POST["AddEmployee"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }

	    if(empty($_POST["E_phone"])){
		    $err_name = "Phone number Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		
		if(!$hasError){
			$rs = insertemployee($name,$E_phone,$E_id);
			if($rs === true){
				header("Location: AllEmployee.php");
			}
			$err_db = $rs;
		}
	}


    elseif(isset($_POST["DeleteEmployee"])){
		if(empty($_POST["E_id"])){
		    $err_E_id = "ID Required!";
			$hasError = true;
	    }
		else{
		    $name = $_POST["Id"];
		}

if(!$hasError){
			$rs = DeleteEmployee($E_id);
			if($rs === true){
				header("Location: AllEmployee.php");
			}
			$err_db = $rs;
		}

	    
	    }

	
	
	function insertemployee($name,$E_phone,$E_id){
		$query = "insert into employee values ('$name','$E_phone','Null')";
		return execute($query);
	}
	
	function getemployee(){
		$query="select * from employee";
		$rs = get($query);
		return $rs;
	}

	function deleteemployee($E_id){
		$query="delete from employee where E_id=$E_id";
		$rs = execute($query);
		return $rs;
	}

	function getemployees($E_id){
		$query="select * from employee where E_id=$E_id";
		$rs = get($query);
		return $rs[0];
	}
	
	
?>