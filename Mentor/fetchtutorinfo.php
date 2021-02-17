<?php
if(isset($_POST['id']))
{
	$x = $_POST['id'];
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * FROM tutor_info WHERE Id = '$x'";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$data['name'] = $row['Name'];
		$data['fthr_name'] = $row['Email'];
		$data['mthr_name'] = $row['Nid_No'];
		$data['bday'] = $row['rlgn'];
		$data['address'] = $row['Address'];
		$data['rlgn'] = $row['phone'];
		$data['gndr'] = $row['gndr'];
		$data['class'] = $row['picture'];
	}
	echo json_encode($data);
	mysqli_close($con);
}
?>