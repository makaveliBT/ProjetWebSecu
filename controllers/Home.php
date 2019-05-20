<?php
	class Home extends Controller{
		
		function index(){
			
			$this->load_Model("Homes");
			$result = $this->Homes->readHome();
			$d= array();
			$d['home'] = $result;
			$this->set($d);
			$this->render('index');
		}
	}
?>