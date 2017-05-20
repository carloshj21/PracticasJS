<?php
	echo"<DOCTYPE html>
		  <html lang='es'>
			<head>
				<meta charset='UTF-8'/>
				<title>Cuestionario</title>
			</head>
			<body style='font-family:Arial; font-size:15px; line-height:1.5em;'> 
				<form method='GET' action='formu.php'>
					<label>Nombre:</label>
					<input type='text' name='nombre' style='background: skyblue;'/><br/>
					<label>Número de cuenta:</label>
					<input type='text' name='ncuenta' style='background: skyblue;'/><br/>
					<label>Contraseña:</label>
					<input type='text' name='contra' style='background: skyblue;'/><br/>
					<label>Teléfono fijo:</label>
					<input type='tex' name='tel' style='background: skyblue;'/><br/>
					<label>Email:</label>
					<input type='text' size='40px' name='correo' style='background: skyblue;' placeholder='(gmail.com o comunidad.unam.mx)'/><br/><br/><br/>
					<input type='submit' value='Envíalo'/>
				</form>";
		echo"	</body>
		  </html>";
?>