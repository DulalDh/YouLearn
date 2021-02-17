<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		header("Location:index.php");
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  width: 200px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
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
	$sql="SELECT * FROM picture WHERE Type='$name'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$src = $row['Source'];
	}
	$query = "SELECT * FROM tutor WHERE Email = '$mail'";
	$com = mysqli_query($con,$query);
	if(mysqli_num_rows($com)>0){
		$row = mysqli_fetch_array($com);
		$class = $row['Class_num_1'];
	}
	if($class == "Play"){
		$command = "SELECT * FROM setquestion WHERE Class='Play'";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == "nursery-1"){
		$command = "SELECT * FROM setquestion WHERE Class='nursery-1'";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == "nursery-2"){
		$command = "SELECT * FROM setquestion WHERE Class='nursery-2'";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == ""){
		$command = "SELECT * FROM setquestion WHERE Class='Class-1'";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == ""){
		$command = "SELECT * FROM setquestion WHERE Class='Class-2'";
		$oracle = mysqli_query($con,$command);
	}
	mysqli_close($con);
 ?>
	<body style="background-color: #E6E6FA;width=900px">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color:black">
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
      <img src=<?php echo $src; ?> class="img-circle" alt="Cinque Terre" style="margin-left:10px" width="200px" height="200px"> 
  <a href="Tutor.php"><center>Home</a>
	<a href="ProfileTutor.php">Profile</a>
  <a href="ViewChildInfo.php">View Child Info</a>
</div>
<div class="main">
		<?php
		$con=mysqli_connect("localhost","root","","software_project");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		echo "<table border='1'>
		<tr>
			<th>Source</th>
			<th>Source_num-1</th>
			<th>Source_num-2</th>
			<th>Subject</th>
		</tr>";
		while($row = mysqli_fetch_array($oracle))
		{
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Name1'] . "</td>";
			echo "<td>" . $row['Name2'] . "</td>";
			echo "<td>" . $row['Subject'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		
		mysqli_close($con);
					?>
</div>
	</body>
</html>

