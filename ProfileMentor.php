<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:YouLearn.html");
}
$id = $_SESSION['TutorId'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  height: 200px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<?php
	$con = mysqli_connect("localhost","root","","software_project");
	$sql = "SELECT * FROM mentor_info WHERE Id='$id'";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		$row = mysqli_fetch_array($res);
		$name = $row['Name'];
		$email = $row['Email'];
		$Nid = $row['Nid_No'];
		$address = $row['Address'];
		$picture = $row['picture'];
		$phone = $row['phone'];
		$pass = $row['password'];
		$type = $row['type'];
	}
	mysqli_close($con);
?>
<div class="card">
  <h2 style="text-align:center">Profile</h2>
  <img src=<?php echo $picture; ?> style="width:100%">
  <p class="title"><?php echo $type; ?>, YouLearn</p>
  <p class="title"><?php echo $email; ?></p>
  <p class="title"><?php echo $address; ?></p>
  <p class="title"><?php echo "0".$phone; ?></p>
  <p>A I U B</p>
  <p><button><?php echo $name; ?></button></p>
</div>

</body>
</html>
