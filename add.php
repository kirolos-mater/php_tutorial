 <?php
	include('config/db_connect.php');
	$title = '';
	$email = '';
	$ingredients = '';
	$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');
	if(isset($_POST['submit'])){
		/*la funzione 'htmlspecialchars' trasforma < in "<" così da non far partire i tag che
		 * potrebbero danneggiare il file*/
		//check empty submissions & email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required <br>';
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //FIL.. è una funzione di default per le mail
				$errors['email'] = 'email must be a valid email address <br>';
			}
		}
		//check empty submissions & title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required <br>';
		} else {
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-z\s]+$/', $title)){ //inserimento di RegEx per indicare i caratteri accettati
				$errors['title'] = 'Title must be letters and spaces only <br>';
			}
		}
		//check empty submissions & ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required <br>';
		} else {
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){ // RegEx per parole separate da virgole
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}
		if(array_filter($errors)){
			//echo 'errors in the form';
		} else {
			//protecting SQL code
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
			//create SQL
			$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";
			//save to db and check
			if(mysqli_query($conn, $sql)){
				//success
				header('Location: index_tutorial.php');
			} else {
				//error
				echo 'query error: ' . mysqli_error($conn);
			}
		}
	} //end of POST check
?>
<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
	<section class="container gray-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<label>Your Email:</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Pizza Title:</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Ingredients (comma separated): </label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
			<div class="red-text"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-dept-0">
			</div>
		</form>
	</section>
	<?php include('templates/footer.php'); ?>
</html>
