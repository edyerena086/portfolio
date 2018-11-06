<?php

namespace Library;

class Validation
{
	public function make($values)
	{
		$response;
		$error = false;
		$errors = [];

		//Name
		if (strlen(trim($values['nombre'])) == 0) {
			$error = true;

			$errors['nombre'] = [
				'message' => 'El campo nombre(s) es obligatorio.'
			];
		}

		//Apellido
		if (strlen(trim($values['apellido'])) == 0) {
			$error = true;

			$errors['apellido'] = [
				'message' => 'El campo apellido(s) es obligatorio.'
			];
		}

		//Email
		if (strlen(trim($values['email'])) == 0) {
			$error = true;

			$errors['email'] = [
				'message' => 'El campo correo electrónico es obligatorio.'
			];
		}

		//Phone
		if (strlen(trim($values['telefono'])) == 0) {
			$error = true;

			$errors['telefono'] = [
				'message' => 'El campo teléfono es obligatorio.'
			];
		}

		if ($error) {
			$response = [
				'error' => true,
				'errors' => $errors
			];
		} else {
			$response = [
				'error' => false
			];
		}

		return $response;
	}
}
