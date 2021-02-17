<?php
if(isset($_POST['id']))
{
	$x = $_POST['id'];
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * FROM children_account WHERE Id = '$x'";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$data['name'] = $row['Name'];
		$data['fthr_name'] = $row['Fathers_Name'];
		$data['mthr_name'] = $row['Mothers_Name'];
		$data['bday'] = $row['Birthday'];
		$data['address'] = $row['Address'];
		$data['bid'] = $row['Birth_Id'];
		$data['rlgn'] = $row['Religion'];
		$data['gndr'] = $row['Gender'];
		$data['class'] = $row['Class'];
		$data['mail'] = $row['Email'];
	}
	echo json_encode($data);
	mysqli_close($con);
}
?>