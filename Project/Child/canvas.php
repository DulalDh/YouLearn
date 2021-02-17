<html>
	<head>
		<title>Drawing</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="linked.css" rel="stylesheet" type="text/css" />
	</head>
	<?php
		$num = rand(0,10);
		if($num==0){ $src = "image/draw/banana.png";}
		else if($num==1){ $src = "image/draw/bat.jpg";}
		else if($num==2){ $src = "image/draw/bird.png";}
		else if($num==3){ $src = "image/draw/book.jpg";}
		else if($num==4){ $src = "image/draw/flag.jpg";}
		else if($num==5){ $src = "image/draw/kite.png";}
		else if($num==6){ $src = "image/draw/mango.png";}
		else if($num==7){ $src = "image/draw/ship.jpg";}
		else if($num==8){ $src = "image/draw/tomato.png";}
		else if($num==9){ $src = "image/draw/tree.jpg";}
		else if($num==10){ $src = "image/draw/banana.png";}
		else if($num==10){ $src = "image/draw/banana.png";}
	?>
	<body>
		<canvas id="canvas"></canvas>
		<script src="home.js"></script>
		<img src=<?php echo $src; ?> alt="Smiley face" height="600" width="500">
	</body>
</html>