<?php 

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = $db->prepare('
	SELECT id, title, release_date, director, genre
	FROM movies
	WHERE id = :id

');

$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $results['title']; ?> &middot; Movies</title>
	<link href="css/general.css" rel="stylesheet">
</head>
<body>
	<div class="movies">
		<h2><?php echo $results['title']; ?></h2>
			<dl>
				<dt>Release Date:</dt>
				<dd><?php echo $results['release_date'];?></dd>
				<dt>Director:</dt>
				<dd><?php echo $results['director'];?></dd>
                <dd><?php echo $results['genre'];?></dd>
			</dl>

		<a href="delete.php?id=<?php echo $id;?>">Delete movie</a>
	</div>

<p><a href="index.php">Go back to movie list</a></p>
</body>
</html>
