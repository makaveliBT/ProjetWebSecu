<?php
	class Paniers extends Model{
		
		
		
		function readPanier(){
			
			$tableauPanier = array();
			try{
				$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
			}catch(Exception $e){	
				die('Erreur : '.$e->getMessage());
			}
			$email = $_SESSION['email'];
			$result = $db->query("SELECT * FROM client where eMail='$email'");
			if($result->fetchColumn()){
				$select = $db->query("SELECT * FROM client where eMail='$email'");
				$result = $select->fetch(PDO::FETCH_OBJ);
				if($result->mdp == $_SESSION['pass']){
					$panierDB = $db->query("SELECT qte, pointure, nombre, Couleur, nomModel, sexe, age, prix, description, image, marque.nom FROM `panier`
											INNER JOIN contenu on contenu.idPanier=panier.idPanier
											INNER JOIN client on client.idClient=panier.idClient
											INNER JOIN stock on stock.idStock=contenu.idStock
											INNER JOIN model on model.idModel=stock.idModel
											INNER JOIN marque on marque.idMarque=model.idMarque
											WHERE client.eMail='$email'");
					while($donnees = $panierDB->fetch()){
						array_push($tableauPanier,$donnees);
					}
					echo 'readed';
				}
				else echo '<br/><h3 style="color:green;">créez un compte! </h3>';
			}
			else echo 'error BDD';
			
			return $tableauPanier;
		}
		
		
		
		function addPanier($nomProduit,$qte,$pointure,$couleur){
			try{
				$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
			}catch(Exception $e){	
				die('Erreur : '.$e->getMessage());
			}
			$email = $_SESSION['email'];
			$result = $db->query("SELECT * FROM client where eMail='$email'");
			if($result->fetchColumn()){
				$select = $db->query("SELECT * FROM client where eMail='$email'");
				$result = $select->fetch(PDO::FETCH_OBJ);
				if($result->mdp == $_SESSION['pass']){//vérification que le client soit connecté et on ajoute le produit
					
					//██get id panier a partir de l'adresse email du client
					//get id client
					$res = $db->query("SELECT idClient FROM `client` WHERE eMail='$email'");
					if($resIdClient = $res->fetch()){
						$IdClient = $resIdClient['idClient'];
						//get id panier
						$res = $db->query("SELECT * FROM panier WHERE idClient='$IdClient'");
						if($resIdPanier = $res->fetch()){
							$idPanier = $resIdPanier['idPanier'];
							
							//██get id Stock a partir du nom du produit, de la pointure, de la couleur
							$res = $db->query("SELECT * FROM model WHERE nomModel='$nomProduit'");
							if($resIdModel = $res->fetch()){
								$idModel = $resIdModel['idModel'];
								//get id stock
								$res = $db->query("SELECT * FROM stock WHERE (idModel='$idModel') AND (pointure='$pointure') AND (Couleur='$couleur')");
								if($resStock = $res->fetch()){
									$idStock=$resStock['idStock'];
									if($resStock['nombre']>=$qte){//on vérifie qu'il y est assez de stock
									
										//██ on ajoute à la bdd
										$db->exec("INSERT INTO contenu (idPanier, idStock, qte) VALUES ('$idPanier', '$idStock', '$qte')");
										if($db!=false)
											return "produit ajouté";
										else return "failed to add";
									}else return "stock insufisant";
								}else return "il n'y a plus de stock.";
							}else return "le produit n'existe pas";
						}else return "vous n'avez pas de panier. Contactez un administrateur.";
					}else return "vous n'avez pas de compte.";
					
				}else{
					echo "<a href='register'>créez un compte \r</a>";
					echo "<a href='connect'>connectez-vous \r</a>";
				}
			}
			else{
				echo "<a href='register'>créez un compte  \r</a>";
				echo "<a href='connect'>connectez-vous  \r</a>";
			}
		}
		
		
		
		
		
		function viderPanier(){
			
			try{
				$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
			}catch(Exception $e){	
				die('Erreur : '.$e->getMessage());
			}
			
			if($db){
				$db->exec("DELETE FROM contenu");
			}
		}
	}
?>