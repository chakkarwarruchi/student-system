<?php 
session_start();
$localhost = "localhost"; 
$dbusername = "root"; 
$dbpassword = "";  
$dbname = "sem4project";  
 
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST['submit']))
 {
  $ijk = $_POST['ijk'];
   $lmn = $_POST['lmn'];
  $waf= $_POST['waf'];
   $dope = $_POST["dope"];
   $puu = $_POST['puu'];
   $data = $_POST['data'];
   $urdu = $_POST['urdu'];
   $ici = $_POST['ici'];
   $reset = $_POST['reset']; 
   $tony = $_POST['tony'];
   $stark = $_POST['stark'];
   $amer = $_POST['amer'];  
   $steve = $_POST['steve'];
   $tudu = $_POST['tudu'];
   

$jk = rand(1000,10000)."-".$_FILES["upsc"]["name"];
$kook = rand(1000,10000)."-".$_FILES["upsc2"]["name"];
$oyy = rand(1000,10000)."-".$_FILES["upsc3"]["name"];

  $jkk = $_FILES["upsc"]["tmp_name"];
   $tim = $_FILES["upsc2"]["tmp_name"];
   $hj = $_FILES["upsc3"]["tmp_name"];


  $uploads_dir = 'pdf';

   move_uploaded_file($jkk, $uploads_dir.'/'.$jk);
    move_uploaded_file($tim, $uploads_dir.'/'.$kook);
     move_uploaded_file($hj, $uploads_dir.'/'.$oyy);
  

$result=mysqli_query($conn,"insert into excact values('$ijk','$lmn','$waf','$dope','$puu','$jk','$data','$urdu','$ici','$reset','$kook','$tony','$stark','$amer','$steve','$oyy','$tudu','Pending', '')");
  if ($result) {  
    $_SESSION['chek']="Data Submitted Successfully";
    header("Location: act2.php");
}
else{
    $_SESSION['chek']="Data failed to submit";
    header("Location: act2.php");
}
}
?>