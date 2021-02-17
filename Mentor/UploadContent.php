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
  <title>Mentor DashBoard</title>
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
  background-color: #98FB98;
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
<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$name = $_SESSION['MentorName'];	
	$mail = $_SESSION['email'];
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
 ?>
<body>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" style="background-color:#98FB98">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color:#5d001e">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size:30px;">YouLearn: Mentor Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="sidenav">
   <img src=<?php echo $src; ?> class="img-circle" alt="Cinque Terre" width="90%" height="90%" style="margin-left: 15px">
  <a href="Mentor.php"><center>Home</a>
  <a href="ProfileMentor.php">Profile</a>
  <a href="ViewChildInfo.php">View Child Info</a>
  <a href="UploadContent.php">Upload Section</center></a>
</div>

<div class="main">
<center>Welcome to Mentor Home page</center>

<div class="alert alert-info">
    <strong>Hello <?php echo $_SESSION['MentorName']; ?></strong> This is your DashBoard.You can check Your child's activity from here. 
  </div>
  <hr class="new2">
		<h3>Child Name</h3>
		<input type="text" name="usr">
		<h3>Class</h3>
		<input type="text" name="cls">
		<hr class="new2">
		Select Picture:<input type="file" name="file" >
		<hr>
		<input type="Submit" name="Submit">
		
</div>				
</form>
</body>
</html>
<?php
	if(isset($_POST['Submit']))
	{
		$file_name = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_size = $_FILES['file']['size'];
		$file_tem_loc = $_FILES['file']['tmp_name'];
		$num = $_POST['usr'];
		$cls = $_POST['cls'];
		$path = $_SERVER["DOCUMENT_ROOT"];
		$mail = $_SESSION['email'];
		$file_store = $path."/Project/Child/image/image/".$cls."/".$file_name;
		//$file_store = "upload/".$file_name;
	
			move_uploaded_file($file_tem_loc,$file_store);
			$con = mysqli_connect("localhost","root","","software_project");
			$sql="insert into picofchild(id,name,mentormail,class,imgsrc) values('','$num','$mail','$cls','$file_name')";
			if(mysqli_query($con,$sql))
			{
			  echo '<script language="javascript">';
			 echo 'alert("done!!!!"); 
			location.href="mentor.php"';
			  echo '</script>';
		   }		
	}
?>