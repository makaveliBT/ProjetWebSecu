<?php

	class connect extends Controller{
		
		function index(){
			$this->load_model('Connects');
			$this->Connects->submits();
			
			$this->render('index');
		}
	}

?>