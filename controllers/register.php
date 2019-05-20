<?php
	class register extends Controller{
		
		function index(){
			$this->load_model('Registers');
			$this->Registers->submits();
			$this->render('index');
		}
	}

?>