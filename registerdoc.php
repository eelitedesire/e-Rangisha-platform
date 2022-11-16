<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$fullname = $_POST['fullname1'];
		$useremail = $_POST['UserEmail'];
		$phone     = $_POST['phone'];
		$categories = $_POST['categories'];
		$doc_number = $_POST['doc_number'];
        $country = $_POST['country'];
		$dob = $_POST['dob'];
		
		mysqli_query($conn, "INSERT INTO `doc_lost` VALUES('', '$fullname', '$useremail', '$phone', '$categories','$doc_number','$country','$dob')") or die(mysqli_error());
		echo "<h3 class='text-success'>Document seekers successfull added you will get your document soon</h3>";
	}
?>