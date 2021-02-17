<?php
	if(isset($_POST['sbmt'])){
	session_start();
	$newp = $_POST['new_pass'];
	$cnfrmp = $_POST['cnfrm_pass'];
	if(!isset($_SESSION['name']))
	{
		header("Location:YouLearn.html");
	}
	$con = mysqli_connect("localhost","root","","software_project");
	$id = $_SESSION['name'];
	$sql = "SELECT * FROM login WHERE Id = $id";	
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0)
	{
		$row = mysqli_fetch_array($res);
		$pass = $row['Password'];
	}
	$usr_pwd = $_POST['old_pass'];
	 if($usr_pwd != $pass || $newp != $cnfrmp)
	 {
		 echo '<script language="javascript">';
		 echo 'alert("Error"); 
		location.href="Change.php"';
		 echo '</script>';
	}
	else{
		 $query = "UPDATE login SET Password='$newp' WHERE Id='$id'";
		 if(mysqli_query($con,$query)){
				 echo '<script language="javascript">';
				 echo 'alert("Success"); 
				 location.href="Change.php"';
				 echo '</script>';
		}
	}
	}
?>