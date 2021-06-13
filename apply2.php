<?php 
	
//including the database connection file
require_once ('db.php');
if(isset($_GETs['submit']))
//getting id of the data from url
{
	$regno = mysqli_real_escape_string($conn,$_GET['regno']);
	$mname = mysqli_real_escape_string($conn,$_GET['mname']);
	if(empty($regno) || empty($mname)) 
	{

		echo 'FILL ALL THE FIELDS';
		
	}
	$SQL = "insert into apply (regno, token ,mname, status) values ('$regno','','$mname','Pending')";
	$result =mysqli_query($conn, $SQL);
	if ($result) 
	{
		header("Location:http://localhost/approve/apply.php");
	}
	
}
?>
