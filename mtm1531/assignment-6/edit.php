<?php

require_once 'includes/db.php';

$errors = array();

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (strlen($title) < 1 || strlen($title) > 256) {
		$errors['title'] = true;
	}
	
	if (strlen($release_date) != 1) {
		$errors['release_date'] = true;
		
	}
	
	if (strlen($director) < 1 || strlen($director) > 30) {
		$errors['director'] = true;
		
	}
	
	if (strlen($genre) < 1 || strlen($genre) > 30) {
		$errors['genre'] = true;
		
	}
	
	if (empty($errors)) {
		
		
		$sql = $db->prepare('
		UPDATE movie
				SET title = :title ,
				release_date = :release_date ,
				director = :director,
				genre = :genre	
				WHERE id = :id
			');
		
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->bindValue(':title', $title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_INT);
		$sql->bindValue(':director', $director, PDO::PARAM_INT);
		$sql->bindValue(':genre', $genre, PDO::PARAM_INT);
		
		$sql->execute();
		// Do DB stuff
		
		header('Location: index.php');
		exit; 
				
	}
	
	}else {
		$sql = $db->prepare('
			SELECT title, release_date, director, genre
			FROM movies
			WHERE id= :id

		');
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->execute();

		$results = $sql->fetch();

		$title = $results['title'];
		$release_date = $results['release_date'];
		$director = $results['director'];
		$genre = $results['genre'];
}


?> <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Edit Movie</title>
</head>

<body>

	<h1>Edit Movie</h1>
	
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
			Release Date
			<?php if (isset($errors['release_date'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="'release_date" name="'release_date" required value="<?php echo $release_date; ?>">
			
		</div>
		
		<div>
			<label for="director">
			Director
			<?php if (isset($errors['director'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="director" name="director" required value="<?php echo $director; ?>">
			
		</div>
		
		<div>
			<label for="genre">
			Genre
			<?php if (isset($errors['genre'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?> 
			</label>
			<input id="genre" name="genre" required value="<?php echo $genre; ?>">
			
		</div>	
				
		
		<button type="submit">save</button>
		
		
	</form>	

</body>
</html>