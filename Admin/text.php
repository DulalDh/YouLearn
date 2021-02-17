<?php
$mysqli = new mysqli("localhost", "root", "", "software_project");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$con = mysqli_connect("localhost","root","","software_project");
$sql = "SELECT ChildId,Mail,Bangla,English,Math,Digit,Poem
FROM resultofplay WHERE Id = ?";
mysqli_close($con);

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cchildid,$cmail,$cbangla,$ceng,$cmath,$cdigi,$cpoem);
$stmt->fetch();
$stmt->close();
echo "<form action='promote.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td><h1>". $cchildid . "</h1><input type='hidden' name='name' value='$cchildid'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>MentorMail</th>";
echo "<td>" . $cmail . "</h1><input type='hidden' name='mail' value='$cmail'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Bangla</th>";
echo "<td><h1>". $cbangla . "</h1><input type='hidden' name='bangla' value='$cbangla'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>English</th>";
echo "<td>" . $ceng . "</h1><input type='hidden' name='eng' value='$ceng'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Math</th>";
echo "<td><h1>". $cmath . "</h1><input type='hidden' name='math' value='$cmath'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Digit</th>";
echo "<td>" . $cdigi . "</h1><input type='hidden' name='digi' value='$cdigi'</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Poem</th>";
echo "<td><h1>". $cpoem . "</h1><input type='hidden' name='poem' value='$cpoem'</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2'><input type='submit' name='sub'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
?>
