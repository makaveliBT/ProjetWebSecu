<?php

class user extends Controller {


	function index(){
		$this->load_model('Produit');
		$d['produits']=$this->Produit->read();
		
		$this->set($d);
		$this->render('index');
		
	}
	function view($id){
		
		$this->load_model('Produit');
		$d['produits']=$this->Produit->find($id);
		$this->set($d);
		$this->render('view');

	}
	
}
	

?>