<?php
	class IndexController extends ControladorBase{

		public function IndexController(){
			parent::ControladorBase();
		}

		public function index(){
			$this->view("index",  array("Title" =>"Inicio del Sistema"));
		}

		public function registry(){
			$this->view("registro",  array("title" =>"Registro de Salas"));
		}

		public function calendar(){
			$this->view("calendar",  array("title" =>"Calendario de Actividades"));
		}
		
	}
?>