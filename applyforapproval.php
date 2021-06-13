<?php
include("db.php"); //database connection
if(isset($_POST["submit"]))
{
	$regID = $_POST['RegistrationID']; //registration number wala field
	$select = "SELECT * from campus WHERE RegistrationID = '$regID'  union SELECT * from cocat WHERE RegistrationID = '$regID'  union SELECT * from edu WHERE RegistrationID = '$regID'  union SELECT * from enter WHERE RegistrationID = '$regID'  union SELECT * from exact WHERE RegistrationID = '$regID'  union SELECT * from geninfo WHERE RegistrationID = '$regID'  union SELECT * from high WHERE RegistrationID = '$regID'  union SELECT * from users WHERE RegistrationID = '$regID'  union"; //Do not include any mentor side databases and the database used for 'apply for 																												approval'
	$result1 = mysqli_query($con,$select);

	
	if (mysqli_num_rows($result1) >= 8)
		{
			

			$ins = "INSERT INTO final values ('$RegistrationID')"; // instead of 'final' use the table name used for 'apply for approval' and instead of RegistrationID use the column name used to store the reg id of applicants

			if(mysqli_query($con,$ins))
			{
				echo ("Sent for approval");
			}
		}
	else
	{
		echo("cannot apply");
	}

}



?>
