<?php
class Controller {
	var $vars=array();
	function set($d){
		$this-> vars = array_merge($this->vars,$d);
	}

	function render($filename){
		extract($this-> vars);
		require(ROOT.'views/'.get_class($this).'/'.$filename.'.php');
	}
	
	
	function load_model($name){
			require_once(ROOT."models/".strtolower($name).".php");
			 $this->$name= new $name();
		}
}
?>