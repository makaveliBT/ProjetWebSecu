<?php
	class Registers extends Model{
		function submits(){
			
			if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repeatpassword'])){
				echo '<br/><h3>Veuillez remplir tousles champs. </h3>';
			}else{
				$username = $_POST['username'];
				$adresse=$_POST['adresse'];
				$num=$_POST['num'];

				$email = $_POST['email'];
				$password = $_POST['password'];
				$repeatpassword = $_POST['repeatpassword'];


				if($username&&$email&&$password&&$repeatpassword){
					if($password==$repeatpassword){
						try{
							$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
						}
						catch(Exception $e){
							die('Erreur : '.$e->getMessage());
						}
						echo $username ;
						$db->query("INSERT INTO `client`(`nom`, `prenom`, `idVille`, `addresse`, `numTel`, `eMail`, `mdp`) VALUES ('$username','$username','5','$adresse','$num','$email','$password')");
						
						echo '<br/><h3 style="color:green;">Vous avez créé votre compte, vous pouvez maintenant vous<a href="connect">connecter</a> </h3>';
					
					}else{
						echo '<br/><h3 style="color:red;">Les mot de passes ne sont pas identiques </h3>';
					}
				}/*else{
					echo '<br/><h3 style="color:red;">Veuillez remplir tous les champs</h3>';
				}*/
			}
		}
	}
?>