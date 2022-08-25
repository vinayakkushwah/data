<?php
include("conection.php");
error_reporting(0);
$DISPLAY="SELECT * FROM form_form";
$data= mysqli_query($conn,$DISPLAY);
$total=mysqli_num_rows($data);


/*echo $total;*/




if ($total !=0) 
{
	/*echo "table have data ";*/
	?>


<table border="3px">
	<tr>
		<th> firstname</th>
		<th> Last name</th>
		<th> Password</th>
		<th> Gender</th>
		<th> E-mail</th>
		<th> Mo no</th>
		<th> Address</th>
	</tr>	








	<?php
	while ($result=mysqli_fetch_assoc($data))
	 {
		echo "
					<tr>
						<td>".$result[firstname]." </td>
						<td>".$result[lastname]." </td>
						<td>".$result[pas]." </td>
						<td>".$result[gender]." </td>
						<td>".$result[email]." </td>
						<td>".$result[number]." </td>
						<td>".$result[addr]." </td>
					</tr>	
			";
	 }	



}
else{ echo "no data found in table";}

?>

</table>

