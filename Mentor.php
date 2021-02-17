<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:YouLearn.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mentor DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="css/Account.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top: 52px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<form style="background-color:#808080">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size:30px;">YouLearn: Mentor Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="sidenav">
  <a href="#about">Home</a>
  <a href="ProfileMentor.php">Profile</a>
  <a href="ViewChildInfo.php">View Child Info</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
<center>Welcome to Mentor Home page</center>

<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['MentorName']; ?></strong> This is your DashBoard.You can check Your child's activity from here. 
  </div>
  <hr class="new2">
  <button type="button" class="btn btn-default">View Your Weekly Activity</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">Save Child Login</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">Bookmarks</button>
  <button type="button" class="btn btn-default" style="margin-left:50px">Teacher's Info</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">Report to Admin</button>
 <hr class="new2">
 <div class="sty" >
 <h3>Purpose: </h3>
	<ul>
	 <h4> <li>Check Weekly Progress</li>
	  <li>Check his learning ability</li>
	  <li>Many more</li>
	</ul>
 </div>
 <hr class="new2">
 <button type="button" class="btn btn-default" style="margin-left:100px;">How to Upload</button>
 <button type="submit" formaction="Child_Approval.php" class="btn btn-default" style="margin-left:50px">Add Child</button>
  <button type="button" class="btn btn-default" style="margin-left:50px">Request For Online Class</button>
 <button type="submit" formaction="SampleVideo.php" class="btn btn-default" style="margin-left:50px">See Sample Video</button>
<hr class="new2">

<button type="button" class="btn btn-default" style="margin-left:170px">View All Subject</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">View Syllabus</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">Exam Details</button>
 <hr class="new2">
  </div>
</div>				
</form>
</body>
</html>
