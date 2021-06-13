
<!DOCTYPE html>
<html>
<head>
  <title>General Information</title>
  <style>
      .new{
  display: flex;
   justify-content: center;
   align-items: center;
   padding: 10px;
   margin-left: 5%;
}
.container{
  max-width: 1000px;
  width: 100%;
  margin-top: 80px;
  background-color: #fff;
  padding: 40px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
 font-size: 30px;
  font-weight: 500;
  margin-top: 93px;
  position: absolute;
 top: 9.2%;
  width: 300px;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #0000A0, #0000A0);
  
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}                 
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box textarea{
  height: 70px;
  width: 210%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
 
}
input[type=text], select{
  width:100%;
  padding: 12px 20px;
  margin:8px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=button]{
  width: 45%;
  background: #3399cc;
  color: white;
  padding: 14px 3px;
  margin: 8px 0;
  border: none;border-radius: 4px;
  cursor: pointer;
  font-size: 25px;
}
input[type=submit]{
  width: 45%;
  background: #3399cc;
  color: white;
  padding: 14px 3px;
  margin: 8px 0;
  border: none;border-radius: 4px;
  cursor: pointer;
  font-size: 25px;
}
input[type=submit]:hover{
  transform: scale(0.99); 
  background: linear-gradient(-135deg, #0000A0, #0000A0);
  }
  input[type=button]:hover{
  transform: scale(0.99); 
  background: linear-gradient(-135deg, #0000A0, #0000A0);
  }

.space{
    text-align: center;
  margin-top: 10px;
  margin-bottom: 10px;
}
.space1{
    text-align: center;
  margin-top: 30px;
  margin-bottom: 15px;
}
.button .jk{
  text-align: center;
  width: 100%;
  background: #3399cc;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;border-radius: 4px;
  cursor: pointer;
  font-size: 25px;
  }
    .error{
        text-align: center;
        background: #C5E8B7;
        color: #A94442;
        padding: 10px;
        max-width: 1000px;
        width: 100%;
        position: absolute;
        top: 0;
        border-radius: 5px;
        margin: 20px auto;
      }
  </style>
  <link rel="stylesheet" href="view.css"><meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
		<nav>
			<h1>SAKEC</h1>
			<ul id="navli">
				<li><a class="homeblack" href="menmain.php">HOME</a></li>
				<li><a class="homeblack" href="mentorapp.php">Give Approval</a></li>
				<li><a class="homeblack" href="actview.php">Co-Curricular</a></li>
				<li><a class="homered" href="comment.php">Remark</a></li>
				<li><a class="homeblack" href="menlogout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="divider"></div><br>
  <div class="new">  
    <?php 
    if (isset($_SESSION['rec']) && $_SESSION['rec']!='')
    {
      ?>
         <h4 class="error"><?php echo $_SESSION['rec'] ?></h4>
      <?php 
      unset($_SESSION['rec']);
    }
    ?>
<div class="container">
    <div class="title">Remarks</div>
    <div class="content">
<form action="" method="POST" >
   <div class="user-details">

       
          
         <div class="input-box">
          	 <span class="details">Remark</span> 
          	<textarea type="text" name="rej" placeholder="Enter Detailed Explanation" ></textarea>
          </div>
          
</div>
 <div class="button">
          <input class="jk" type="submit" value="Submit" name="submit">
        </div>
       
</form>
</div>
</div>
</div>
</body>
</html>

<?php

error_reporting(0);

$dbhost='localhost';
$dbname='sem4project';
$dbuser='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$regno = $_GET['regno'];


if (isset($_POST['submit'])) {
	 $rej = $_POST['rej'];
	 
$res = mysqli_query($mysqli, "UPDATE `cocact` SET `remark`='$rej' WHERE regno= $regno;");
	if ($res) {
    $_SESSION['rec']="Data Submitted Successfully";
    header("Location: actcom.php");
}
else{
   $_SESSION['rec']="Data Not Submitted";
    header("Location: actcom.php");
}
}
?>



