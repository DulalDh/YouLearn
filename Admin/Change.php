<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:YouLearn.html");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.container .text.a:hover{
	color: yellow;
}
</style>
</head>
<body>

<form action="Password.php" method="post">
<div class="container">
  <img src="image/admin.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Change Password:</h1>
		Old Password:   <input type="password" name="old_pass" placeholder="Enter Your Old Password"><br><br>
		New Password:   <input type="password" name="new_pass" placeholder="Enter Your New Password"><br><br>
		Confirm Password:   <input type="password" name="cnfrm_pass" placeholder="Enter Your New Password">
		<input type="submit" value="Change" name="sbmt">
		</form>
		<div class="text">
			<a href="Mail.php">Can't Remember Previous Password</a>
		</div>
    </div>
</div>
</body>
</html>
