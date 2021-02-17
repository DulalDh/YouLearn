<?php
	session_start();
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
		$email = $row['Email'];
	}
	$n=10; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
	$x = getName($n);	
	//echo $email; 
	$query = "UPDATE login SET Password='$x' WHERE Id='$id'";
	mysqli_query($con,$query);
	if(mail($email,'Change Password','Password: '.$x.'  This is your new password.','from:youlearn')){
		echo '<script language="javascript">';
		echo 'alert("Successfully Registered"); 
		location.href="Change.php"';
		echo '</script>';
	}

?>