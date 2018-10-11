<?php
	class Connects extends Model{
		function submits(){
				$email = $_POST['mail'];
				$password = $_POST['pwd'];

				if($email&&$password){
					try{

						$db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');

					}catch(Exception $e){	
						die('Erreur : '.$e->getMessage());
					}
					
					$result = $db->query("SELECT * FROM client where eMail='$email'");
					if($result->fetchColumn()){
						$select = $db->query("SELECT * FROM client where eMail='$email'");
						$result = $select->fetch(PDO::FETCH_OBJ);
						$_SESSION['user_id'] = $result->id;
						$_SESSION['user_name'] = $result->username;
						$_SESSION['user_email'] = $result->email;
						$_SESSION['user_password'] = $result->password;
					}else{
						echo '<br/><h3 style="color:red;">Mauvais Identifiants. </h3>';
					}
					
				}else{
					echo '<br/><h3 style="color:red;">Veuillez remplir tousles champs. </h3>';
				}
		}
	}
?>