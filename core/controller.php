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
}
?>