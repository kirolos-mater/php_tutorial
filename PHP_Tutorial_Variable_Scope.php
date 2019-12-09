<?php
	//define function
	function myFunc(){
		$price = 10;
		echo $price;
	}
	//call function
	myFunc();
	echo '<br>';
	//define function 2
	function myFuncTwo($age){
		echo $age;
	}
	echo '<br>';
	//call function 2
	myFuncTwo(25);
	echo '<br>';
	//global variables
	$name = 'mario';
	//define function 3
	function sayHello(){
		global $name;
		//$name = 'yoshi';     //modificare una variabile in locale, modifica anche in globale
		echo "hello $name";
	}
	//call function 3
	sayHello();
	echo '<br>' . $name . '<br>'; //se modificata in locale, qui mostrerebbe la globale modificata
	//define function 4
	function sayBye($name){
		$name = 'wario'; //non modifica la globale
		echo "bye $name";
	}
	//call function 4
	sayBye($name); //globale non modificata
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Variable Scoper</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>
	
</body>

</html>
