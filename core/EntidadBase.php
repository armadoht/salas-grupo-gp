<?php

	class EntidadBase{
		private $table;
		private $db;
		private $conectar;


		public function EntidadBase($table){
			$this->table = (string) $table;
			require_once('Conectar.php');
			$this->conectar = new Conectar();
			$this->db = $this->conectar->conexion();
		}

		public function getConectar(){
			return $this->conectar;
		}

		public function db(){
			return $this->db;
		}

		public function getAll(){
			$srt = "...here Query";
			if($this->db){
				$query = $this->db->query($srt);
				if($query->num_rows > 0){
					while ($row = $query->fetch_object()) {
						$resultSet[] = $row;
					}
				}else{
					$resultSet = null;
				}
			}else{
				$resultSet = null;
			}
			return $resultSet;
		}

		

		public function getById($id){
			$srt = "...here Query";
			if($this->db){ 
				$query = $this->db->query($srt);
				if($query->num_rows > 0){
					$resultSet = $query->fetch_object();
				}else{
					$resultSet = null;
				}
			}else{
				$resultSet = null;
			}
			return $resultSet;
		}

		public function getBy($column,$value){
			$srt = "...here Query";
			if($this->db){
				$query = $this->db->query($srt);
				if($query->num_rows > 0){
					while ($row = $query->fetch_object()) {
						$resultSet[] = $row;
					}
				}else{
					$resultSet = null;
				}
			}else{
				$resultSet = null;
			}
			return $resultSet;
		}

		public function deleteById($id){
			$srt = "...here Query";
			if($this->db){
				 $resultSet = $query = $this->db->query($srt);
				 return $resultSet;
			}else{
				$resultSet = null;
			}
			return $resultSet;
		}

		public function deleteBy($column,$value){
			$srt = "...here Query";
			if($this->db){
				 $resultSet = $query = $this->db->query($srt);
				 return $resultSet;
			}else{
				$resultSet = null;
			}
			return $resultSet;
		}
	}
?>