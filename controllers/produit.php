<?php
	class produit extends Controller{
		
		function index(){
			$this->load_Model("Produits");
			$nomProduit = (isset($_POST["nameProduct"])) ? $_POST["nameProduct"] : "";
			$result = $this->Produits->readProduit($nomProduit);
			$d= array();
			$d['produit'] = $result;
			$this->set($d);
			$this->render('index');
		}
	}
?>