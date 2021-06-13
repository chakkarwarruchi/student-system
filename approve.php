<?php
//including the database connection file
include("db2.php");

//getting id of the data from url
$regno = $_GET['regno'];
$token = $_GET['token'];

//deleting the row from table
$result = mysqli_query($conn, "UPDATE `apply` SET `status`='Approved' WHERE regno = $regno AND token = $token;");

//redirecting to the display page (index.php in our case)
header("Location:mentorapp.php");
?>

