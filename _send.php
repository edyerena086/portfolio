<?php
	
	require 'includes/Sender.php';

	$sender = new Sender();

	$name = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
	$lastName = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
	$email = (isset($_POST['email'])) ? $_POST['email'] : '';
	$phone = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';;

	$data = [
		'nombre' => $name,
		'apellido' => $lastName,
		'email' => $email,
		'telefono' => $phone
	];

	$sender->sendMail($data);