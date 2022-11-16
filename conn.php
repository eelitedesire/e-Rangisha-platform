<?php
	$conn = mysqli_connect("localhost", "root", "", "ads_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>