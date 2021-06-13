<?php
//including the database connection file
include("db2.php");

//getting id of the data from url
$regno = $_GET['regno'];


//deleting the row from table
$result = mysqli_query($conn, "UPDATE `cocact` SET `status`='Approved' WHERE regno= $regno ;");

//redirecting to the display page (index.php in our case)
header("Location: actview.php");
?>
