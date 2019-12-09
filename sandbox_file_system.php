<?php
	// file system - part 1
	//$quotes = readfile('readme.txt');
	//echo $quotes;
	//$file = 'readme.txt';
	//if(file_exists($file)){
		//read file
		//echo readfile($file) . '<br>';
		//copy file
		//copy($file, 'quotes.txt');
		// absolute patg
		//echo realpath($file) . '<br>';
		// file size
		//echo filesize($file) . '<br>';
		//rename file
		//rename($file, 'test.txt');
	//} else {
		//echo 'file does not exist' . '<br>';
	//}
	// make directory
	//mkdir('quotes');
	//file system - part 2
	$file = 'quotes.txt';
	//opening a file for reading
	$handle = fopen($file, 'a+');
	//read the file
	//echo fread($handle, filesize($file)); //read all the file
	//echo fread($handle, 112);//read only 112 bytes
	//read a single line
	//echo fgets($handle); //first line
	//echo fgets($handle); //second line, because the reading pointer has moved
	//read a single character
	//echo fgetc($handle);
	//writing to a file
	//fwrite($handle, "\nEverything popular is wrong");
	//closing file
	fclose($handle);
	//deleting file
	unlink($file);
?>


