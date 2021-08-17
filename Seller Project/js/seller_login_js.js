<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("s_name").value == ""){
				hasError = true;
				get("err_s_name").innerHTML = "*Name Req";
			}
			else if(get("s_name").value.length <=6){
				hasError = true;
				get("err_s_name").innerHTML = "*Name must be 6 characters";
			}
			
			if(get("s_password").value == ""){
				hasError = true;
				get("err_s_password").innerHTML = "*pass Req";
			}
			else if(get("s_password").value.length <=8){
				hasError = true;
				get("err_s_password").innerHTML = "*Name must be 8 characters";
			}
			return !hasError;
		}
		
		function refresh(){
			hasError = false;
			get("err_s_name").innerHTML ="";
			get("err_s_password").innerHTML ="";
		}
			
    </script>