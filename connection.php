<?php
	$connection = mysqli_connect("localhost", "root", "", "testpress");
	
	if(!$connection){
		die("connection error");
	}
?>