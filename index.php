<html>
	<head>
		<title>ABC School Online Quiz</title>
		
		<style>
			body{
				background-image: url(colors1.jpg);
				color: white;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			.card {
				box-shadow: 2px 4px 8px 5px rgba(0, 0, 0, 0.2);
				width: 60%;
				margin: auto;
				border-radius: 10px;
				background-color: white;
			}
			
			.container {
				padding: 20px 10px;
				text-align: center;
				color: black;
			}
			
			#login_button{
				background-color: #3498db;
				color: white;
				padding: 1px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 5px;
				cursor: pointer;
				width: 100%;
				size: 6px;
			}
			
			.login_modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}
			
			.login_form {
			  background-color: #fefefe;
			  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			  border: 1px solid #888;
			  width: 60%; /* Could be more or less, depending on screen size */
			}
			
			.login_container {
			  padding: 16px;
			}
			
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}
			
			#login_button2 {
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: auto;
				border-radius: 5px;
			}
			
			.cancel_button {
				width: auto;
				padding: 14px 20px;
				margin: 8px 0;
				cursor: pointer;
				background-color: #f44336;
				color: white;
				border: none;
				border-radius: 5px;
			}
		</style>
		
		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target === modal) {
				modal.style.display = "none";
			}
                };
		</script>
		
		<script>
			var myVar;

			function myFunction() {
			  myVar = setTimeout(showPage, 3000);
			}

			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("myDiv").style.display = "block";
			}
		</script>
	</head>
	
	<body onload="myFunction()">
	
		<br><h1 style = text-align:center><b><font size = "7px"><b>ABC School Online Quiz</b></font></b></h1><br><br>
		<div class = "card">
		<div class = "container">
		<h3 style = "color: black;">
			<center>Welcome Dear Students!<br><br>
		<h3/>	
		<h4 style = "color: black;">
			This platform is exclusively created for you people to undergo a online quiz.<br><br>
			Kindly register and login to take the test.</center>
		</h4>
		<br><br>
		<center><button id = "login_button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><h2>Login</h2></button></center>
		</div>
		</div>
		<div id="id01" class="login_modal">
			
			<form class="login_form" action="login_check.php" method="post">			
				<div class="login_container">
					
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="username">

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password">
						
					<button id = "login_button2" name="submit">Login</button>
									
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel_button">Cancel</button>
					
					<script type="text/javascript">
						document.getElementById("myButton").onclick = function () {
							location.href = "login-check.php";
						};
					</script>
					
					<h5 style = "color: black">If not registered  <a href="register.php">Register</a> here!</h5>
				</div>
			</form>
		</div>
	</body>
</html>