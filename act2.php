<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ex-Curricular Activities</title>
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
 font-size: 27px;
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
        background: #FEFEBE;
        color: #A94442;
        padding: 10px;
        max-width: 1000px;
        width: 100%;
        position: absolute;
        top: 10%;
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
        <li><a class="homeblack" href="opmain.php">HOME</a></li>
        <li><a class="homeblack" href="myappr.php">Apply Approval</a></li>
        <li><a class="homeblack" href="geninfo.php">General</a></li>
        <li><a class="homeblack" href="edu.php">Academic</a></li>
        <li><a class="homeblack" href="p.php">Placement</a></li>
        <li><a class="homeblack" href="intrn.php">Internships</a></li>
        <li><a class="homeblack" href="act.php">CoCurricular</a></li>
        <li><a class="homered" href="act2.php">Extracurricular</a></li>
        <li><a class="homeblack" href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>
  <div class="divider"></div><br>

<div class="new">
<?php 
    if (isset($_SESSION['chek']) && $_SESSION['chek']!='')
    {
      ?>
         <h4 class="error"><?php echo $_SESSION['chek'] ?></h4>
      <?php 
      unset($_SESSION['chek']);
    }
    ?>
<div class="container">
    <div class="title">Extra-Curricular Activities</div><br><br>
    <div class="content">
      <form action="act2con.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box"><span class="details">Registration ID</span>
            <input type="number" name="ijk" placeholder="Enter your RegID" required>
          </div>

          <div class="input-box"><span class="details">Smart Card Number</span>
            <input type="text" name="lmn" placeholder="Enter your smartcard number" required>
          </div>
           <div class="content"><h3 class="space">1.Cultural Activities</h3>

        <div class="user-details">
         <div class="input-box">
            <span class="details">Event Name</span>
            <input type="text" name="waf" placeholder="Enter your event name" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Participation</span>
            <input type="date" name="dope" placeholder="Date of Participation (DD/MM/YYYY)" required>
          </div> 
               <div class="input-box">
            <span class="details">Post</span>
            <select name="puu" required>
              <option value="">Enter Your Post</option>
              <option value="Participant">Participant</option>
              <option value="Organizer">Organizer</option>
            </select>
          </div>
               <div class="input-box">
            <span class="details">Upload Certificate</span> 
            <input class="label" type="file" name="upsc">  
          </div>
          <div class="input-box">
          	 <span class="details">Event Details</span> 
          	<textarea type="text" name="data" placeholder="Enter Event Details" required ></textarea>
          </div> 
               <div class="content"> <h3 class="space1">2.Sports Activities</h3>
               <div class="user-details">  
              <div class="input-box">
            <span class="details">Event Name</span>
            <input type="text" name="urdu" placeholder="Enter your event name" required>
          </div> 
          <div class="input-box">
            <span class="details">Date of Participation</span>
            <input type="date" name="ici" placeholder="Date of Participation (DD/MM/YYYY)" required>
          </div>
           <div class="input-box">
            <span class="details">Post</span>
            <select name="reset" required>
              <option value="">Enter Your Post</option>
              <option value="Participant">Participant</option>
              <option value="Organizer">Organizer</option>
            </select>
          </div>
         <div class="input-box">
            <span class="details">Upload Certificate</span> 
            <input class="label" type="file" name="upsc2">  
          </div>
          <div class="input-box">
          	 <span class="details">Event Details</span> 
          	<textarea type="text" name="tony" placeholder="Enter Event Details" required></textarea>
          </div>
           <div class="content"> <h3 class="space1">3.Social Responsibility Activities</h3>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Event Name</span>
            <input type="text" name="stark" placeholder="Enter Event name" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Participation</span>
            <input type="date" name="amer" placeholder="Date of Participation (DD/MM/YYYY)" required>
          </div> 
          <div class="input-box">
            <span class="details">Post</span>
            <select name="steve" required>
              <option value="">Enter Your Post</option>
              <option value="Participant">Participant</option>
              <option value="Organizer">Organizer</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Upload Certificate</span> 
            <input class="label" type="file" name="upsc3">  
          </div> 
          <div class="input-box">
          	 <span class="details">Event Details</span> 
          	<textarea type="text" name="tudu" placeholder="Enter Event Details" required ></textarea>
          </div>
            </div>
        </div>
    </div>
          </div>
        </div>
        </div>
      </div>

         <div class="space">
          <a href="act.php"><input type="button" value="Previous"></a>
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>

</div>
    
</body>
</html>
