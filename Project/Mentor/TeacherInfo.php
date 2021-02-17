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
  <a href="UploadContent.php">Upload Section</a>
</div>

<div class="main">
<center>Welcome to Mentor Home page</center>

<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['MentorName']; ?></strong> This is your DashBoard.You can check Your child's activity from here. 
  </div>
  <hr class="new2">
	<?php
	$con=mysqli_connect("localhost","root","","software_project");
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						$result = mysqli_query($con,"SELECT * FROM tutor_info");

						echo "<table border='1'>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Religion</th>
							<th>Phone</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>" . $row['Name'] . "</td>";
							echo "<td>" . $row['Email'] . "</td>";
							echo "<td>" . $row['Address'] . "</td>";
							echo "<td>0" . $row['phone'] . "</td>";
							echo "</tr>";
						}
						echo "</table>";

						mysqli_close($con);
					?>
  </div>
</div>				
</form>
</body>
</html>
