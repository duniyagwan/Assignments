<?php



$dino_name = filter_input(INPUT_POST, 'dino_name', FILTER_SANITIZE_STRING);
$loves_meat = filter_input(INPUT_POST, 'loves_meat', FILTER_SANITIZE_NUMBER);
$in_jurassic_park = (isset($POST['in_jurassic_park'])) ? 1 : 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (strlen($dino_name) < 0 || strlen($dino_name) > 256) {
		$errors['dino_name'] = true;
	}
	
	if (!in_array($loves_meat, array(0, 1))) {
		$errors['loves_meat'] = true;
		
	}
	
	if (empty($errors)) {
		// Do DB stuff 
		
	}
}


?> <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New Dinosaur</title>
</head>

<body>

	<h1>Add New Dinosaur</h1>
	
	<form method="post" action="add.php">
	
		<div>
			<label for="dino _name">
			Dinosaur Name
			<?php if (isset($errors['dino_name'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="dino_name" name="dino_name" required value="<?php echo $dino_name; ?>">
		</div>
		
		<fieldset>
			<legend>Relationship with meat
			<?php if (isset($errors['loves_meat'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?>
			</legend>
			<input type="radio" id="love" name="loves _meat" value="1"
				<?php if ($loves_meat == 1) : ?>checked<?php endif; ?>>
			<label for="love">loves meat </label>
			<input type="radio" id="hate" name="loves _meat" value="0"
				<?php if ($loves_meat == 0) : ?>checked<?php endif; ?>>
			<label for="hate">Hates meat</label>
		</fieldset>
			 
		<div>
			<input type="checkbox" id="in_jurassic_park" name="in_jurassic_park">
			<label for="in_jurassic_park">In Jurassic park</label>
		</div>	 
					
 
		<button type="submit">Add</button>
		
		
	</form>	

</body>
</html>