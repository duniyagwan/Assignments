<?php 

require_once 'includes/db.php';

$sql = $db->query('
	SELECT id, title, release_date, director, genre
	FROM movies 
	ORDER BY title ASC

');

$results = $sql->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies</title>
	<link href="css/general.css" rel="stylesheet"> 
	
</head>
<body>

		<a href="add.php">Add Movies</a>
	
		<h1>Movies</h1>
		<?php foreach ($results as $movie) : ?>
		<div class="movie">
			<h2><a href="single.php?id=<?php echo $movie['id']?>"><?php echo $movie['title'];?></a></h2>
			<dl>
				<dt>Release Date:</dt>
				<dd><?php echo $movie['release_date'];?></dd>
				<dt>Director:</dt>
				<dd><?php echo $movie['director'];?></dd>
                <dd><?php echo $movie['genre'];?></dd>
			</dl>
		</div>
		<?php endforeach;?>
	</div>

</body>
</html>
