<?php
	if(isset($_POST['sub'])){
		$bangla = $_POST['bangla'];
		$english = $_POST['english'];
		$digit = $_POST['digit'];
		$math = $_POST['math'];
		$poem = $_POST['poem'];
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$con = mysqli_connect("localhost","root","","software_project");
		mail($mail,'Result','Name: '.$name.'<br>Result:Bangla: '.$bangla.'<br>English: '.$english.'Math: '.$math.'<br>Digit: '.$digit.'Poem: '.$poem,'from:youlearn');
		$query = "insert into resultofplay(Id,ChildId,Mail,Bangla,English,Math,Digit,Poem) values('','$name','$mail','$bangla','$english','$math','$digit','$poem')";
		if(mysqli_query($con,$query)){
				echo '<script language="javascript">';
				echo 'alert("Successfully Inserted"); 
				location.href="UploadResult.php"';
				echo '</script>';											
		}
	}
?>