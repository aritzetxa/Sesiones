<?php
	session_start();
	if (isset($_GET['user']))
	{
		$_SESSION['username'] = $_GET['user'];
		$user = $_SESSION['username'];
	}
	else{
		header("Location: index.php");
		exit;
	}
	include("./header2.php");	
?>
				<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Proyecto Sesiones y Cookies
							<p>Estas logueado como usuario: <?php echo $user ?></p>
						</header>
					</section>
				</section>

				<section id="cta">

					<h2>Users Area</h2>
					<p>Usted esta logeado en esta página, bajo el seudonimo: <?php echo $user ?></p>


				</section>
<?php
	include("./footer.php");
?>