<?php

	class Panier extends Controller{
		
		function index(){
			$this->load_Model("Paniers");
			
			//ajouter un produit
			$nomProduit = (isset($_POST["nomProduit"])) ? $_POST["nomProduit"] : NULL;
			$qte = (isset($_POST["qte"])) ? $_POST["qte"] : NULL;
			$size = (isset($_POST["taille"])) ? $_POST["taille"] : NULL;
			$color = (isset($_POST["couleur"])) ? $_POST["couleur"] : NULL;
			if ($nomProduit && $qte && $size && $color) {
				echo $this->Paniers->addPanier($nomProduit,$qte,$size,$color);//ajout au panier
			}
			
			//vider le panier
			$viderPanier = (isset($_POST["viderPanier"])) ? $_POST["viderPanier"] : NULL;
			if($viderPanier){
				$this->Paniers->viderPanier();
			}
			
			//lecture du panier a retourner pour l'afficher
			$result = $this->Paniers->readPanier();
			$d=array();
			$d['panier'] = $result;
			$this->set($d);
			$this->render('index');
		}
		
		function test(){
			return "testReponse";
		}
	}
?>