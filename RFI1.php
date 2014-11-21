<?php
	/*function foo(){
		global $color;

		include '../../../../../home/level1/key.txt';

		echo "A $color $fruit";
	}*/
	//$f = fopen("../../../../../../../../home/level1/key.txt", "r");
	
	$file = '../../../../../../../../home/level1/key.txt';
	// Read line
	//echo fgets($f);
	
	if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
	//echo readfile($name);
	
	//fclose($f);
	//include($../../../../../home/level1/key.’.txt’);
	?>