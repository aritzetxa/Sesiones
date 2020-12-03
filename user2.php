<?php
	session_start();
/*	if (!isset($_SESSION['username'])) {
	    header('Location: index.php');
	    die();
	}*/
	include("./header2.php");
	if (isset($_POST['oper']))
	{
		$paisaje = strtolower($_POST['oper']);
		echo '<script type="text/javascript">backgroundP("'.$paisaje.'")</script>';
		//backgroundP($paisaje);
	}
	$user = $_SESSION['username'];
	//include("./header2.php");
?>
				<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Bienvenido <?php echo $user; ?></h2>
							<a name="Ancla" id="a"></a>
							<p>Esta es una zona exclusiva para usuarios logueados.</p>
						</header>
					</section>
				</section>

				<section id="cta">

					<h2>Área de usuarios.</h2>
					<p>Usted esta logeado en esta página, bajo el seudonimo: <?php echo $user; ?></p>

				</section>

				<section class="box special">
					<header class="major">
						<h2>Selecciona tu paisaje favorito: </h2>
					</header>
				

					<form action="#" method="post">			
						<div class="row uniform 50%">
							<div class="3u 12u(mobilep)">
								<input type="submit" value="Desierto" name="oper" class="fit" />
							</div>
							<div class="3u 12u(mobilep)">
								<input type="submit" value="Bosque" name="oper" class="fit" />
							</div>
							<div class="3u 12u(mobilep)">
								<input type="submit" value="Mar" name="oper" class="fit" />
							</div>
							<div class="3u 12u(mobilep)">
								<input type="submit" value="Flores" name="oper" class="fit" />
							</div>
						</div>
					</form>

				</section>
<?php
	include("./footer.php");
?>