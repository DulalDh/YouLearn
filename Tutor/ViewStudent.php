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
  width:50%;
  margin-left:300px;
}



.main {
   /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  width: 55%;
}


</style>
</head>
<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$name = $_SESSION['TutorMail'];	
	$sql = "SELECT * FROM tutor WHERE Email='$name'";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$num = $row['Class_num_1'];
	}
 ?>
<body>
<form style="background-color:#E6E6FA">
  
<div class="container">
  
<div class="main">
<h2><center>Welcome to Tutor Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['TutorName']; ?></strong> You're assigned to Play Group.You have to cover the syllabus with your video content.
  </div>
  <hr class="new2">
 <?php
	$con=mysqli_connect("localhost","root","","software_project");
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						if($num=="Play"){
							$result = mysqli_query($con,"SELECT * FROM play");
						}else if($num=="Nursery-1"){
							$result = mysqli_query($con,"SELECT * FROM Nursery_1");
						}else if($num=="Nursery-2"){
							$result = mysqli_query($con,"SELECT * FROM Nursery_2");
						}else if($num=="Class-1"){
							$result = mysqli_query($con,"SELECT * FROM Class_1");
						}
						echo "<table border='1'>
						<tr>
							<th>Name</th>
							<th>Birthday</th>
							<th>MentorEmail</th>
							
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>" . $row['Name'] . "</td>";
							echo "<td>" . $row['Birthday'] . "</td>";
							echo "<td>" . $row['MentorEmail'] . "</td>";
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
