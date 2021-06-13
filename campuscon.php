<?php 
session_start();
$localhost = "localhost"; 
$dbusername = "root"; 
$dbpassword = "";  
$dbname = "sem4project";  
 
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
    $rg = $_POST['rg'];
    $cmsa = $_POST['cmsa'];
    $comp = $_POST['comp'];
    $place = $_POST["place"];
    $desig = $_POST['desig'];
    $doa = $_POST['doa'];
    $pack = $_POST['pack'];
  
$let = rand(1000,10000)."-".$_FILES["letter"]["name"];

  $por = $_FILES["letter"]["tmp_name"];

  $uploads_dir = 'pdf';

   move_uploaded_file($por, $uploads_dir.'/'.$let);


$result=mysqli_query($conn,"insert into campus values('$rg','$cmsa','$comp','$place','$desig','$doa','$pack','$let','Pending','')");
  if ($result) {  
    $_SESSION['sta']="Data Submitted Successfully";
    header("Location: campus.php");
}
else{
    $_SESSION['sta']="Data failed to submit";
    header("Location: campus.php");
}
}
?>