<?php
	include('ninjas.php'); //in caso di errore nella ricerca del file, segna errore e prosegue con il codice
	require('ninjas.php'); //in caso di errore nella ricerca del file, segna errore e non prosegue
	
	echo 'end of php'; //in caso di errore precedente, viene stampato con include, ma non con require
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Include and Require</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>
	<?php include('content.php'); ?>
</body>

</html>
