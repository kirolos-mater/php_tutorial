<?php
	//classes
	class User {
		private $email;
		private $name;
		public function __construct($name, $email) {
			//$this -> email = 'mario@thenetninja.co.uk';
			//$this -> name = 'mario';
			$this -> email = $email;
			$this -> name = $name;
		}
		public function login() {
			//echo 'the user logged in' . '<br>';
			echo $this -> name . ' logged in' . '<br>';
		}
		public function getName() {
			return $this -> name . '<br>';
		}
		public function setName($name) {
			if(is_string($name) && strlen($name) > 1) {
				$this -> name = $name;
				return "name has been updated to $name" . '<br>';
			} else {
				return 'not a valid name' . '<br>';
			}
		}
	}
	//$userOne = new User();
	//$userOne -> login();
	//echo $userOne -> email . '<br>';
	$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');
	//echo $userTwo -> name;
	//echo $userTwo -> email;
	//echo $userTwo -> getName() . '<br>';
	//echo $userTwo -> setName(50) . '<br>';
	echo $userTwo -> setName('shaun') . '<br>';
	echo $userTwo -> getName() . '<br>';
?>

