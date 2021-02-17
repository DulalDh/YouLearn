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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
  position: relative;
}

.sidenav {
  width: 360px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #E6E6FA;
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
div.ex1 {
  width: 450px;
  height: 430px;
  overflow: scroll;
}
.main {
  margin-left: 320px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  background-color: #E6E6FA;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.message_box{border: 1px solid black; width:450px; height: 480px; margin-left: 150px;}
.message_area{width: 100%;  height: 430px;}
</style>
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
	$sql="SELECT * FROM picture WHERE Type='$name'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$src = $row['Source'];
	}
 ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<form action="#" method="post" style="background-color:#E6E6FA">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color:black">
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
   <img src=<?php echo $src; ?> class="img-circle" alt="Cinque Terre" style="margin-left:90px" width="200px" height="200px"> 
  <a href="Tutor.php"><center>Home</a>
	<a href="ProfileTutor.php">Profile</a>
  <a href="ViewChildInfo.php">View Child Info</a>
</div>

<div class="main">
	<center>Group chat</center>
		<hr class="new2">
		
		<div class="message_box">
			<div class="ex1">
			<div class="message_area">
			<?php
				$con=mysqli_connect("localhost","root","","software_project");
				$sql = "SELECT * FROM tutor_chat";
				$res = mysqli_query($con,$sql);
				while($row=mysqli_fetch_assoc($res))
				{
					$naam = $row['Mail'];
					$text = $row['Message'];
					$when = $row['DateTime'];
					echo '<h6 style="color:blue">'.$naam ." ". $when .'</h6>';
					echo '<p>'.$text.'</p>';
					echo '<hr>';
				}
			?>
			<?php
				if(isset($_POST['sbmt']))
				{
					$name = $_SESSION['TutorName'];
					$mssg = $_POST['mssg'];
					date_default_timezone_set("Asia/Dhaka");
					$timer = date("h:i:sa");
					$con=mysqli_connect("localhost","root","","software_project");
					$query = "INSERT INTO tutor_chat(Id,Mail,Message,DateTime) VALUES('','$name','$mssg','$timer')";
						//echo $query;
					if(mysqli_query($con,$query))
					{
						header("Location: Chat.php");
					}
				}
			?>
			</div>
			</div>
			<form method="post">
				<input type="text" name="mssg"  placeholder="Type Your Text Here!">
				<input type="submit" name="sbmt" value="Sent">
			</form>
		
		</div>
  </div>
  <br>
</div>				
</body>
</html>
