<?php
$mysqli = new mysqli("localhost", "root", "", "software_project");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$con = mysqli_connect("localhost","root","","software_project");
$sql = "SELECT Name,Email
FROM children_account WHERE Id = ?";
mysqli_close($con);

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cname,$cmail);
$stmt->fetch();
$stmt->close();
echo "<form action='sent.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<th>From</th>";
echo "<td><h1>". $cname . "</h1><input type='hidden' name='mail' value='$cname'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Message</th>";
echo "<td>" . $cmail . "</td>";
echo "</tr>";
echo "<th>Send</th>";
echo "<td><input type='text' name='reply'></td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2'><input type='submit' name='send'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
?>
