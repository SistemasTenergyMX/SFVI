<?php
	class Users {
		function __construct() {
			$this->db = new Database;
		}

		function generatePassword() {
			$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$password = substr(str_shuffle($caracteres), 0, 8);
			return $password;
		}

		function login($datos = []) {
			try {
				$this->db->query("SELECT * FROM user s WHERE s.email = :email");
				$this->db->bind(':email', $datos["email"]);
				// Ejecucion de la consulta
				$resultado = $this->db->registro();
				if ($resultado) {
					if ($resultado->password == $datos['password']) {
						$resultado = (object) ["success" => true, "data" => $resultado];
					} else {
						$resultado = (object) ["success" => false, "error" => 'Incorrect password'];
					}
				} else {
					$resultado = (object) ["success" => false, "error" => 'Email not found!'];
				}
				return $resultado;
			} catch (Exception $e) {
				$resultado = (object) ["success" => false, "error" => $e];
				return $resultado;
			}
		}
		
		function addUser($datos = []) {
			try {
				$resultado = (object) ["success" => false, "error" => ''];
				$this->db->query("INSERT INTO user(rol, email, password, name, surnames) VALUES(:rol, :email, :password, :name, :surnames)");
				$this->db->bind(':rol', $datos["rol"]);
				$this->db->bind(':email', $datos["email"]);
				$this->db->bind(':password', $datos["password"]);
				$this->db->bind(':name', $datos["name"]);
				$this->db->bind(':surnames', $datos["surnames"]);
				if ($this->db->execute()) {
					$resultado->success = true;
				} else {
					$resultado->error = 'No se pudo insertar los datos en la tabla (user)';
				}
				return $resultado;
			} catch (Exception $e) {
				$resultado = (object) ["success" => false, "error" => $e];
				return $resultado;
			}
		}

		function getUser($datos = []) {
			$this->db->query("SELECT * FROM user s WHERE s.id = :id");
			$this->db->bind(':id', $datos["id"]);
			return $this->db->registro();
		}

		function getUsers() {}

		function updateUser($datos = []) {}

		function deleteUser($datos = []) {}
	}
?>