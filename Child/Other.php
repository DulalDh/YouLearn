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
	$id = json_encode($num);
	$con=mysqli_connect("localhost","root","","software_project");
	$query = "SELECT * FROM docofplay WHERE Subject = 'Math' AND Id = '$id'";
	$res = mysqli_query($con,$query);
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_array($res);
		$x = $row['Source'];
		$y = $row['Source_1'];
		$z = $row['Source_2'];
	}
	$num = rand(0,2);
	$cars = array($x, $y, $z);
	$src = $cars[$num];
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
<form style="background-color:#e0bb65">

  
<div class="container">
  <div class="sidenav">
  <?php echo $img; ?>
  <img src=<?php echo $img; ?> class="img-circle" alt="Cinque Terre" width="254" height="236"> 
</div>

<div class="main">
<h2><center>Welcome to Learner Home page</center></h2>
 <hr>
<button type="submit" formaction="Listening.php" class="btn btn-default" style="margin-left:400px">Listening</button><br><br>
  <button type="submit" formaction="Reading.php" class="btn btn-default" style="margin-left:400px">Reading</button><br><br>
  <button type="submit" formaction="Speaking.php" class="btn btn-default" style="margin-left:400px">Speaking</button><br><br>
 <button type="submit" formaction="Wrinting.php" class="btn btn-default" style="margin-left:400px">Writing</button>
<hr class="new2">

</div>
</div>
</form>

</body>
</html>
