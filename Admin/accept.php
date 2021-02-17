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
			$sql = "INSERT INTO play(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM children_account WHERE Email='$mail' AND Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$sqlcom = "update children_account set Accept='1' where Id='$id'";
				mysqli_query($con,$sqlcom);
				$pass = $row['Password']; 
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				$comman = "insert into login(Id,Email,Password,Type) values('','$usr','$pass','Child')";
				mysqli_query($con,$comman);
				mail($mail,'Registration',$txt,'from:YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Nursery-1")
		{
			$pass = mt_rand(10000, 10000);
			$sql = "INSERT INTO nursery_1(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM children_account WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$pass = $row['Password']; 
				$sqlcom = "update children_account set Accept='0' where Id='$id'";
				mysqli_query($con,$sqlcom);
				$comman = "insert into login(Id,Email,Password,Type) values('','$usr','$pass','Child')";
				mysqli_query($con,$comman);
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Chidren Account',$txt,'From: YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Nursery-2")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO nursery_2(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM children_account WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$id = $row['Id'];
				$pass = $row['Password']; 
				$sqlcom = "update children_account set Accept='0' where Id='$id'";
				mysqli_query($con,$sqlcom);
				$comman = "insert into login(Id,Email,Password,Type) values('','$usr','$pass','Child')";
				mysqli_query($con,$comman);
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Chidren Account',$txt,'From: YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Class-1")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO class_1(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM children_account WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$pass = $row['Password']; 
				$id = $row['Id'];
				$sqlcom = "update children_account set Accept='0' where Id='$id'";
				mysqli_query($con,$sqlcom);
				$comman = "insert into login(Id,Email,Password,Type) values('','$usr','$pass','Child')";
				mysqli_query($con,$comman);
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Chidren Account',$txt,'From: YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
		if($class == "Class-2")
		{
			$pass = mt_rand(1000, 10000);
			$sql = "INSERT INTO class_2(Id, Name, Birthday, Birthid, Religion, Gender, Address, MentorEmail) VALUES('','$usr','$bday',$bid,'$rlgn','$gndr','$add','$mail')";
			mysqli_query($con,$sql);
			$query = "SELECT * FROM children_account WHERE MentorEmail='$mail' and Name='$usr'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row = mysqli_fetch_array($result);
				$pass = $row['Password']; 
				$id = $row['Id'];
				$sqlcom = "update children_account set Accept='0' where Id='$id'";
				mysqli_query($con,$sqlcom);
				$comman = "insert into login(Id,Email,Password,Type) values('','$usr','$pass','Child')";
				mysqli_query($con,$comman);
				$txt = "Hello " .$fthr. "\nYour Child Account is created.\nYour child is " .$id. " and Password" .$pass. "\n Your child can now login in to our system";
				mail($mail,'Chidren Account',$txt,'From: YouLearn');
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); 
				location.href="Admin.php"';
				echo '</script>';
			}
		}
	}
?>