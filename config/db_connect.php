<?php
		//connect to database
	$conn = mysqli_connect('localhost', 'kirolosmater','digitale69A', 'ninja_pizza');
	//check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Connection</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>
	
</body>

</html>
