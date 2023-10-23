<?php
	class Request extends Controlador {
		private $datos = [];
		private $response;

		// Constructor
		function __construct() {
			session_start();
			// $this->modeloAdmin = $this->modelo('Dashboard');
			$this->modeloRequi = $this->modelo('Requisitions');
			$this->response = array('success' => false);
		}

		function index() {
			$this->response['error'] = 'without request';
			header('Content-Type: application/json');
			echo json_encode($this->response);
			exit;
		}
	}
?>