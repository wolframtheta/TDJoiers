<META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.php">

<?php
function validar_email($email) {
	// Primero revisamos que exista el símbolo @, 
	// y que la longitud sea correcta.
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
		// Inválido por un incorrecto número de caracteres
		// en la misma sección o falta el #.
		return false;
	}
	// Lo separamos en secciones para hacerlo más facil
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {
		if(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
		?'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
			$local_array[$i])) {
		  return false;
		}
	}
	// Revisar si el domino es o no una IP, 
	// Si es debe de ser un dominio válido
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
		    return false; // No tiene suficientes partes el dominio
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
		  if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
		?([A-Za-z0-9]+))$",$domain_array[$i])) {
		    return false;
		  }
		}
	}
	return true;
}


                $dest = "xaviermarques4f@gmail.com"; //Email de destino
                $email = $_POST['email'];
                $asunto = 'Newsletter'; //Asunto
								$asunto2 = "AmbròsJoiers-Newsletter"; //Asunto
								$headers = "Ambròs Joiers";
                $cuerpo = "$email quiere suscribirse al newsletter de www.ambrosjoiers.com"; //Cuerpo del mensaje
                //Cabeceras del correo
                $headers = "From: $asunto2\r\n"; //Quien envia?
 
                if(validar_email($email)){
								@mail($dest, $asunto ,$cuerpo,$headers);
								echo"<p>El teu missatge s'ha enviat correctament.</p>";
								}
								else{
								echo"<p>Email no vàlid.</p>";
								}
								
						

    ?>