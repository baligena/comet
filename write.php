<?php 
	$msg = $_GET['msg'];
	$file = 'data.txt';
	$handle = fopen($file, 'a');
	fwrite($handle, $msg);
	fclose($handle);
	exit;	
?>