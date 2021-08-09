<html>
	<body>
		<h1>This is a html</h1>
		<button onclick='viewJS()'>Click Me to Run JS</button>
		<p id= "p1" ></p>
		
		
		<button id="btn_g" onclick="viewGForm()">Login With Google</button>
		<form id= "g_form" style="display:none;">
			<input type="text" placeholder="gmail"><br>
			<input type="password" placeholder="gmail password"><br>
						
		</form>
		
		
		<script>
			//document.write("This is from Js");
			//alert("Pabon is Boss");
			function viewJS(){
			var p = document.getElementById("p1");
			p.innerHTML="Pabon always will be boss";
			p.style.color="red";
			p.style.margin="50px";
			p.style.backgroundColor="green";
			p.style.borderRadius="3px";
			p.style.padding="5px";
			}
			
			var gForm= false;
			function get(id){
				return document.getElementById(id);
			}
			function viewGForm(){
				var g_f= get("g_form");
				var btn_g= get("btn_g");
				if(gForm){
					g_f.style.display="none";
				gForm = false;
				btn_g.innerHTML="Login With Google";
				}
				else{
				g_f.style.display="block";
				gForm = true;
				btn_g.innerHTML="Hide Google Form";
			}
		}
			
		</script> 
	</body>
</html> 