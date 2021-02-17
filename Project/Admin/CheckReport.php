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
  <a href="#about">Home</a>
  <a href="ViewTutor.php">View Tutor</a>
  <a href="ViewMentor.php">View Mentor</a>
</div>

<div class="main">
<h2><center>Welcome to Admin Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello Faruk:</strong> This is Admin Home.Here You can complete all your admin work.
  </div>
  <hr class="new2">
 <?php
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * from report order by RAND() limit 1";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$id = $row['Id'];
		$mail = $row['Email'];
		$add = $row['Problem'];
	}
	?>
	Email: <?php echo $mail;?><br>
	Problem: <?php echo $add;?><br>
	<hr>
	<br>
	<input type="submit" name="sub" value="Solve the issue">
</div>
</div>
</form>
</body>
</html>
<?php
	if(isset($_POST['sub'])){
		if($add=="login"){
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
			$x = getName(8);	
			$con = mysqli_connect("localhost","root","","software_project");
			echo $mail;echo $mail;echo $mail;echo $mail;
			$query = "UPDATE login SET Password='$x' WHERE Email='$mail'";
			mysqli_query($con,$query);
			if(mail($mail,'Change Password','Password: '.$x.'  This is your new password','from:youlearn')){
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
			$sql="DELETE FROM report WHERE Id='$id'";
			mysqli_query($con,$sql);
		}	
		else if($add=="upload"){
			mail($mail,'Upload Problem','Watch the How to Upload','from:youlearn');
			$sql="DELETE FROM report WHERE Id='$id'";
			if(mysqli_query($con,$sql)){
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
			
		}
	}
?>