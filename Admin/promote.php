<?php
	if(isset($_POST['sub'])){
		$name = $_POST['name'];
		$mail = $_POST['$mail'];
		$bangla = $_POST['bangla'];
		$eng = $_POST['ceng'];
		$math = $_POST['cmath'];
		$digit = $_POST['cdigi'];
		$poem = $_POST['cpoem'];
		echo $name ."<br>".$mail."<br>".$bangla;
	}
?>