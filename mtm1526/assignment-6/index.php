<?php

$planet = '';

if (isset($_GET['planet'])) {
	$planet = strtolower($_GET['planet']);
}

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Planets</title>
	<link href="css/general.css" rel="stylesheet">
</head>
<body>

	<nav>
		<ul>
			<li id="earth"<?php if ($planet != 'jupiter' && $planet != 'neptune' && $planet != 'mars') { ?> class="current"<?php } ?>><a href="?planet=earth">Earth</a></li>
			<li id="jupiter"<?php if ($planet == 'jupiter') { ?> class="current"<?php } ?>><a href="?planet=jupiter">Jupiter</a></li>
			<li id="neptune"<?php if ($planet == 'neptune') { ?> class="current"<?php } ?>><a href="?planet=neptune">Neptune</a></li>
			<li id="mars"<?php if ($planet == 'mars') { ?> class="current"<?php } ?>><a href="?planet=mars">Mars</a></li>
		</ul>
	</nav>
	
	<article>
	<?php
		switch ($planet) {
			case 'jupiter' :
				include 'includes/jupiter.php';
			break;
			case 'neptune' :
				include 'includes/neptune.php';
			break;
			case 'mars' :
				include 'includes/mars.php';
			break;
			default :
				include 'includes/earth.php';
			break;
		}
	?>
	</article>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/planets.js"></script>
</body>
</html>






