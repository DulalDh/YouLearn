<?php
	$files = scandir("Task/Monthly_Test_1/Wrinting/");
	for($i=0;$i < count($files);$i++)
	{
		echo '<p style="margin-top:-35px;margin-left:150px; color:black;">';
			echo '<a download='.$files[$i].' href='.$files[$i].'>'.$files[$i].'</a>';
		echo '</p>';
		echo '<br>';
	}
?>