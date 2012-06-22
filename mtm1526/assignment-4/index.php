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
			<li<?php if ($planet != 'jupiter' && $planet != 'neptune' && $planet != 'mars') { ?> class="current"<?php } ?>><a href="?planet=earth">				
			<li<?php if ($planet == 'jupiter') { ?> class="current"<?php } ?>><a href="?planet=jupiter">Jupiter</a></li>
			<li<?php if ($planet == 'neptune') { ?> class="current"<?php } ?>><a href="?planet=neptune">Neptune</a></li>
			<li<?php if ($planet == 'mars') { ?> class="current"<?php } ?>><a href="?planet=mars">Mars</a></li>
		</ul>
	</nav>
	
	<div id="plan">
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
	</div>
</body>
</html>






