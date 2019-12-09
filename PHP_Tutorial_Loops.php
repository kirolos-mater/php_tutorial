<?php
//loops
$ninjas=['shaun', 'ryu', 'yoshi'];
//for($i=0; $i<count($ninjas); $i++){
//	echo $ninjas[$i]."<br>";
//};
$books=['Iliade', 'Odissea', 'Divina Commedia'];
foreach($books as $book){
echo $book.'<br/>'; //  il punto serve per concatenare alla funzione
};
// la funzione 'as' dichiara una variabile e le assegna un valore dell'array differente per ogni ciclo
$products=[
	['name'=>'shiny star', 'price'=>20],
	['name'=>'green shell', 'price'=>10],
];
echo '<br>';
foreach($products as $product){  //ricorda che PHP non sta capendo l'inglese
	echo $product['name'].' - '. $product['price'].'<br/>'; //puoi usare il punto per concatenare più volte
};
echo '<br>';
//ora uso il ciclo while
$i=0;  //bisogna dichiarare il contatore prima del ciclo while
while($i<count($products)){
	echo $products[$i]['name'].'<br>';  //ho usato il punto di nuovo
	$i++; //incremento del contatore
};
?>

<!-- IMPORTANTE: area tra php e HTML viene considerata HTML
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>PHP_Tutorial_Loops</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>
	<h1>Products</h1>
	<ul>
		<?php foreach($products as $product){ ?>
			<!-- IMPORTANTE: area tra php e HTML viene considerata HTML-->
			<h3><?php echo $product['name']; ?></h3>
			<p>£ <?php echo $product['price']; ?></p>
		<?php } ?>
	</ul>
</body>

</html>
