<?php
	class Homes extends Model{
		function readHome(){
			
			$tableauAnnonces = array();
			try{
				$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
			}catch(Exception $e){	
				die('Erreur : '.$e->getMessage());
			}
			
			$produit = $db->query("SELECT nomModel, sexe, age, prix, description, image, marque.nom as nomMarque, type.nom as nomType FROM `model`
									INNER JOIN marque on marque.idMarque=model.idMarque
									INNER JOIN type on type.idType=model.idType");
			while($donnees = $produit->fetch()){
				array_push($tableauAnnonces,$donnees);
			}
			return $tableauAnnonces;
		}
	}
?>