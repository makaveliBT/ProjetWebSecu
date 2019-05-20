<?php
	class editprofil extends Controller{
		
		function index(){
			$this->load_model('Editprofils');
			$this->Editprofils->submits();
			$this->render('index');
		}
	}

?>