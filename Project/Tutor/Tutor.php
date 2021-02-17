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
  <title>Tutor DashBoard</title>
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
<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$name = $_SESSION['TutorName'];	
	$mail = $_SESSION['TutorMail'];
	$sql = "SELECT COUNT(Name) FROM picture WHERE Type='$name'";
	$sqlno = "SELECT COUNT(Id) FROM mssg WHERE MailFrom = ''";
	$res = mysqli_query($con,$sql);
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

<body>
<form style="background-color:#808080">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size:30px;">YouLearn: Tutor Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="sidenav">
  <a href="Tutor.php">Home</a>
	<?php
		if($num==0)
		{
			echo '<a href="PicTutor.php">Profile<span class="badge">1</span></a>';
		}
		else
		{
			echo '<a href="ProfileTutor.php">Profile</a>';
		}
	?>
  <a href="UploadContent.php">Upload Section</a>
</div>

<div class="main">
<h2><center>Welcome to Tutor Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['TutorName']; ?></strong> You're assigned to Play Group.You have to cover the syllabus with your video content.
  </div>
  <hr class="new2">
 <button type="submit" formaction="ViewStudent.php" class="btn btn-default" >View all the student</button>
  <button type="submit" formaction="TextToMentor.php" class="btn btn-default" style="margin-left:50px">Text to Mentor</button>
  <button type="submit" formaction="Notification.php" class="btn btn-default" style="margin-left:50px">Notification<span class="badge"><?php echo $nom; ?></button>
 <button type="submit" formaction="Chat.php" class="btn btn-default" style="margin-left:50px">Chat</button>
 <button type="submit" formaction="SetTime.php" class="btn btn-default" style="margin-left:50px">Set your time</button>
 <hr class="new2">
 <div class="sty" >
 <h3>For uploading a video you just keep in mind: </h3>
	<ul>
	 <h5> <li>Video must be in mp4 format</li>
	  <li>Clear sound and voice</li>
	  <li>Many more</li>
	</ul>
 </div>
 <hr class="new2">
 <button type="submit" formaction="HowToUpload.php" class="btn btn-default" >How to Upload</button>
 <button type="submit" formaction="HavingTrouble.php" class="btn btn-default" style="margin-left:50px">Having trouble?</button>
 <button type="button" class="btn btn-default" style="margin-left:50px">Take Online Class</button>
  <button type="button" class="btn btn-default" style="margin-left:50px">Question Set</button>
 <button type="submit" formaction="SampleVideo.php" class="btn btn-default" style="margin-left:50px">See Sample Video</button>
<hr class="new2">
 <button type="submit" formaction="Syllabus.php" class="btn btn-default" style="margin-left:50px">View Syllabus</button>
 <button type="button"  class="btn btn-default" style="margin-left:50px">Exam Details</button>
 <hr class="new2">

</div>
</div>
</form>
</body>
</html>
