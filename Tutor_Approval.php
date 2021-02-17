<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		header("Location:index.php");
	}
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * FROM tutor_info ORDER BY Id ASC";
	$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin DashBoard</title>
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
	<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="background-color:#808080">
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
  <a href="Admin.php">Home</a>
  <a href="#clients">View Tutor</a>
  <a href="#contact">View Mentor</a>
</div>

		<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="main">
				
				<div class="right">
					<h3>View All Child
				<br>
				<div class="text">
					<select name="emloyee_list" id="emloyee_list">
						<option value="">SELECT a Id</option>
						<?php
							while($row = mysqli_fetch_array($result))
							{
								echo '<option value="'.$row['Id'].'">'.$row["Id"].'</option>';
							}
						?>
					</select>
					<input type="button" id="search" name="srch" value="Search">
				</div>
				<hr>
				<div class="ques">
					<h3 style="margin-top:20px">Name:
					<textarea id="usr" name="usr"style="width:300px;height:30px;margin-top:-80px;margin-left:40px"></textarea>
					
					<h3>Email: 
					<textarea id="fthrname" name="fthrname" style="width:300px;height:30px; margin-left: 40px; margin-top: -65px;"></textarea>
				</div>
				<div class="opt2">
					<h3>Nid_No: 
					<textarea id="mthrname" name="mthrname" style="width:300px;height:30px; margin-left: 25px; margin-top: -45px;"></textarea>    
				</div>
				<div class="opt3">
					<h3>Religion: 
					<textarea id="birthday" name="birth" style="width:300px;height:30px; margin-left: 20px; margin-top: -45px;"></textarea>
				</div>
				<div class="opt4">
				<h3>Mobile: 
					<textarea id="rlgn" name="rlgn" style="width:300px;height:30px; margin-left: 35px; margin-top: -65px;"></textarea>
				</div>
				<div class="opt2" >
					<h3>Gender: 
					<textarea id="gndr" name="gndr" style="width:300px;height:30px; margin-left: 25px; margin-top: -45px;"></textarea>    
				</div>
				<div class="opt4"> 
					<h3>Address: 
					<textarea id="add" name="add" style="width:300px;height:30px; margin-left: 20px; margin-top: -45px;"></textarea>
				</div>
				<div class="mail" >
				<h3>Email: &nbsp;
					<input type="radio" name="class" value="Play">Play &nbsp;
					<input type="radio" name="class" value="nursery-1">Nursery-1&nbsp;
					<input type="radio" name="class" value="nursery-2">Nursery-2 &nbsp;
					<input type="radio" name="class" value="class-1">Class-1 &nbsp;
					<input type="radio" name="class" value="class-2">Class-2 &nbsp;
					<br><br>
					<input type="submit" name="submit" value="Submit">
				</div>
				<div class="footer">
					<hr>
				</div>	
			</div>
		</form>
	</body>
</html>
<script>
$(document).ready(function(){
	$('#search').click(function(){
		var id = $('#emloyee_list').val();
		if(id !="")
		{
			$.ajax({
				url:"fetchtutorinfo.php",
				method:"POST",
				data:{id:id},
				dataType:"JSON",
				success:function(data)
				{
					$('#usr').text(data.name);
					$('#fthrname').text(data.fthr_name);
					$('#mthrname').text(data.mthr_name);
					$('#birthday').text(data.bday);
					$('#rlgn').text(data.rlgn);
					$('#gndr').text(data.gndr);
					$('#add').text(data.address);
				}
			})
		}
	});
});
</script>
<?php
	if(isset($_POST['submit']))
	{
		if($_POST['class'])
		{
			$mail = $_POST['fthrname'];
			$name = $_POST['usr'];
			//$x = $_POST['id'];
			$cls = $_POST['class'];
			echo $cls;
			echo $mail;
			$con = mysqli_connect("localhost","root","","software_project");
			$sql = "SELECT * FROM tutor WHERE Email='$mail'";
			$result = mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result))
			{
				$num = $row['Class_num_1'];
				$num1 = $row['Class_num_2'];
				$num2= $row['Class_num_3'];
				if($num == "")
				{
					$query = "UPDATE tutor SET Class_num_1='$cls' WHERE Email='$mail'";
					if(mysqli_query($con,$query))
					{
						mail($mail,'registration','Hello' .$name. "You are assigned in" .$cls. "You now have to upload all the video content.",'from:YouLearn');						
						echo '<script language="javascript">';
						echo 'alert("Inserted"); 
						location.href="Tutor_Approval.php"';
						echo '</script>';
					}
				}
				else if($num1 == "")
				{
					$query = "UPDATE tutor SET Class_num_2='$cls' WHERE Email='$mail'";
					if(mysqli_query($con,$query))
					{
						mail($mail,'registration','Hello '.$name. "You are assigned in " .$cls. " You now have to upload all the video content.",'from:YouLearn');						
						echo '<script language="javascript">';
						echo 'alert("Inserted"); 
						location.href="Tutor_Approval.php"';
						echo '</script>';
					}
				}
				else if($num2 == "")
				{
					$query = "UPDATE tutor SET Class_num_3='$cls' WHERE Email='$mail'";
					if(mysqli_query($con,$query))
					{
						mail($mail,'registration','Hello '.$name. "You are assigned in " .$cls. " You now have to upload all the video content.",'from:YouLearn');						
						echo '<script language="javascript">';
						echo 'alert("Inserted"); 
						location.href="Tutor_Approval.php"';
						echo '</script>';
					}
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Tuor tutor assigned in all 3 three clsss.She cant assigned again in any class."); 
					location.href="Tutor_Approval.php"';
					echo '</script>';
				}
			}
		}
		else
			echo '<script language="javascript">';
			echo 'alert("Select class and id first"); 
			location.href="Tutor_Approval.php"';
			echo '</script>';
	}
?>