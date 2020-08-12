<?php
	class IndexController extends ControladorBase{

		public function IndexController(){
			parent::ControladorBase();
		}

		public function index(){
			$this->view("index",  array("Title" =>"Inicio del Sistema" ));
		}
		
	}
?>