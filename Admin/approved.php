<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		header("Location:index.php");
	}
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * FROM children_account where accept = '0' ORDER BY Id ASC";
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
  width: 20%;
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
  margin-left: 180px; /* Same as the width of the sidenav */
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
	<form action="accept.php" method="post" style="background-color:#808080">
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

		<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="main">
				
				<div class="right">
					<h3>View All Child</h3>
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
					<textarea id="usr" name="usr"style="width:300px;height:30px;margin-top:-80px;margin-left:100px"></textarea>
					
					<h3>Father's Name: 
					<textarea id="fthrname" name="fthrname" style="width:300px;height:30px; margin-left: 10px; margin-top: -65px;"></textarea>
				</div>
				<div class="opt2">
					<h3>Mother's Name: 
					<textarea id="mthrname" name="mthrname" style="width:300px;height:30px; margin-left: 5px; margin-top: -45px;"></textarea>    
				</div>
				<div class="opt3">
					<h3>Birth Day: 
					<textarea id="birthday" name="birth" style="width:300px;height:30px; margin-left: 70px; margin-top: -45px;"></textarea>
				</div>
				<div class="opt4">
					<h3>Birth Id: 
					<textarea id="birthid" name="birthid" style="width:300px;height:30px; margin-left: 95px; margin-top: -45px;"></textarea>
				</div>
				<h3>Religion: 
					<textarea id="rlgn" name="rlgn" style="width:300px;height:30px; margin-left: 85px; margin-top: -65px;"></textarea>
				</div>
				<div class="opt2" >
					<h3>Gender: 
					<textarea id="gndr" name="gndr" style="width:300px;height:30px; margin-left: 90px; margin-top: -45px;"></textarea>    
				</div>
				<div class="opt3" >
					<h3>Class: 
					<textarea id="clss" name="clss" style="width:300px;height:30px; margin-left: 110px; margin-top: -45px;"></textarea>
				</div>
				<div class="opt4" 
					<h3>Address: 
					<textarea id="add" name="add" style="width:300px;height:30px; margin-left: 65px; margin-top: -45px;"></textarea>
				</div>
				<div class="mail" >
				<h3>Email: 
					<textarea id="mail" name="mail" style="width:300px;height:30px; margin-left: 108px; margin-top: -65px;"></textarea>
					<input type="submit" name="submit" value="Submit">
				</div>
				<div class="add">
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
				url:"getInfoforchild.php",
				method:"POST",
				data:{id:id},
				dataType:"JSON",
				success:function(data)
				{
					$('#usr').text(data.name);
					$('#fthrname').text(data.fthr_name);
					$('#mthrname').text(data.mthr_name);
					$('#birthday').text(data.bday);
					$('#birthid').text(data.bid);
					$('#rlgn').text(data.rlgn);
					$('#gndr').text(data.gndr);
					$('#add').text(data.address);
					$('#clss').text(data.class);
					$('#mail').text(data.mail);
				}
			})
		}
		else
		{
			alert("Plz select the question");
			
		}
	});
});
</script>
