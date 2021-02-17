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
	$sql = "SELECT COUNT(Name) FROM picture WHERE Type='$name'";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$num = $row['COUNT(Name)'];
	}
 ?>

<body>
<form action="#" method="post" style="background-color:#808080">
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
 <h4><center>Select Your Time for Online Class</h4></center>
 <hr>
	<label for="pwd">Day:</label>
	 <label class="checkbox-inline">
	<input type="radio" value="Friday" name="rlgn">Friday
	 </label>
	 <label class="checkbox-inline">
	<input type="radio" value="12-5" name="time">12-5
	</label>
	 <label class="checkbox-inline">
		<input type="radio" value="5-10" name="time">5-10
		</label>
		<br>
		<hr>
		<label for="pwd">Day:</label>
	 <label class="checkbox-inline">
	<input type="radio" value="Saturday" name="rlgn">Saturday
	 </label>
	 <label class="checkbox-inline">
	<input type="radio" value="12-5" name="time">12-5
	</label>
	 <label class="checkbox-inline">
		<input type="radio" value="5-10" name="time">5-10
		</label>
		<br>
		<input type="submit" name="sub" value="submit">
</div>
</div>
</form>
</body>
</html>
<?php
	if(isset($_POST['sub'])){
	$con = mysqli_connect("localhost","root","","software_project");
	$day = $_POST['rlgn'];
	$time = $_POST['time'];
	$mail = $_SESSION['TutorMail'];
	if($day=="" || $time==""){
		echo '<script language="javascript">';
		echo 'alert("error"); 
		location.href="Tutor.php"';
		echo '</script>';
	}else{
	$sql ="UPDATE tutor SET Time='$time',Date='$day' WHERE Email='$mail'";
		if(mysqli_query($con,$sql))
		{
			echo '<script language="javascript">';
			echo 'alert("succes"); 
			location.href="Tutor.php"';
			echo '</script>';
		}
	}
	}
?>