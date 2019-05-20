<?php
   


	class Connects extends Model{
		function submits(){
			 

	
            
			if(!empty($_POST['mail']) && !empty($_POST['pwd'])){
				
				$email = $_POST['mail'];
				$password = $_POST['pwd'];

				if($email&&$password){
					try{

						$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');

					}catch(Exception $e){	
						die('Erreur : '.$e->getMessage());
					}
					
					$result = $db->query("SELECT * FROM client where eMail='$email'");
					$result1 = $db->query("SELECT * FROM admin where eMail='$email'");
					$result2 = $db->query("SELECT * FROM connection where eMail='$email'");
					if($result->fetchColumn()){
						$select = $db->query("SELECT * FROM client where eMail='$email'");
						$result = $select->fetch(PDO::FETCH_OBJ);
						if($result->mdp == $password){
							$_SESSION['login'] = $result->idClient;
							$_SESSION['email'] = $result->eMail;
							$_SESSION['pass'] = $result->mdp;
							$_SESSION['nom'] = $result->nom;
							$_SESSION['testc']= "3";

							echo "<script type='text/javascript'>document.location.replace('home');</script>";
							echo '<br/><h3 style="color:green;">Connecté! </h3>';
						}
						else{
							$_SESSION['logibfn'] = 'visiteur';
							$_SESSION['pasbfs'] = '';
							echo '<br/><h3 style="color:red;">Mauvais Identifiants ou mot de passe. </h3>';
						}

					}
					elseif ($result1->fetchColumn()){
					
						$select = $db->query("SELECT * FROM admin where eMail='$email'");
						$result1 = $select->fetch(PDO::FETCH_OBJ);
						if($result1->mdp == $password){

							$_SESSION['login'] = $result1->idAdmin;
							$_SESSION['nom'] = $result1->nom;
							$_SESSION['email'] = $result1->eMail;
							$_SESSION['pwdd'] = $result1->mdp;
							$_SESSION['test']= "1";
							
							
							echo "<script type='text/javascript'>document.location.replace('administrateur/index');</script>";
							
				
							echo '<br/><h3 style="color:green;">Connecté! </h3>';

						}
			
						else{
							$_SESSION['logiefn'] = 'visiteur';
							$_SESSION['pasqs'] = '';
							echo '<br/><h3 style="color:red;">Mauvais Identifiants ou mot de passe. </h3>';
						}
					}
					elseif ($result2->fetchColumn()){
						$select = $db->query("SELECT * FROM connection where eMail='$email'");
						$result2 = $select->fetch(PDO::FETCH_OBJ);
						if($result2->motdepasse == $password){

							$_SESSION['login'] = $result2->idEmploye;
							$_SESSION['nom'] = $result2->nom;
							$_SESSION['email'] = $result2->eMail;
							$_SESSION['pwdd'] = $result2->motdepasse;
							$_SESSION['teste']= "2";
							
							
							echo "<script type='text/javascript'>document.location.replace('administrateur/index');</script>";
							
				
							echo '<br/><h3 style="color:green;">Connecté! </h3>';
							 return $a ;
						}
						else{
							$_SESSION['logiefn'] = 'visiteur';
							$_SESSION['pasqs'] = '';
							echo '<br/><h3 style="color:red;">Mauvais Identifiants ou mot de passe. </h3>';
						}
					}
				}
			}else{
				echo '<br/><h3 style="color:red;">Veuillez remplir tousles champs. </h3>';
			}
		}
	}
	
?>