<?php
	if (isset($_POST['oper']))
	{
		$user = htmlentities($_POST['username']);
		$password = htmlentities($_POST['pass']);

		require_once 'modelo/config.php';
				
			// Conectarse bd
			$conn = mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			//echo "Connected successfully";

			//sentencia comprobar usuario y contraseña
			$sql = "select * from persons where name like '$user' and password like '$password'";
			//$sql = "select * from persons where name like '$user'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0)
			{
				//enviar al index de usuarios logueados con el nombre de usuario method: GET
			   $user = $_POST['username'];
			   header("Location: index2.php?user=$user");
   				exit;
			}
			else
			{
				//Mensaje de error NO especifico
				echo "<section class=".'errBox'." >Nombre de usuario o contraseña no válidos.</section>";
			}

			mysqli_close($conn);
	}
	include("./header.php");
?>

					<h2>Aritz Etxarri</h2>
					<p>Proyecto Sesiones y Cookies en PHP.</p>
					<ul class="actions">
						<li><a href="#Ancla" class="button special">Sign Up</a></li>
						<li><a href="user.php" class="button">Create Acount</a></li>
					</ul>
				</section>
				<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Proyecto Sesiones y Cookies
							<br />
							(PHP)</h2>
							<a name="Ancla" id="a"></a>
							<p>En este proyecto podrás loguearte con un usuario para iniciar sesión con tu cuenta de usuario.</p>
						</header>
					</section>
				</section>

				<section id="cta">

					<h2>Sign up for users</h2>
					<p>Recuerda que uset debe tener un usuario registrado para poder <i>loguearse</i>.</p>

					<form action="#" method="POST" >
					
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="text" name="username" id="username" placeholder="User Name" />
							</div>
							<div class="8u 12u(mobilep)">
								<input type="password" name="pass" id="pass" placeholder="Password" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" name="oper" class="fit" />
							</div>
						</div>
					</form>

				</section>
<?php
	include("./footer.php");
?>