<?php
	$servername = "localhost";
	$username ="root";
	$pass     = "";
	$dbname   ="form";

	$conn=mysqli_connect($servername,$username,$pass,$dbname);

	if($conn) {
		echo "conected ok";
	
	}
	else{ echo "conection failed";}


	


?>
