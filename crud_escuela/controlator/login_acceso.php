<?php
require 'conexion.php';

		$email =$_POST['email'];
		//  <| realizo la consulta para ver si existe el email ingresado |>	
		$query = mysqli_query($db_connection, "SELECT * FROM usuarios WHERE email = '$email'");
		//si la consulta tiene valores, existe ese email, entonces procedo a consultar por la clave
		if(mysqli_num_rows($query) > 0){
				$row = mysqli_fetch_assoc($query);
		        //asigno el valor de la clave ingresada en el formulario de login a un variable para mejor vista
				$usuario_db_pass = $row['password'];
                // Verifico que la clave ingresada sea igual a la almacenada en la tabla de la db.
				$verifico_password = password_verify($_POST['psw'], $usuario_db_pass);		
				// si la verificación es cierta 
				if($verifico_password === TRUE){
					//Actualizo el id de sesión actual con uno generado más reciente 
					session_regenerate_id(true);
					session_start();
					//coloco el email del usuario en una variable de sesión para poder acceder en otras páginas				
					$_SESSION['email'] = $email;
					// direcciono al panel de administración o pagina del logueo exitoso.
					header('Location: ../views/home.php');
					exit;
				}
				else{
					// Configuro mensaje de error
                    echo'<script type="text/javascript">
                    alert("Clave o email incorrecto");
                    window.location.href="../views/login.php";
                    </script>';
				}
		}
		else{
			// Si el email no existe, no esta registrado, mando error
            echo'<script type="text/javascript">
            alert("email no existe o no esta registrado");
            window.location.href="../views/login.php";
            </script>';
		}
	


?>