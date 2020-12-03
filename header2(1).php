
<!DOCTYPE HTML>
<html>
	<head>
		<title>Proyecto Sesiones y Cookies en PHP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			function backgroundP(imagen)
			{
				document.getElementById("banner").style.backgroundImage = 'url("images/' + imagen + '.jpeg"), url("images/' + imagen + '.jpg")';
			}
		</script>
	</head>
	<body class="landing">
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<nav id="nav">
							<ul>
								<li><a href="index2.php">Home</a></li>
							 	<li><a href="user2.php">User Area</a></li>
								<li><a href="logout.php" class="button">Exit</a></li>
							</ul>
						</nav>
					</header>
			<section id="banner">
				<h2>Aritz Etxarri</h2>
				<p>Proyecto Sesiones y Cookies en PHP.</p>
			</section>								

			