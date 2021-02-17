<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | YouLearn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.container {
  position: relative;
  width: 50%;
}
</style>
<div class="container">
	<form  method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" style="background:#92a8d1">
		<div class="jumbotron"style="background:#92a8d1">
			<h1 class="text-center" class="text-success">YouLearn</h1>      
			<p>An online platform to promote education. Education is not a need, it's a right. This is where you get the quality education. Spread knowledge and love!</p>
			<div class="form-group">
			  <label for="usr">Email:</label>
			  <input type="text" class="form-control" id="usr" name="usr">
			</div>
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" name="pwd">
			</div>
			<input type="Submit" class="btn"  name="login" value="Login">
		</div>
	</form>
</div>

</body>
</html>		
<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","software_project");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Retrieve Data

	$password=$_POST['pwd'];
	$email=$_POST['usr'];
	$sql="SELECT * FROM login WHERE Email='$email' AND Password='$password'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);
		$type = $row['Type'];
		$_SESSION['name'] = $row['Id'];
		if($type=="Admin")
		{
			//$_SESSION['mail'] = $email;
			//header("Location:Admin.php");
			?>
			<script>
				window.alert('Login Success, Welcome Admin!');
				window.location.href='Admin/Admin.php';
			</script>
			<?php
		}
		else if($type=="Tutor")
		{
			$query = "select * from tutor_info where Email='$email' and password='$password'";
			$res = mysqli_query($con,$query);
			if(mysqli_num_rows($res)>0)
			{
				$rows = mysqli_fetch_array($res);
				$_SESSION['TutorId'] = $rows['Id'];
				$_SESSION['TutorName'] = $rows['Name'];
				$_SESSION['TutorMail'] = $rows['Email'];
				//header("Location:Tutor.php");
				?>
			<script>
				window.alert('Login Success, Welcome Tutor!');
				window.location.href='Tutor/Tutor.php';
			</script>
			<?php
			}	
		}
		else if($type=="Mentor")
		{
			$query = "select * from mentor_info where Email='$email' and password='$password'";
			$res = mysqli_query($con,$query);
			if(mysqli_num_rows($res)>0)
			{
				$rows = mysqli_fetch_array($res);
				$_SESSION['MentorName'] = $rows['Name'];
				$_SESSION['TutorId'] = $rows['Id'];
				$_SESSION['email'] = $rows['Email'];
				//header("Location:Mentor.php");
				?>
				<script>
					window.alert('Login Success, Welcome Mentor!');
					window.location.href='Mentor/Mentor.php';
				</script>
				<?php
			}
		}
		else if($type=="Child")
		{
			$query = "select * from children_account where Name='$email' and Password='$password'";
			$res = mysqli_query($con,$query);
			if(mysqli_num_rows($res)>0)
			{
				$rows = mysqli_fetch_array($res);
				$_SESSION['ChildId'] = $rows['Id'];
				?>
				<script>
					window.alert('Login Success, Welcome Student!');
					window.location.href='Child/anthem.php';
				</script>
				<?php
			}
		}
	}
	else
	{
		echo "No data found.<br/>";
	}

	
mysqli_close($con);		
}

?>