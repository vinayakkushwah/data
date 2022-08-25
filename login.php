 <?php
  include("conection.php");  

/*if(isset($_POST['Username']))
 {

	$uname=$_POST['Username'];
	$password=$_POST['Password'];
	$sql="SELECT * FROM logindata where Username='".$uname."'AND Password='".$password."'limit 1";

	$result=mysqli_query($conn,$sql);
	
	$data=mysqli_num_rows($result);
	//echo $data;
	if($data==1)
	{
	
		echo " You Have Successfully Logged in";
		exit();
	}
	
	else{
		echo "failed passwerd";
	
}	
  }*/






  ?>


<!DOCTYPE html>

<html>

<head>

			<title>Form in Design</title>
			<link rel="stylesheet" a href="css3\style.css"/>
			<link rel="stylesheet" a href="css3\font-awesome.min.css"/>
</head>

<body>

<div class="container">

<form method="POST" action="#">
		<div class="form_input">

				<input type="text" name="username" placeholder="Enter Your UserName"/>
		</div>

		<div class="form_input">
			
			<input type="text" name="password" placeholder=" Enter Your Password"/>
		
		</div>
		
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
</form>

</div>

</body>

</html>
<?php

if ($_POST['submit'])
	{
	
	$fn = $_POST['username'];
	$ln = $_POST['password'];
	

	if ($fn !=""&& $ln !="")
	 {
	
	
		$ram= "insert into logindata values('$fn','$ln')";

		$data= mysqli_query($conn,$ram);

		if ($ram) 
		{
			echo "data incert into data base";
		}
		else{ echo "failed to insert data ";}
	}
	else{ echo "<script>alert('Fill the Form First  Incert all data carefully');</script>";}

 }

?>