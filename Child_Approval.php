<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:YouLearn.html");
}
$id = $_SESSION['TutorId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Child Approved | YouLearn</title>
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
	<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<div class="jumbotron" style="background:#92a8d1">
			<h1 class="text-center">Child Approval</h1><div class="form-group">
			  <label for="usr">Name:</label>
			  <input type="text" class="form-control" name="usr">
			  <label for="email">Father's Name:</label>
			  <input type="text" class="form-control" name="fthr_nm">
			  <label for="email">Mother's Name:</label>
			  <input type="text" class="form-control" name="mthr_nm">          
			  <label for="usr">Birthday:</label>
			  <input type="date" class="form-control" name="usr_bday">
			  <label for="pwd">Birth id no.:</label>
			  <input type="number" class="form-control" name="brth_id">
			  <br>
			  <label for="pwd">Religion:</label>
			  <label class="checkbox-inline">
				<input type="radio" value="Islam" name="rlgn">Islam
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Hindu" name="rlgn">Hindu
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Christian" name="rlgn">Christian
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Other" name="rlgn">Other
			  </label>
			  
			  <h3>Gender:</h3>
			  <label class="checkbox-inline">
				<input type="radio" value="Male" name="gndr">Male
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Female" name="gndr">Female
			  </label>
			  <h3>Class:</h3>
			  <label class="checkbox-inline">
				<input type="radio" value="Play" name="class">Play
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Nursery-1" name="class">Nursery-1
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Nursery-2" name="class">Nursery-2
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Class-1" name="class">Class-1
			  </label>
			  <label class="checkbox-inline">
				<input type="radio" value="Class-2" name="class">Class-2
			  </label>
			  <br><br>
				<?php
					$con = mysqli_connect("localhost","root","","software_project");
					$sql = "SELECT * FROM mentor_info WHERE Id='$id'";
					$res = mysqli_query($con,$sql);
					if(mysqli_num_rows($res) > 0)
					{
						$row = mysqli_fetch_array($res);
						$email = $row['Email'];
						$add = $row['Address'];
					}				
				?>
			  <label for="email">Mentor's Email: <?php echo $email; ?></label><br>
			  <label for="usr">Address: <?php echo $add; ?></label>
			  <br><br>
			<input type="submit" name="insert" value="Create">
		</div>
	</form>
</div>

</body>
</html>

<?php
	if(isset($_POST['insert']))
	{
		$name = $_POST['usr'];
		$fthr_name = $_POST['fthr_nm'];
		$mthr_name = $_POST['mthr_nm'];
		$bday = $_POST['usr_bday'];
		$brth = $_POST['brth_id'];
		$gndr = $_POST['gndr'];
		$rlgn = $_POST['rlgn'];
		$class = $_POST['class'];
		function Insert($name,$fthr_name,$mthr_name,$bday,$brth,$gndr,$rlgn,$class, $email,$id,$add)
		{
			//echo $email;
			$con = mysqli_connect("localhost","root","","software_project");
			if(!$con)
			{
				die("Databse not connected: ".mysqli_connect_error);
			}
			else
			{
				$txt = "Hello " .$fthr_name. "Your Child: " .$name. " account has been created.We send your child info to our admin panel.Wait for the confirmation!!!";
				$sql = "INSERT INTO children_account(Id,Name,Fathers_Name,Mothers_Name,Birthday,Birth_Id,Religion,Gender,Class,Address,Email,MentorId) VALUES('','$name','$fthr_name','$mthr_name','$bday',$brth,'$rlgn','$gndr','$class','$add','$email',$id)";
				if(mysqli_query($con,$sql))
				{
					mail($email,'Registration',$txt,'from:YouLearn');
					echo '<script language="javascript">';
					echo 'alert("Successfully Registered"); 
					location.href="Mentor.php"';
					echo '</script>';
				}
			}
			mysqli_close($con);
		}
		if($name!=""||$fthr_name!=""||$mthr_name!=""||$bday!=""||$brth!=""||$gndr!=""||$rlgn!=""||$class!="")
		{
			if(strlen($brth)>=11)
			{
				for($i=0;$i<strlen($name);$i++)
				{
					if((ord($name[$i])>=65 && ord($name[$i])<=90) || (ord($name[$i])>=97 && ord($name[$i])<=122) || ord($name[$i])==32)
					{
						for($i=0;$i<strlen($mthr_name);$i++)
						{
							if((ord($mthr_name[$i])>=65 && ord($mthr_name[$i])<=90) || (ord($mthr_name[$i])>=97 && ord($mthr_name[$i])<=122) || ord($mthr_name[$i])==32)
							{
								for($i=0;$i<strlen($fthr_name);$i++)
								{
									if((ord($fthr_name[$i])>=65 && ord($fthr_name[$i])<=90) || (ord($fthr_name[$i])>=97 && ord($fthr_name[$i])<=122) || ord($fthr_name[$i])==32)
									{
										$ftr = $fthr_name;
									}
									else
									{
										echo '<script language="javascript">';
										echo 'alert("Name must contain only digit");
										location.href="Child_Approval.php"';
										echo '</script>';
									}
								}
							}
							else
							{
								echo '<script language="javascript">';
								echo 'alert("Name must contain only letters");
								location.href="Child_Approval.php"';
								echo '</script>';
							}
						}
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Name Name must contain only letters");
						location.href="Child_Approval.php"';
						echo '</script>';
					}	
				}
	
				Insert($name,$fthr_name,$mthr_name,$bday,$brth,$gndr,$rlgn,$class,$email,$id,$add);
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Nid is at least 11");
				location.href="Child_Approval.php"';
				echo '</script>';
			}
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Field is empty");
			location.href="Child_Approval.php"';
			echo '</script>';
		}
	}
	
?>