<?php
	if(isset($_POST['send']))
	{
		if($_POST['reply']!="")
		{
			$x = $_POST['reply'];
			$y = $_POST['mail'];
			$z = $_SESSION['name'];
			$con = mysqli_connect("localhost","root","","software_project");
			$sql ="Insert into mssg(Id,Email,Text,MailFrom) Values('','$x','$y','$z')";
			$res = mysqli_query($con,$sql);
			if(mysqli_num_rows($res) > 0)
			{
				echo '<script language="javascript">';
				echo 'alert("Successfully Inserted"); 
				location.href="message.php"';
				echo '</script>';											
			}
		}
	}
?>