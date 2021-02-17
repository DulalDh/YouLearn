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
  font-size: 15px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data" style="background-color:#808080">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
  <a href="#about">Home</a>
  <a href="ViewTutor.php">View Tutor</a>
  <a href="ViewMentor.php">View Mentor</a>
</div>

<div class="main">
<h2><center>Welcome to Tutor Home page</center></h2>
<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['TutorName']; ?></strong> Select Class and Subject first.Then choose at least two files for each lesson.
  </div>
  <hr class="new2">
  <label for="pwd">Class:</label>
	<label class="checkbox-inline">
		<input type="radio" value="Play" name="rlgn">Play
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Nursery-1" name="rlgn">Nursery-1
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Nursery-2" name="rlgn">Nursery-2
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Class-1" name="rlgn">Class-1
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Class-2" name="rlgn">Class-2
	</label><br>
	<label for="pwd">Subject:</label>
	<label class="checkbox-inline">
		<input type="radio" value="Bangla" name="sub">Bangla
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="English" name="sub">English
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Digit" name="sub">Digit
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Bangla Digit" name="sub">Bangla Digit
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Poem" name="sub">Poem
	</label>
	<label class="checkbox-inline">
		<input type="radio" value="Story" name="sub">Story
	</label><br><hr>
	<label for="usr">Select file no 1:</label>
	<input type="file" name="file">
	<hr class="new2">
	<label for="usr">Select file no 2:</label>
	<input type="file" name="fileTo">
	<hr class="new2">
	<label for="usr">Select file no 3:</label>
	<input type="file" name="fileToUpload">
	<hr class="new2">
	<input type="submit" name="Submit"value="Submit">
	<hr class="new2">

</div>
</div>
</form>
</body>
</html>
<?php
	$con = mysqli_connect("localhost","root","","software_project");
	if(isset($_POST['Submit'])){
		$subject = $_POST['sub'];
		$class = $_POST['rlgn'];
		$fileno1_name = $_FILES['file']['name'];
		$fileno1_type = $_FILES['file']['type'];
		$fileno1_size = $_FILES['file']['size'];
		$fileno1_tem_loc = $_FILES['file']['tmp_name'];
		$path = $_SERVER["DOCUMENT_ROOT"];
		$fileno1_store = $path."/Project/Child/video/".$class."/".$subject."/".$fileno1_name;
	
		move_uploaded_file($fileno1_tem_loc,$fileno1_store);
		
		// $fileno2_name = $_FILES['fileTo']['name'];
		// $fileno2_type = $_FILES['fileTo']['type'];
		// $fileno2_size = $_FILES['fileTo']['size'];
		// $fileno2_tem_loc = $_FILES['fileTo']['tmp_name'];
		// $path = $_SERVER["DOCUMENT_ROOT"];
		// $fileno2_store = $path."/Project/Child/video/".$class."/".$subject."/".$fileno1_name;
	
		// move_uploaded_file($fileno2_tem_loc,$fileno2_store);
		
		// $fileno3_name = $_FILES['fileToUpload']['name'];
		// $fileno3_type = $_FILES['fileToUpload']['type'];
		// $fileno3_size = $_FILES['fileToUpload']['size'];
		// $fileno3_tem_loc = $_FILES['fileToUpload']['tmp_name'];
		// $path = $_SERVER["DOCUMENT_ROOT"];
		// $fileno3_store = $path."/Project/Child/video/".$class."/".$subject."/".$fileno1_name;
	
		// move_uploaded_file($fileno3_tem_loc,$fileno3_store);
	}
?>