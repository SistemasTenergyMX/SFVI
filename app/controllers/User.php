<?php
	class User extends Controlador {
		private $datos = [];

		// Constructor
		function __construct() {
			session_start();
			$this->modeloUser = $this->modelo('Users');
		}

		function index() {
			$this->response['error'] = 'without request';
            $this->vista("Admin/index");
		}

		function register() {
            $this->vista("authentication/register");
		}

		function login() {
			$datos = [
				"alert" => '',
				"email" => '',
				"password" => '',
			];

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$datos["email"] = isset($_POST["email"]) ? trim($_POST["email"]) : '';
				$datos["password"] = isset($_POST["password"]) ? trim($_POST["password"]) : '';

				$response = $this->modeloUser->login($datos);
				if ($response->success) {
					$_SESSION['user']['id'] = $response->data->id;
					$_SESSION['user']['int_rol'] = $response->data->rol;
					$_SESSION['user']['str_rol'] = $response->data->str_rol;
					$_SESSION['user']['name'] = $response->data->name;
					$_SESSION['user']['surnames'] = $response->data->surnames;
					$_SESSION['user']['email'] = $response->data->email;
					header("location:" . RUTA_URL. 'Admin/');
					exit;
				} else {
					$datos['alert'] = $response->error;
				}
			}
			// ? Carga la vista
			$this->vista("authentication/login", $datos);
		}

		function logout() {
			header('location:' . RUTA_URL);
		}


		function profile($id = null) {
			echo 'Vista Perfil';
		}
	}
?>