<?php
$mysqli = new mysqli("localhost", "root", "", "software_project");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$con = mysqli_connect("localhost","root","","software_project");
$sql = "SELECT Name,Email,Address,Phone from tutor_info WHERE Id = ?";
mysqli_close($con);

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cname,$cmail,$caddress,$cphone);
$stmt->fetch();
$stmt->close();
echo "<form action='sent.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td><h1>". $cname . "</h1></td>";
echo "</tr>";
echo "<tr>";
echo "<th>Email</th>";
echo "<td>" . $cmail . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $caddress . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Phone</th>";
echo "<td>0" . $cphone . "</td>";
echo "</tr>";
echo "</table>";
echo "</form>";
?>
