<?php
	/*function foo(){
		global $color;

		include '../../../../../home/level1/key.txt';

		echo "A $color $fruit";
	}*/
	//$f = fopen("../../../../../../../../home/level1/key.txt", "r");
	
	$name = '../../../../../../../../home/level1/key.txt';
	// Read line
	//echo fgets($f);
	echo readfile($name);
	
	//fclose($f);
	//include($../../../../../home/level1/key.’.txt’);
	?>