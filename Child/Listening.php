<?php
	$num = rand(1,10);
	$audio = "Task/Monthly_Test_1/Listening/".$num.".wav";
	//echo $audio;
?>
<html>
<body>
<audio controls>
  <source src=<?php echo $audio; ?> type="audio/mpeg">
</audio>

</body>
</html>