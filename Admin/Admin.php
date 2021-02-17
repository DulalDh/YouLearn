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
  <title>Admin DashBoard</title>
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
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #808080;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top: 52px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #111;
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
      <a class="navbar-brand" href="#" style="font-size:30px;">YouLearn: Admin Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="sidenav">
  <a href="#about.php"><center>Home</center></a>
  <a href="ViewTutor.php"><center>View Tutor</center></a>
  <a href="ViewMentor.php"><center>View Mentor</center></a>
</div>

<div class="main">
<h2><center>Welcome to Admin Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello Faruk:</strong> This is Admin Home.Here You can complete all your admin work.
  </div>
  <hr class="new2">
  <?php
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT COUNT(Id) FROM children_account where Accept='0'";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$childid = $row['COUNT(Id)'];
		//echo $x;
	}
	?>
	<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT COUNT(Id) from tutor_info";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$tutorid = $row['COUNT(Id)'];
		//echo $x;
	}
	?>
	<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$accsql = "SELECT COUNT(Id) from tutor_info where Value=0";
	$res = mysqli_query($con,$accsql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$torid = $row['COUNT(Id)'];
		//echo $x;
	}
	?>
	<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT COUNT(Id) from chat WHERE Seen='1'";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$new_text = $row['COUNT(Id)'];
		//echo $x;
	}
	$query = "SELECT COUNT(Id) from report;";
	$repo = mysqli_query($con,$query);
	if(mysqli_num_rows($repo) > 0){
		$col = mysqli_fetch_array($repo);
		$report = $col['COUNT(Id)'];
	}
	$query1 = "SELECT COUNT(Id) from setquestion;";
	$repo = mysqli_query($con,$query1);
	if(mysqli_num_rows($repo) > 0){
		$col = mysqli_fetch_array($repo);
		$set = $col['COUNT(Id)'];
	}
	?>
 <button type="submit" formaction="CheckReport.php"class="btn btn-default" >Check All Report <span class="badge"><?php echo $report; ?></span></button>
 <button type="submit" formaction="approved.php" class="btn btn-default" style="margin-left:50px">Learner Approval <span class="badge"><?php echo $childid; ?></span></button>
 <button type="submit" formaction="Tutor_Approval.php" class="btn btn-default" style="margin-left:50px">Tutor info <span class="badge"><?php echo $tutorid; ?></span></button>
  <button type="submit" formaction="Chat.php" class="btn btn-default" style="margin-left:50px">Chat with mentor <span class="badge"><?php echo $new_text; ?></span></button>
 <button type="submit" formaction="Change.php" class="btn btn-default" style="margin-left:50px">Change Password</button>
 <hr class="new2">
 <div class="sty" >
 <h3>To-Do List: </h3>
	<ul>
	 <h5> <li>Check Daily Upload</li>
	  <li>Report Mentor</li>
	  <li>Many more</li>
	</ul>
 </div>
 <hr class="new2">
 <button type="submit" formaction="AddTutor.php" class="btn btn-default" style="margin-left:50px">Tutor approval<span class="badge"><?php echo $torid; ?></span></button>
 <button type="submit" formaction="ViewQuestion.php" class="btn btn-default" style="margin-left:50px">Question Set<span class="badge"><?php echo $set; ?></span></button>
  <button type="submit" formaction="mark.php" class="btn btn-default" style="margin-left:50px">Mark Sheet</button>
 <button type="submit" formaction="AssignTutor.php" class="btn btn-default" style="margin-left:50px">Assign tutor for Online class</button>
<hr class="new2">
<button type="submit" formaction="Syllabus.php" class="btn btn-default" style="margin-left:170px">Change Syllabus</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">Upload Exam Details</button>
 <hr class="new2">

</div>
</div>
</form>
</body>
</html>
