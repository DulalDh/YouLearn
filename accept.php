<?php
	if(isset($_POST['submit']))
	{
		$usr = $_POST['usr'];
		$bday = $_POST['birth'];
		$class = $_POST['clss'];
		$bid = $_POST['birthid'];
		$rlgn = $_POST['rlgn'];
		$gndr = $_POST['gndr'];
		$add = $_POST['add'];
		$mail = $_POST['mail'];
		$fthr = $_POST['fthrname'];
		//$srch = $_POST['srch'];
		$con = mysqli_connect("localhost","root","","software_project");
		if(!$con)
		{
			die("Databse not connected: ".mysqli_connect_error);
		}
		if($class == "Play")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO play(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail, Password) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail','$pass')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM play WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Registration',$txt,'from:YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Nursery-1")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO nursery_1(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail, Password) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail','$pass')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM nursery_1 WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Registration',$txt,'from:YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Nursery-2")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO nursery_2(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail, Password) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail','$pass')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM nursery_2 WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Registration',$txt,'from:YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Class-1")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO class_1(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail, Password) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail','$pass')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM class_1 WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Registration',$txt,'from:YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Class-2")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO class_2(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail, Password) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail','$pass')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM class_2 WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Registration',$txt,'from:YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
	}
?>