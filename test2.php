<script>
	sessionStorage.setItem('t1', new Date().getTime());
</script>

<?php
	
    require_once("connection.php");
    
?>

<html>
	<head>
		<title>
			English
		</title>
		
		<style>
			body{
				background-image: url("pink.png");
			}
			
			#Div2{
				display: none;
			}
			#Div3{
				display: none;
			}
			#Div4{
				display: none;
			}
			#Div5{
				display: none;
			}
			#Div6{
				display: none;
			}
			#Div7{
				display: none;
			}
			#Div8{
				display: none;
			}
			#Div9{
				display: none;
			}
			#Div10{
				display: none;
			}
			#submit1{
				display: none;
			}
			#submit2{
				display: none;
			}
			#submit3{
				display: none;
			}
			#submit4{
				display: none;
			}
			#submit5{
				display: none;
			}
			#submit6{
				display: none;
			}
			#submit7{
				display: none;
			}
			#submit8{
				display: none;
			}
			#submit9{
				display: none;
			}
			#submit10{
				display: none;
			}
			#time{
				display: none;
			}
			
			.card {
				top: 50%;
				box-shadow: 2px 4px 8px 5px rgba(0, 0, 0, 0.2);
				top: 30px;
				width: 60%;
				margin: auto;
				border-radius: 10px;
				background-color:  white;
			}
			
			.container {
				padding: 20px 10px;
				text-align: center;
				color: black;
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
			var x = 1;
			
			function submit1(){
				document.getElementById('submit1').style.display = 'block';
				document.getElementById('question1').style.display = 'none';
			}
			
			function submit2(){
				document.getElementById('submit2').style.display = 'block';
				document.getElementById('question2').style.display = 'none';
			}
			
			function submit3(){
				document.getElementById('submit3').style.display = 'block';
				document.getElementById('question3').style.display = 'none';
			}
			
			function submit4(){
				document.getElementById('submit4').style.display = 'block';
				document.getElementById('question4').style.display = 'none';
			}
			
			function submit5(){
				document.getElementById('submit5').style.display = 'block';
				document.getElementById('question5').style.display = 'none';
			}
			
			function submit6(){
				document.getElementById('submit6').style.display = 'block';
				document.getElementById('question6').style.display = 'none';
			}
			
			function submit7(){
				document.getElementById('submit7').style.display = 'block';
				document.getElementById('question7').style.display = 'none';
			}
			
			function submit8(){
				document.getElementById('submit8').style.display = 'block';
				document.getElementById('question8').style.display = 'none';
			}
			
			function submit9(){
				document.getElementById('submit9').style.display = 'block';
				document.getElementById('question9').style.display = 'none';
			}
			
			function submit10(){
				document.getElementById('submit10').style.display = 'block';
				document.getElementById('question10').style.display = 'none';
				
				document.getElementById('time').style.display = 'none';
			}
	
			function switchVisible() {
				x = x+1;
				if (document.getElementById('Div1')) {
						
					if (x == 1) {
						document.getElementById('Div1').style.display = 'block';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit1').style.display = 'none';
					}
					else if (x==2) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'block';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit2').style.display = 'none';
					}
					else if (x==3) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'block';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit3').style.display = 'none';
					}
					else if (x==4) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'block';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit4').style.display = 'none';
					}
					else if (x==5) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'block';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit5').style.display = 'none';
					}
					else if (x==6) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'block';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit6').style.display = 'none';
					}
					else if (x==7) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'block';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit7').style.display = 'none';
					}
					else if (x==8) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'block';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit8').style.display = 'none';
					}
					else if (x==9) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'block';
						document.getElementById('Div10').style.display = 'none';
						
						document.getElementById('submit9').style.display = 'none';
					}
					else if (x == 10) {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'none';
						document.getElementById('Div3').style.display = 'none';
						document.getElementById('Div4').style.display = 'none';
						document.getElementById('Div5').style.display = 'none';
						document.getElementById('Div6').style.display = 'none';
						document.getElementById('Div7').style.display = 'none';
						document.getElementById('Div8').style.display = 'none';
						document.getElementById('Div9').style.display = 'none';
						document.getElementById('Div10').style.display = 'block';
						
					}
				}
			}
		</script>
	</head>
	
	<body>
		<br><br>
		<div class = "card">
			<h1><center>English Quiz</center></h1>
		</div>
		<br><br><br><br>
		<div class="card" id = "Div1">
				  
			<div id = "question1" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 1";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options1" name="options1">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit1();" ;><b>Submit</b></button></p>
			</div>
				
				<div id = "submit1" class = "container">
					<span id="result1"></span>
					
					<script>
					document.options1.onclick = function(){
						var chosen1 = document.options1.option.value;
						result1.innerHTML = 'You selected: '+chosen1;
						sessionStorage.setItem("chosen1", chosen1);
						
					}
					sessionStorage.setItem("answer1", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				
			</div>
					
		</div>

		<div class="card" id = "Div2">
				  
			<div id = "question2" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 2";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options2" name="options2">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit2();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit2">
					<span id="result2"></span>
					
					<script>
					document.options2.onclick = function(){
						var chosen2 = document.options2.option.value;
						result2.innerHTML = 'You selected: '+chosen2;
						sessionStorage.setItem("chosen2", chosen2);
						
					}
					sessionStorage.setItem("answer2", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
					
		</div>
		
		<div class="card" id = "Div3">
				  
			<div id = "question3"class="container">
			
				<?php
					$sql = "Select * from test2 where id = 3";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options3" name="options3">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit3();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit3">
					<span id="result3"></span>
					
					<script>
					document.options3.onclick = function(){
						var chosen3 = document.options3.option.value;
						result3.innerHTML = 'You selected: '+chosen3;
						sessionStorage.setItem("chosen3", chosen3);
						
					}
					sessionStorage.setItem("answer3", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
					
		</div>
		
		<div class="card" id = "Div4">
				  
			<div id = "question4" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 4";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options4" name="options4">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit4();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit4">
					<span id="result4"></span>
					
					<script>
					document.options4.onclick = function(){
						var chosen4 = document.options4.option.value;
						result4.innerHTML = 'You selected: '+chosen4;
						sessionStorage.setItem("chosen4", chosen4);
						
					}
					sessionStorage.setItem("answer4", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>		
		</div>
		
		<div class="card" id = "Div5">
				  
			<div id = "question5" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 5";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options5" name="options5">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit5();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit5">
					<span id="result5"></span>
					
					<script>
					document.options5.onclick = function(){
						var chosen5 = document.options5.option.value;
						result5.innerHTML = 'You selected: '+chosen5;
						sessionStorage.setItem("chosen5", chosen5);
						
					}
					sessionStorage.setItem("answer5", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
				
		</div>
		
		<div class="card" id = "Div6">
				  
			<div id = "question6" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 6";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options6" name="options6">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit6();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit6">
					<span id="result6"></span>
					
					<script>
					document.options6.onclick = function(){
						var chosen6 = document.options6.option.value;
						result6.innerHTML = 'You selected: '+chosen6;
						sessionStorage.setItem("chosen6", chosen6);
						
					}
					sessionStorage.setItem("answer6", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
				
		</div>

		<div class="card" id = "Div7">
				  
			<div id = "question7" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 7";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options7" name="options7">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit7();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit7">
					<span id="result7"></span>
					
					<script>
					document.options7.onclick = function(){
						var chosen7 = document.options7.option.value;
						result7.innerHTML = 'You selected: '+chosen7;
						sessionStorage.setItem("chosen7", chosen7);
						
					}
					sessionStorage.setItem("answer7", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
				
		</div>
		
		<div class="card" id = "Div8">
				  
			<div id = "question8" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 8";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options8" name="options8">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit8();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit8">
					<span id="result8"></span>
					
					<script>
					document.options8.onclick = function(){
						var chosen8 = document.options8.option.value;
						result8.innerHTML = 'You selected: '+chosen8;
						sessionStorage.setItem("chosen8", chosen8);
						
					}
					sessionStorage.setItem("answer8", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
				
		</div>
		
		<div class="card" id = "Div9">
				  
			<div id = "question9" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 9";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options9" name="options9">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit9();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit9">
					<span id="result9"></span>
					
					<script>
					document.options9.onclick = function(){
						var chosen9 = document.options9.option.value;
						result9.innerHTML = 'You selected: '+chosen9;
						sessionStorage.setItem("chosen9", chosen9);
						
					}
					sessionStorage.setItem("answer9", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "switchVisible();"><b>Next</b></button></p>
				</div>
				
		</div>
		
		<div class="card" id = "Div10">
				  
			<div id = "question10" class="container">
			
				<?php
					$sql = "Select * from test2 where id = 10";
					$result = mysqli_query($connection,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$Question = $row['Question'];
						$Option1 = $row['Option1'];
						$Option2 = $row['Option2'];
						$Option3 = $row['Option3'];
						$Option4 = $row['Option4'];
						$Answer = $row['Answer'];
					}
				?>
			
				<h3><?php echo $Question ?></h3> 
				
				<form id="options10" name="options10">
				<input type="radio" id="option1" name="option" value="<?php echo $Option1 ?>">
				<label for="option1"><?php echo $Option1 ?></label>
				
				<input type="radio" id="option2" name="option" value="<?php echo $Option2 ?>">
				<label for="option2"><?php echo $Option2 ?></label>
				
				<input type="radio" id="option3" name="option" value="<?php echo $Option3 ?>">
				<label for="option1"><?php echo $Option3 ?></label>
					
				<input type="radio" id="option4" name="option" value="<?php echo $Option4 ?>">
				<label for="option1"><?php echo $Option4 ?></label>
				</form>
				<p><button class="button" onClick = "submit10();" ;><b>Submit</b></button></p>
			</div>	
				<div class = "container" id = "submit10">
					<span id="result10"></span>
					
					<script>
					document.options10.onclick = function(){
						var chosen10 = document.options10.option.value;
						result10.innerHTML = 'You selected: '+chosen10;
						sessionStorage.setItem("chosen10", chosen10);
						
					}
					sessionStorage.setItem("answer10", "<?php echo $Answer ?>");
					</script>
					<br><br>
					<label><b>Correct Answer: <?php echo $Answer ?></b></label>
					
					<p><button class="button" onClick = "location.href = 'test_results.php';"><b>End Test</b></button></p>
				</div>
					
		</div>
		
	</body>
</html>