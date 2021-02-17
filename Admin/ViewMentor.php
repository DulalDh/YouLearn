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
  width:75%;
  margin-left:200px;
}

.main {
   /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  width: 75%;
}


</style>
</head>

<body>
<form style="background-color:#808080">
  
<div class="container">
  
<div class="main">
<h2><center>Welcome to Tutor Home page</center></h2>
  <div class="table">
  <hr class="new2">
 <?php
	$con=mysqli_connect("localhost","root","","software_project");
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						$result = mysqli_query($con,"SELECT * FROM mentor_info");
						echo "<table border='1'>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
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
</div>
</form>
</body>
</html>
