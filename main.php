<?php 
 
    require_once("connection.php");
    $query = " select * from register ";
    $result = mysqli_query($connection,$query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$Username = $row['username'];
	}
 
?>

<html>
	<head>
		<title>
			Home Page
		</title>
		
		<style>
			body{
				font-weight: bold;
				background-image: url('blue1.jpg');
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
			
			.logout_button {
				border: none;
				border-radius: 5px;
				display: inline-block;
				padding: 15px;
				color: white;
				background-color: red;
				text-align: center;
				width: 10%;
			}
			
			.button {
				border: none;
				border-radius: 5px;
				display: inline-block;
				padding: 15px;
				color: white;
				background-color: green;
				text-align: center;
				width: 30%;
			}
		</style>
		
		<script>
		</script>
	</head>
	
	<body>
		
		<h1 style = "text-align:center"><b><font size = "7px">WELCOME</font></b></h1><br>
		<p><button class="logout_button" onClick = "location.href = 'logout.php';"><b>Log Out</b></button></p>
		
		<h2 style="text-align:center">QUIZZES</h2>
		
		<div class="card">
				  
			<div class="container">
				<h2>General Knowledge Quiz</h2> 
				<h3>10 Questions</h3>
				<p><button class="button" onClick = "location.href = 'test1.php';"><b>Start</b></button></p>
			</div>
					
		</div>
		
		<br><br><br><br>
		
		<div class="card">
				  
			<div class="container">
				<h2>English Quiz</h2> 
				<h3>10 Questions</h3>
				<p><button class="button" onClick = "location.href = 'test2.php';"><b>Start</b></button></p>
			</div>
					
		</div>
		
		<br><br><br><br>
		
		<div class="card">
				  
			<div class="container">
				<h2>Science Quiz</h2> 
				<h3>10 Questions</h3>
				<p><button class="button" onClick = "location.href = 'test3.php';"><b>Start</b></button></p>
			</div>
					
		</div>
	</body>
</html>