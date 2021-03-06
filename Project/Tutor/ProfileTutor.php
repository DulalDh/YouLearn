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
  <link href="css/ProMentor.css" rel="stylesheet" type="text/css" />
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
img {
  border-radius: 8px;
  margin-left: 120px;
}
.title {
  color: grey;
  font-size: 18px;
}
</style>
</head>
<body>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" style="background-color:#808080">
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
  <a href="Tutor.php">Home</a>
	<a href="ProfileTutor.php">Profile</a>
  <a href="ViewChildInfo.php">View Child Info</a>
  <a href="#contact">Contact</a>
</div>
</div>
<?php
	$name = $_SESSION['TutorName'];
	$con=mysqli_connect("localhost","root","","software_project");
	$sql="SELECT * FROM picture WHERE Type='$name'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$src = $row['Source'];
	}
	$id = $_SESSION['TutorId'];
	$query="SELECT * FROM tutor_info WHERE Id='$id'";
	$res = mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0)
	{
		$row = mysqli_fetch_array($res);
		$naam  = $row['Name'];
		$mail = $row['Email'];
		$add = $row['Address'];
		$phone = $row['phone'];
	}
	$command = "SELECT * FROM tutor WHERE Email='$mail'";
	$ans = mysqli_query($con,$command);
	if(mysqli_num_rows($ans)>0)
	{
		$row = mysqli_fetch_array($ans);
		$class_no1 = $row['Class_num_1'];
		
	}
?>
<div class="main">
	<center>Welcome to Mentor Home page</center>
	<div class="left">
	
		<img src=<?php echo $src; ?>  width="400" height="500">
	</div>
	<div class="right">
		<h1><?php echo $naam; ?></h1>
		<hr>
		<h3><?php echo $mail; ?></h3>
		<h4><?php echo $add; ?></h4>
		<h4><?php echo "0".$phone; ?></h4>
		<hr>
		<h3>Class: <?php echo $class_no1; ?></h3>
		<br>
	</div>
</div>			
<hr>
</form>
</body>
</html>
