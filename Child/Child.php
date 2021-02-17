<?php
	session_start();
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
  background-color:#90EE90;
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
  background-color: rgba(0, 179, 0,.9);
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
.container-fluid{
	color: #eb8c4d;
}
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: white;
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
	$con=mysqli_connect("localhost","root","","software_project");
	if($day == "Sunday"){

	}else if($day == "Monday"){
		
	}else if($day == "Tuesday"){
		
	}else if($day == "Wednesday"){
		
	}else if($day == "Thursday"){
		
	}else if($day == "Friday"){
		
	}else if($day == "Saturday"){
		
	}
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
<form style="background-color:#90EE90">
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
  <img src=<?php echo $img; ?> class="img-circle" alt="Cinque Terre" width="204" height="236"> 
  <h2><?php echo $name; ?></h2>
</div>

<div class="main">
<h2><center>Welcome to Learner Home page</center></h2><br>
 
<div class="row">
  <div class="column">
    <div class="card">
      <h3><span style="font-size:30px;cursor:pointer" onclick="openBangla()">বাংলা</span></h3>
      <p>বর্ণমালা</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3><span style="font-size:30px;cursor:pointer" onclick="openEnglish()">English</span></h3>
      <p>Alphabet</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><span style="font-size:30px;cursor:pointer" onclick="openDigit()">Math</span></h3>
      <p>Digit</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><span style="font-size:30px;cursor:pointer" onclick="openMath()">গণিত</span></h3>
      <p>সংখ্যা</p>
    </div>
  </div>
</div>
<br>
<div id="myBangla" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeBangla()">&times;</a>
  <div class="overlay-content">
    <a href="Bangla.php">Play</a>
    <h3><?php date("y-m-d"); ?></h3>
    <h3>Lesson: Write Bengali Letter</h3>
    <h3>Subject: Bangla</h3>
  </div>
</div>
<div id="myEnglish" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeEnglish()">&times;</a>
  <div class="overlay-content">
    <a href="English.php">Play</a>
    <h3><?php date("y-m-d"); ?></h3>
    <h3>Lesson: Write Letter A/a</h3>
    <h3>Subject: English</h3>
  </div>
</div>
<div id="myMath" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeMath()">&times;</a>
  <div class="overlay-content">
    <a href="Math.php">Play</a>
    <h3><?php date("y-m-d"); ?></h3>
    <h3>Lesson: Write Digit</h3>
    <h3>Subject: Math</h3>
  </div>
</div>
<div id="myDigit" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeDigit()">&times;</a>
  <div class="overlay-content">
    <a href="Digit.php">Play</a>
    <h3><?php date("y-m-d"); ?></h3>
    <h3>Lesson: Write Bengali Digit</h3>
    <h3>Subject: Math</h3>
  </div>
</div>
<div id="myPoem" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closePoem()">&times;</a>
  <div class="overlay-content">
    <a href="Poem.php">Play</a>
    <h3><?php date("y-m-d"); ?></h3>
    <h3>Lesson: Listening Poem</h3>
  </div>
</div>
<div id="myStory" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeStory()">&times;</a>
  <div class="overlay-content">
    <a href="Story.php">Play</a>
    <h3><?php date("y-m-d"); ?></h3>
    <h3>Lesson: Listening Story</h3>
  </div>
</div>
<hr class="new2">
<div class="row">
  <div class="column">
    <div class="card">
      <h3><span style="font-size:30px;cursor:pointer" onclick="openPoem()">Poem</span></h3>
      <p>Bangla & English</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><span style="font-size:30px;cursor:pointer" onclick="openStory()">Story</span></h3>
      <p>Bangla & English</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><a href="canvas.php">Drawing</a></h3>
	  <p> Draw Various Thing</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><a href="Other.php">Other</a></h3>
	  <p> Various Story on our country</p>
    </div>
  </div>
</div>
<hr class="new2">

</div>
</div>
</form>
<script>
function openBangla() {
  document.getElementById("myBangla").style.width = "100%";
}

function closeBangla() {
  document.getElementById("myBangla").style.width = "0%";
}

function openEnglish() {
  document.getElementById("myEnglish").style.width = "100%";
}

function closeEnglish() {
  document.getElementById("myEnglish").style.width = "0%";
}


function openDigit() {
  document.getElementById("myDigit").style.width = "100%";
}

function closeDigit() {
  document.getElementById("myDigit").style.width = "0%";
}


function openMath() {
  document.getElementById("myMath").style.width = "100%";
}

function closeMath() {
  document.getElementById("myMath").style.width = "0%";
}

function openPoem() {
  document.getElementById("myPoem").style.width = "100%";
}

function closePoem() {
  document.getElementById("myPoem").style.width = "0%";
}

function openStory() {
  document.getElementById("myStory").style.width = "100%";
}

function closeStory() {
  document.getElementById("myStory").style.width = "0%";
}

</script>
</body>
</html>
