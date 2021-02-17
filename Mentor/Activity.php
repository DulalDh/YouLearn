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
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #98FB98;
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
	$name = $_SESSION['MentorName'];	
	$mail = $_SESSION['email'];
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
	$sql="SELECT * FROM picture WHERE Type='$name'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$src = $row['Source'];
	}
 ?>
<body>
<form style="background-color:#98FB98">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color:black">
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
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$num = $row['COUNT(Name)'];
	}
 ?>
<div class="container">
  <div class="sidenav">
  <img src=<?php echo $src; ?> class="img-circle" alt="Cinque Terre" width="90%" height="90%" style="margin-left: 15px">
  <a href="Mentor.php"><center>Home</a>
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
  <a href="UploadContent.php">Upload Section</center></a>
</div>

<div class="main">
<center>Welcome <?php echo $_SESSION['MentorName']; ?></center>
  <hr class="new2">
  <h3>Activity: </h3>
	<ul>
	 <h4> <li>Upload your Picture</li>
	  <li>Add child</li>
	  <li>Wait for confirmation</li>
	  <li>Login your child account with id and password</li>
	  <li>View All the subject</li>
	  <li>Chat with admin about any issue</li>
	  <li>request to the admin for online class</li>
	  <li>Upload Your child photo</li>
	  <li>Give id and password everytime your child need to login</li>
	  <li>Check his/her improvement</li>
	  <li>If have any issue direct report to admin</li>
	  <li>View Syllabus</li>
	  <li>View Exam Details</li>
	  <li>Prepare Your child</li>
	  <li>Check his weekly homework</li>
	  <li>See the text from a mail</li>
	</ul>
 
  </div>
</div>				
</form>
</body>
</html>
