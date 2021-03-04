<html>
	<head>
		<title>
			Quiz Results
		</title>
		
		<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: center;
			  padding: 8px;
			}

			tr:nth-child(even) {
			  background-color: #dddddd;
			}
			
		</style>
		
		<script>
			var t1 = sessionStorage.getItem("t1");
			t2 = new Date().getTime();
			
			var diff =(t2 - t1)/1000;
			//diff /= 60;
			var time_taken = Math.abs(Math.round(diff));
			
			var chosen = [];
			var answer = [];
			
			chosen.push(sessionStorage.getItem("chosen1"));
			chosen.push(sessionStorage.getItem("chosen2"));
			chosen.push(sessionStorage.getItem("chosen3"));
			chosen.push(sessionStorage.getItem("chosen4"));
			chosen.push(sessionStorage.getItem("chosen5"));
			chosen.push(sessionStorage.getItem("chosen6"));
			chosen.push(sessionStorage.getItem("chosen7"));
			chosen.push(sessionStorage.getItem("chosen8"));
			chosen.push(sessionStorage.getItem("chosen9"));
			chosen.push(sessionStorage.getItem("chosen10"));
			
			answer.push(sessionStorage.getItem("answer1"));
			answer.push(sessionStorage.getItem("answer2"));
			answer.push(sessionStorage.getItem("answer3"));
			answer.push(sessionStorage.getItem("answer4"));
			answer.push(sessionStorage.getItem("answer5"));
			answer.push(sessionStorage.getItem("answer6"));
			answer.push(sessionStorage.getItem("answer7"));
			answer.push(sessionStorage.getItem("answer8"));
			answer.push(sessionStorage.getItem("answer9"));
			answer.push(sessionStorage.getItem("answer10"));
	
		</script>
		
		<script>
			var marks = 0;
			var i;
			var result;
			
			for(i = 0; i<chosen.length; i++){
				if(chosen[i] == answer[i]){
					marks = marks + 1;
				}
			}
			
			if(marks>5){
				result = "PASS";
			}
			else{
				result = "FAIL";
			}
		</script>
	</head>
	
	<body>				
	
	<div>
		<table border = "1" >
			<col width="20%">
			<col width="40%">
			<col width="40%">
			
			<tr>
				<th> Question Number </th>
				<th> Your Answer </th>
				<th> Correct Answer </th>											
			</tr>
	 
			<tr>
				<td>1</td>
				<td>
					<script>
						document.write(chosen[0]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[0]);
					</script>
				</td>
			</tr>

			<tr>
				<td>2</td>
				<td>
					<script>
						document.write(chosen[1]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[1]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>3</td>
				<td>
					<script>
						document.write(chosen[2]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[2]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>4</td>
				<td>
					<script>
						document.write(chosen[3]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[3]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>5</td>
				<td>
					<script>
						document.write(chosen[4]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[4]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>6</td>
				<td>
					<script>
						document.write(chosen[5]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[5]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>7</td>
				<td>
					<script>
						document.write(chosen[6]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[6]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>8</td>
				<td>
					<script>
						document.write(chosen[7]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[7]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>9</td>
				<td>
					<script>
						document.write(chosen[8]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[8]);
					</script>
				</td>
			</tr>
			
			<tr>
				<td>10</td>
				<td>
					<script>
						document.write(chosen[9]);
					</script>
				</td>
				<td>
					<script>
						document.write(answer[9]);
					</script>
				</td>
			</tr>
			
        </table>
			
		<h3 style = "color: Green;"><center>Marks: <script>document.write(marks);</script></center></h3>
		<h3 style = "color: Green;"><center>Number of Correct Answers: <script>document.write(marks);</script></center></h3>
		<h3 style = "color: RED;"><center>Result: <script>document.write(result);</script></center></h3>
		<h3 style = "color: Blue;"><center>Time Taken: <script>document.write(time_taken);</script> seconds</center></h3>
	
		</h3>
	</body>
</html>