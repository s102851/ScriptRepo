<html>

	<head>
	<title>RFI1</title>
	</head>
	<body>

<?php
	/*function foo(){
		global $color;

		include '../../../../../home/level1/key.txt';

		echo "A $color $fruit";
	}*/
	$f = fopen("../../../../../../../../home/level1/key.txt", "r");
	
	// Read line
	echo fgets($f);
	
	fclose($f);
	//include($../../../../../home/level1/key.’.txt’);
	?>
	
	</body>
</html>