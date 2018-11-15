<?php

	$campos = '';

	foreach ($_POST as $clave => $valor) {
		$campos .= ucwords($clave).': '.utf8_decode($valor)."\n";
	}
	
	$para      = 'hola@omargonzalez.com.mx';
	$titulo    = 'Prospecto - Omar Gonzalez';
	$mensaje   = utf8_decode("Se ha llenado la forma de contacto con la siguiente información:\n\n").$campos;
	$cabeceras = 'From: no-reply@omargonzalez.com.mx' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	if (mail($para, $titulo, $mensaje, $cabeceras)) {
		echo json_encode(['errors' => false]);
	} else {
		echo json_encode(['errors' => true, 'message' => 'No se ha podido enviar la forma de contacto, intentelo más tarde.']);
	}