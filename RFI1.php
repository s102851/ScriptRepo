<?php
	/*function foo(){
		global $color;

		include '../../../../../home/level1/key.txt';

		echo "A $color $fruit";
	}*/
	$f = fopen("../../../../../home/level1/key.txt", "r");
	
	// Read line by line until end of file
	while(!feof($f)) { 
	    echo fgets($f) . "<br />";
	}
	
	fclose($f);
	//include($../../../../../home/level1/key.’.txt’);
	?>