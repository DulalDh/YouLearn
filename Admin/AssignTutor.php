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
  width: 220px;
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
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.column {
  float: left;
  width: 45%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
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
<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * from tutor order by RAND() limit 1";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$mail = $row['Email'];
		$date = $row['Date'];
		$time = $row['Time'];
		$mails = $row['Email'];
		$dates = $row['Date'];
		$times = $row['Time'];
	}
	$query = "select * from tutor order by RAND() limit 1";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		$rows = mysqli_fetch_array($result);
		$mails = $row['Email'];
		$dates = $row['Date'];
		$times = $row['Time'];
	}
	?>
<div class="main">
<h2><center>Welcome to Admin Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello Faruk:</strong> This is Admin Home.Here You can complete all your admin work.
  </div>
  <div class="row">
  <div class="column">
    <div class="card">
<img src="image/default.jpg"" alt="John" style="width:100%;height:150px">
  <h3><?php echo $mail;?></h3>
  <p class="title"><?php echo $date, $time ?></p>
  <input type="submit" name="submit" value="Mail">
      </div>
  </div>
  
  <div class="column" style="margin-left:97px">
    <div class="card">
     <img src="image/default.jpg" alt="John" style="width:100%;height:150px">
  <h3><?php echo $mails;?></h3>
  <p class="title"><?php echo $dates, $times ?></p>
  <input type="submit" name="sub" value="Mail">
    </div>
  </div>
 
</div>
 <hr class="new2">

</div>
</div>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		mail($mail,'Online Class','A mentor has requested for online class.We assigned you for this class','from:youlearn');
		//mail($mail,'Online Class','A mentor has requested for online class.We assigned you for this class','from:youlearn');
	}
	else if(isset($_POST['sub']))
	{
		mail($mails,'Online Class','A mentor has requested for online class.We assigned you for this class','from:youlearn');
		//mail($mail,'Online Class','A mentor has requested for online class.We assigned you for this class','from:youlearn');
	}
?>