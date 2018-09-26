<?php

class tutoriels extends Controller {

	function index(){
		$d= array();
		$d['tuto']  = array('titre' => 'titre','description' => 'titre' );
		$this->set($d);
		$this->render('index');
	}
	
}
?>