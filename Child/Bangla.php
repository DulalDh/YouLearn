<?php
session_start();
if(isset($_SESSION['number'])){
	$number = $_SESSION['number'];
}else{
	$number = 38;
}
$_SESSION['number'] = $number + 1;
if($_SESSION['number'] > 48){
	$_SESSION['number'] = 38;
}
if($_SESSION['ChildId'] == ""){
		header("Location: YouLearn.html");
	}
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
  <title>Learner DashBoard</title>
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
.sidenav{
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #90EE90;
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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
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

body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

<?php
	$day = date("l");
	$ddate = date("Y-m-d");
	$date = new DateTime($ddate);
	$week = $date->format("M");
	$id = json_encode($number);
	$con=mysqli_connect("localhost","root","","software_project");
	$query = "SELECT * FROM docofplay WHERE Subject = 'Bangla' AND Id = '$id'";
	$res = mysqli_query($con,$query);
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_array($res);
		$x = $row['Source'];
		$y = $row['Source_1'];
		$z = $row['Source_2'];
	}
	$num = rand(0,2);
	$cars = array($x, $y, $z);
	$src2 = $cars[$num];
	// if($day == "Sunday"){

	// }else if($day == "Monday"){
		
	// }else if($day == "Tuesday"){
		
	// }else if($day == "Wednesday"){
		
	// }else if($day == "Thursday"){
		
	// }else if($day == "Friday"){
		
	// }else if($day == "Saturday"){
		
	// }
	$name = $_SESSION['ChildId'];
	$con=mysqli_connect("localhost","root","","software_project");
	$sql="SELECT * FROM picofchild WHERE Name='$name'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$src = $row['Imgsrc'];
		$cls = $row['Class'];
	}
	$img = "image/image/".$cls."/".$src;
?>
</style>
</head>
<body>
<form action="#" method="post" style="background-color:#90EE90">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: black">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size:30px;">YouLearn: Larner Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="sidenav">
  <img src=<?php echo $img; ?> class="img-circle" alt="Cinque Terre" width="254" height="236"> 
  
</div>
<div class="main">
<P> <?php $src;?></p>
<video id="myVideo" width="1000" height="450" controls>
  <source src=<?php echo $src2; ?> type="video/mp4">
</video>
<hr>
  <button type="submit" onclick= class="btn btn-success" style="margin-left:400px">Next</button>
	<hr>
</div>
</div>
</form>

<script>
var id = 1;
var vid = document.getElementById("myVideo");
vid.onended = function() {
  window.location.href='game_no_3.php';
};
</script>

</body>
</html>