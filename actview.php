

<!DOCTYPE html>
<html>
<head>
	<title>Co-Curricular Activities</title>
	<link rel="stylesheet" type="text/css" href="view.css">
	 <style>
    
.new{
  margin-left: 250px;
}
input{
  height: 45px;
  width: 50%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.btn{
  width: 14%;
  background: #3399cc;
  color: white;
  padding: 7px 2px;
  margin: 5px 0;
  border: none;border-radius: 5px;
  cursor: pointer;
  font-size: 25px;
}
.btn:hover{
  transform: scale(0.99); 
  background: linear-gradient(-135deg, #0000A0, #0000A0);
}
 </style>
</head>
<body>
	<header>
		<nav>
			<h1>SAKEC</h1>
			<ul id="navli">
				<li><a class="homeblack" href="menmain.php">Home</a></li>
				<li><a class="homeblack" href="mentorapp.php">Give Approval</a></li>
				<li><a class="homeblack" href="view.php">General</a></li>
				<li><a class="homeblack" href="eduview.php">Academic</a></li>
				<li><a class="homeblack" href="placement.php">Placement</a></li>
				<li><a class="homeblack" href="internview.php">Internships</a></li>
				<li><a class="homered" href="actview.php">CoCurricular</a></li>
				<li><a class="homeblack" href="act2view.php">Extracurricular</a></li>
				<li><a class="homeblack" href="menlogout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="divider"></div><br>



                <?php
                   $connection = mysqli_connect('localhost','root','','sem4project');

                   if(isset($_POST['search'])) {
                       $searchKey = $_POST['search'];

                       $sql = "SELECT * FROM cocact WHERE regno LIKE '%$searchKey%'";
    
                   }else{
                       $sql = "SELECT * FROM cocact";
                       $searchKey = "";
                   }
                   
                   $result = mysqli_query($connection,$sql);

                  
                ?>
               <form action="" method="POST">
                    <div class="new">
                        <input type="text" name="search" placeholder="Search Here" value="<?php echo $searchKey; ?>" >
              
                    
                        <button class="btn">Search</button>
         </div>
                </form>
                <br>
                <br>
                

		<table>
			<tr>
				<th align = "center">Registration ID</th>
				<th align = "center">SmartCard Number</th>
				<th align = "center">1.Event type</th>
				<th align = "center">1.Date of Participation</th>
				<th align = "center">1.Post</th>
				<th align = "center">1.Certificate</th>
				<th align = "center">1.Event Details</th>
				<th align = "center">2.Event type</th>
				<th align = "center">2.Date of Participation</th>
				<th align = "center">2.Post</th>
				<th align = "center">2.Certificate</th>
				<th align = "center">2.Details</th>
				<th align = "center">3.Event Name</th>
				<th align = "center">3.Date of Participation</th>
				<th align = "center">3.Post</th>
				<th align = "center">3.Certificate</th>
				<th align = "center">3.Details</th>
				<th align = "center">Options</th>
				<th align = "center">Remark</th>



       <?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['regno']."</td>";
					echo "<td>".$employee['Smart Card Number']."</td>";
					
					echo "<td>".$employee['1.Event type']."</td>";
					echo "<td>".$employee['1.Date of Participation']."</td>";
					echo "<td>".$employee['1.Post']."</td>";
					echo "<td><img src='pdf/".$employee['1.Certificate']."'></td>";
					echo "<td>".$employee['1.Event Details']."</td>";
					echo "<td>".$employee['2.Event type']."</td>";
					echo "<td>".$employee['2.Date of Participation']."</td>";
					echo "<td>".$employee['2.Post']."</td>";
					echo "<td><img src='pdf/".$employee['2.Certificate']."'></td>";
					echo "<td>".$employee['2.Details']."</td>";
					echo "<td>".$employee['3.Event Name']."</td>";
					echo "<td>".$employee['3.Date of Participation']."</td>";
					echo "<td>".$employee['3.Post']."</td>";
					echo "<td><img src='pdf/".$employee['3.Certificate']."'></td>";
                    echo "<td>".$employee['details']."</td>";
                    echo "<td><a href=\"actapp.php?regno=$employee[regno]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"actrej.php?regno=$employee[regno]\" onClick=\"return confirm('Are you sure you want to Cancel the request?')\">Reject</a></td>";
					echo "<td><a href=\"actcom.php?regno=$employee[regno]\"  onClick=\"return confirm('Are you sure you want to Submit the request?')\">Remark</a>" ;
					





				}


			?>







				
        </table>
</body>
</html>
