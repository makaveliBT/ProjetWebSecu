<?php
	class Produits extends Model{
		function readProduit($nomProduit){
			
			$tableauProduit = array();
			try{
				$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
			}catch(Exception $e){	
				die('Erreur : '.$e->getMessage());
			}
			
			$panierDB = $db->query("SELECT nomModel, sexe, age, prix, description, image, marque.nom as nomMarque, type.nom as nomType, pointure, nombre, couleur FROM `model`
									INNER JOIN marque on marque.idMarque=model.idMarque
									INNER JOIN type on type.idType=model.idType
									INNER JOIN stock on stock.idModel=model.idModel
									where nomModel = '$nomProduit'");
			
			while($donnees = $panierDB->fetch()){
				array_push($tableauProduit,$donnees);
			}
			return $tableauProduit;
		}
	}
?>