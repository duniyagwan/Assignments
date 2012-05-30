<?php

$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$language = filter_input(INPUT_POST, 'preferredLang', FILTER_SANITIZE_NUMBER_INT);
	
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	
	if (empty($name)) {
		$errors['name'] = true;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$errors['email'] = true;
	}
	
	if (empty($username)) {
		$errors['username'] = true;
	}
	
	if (empty($password)) {
		$errors['password'] = true;
	}
	
	
	if (mb_strlen($notes) < 5 || mb_strlen($notes) > 100) {
		$errors['notes'] = true;
	}
	
	if ($language != 'english' || $language != 'french' || $language != 'spanish') {
		$errors['language'] = true;
	}
	
	if (!isset($_POST['terms'])) {
		$errors['terms'] = true;
		
	}
	
	if (empty($errors)) {
		$headers = 'From: ' . $name . ' <'.$email . '>';
		mail('duni0004@algonquinlive.com', 'From contact form', $possible_subjects[$subject], $message, $headers); 
		
	}
}