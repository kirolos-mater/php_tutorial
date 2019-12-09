<?php
	$price=20;
	if ($price < 10) {
		echo 'the condition is met';
	} elseif ($price < 20) {
		echo 'elseif condition met';
		} else {
		echo 'condition not met';
	};
	echo '<br>';
	// nuovo esercizio
	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];
	//ciclo di controllo
	foreach($products as $product){
		if($product['price'] > 20 || $product['price'] < 10) {
			echo $product['name'] . '<br/>';
		}
	};
	echo '<br>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Conditional Statements</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>
	<div>
		<ul>
			<?php foreach($products as $product){ ?>
				<?php if ($product['price'] > 15) { ?>
					<li><?php echo $product['name']; ?></li>
				<?php } ?>
			<?php }?>
		</ul>
	</div>
</body>

</html>
