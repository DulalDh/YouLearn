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
<form action="#" method="post"style="background-color:#808080">
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
 <?php
	$con = mysqli_connect("localhost","root","","software_project");
	$name = $_SESSION['MentorName'];	
	$sql = "SELECT COUNT(Name) FROM picture WHERE Type='$name'";
	$res = mysqli_query($con,$sql);
	$mail = $_SESSION['email'];
	$sqlno = "SELECT COUNT(Id) FROM mssg WHERE Email = '$mail'";
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$num = $row['COUNT(Name)'];
	}
	$result = mysqli_query($con,$sqlno);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$nom = $row['COUNT(Id)'];
	}

 ?>
<div class="container">
  <div class="sidenav">
  <a href="#about">Home</a>
  <?php
	if($num == 0)
	{
		echo '<a href="PictureMentor.php">Profile<span class="badge">Upload Your Pic</span></a>';
	}
	else
	{
		echo '<a href="ProfileMentor.php">Profile</a>';
	}
  ?>
  <a href="ViewChildInfo.php">View Child Info</a>
</div>

<div class="main">
<center>Welcome to Mentor Home page</center>

<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['MentorName']; ?></strong> This is your DashBoard.You can check Your child's activity from here. 
  </div>
  <hr class="new2">
  <button type="submit" formaction="Activity.php" class="btn btn-default">View Your Activity</button>
 <button type="submit" formaction="Notification.php" class="btn btn-default" style="margin-left:50px">Notification<span class="badge"><?php echo $nom; ?></button>
 <button type="submit" formaction="Bookmarks.php" class="btn btn-default" style="margin-left:50px">Bookmarks</button>
  <button type="submit" formaction="TeacherInfo.php" class="btn btn-default" style="margin-left:50px">Teacher's Info</button>
 <button type="submit" formaction="Chat.php" class="btn btn-default" style="margin-left:50px">Chat with Admin</button>
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
 <button type="submit" formaction="Child_Approval.php" class="btn btn-default" style="margin-left:50px">Add Child</button>
  <button type="submit" name="req" class="btn btn-default" style="margin-left:50px">Request For Online Class</button>
  <button type="submit" formaction="HavingTrouble.php" class="btn btn-default" style="margin-left:50px">Having Trouble</button>
 <button type="submit" formaction="SampleVideo.php" class="btn btn-default" style="margin-left:50px">See Sample Video</button>
<hr class="new2">
<?php

	$files = scandir("docs");
	for($i=0;$i < count($files);$i++)
	{
		echo '<p style="margin-top:-35px;margin-left:150px;">';
			echo '<a download='.$files[$i].' href=docs/'.$files[$i].'>'.$files[$i].'</a>';
		echo '</p>';
	}
?>
 <button type="button" class="btn btn-default" style="margin-left:520px;margin-top:-100px">Exam Details</button>
 
  </div>
</div>				
</form>
</body>
</html>
<?php
	if(isset($_POST['req'])){
		$con = mysqli_connect("localhost","root","","software_project");
		$name = $_SESSION['MentorName'];	
		$query = "INSERT INTO report(Id,Problem,Email) Values('','online','$mail');";
		if(mysqli_query($con,$query))
		{
			echo '<script language="javascript">';
			echo 'alert("Successfully Registered"); 
			location.href="Mentor.php"';
			echo '</script>';
		}
	}
?>