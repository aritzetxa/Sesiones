<?php
	include("./header.php");

	if (isset($_POST['oper']))
	{
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['pass']);
	   $errorF = "";
	   if (validar_clave($password, $errorF)){
		    require_once 'modelo/config.php';
				
			// Conectarse bd
			$conn = mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			//echo "Connected successfully";

			//sentencia comprobar usuarios
			$sql = "select * from persons where name like '$username'";
			//ejecutar sentencia
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) === 0)
			{
				//Añadir usurario a BD
				$sql = "INSERT INTO persons (name, password) VALUES ('$username', '$password')";


				//Ejecutar query
				if (!mysqli_query($conn, $sql)) {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}else{
				//mensaje error. Caso: usuario repetido.
				echo "<section class=".'errBox'." >Ya existe un usuario con ese nombre.</section>";
			}	

			mysqli_close($conn);
	  
	   }else{
	      echo "<section class=".'errBox'." >PASSWORD NO VÁLIDO: " . $errorF."</section>";
	   }
	}
?>
		<h2>Aritz Etxarri</h2>
		<p>Proyecto Sesiones y Cookies en PHP.</p>
	</section>


	<section id="main" class="container" class="green">

		<section class="box special">
			<header class="major">
				<h2>Create Acount</h2>
			</header>
		

			<form action="#" method="post">			
				<div class="row uniform 50%">
					<div class="12u 12u(mobilep)">
						<input type="text" name="username" id="username" placeholder="User Name" />
					</div>
					<div class="12u 12u(mobilep)">
						<input type="password" name="pass" id="pass" placeholder="Password" />
					</div>
					<div class="g-recaptcha" data-sitekey="6LfSOiEUAAAAAGhdNfwmiePq_pTaHv7LmhZPePiq"></div>
					<div class="4u 12u(mobilep)">
						<input type="submit" value="Sign Up" name="oper" class="fit" />
					</div>
				</div>
			</form>

		</section>
	</section>

<?php
	include("./footer.php");

	function validar_clave($clave,&$error_clave){
	   if(strlen($clave) < 6){
	      $error_clave = "La clave debe tener al menos 6 caracteres";
	      return false;
	   }
	   if(strlen($clave) > 16){
	      $error_clave = "La clave no puede tener más de 16 caracteres";
	      return false;
	   }
	   if (!preg_match('`[a-z]`',$clave)){
	      $error_clave = "La clave debe tener al menos una letra minúscula";
	      return false;
	   }
	   if (!preg_match('`[A-Z]`',$clave)){
	      $error_clave = "La clave debe tener al menos una letra mayúscula";
	      return false;
	   }
	   if (!preg_match('`[0-9]`',$clave)){
	      $error_clave = "La clave debe tener al menos un caracter numérico";
	      return false;
	   }
	   $error_clave = "";
	   return true;
	}
?>

