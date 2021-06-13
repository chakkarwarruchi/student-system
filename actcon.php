<?php 
session_start();
$localhost = "localhost"; 
$dbusername = "root"; 
$dbpassword = "";  
$dbname = "sem4project";  
 
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
  $uvw = $_POST['uvw'];
   $poi = $_POST['poi'];
  $eva= $_POST['eva'];
   $dop = $_POST["dop"];
   $pose= $_POST['pose'];
   $evde = $_POST['evde'];
   $tede = $_POST['tede'];
   $dop2 = $_POST['dop2'];
   $poe2 = $_POST['poe2'];
   $tada = $_POST['tada'];
   $eve3 = $_POST['eve3'];
   $dop3 = $_POST['dop3'];
   $p3 = $_POST['p3'];
   $qwe = $_POST['qwe'];

$xcv= rand(1000,10000)."-".$_FILES["upc"]["name"];
$tae= rand(1000,10000)."-".$_FILES["upc2"]["name"];
$jin= rand(1000,10000)."-".$_FILES["upc3"]["name"];

  $vb = $_FILES["upc"]["tmp_name"];
  $rm = $_FILES["upc2"]["tmp_name"];
  $jim = $_FILES["upc3"]["tmp_name"];

  $uploads_dir = 'pdf';

   move_uploaded_file($vb, $uploads_dir.'/'.$xcv);
   move_uploaded_file($rm, $uploads_dir.'/'.$tae);  
   move_uploaded_file($jim, $uploads_dir.'/'.$jin);  

$result=mysqli_query($conn,"insert into cocact values('$uvw','$poi','$eva','$dop','$pose','$xcv','$evde','$tede','$dop2','$poe2','$tae','$tada','$eve3','$dop3','$p3','$jin','$qwe','Pending','')");

  if ($result) {  
    $_SESSION['che']="Data Submitted Successfully";
    header("Location: act.php");
}
else{
    $_SESSION['che']="Data failed to submit";
    header("Location: act.php");
}
}
?>



