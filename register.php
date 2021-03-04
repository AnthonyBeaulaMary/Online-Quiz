<html>
	<head>
		<title>
			Registration
		</title>
		
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
				background-color: black;
			}
			
			.register_container {
				padding: 16px;
				background-color: white;
			}
			
			input[type=text], input[type=password] {
				width: 100%;
				padding: 15px;
				margin: 5px 0 22px 0;
				display: inline-block;
				border: none;
				background: #f1f1f1;
			}
			
			input[type=text]:focus, input[type=password]:focus {
				background-color: #ddd;
				outline: none;
			}
			
			.registerbtn {
				background-color: #4CAF50;
				color: white;
				padding: 16px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
				opacity: 0.9;
			}

			.registerbtn:hover {
				opacity: 1;
			}
			
			.login_container {
				background-color: #f1f1f1;
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<form action="insert_register.php" method = "post">
		
		  <div class="register_container">
		  
			<h1>Register</h1>
			<p>Please fill in this form to create an account.</p>
			<hr>

			<label><b>User name</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>
			
			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<label><b>Confirm Password</b></label>
			<input type="password" placeholder="Confirm Password" name="confirmPassword" required>
			
			<button name="submit" class="registerbtn">Register</button>
		  </div>
		  
		  <div class="login_container">
			<p>Already have an account? <a href="index.php">Sign in</a>.</p>
		  </div>
		</form>

	</body>
</html>