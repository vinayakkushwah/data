<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title> php form</title>
</head>
<body>

		<div class="container">
			<div class="title"> Ragistration form </div>
<form action="" method="POST">
		<div class="form">
			<div class="inputfield">
				<label>First Name</label>
				<input type="text" class="input" name="fn" required>
			</div>
			<div class="inputfield">
				<label>last Name</label>
				<input type="text" class="input" name="ln"required>
				
			</div>
				<div class="inputfield">
				<label>Password</label>
				<input type="Password" class="input" name="pas" required>
				
			</div>			<div class="inputfield">
				<label>confirm password</label>
				<input type="password" class="input" name="cpas" required>
				
			</div>			<div class="inputfield">
				<label>Gender</label>
				<select name="gender" required><option>select</option>
					<option>male</option>
					<option>female</option>
					<option>Other</option>
				</select>
				
			</div>			<div class="inputfield">
				<label>Email</label>
				<input type="Email" class="input" name="email" required>
				
			</div>			<div class="inputfield">
				<label>Phone no</label>
				<input type="text" class="input" name="no" required>
				
			</div>
						<div class="inputfield">
				<label>Address</label>
				<textarea name="add" required></textarea>
				
			</div>
						<div class="inputfield terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
				</label>
			<p> Agree to terms and conditions</p>
				
			</div>
					<div class="inputfield"><input type="submit" value="register" class="btn" name="butten"></div>

		</div>		

</form>
		</div>


</body>
</html>



  <?php
  include("conection.php");  
  ?>


  <?php

if ($_POST['butten'])
 {
	
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$pas = $_POST['pas'];
	$cpas = $_POST['cpas'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$no = $_POST['no'];
	$add = $_POST['add'];

	if ($fn !=""&& $ln !=""&& $pas !=""&& $cpas !=""&& $gender !=""&& $email !=""&& $no !=""&& $add !="")
	 {
	
	
		$vinu= "insert into form_form values('$fn','$ln','$pas','$cpas','$gender','$email','$no','$add')";

		$data= mysqli_query($conn,$vinu);

		if ($vinu) 
		{
			echo "data incert into data base";
		}
		else{ echo "failed to insert data ";}
	}
	else{ echo "<script>alert('Fill the Form First  Incert all data carefully');</script>";}

 }

 ?>