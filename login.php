<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","12345678","software_project");
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
		if($type=="Admin")
		{
			header("Location:Admin.html");
		}
		else if($type=="Tutor")
		{
			header("Location:Tutor.html");
		}
		else if($type=="Mentor")
		{
			header("Location:Mentor.html");
		}
		else if($type=="Child")
		{
			header("Location:Child.html");
		}
	}
	else
	{
		echo "No data found.<br/>";
	}

	
mysqli_close($con);		
}

?>
