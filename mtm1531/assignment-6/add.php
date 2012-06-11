<?php

$errors = array();

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (strlen($title) < 1 || strlen($title) > 256) {
		$errors['title'] = true;
	}
	
	if (strlen($release_date,)! = 10) {
		$errors['release_date'] = true;
		
	}
	
	if (strlen($director) < || strlen($director) > 256) {
		$errors['director'] = true;
		
	}
	
	if (empty($errors)) {
		require_once 'includes/db.php';
		
		$sql = $db->prepare('
		INSERT INTO movies (title, release_date, director, genre)
		VALUES (:title, :release_date, :director, :genre)
		');
		
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->bindValue(':title', $title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
		$sql->bindValue(':director', $director, PDO::PARAM_STR);
		$sql->bindValue(':genre', $genre, PDO::PARAM_STR);
		
		$sql->execute();
		// Do DB stuff
		
		header('Location: index.php');
		exit; 
		
	}
}


?> <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New Movie</title>
</head>

<body>

	<h1>Add New Movie</h1>
	
	<form method="post" action="add.php">
	
		<div>
			<label for="title">
			Movie Title
			<?php if (isset($errors['title'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="title" name="title" required value="<?php echo $title; ?>">
			
		</div>
		
		<div>
			<label for="release_date">
			Movie Title
			<?php if (isset($errors['release_date'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="'release_date" name="'release_date" required value="<?php echo $release_date; ?>">
			
		</div>
		
		<div>
			<label for="director">
			Movie Title
			<?php if (isset($errors['director'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="director" name="director" required value="<?php echo $director; ?>">
			
		</div>
		
		<div>
			<label for="genre">
			Movie Title
			<?php if (isset($errors['genre'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="genre" name="genre" required value="<?php echo $genre; ?>">
			
		</div>	
				
		
		<button type="submit">Add</button>
		
		
	</form>	

</body>
</html>