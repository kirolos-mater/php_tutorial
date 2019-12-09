<?php
	function sayHello($name = 'shaun', $time = 'morning'){
		echo "good $time $name <br>";
	}
	sayHello('yoshi', 'night');
	//another function
	function formatProduct($product){
		return "{$product['name']} costs £{$product['price']} to buy <br>";
	}
	//call the function
	$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
	echo $formatted;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Functions</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>
	
</body>

</html>
