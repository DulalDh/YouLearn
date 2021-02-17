<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:YouLearn.html");
}
	$con = mysqli_connect("localhost","root","","software_project");
	
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
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
	$sql1="SELECT * FROM picture WHERE Type='$name'";
	$result=mysqli_query($con,$sql1);	
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
		$command = "SELECT * FROM play ORDER BY Id ASC";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == "nursery-1"){
		$command = "SELECT * FROM nursery-1 ORDER BY Id ASC";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == "nursery-2"){
		$command = "SELECT * FROM nursery-2 ORDER BY Id ASC";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == ""){
		$command = "SELECT * FROM Class-1 ORDER BY Id ASC";
		$oracle = mysqli_query($con,$command);
	}
	else if($class == ""){
		$command = "SELECT * FROM Class-2 ORDER BY Id ASC";
		$oracle = mysqli_query($con,$command);
	}
 ?>
<body>
<form action="insert.php" method="post" style="background-color:#E6E6FA">
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
      <img src=<?php echo $src; ?> class="img-circle" alt="Cinque Terre" style="margin-left:10px" width="200px" height="200px"> 
  <a href="Tutor.php"><center>Home</a>
	<a href="ProfileTutor.php">Profile</a>
  <a href="ViewChildInfo.php">View Child Info</a>
</div>

<div class="main">
<h2><center>Welcome to Tutor Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['TutorName']; ?></strong> You're assigned to Play Group.You have to cover the syllabus with your video content.
  </div>
 <hr class="new2">
 Bangla<input type="number" name="bangla"><br>
English<input type="number" name="english"><br>
Math<input type="number" name="math"><br>
Digit<input type="number" name="digit"><br>
Poem<input type="number" name="poem"><br>
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Message:</option>
<?php
	while($row = mysqli_fetch_array($oracle))
	{
		echo '<option value="'.$row['Id'].'">'.$row["Id"].'</option>';
	}
?>
</select>

</form>
		<div id="txtHint">Teachers info will be listed here...</div>
		</div>
		<script>

function showCustomer(str) {
  var xhttp;   
'alert(str);  '
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "uploadxm.php?q="+str, true);
  xhttp.send();
}
</script>
</div>
</div>
</form>
</body>
</html>
