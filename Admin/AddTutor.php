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
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 140px; /* Same as the width of the sidenav */
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
<form action="#" method="post" style="background-color:#808080">
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
   <a href="Admin.php"><center>Home</center></a>
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
	$sql = "SELECT * from tutor_info where Value='0' order by RAND() limit 1";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$naam  = $row['Name'];
		$mail = $row['Email'];
		$add = $row['Address'];
		$phone = $row['phone'];
	}
	?>
	Name: <?php echo $naam;?><br>
	Email: <?php echo $mail;?><br>
	Address: <?php echo $add;?><br>
	Phone: <?php echo $phone;?><br>
	Select Class: 
	<input type="radio" name="class" value="play">Play
	<input type="radio" name="class" value="nursery-1">Nursery-1
	<input type="radio" name="class" value="nursery-2">Nursery-2
	<input type="radio" name="class" value="class-1">Class-1
	<input type="radio" name="class" value="class-2">Class-2
	<hr>
	<br>
	<input type="submit" name="sub" value="Submit">
</div>
</div>
</form>
</body>
</html>
<?php
	if(isset($_POST['sub'])){
		$cls= $_POST['class'];
		if($cls =="")
		{
			echo '<script language="javascript">';
			echo 'alert("error"); 
			location.href="Admin.php"';
			echo '</script>';
		}
		$con = mysqli_connect("localhost","root","","software_project");
		$query="insert into tutor(Id,Email,Class_Num_1,Date,Time) values('','$mail','$cls','','')";
		$id = $_SESSION['TutorId'];
		$sql="Update tutor_info Set Value=1 where Id = $id";
		mysqli_query($con,$sql);
		$txt ="Congratulations!!!You are assigned into ".$cls."\n You can now share all docs and mp4 file";
		if(mysqli_query($con,$query)){
			mail($mail,'Assigned Notification',$txt,'from:YouLearn');
			echo '<script language="javascript">';
			echo 'alert("Successfully Registered"); 
			location.href="Admin.php"';
			echo '</script>';
		}
	}
?>