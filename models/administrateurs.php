<?php
class Administrateurs extends Model {

	var $table ='marque';


	function ajoutermarque(){
		
		if (!empty($_POST['nom'])){
			$cons = mysqli_connect("localhost","root","","vente");
		
			$nom= $_POST['nom'];
			
		$sql="INSERT INTO marque (nom)
		VALUES ('$nom')";

		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 record ";

		mysqli_close($cons);
		

		}
	}

	function ajoutertype(){

	if (!empty($_POST['nomtype'])){
		$cons = mysqli_connect("localhost","root","","vente");
	
		$nom= $_POST['nomtype'];
		
	$sql="INSERT INTO type (nom)
	VALUES ('$nom')";

	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 added";

	mysqli_close($cons);
	

	}}
	function ajouterunmessage(){

	if (!empty($_POST['messageemploye'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$login=$_SESSION['login'];
		$nom= $_POST['messageemploye'];
		$datetime = date("Y-m-d H:i:s");
		$recepteur=$_POST['recepteur'];
		$sql="INSERT INTO messagerie (emmeteur,recepteur,message,DD)
	VALUES ('$login', '$recepteur','$nom','$datetime')";
		
	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record "; 

	}
if (!empty($_POST['messageclient'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$login=$_SESSION['idClient'];
		$nom= $_POST['messageclient'];
		$datetime = date("Y-m-d H:i:s");
		$recepteur=0;
		$sql="INSERT INTO messagerie (emmeteur,recepteur,message,DD)
	VALUES ('$login', '$recepteur','$nom','$datetime')";
		
	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record "; 

	}}
	function gerercommande(){

	if (!empty($_POST['addlivre'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$id=$_POST['idcommande'];
		$addlivr=$_POST['addlivre'];
	$sql ="UPDATE commande SET addlivr ='$addlivr'   WHERE idCommande='$id' ";
		
	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record "; 

	}
	if (!empty($_POST['envoye'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$id=$_POST['idcommande'];
		$addlivr=$_POST['envoye'];
	$sql ="UPDATE commande SET envoye ='$addlivr'   WHERE idCommande='$id' ";
		
	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record "; 

	}
}





	function ajouterstock($idModel){

if (!empty($_POST['ModelName'])&&!empty($_POST['pointure'])&&!empty($_POST['couleur'])&&!empty($_POST['nombre'])){
		$cons = mysqli_connect("localhost","root","","vente");
		
	$pointure= $_POST['pointure'];
	$couleur= $_POST['couleur'];
	$nombre= $_POST['nombre'];
	$sql2="SELECT COUNT(idModel) AS dejaexistant FROM stock WHERE idmodel = '$idModel'";
	$resultat = mysqli_query($cons,$sql2); 
	$resultat2 = mysqli_fetch_array($resultat);
 	$sql3="SELECT COUNT(Couleur) AS dejaexistant1 FROM stock WHERE Couleur = '$couleur'";
	$resultat1 = mysqli_query($cons,$sql3); 
	$resultat3 = mysqli_fetch_array($resultat1);
	$sql4="SELECT COUNT(pointure) AS dejaexistant2 FROM stock WHERE pointure = '$pointure'";
	$resultat5 = mysqli_query($cons,$sql4); 
	$resultat6 = mysqli_fetch_array($resultat5);
	if ($resultat2['dejaexistant'] != 0 && $resultat3['dejaexistant1'] != 0 && $resultat6['dejaexistant2'] != 0) {	
	$sql ="UPDATE stock SET nombre ='$nombre'   WHERE pointure='$pointure' AND Couleur='$couleur'   ";

		if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record "; 

}



	else {
	$sql="INSERT INTO stock (idModel,pointure,nombre,Couleur)
	VALUES ('$idModel', '$pointure','$nombre', '$couleur')";

	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record added";}

	mysqli_close($cons);


	}
}


	function ajoutermodel($idMarque,$idType){

	if (!empty($_POST['nomModel'])&&!empty($_POST['sexe'])&&!empty($_POST['prix'])&&!empty($_POST['age'])){
			$cons = mysqli_connect("localhost","root","","vente");
			$nomModel= $_POST['nomModel'];
			$sexe= $_POST['sexe'];
			$prix= $_POST['prix'];
			$age= $_POST['age'];
			$description = $_POST['description'];
			$image = $_POST['image'];
		$sql="INSERT INTO model (nomModel, idMarque,idType, sexe,age,prix,description,image)
		VALUES ('$nomModel', '$idMarque','$idType', '$sexe','$age','$prix','$description','$image')";

		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	
		}
	}



	function deletestock(){
		if (!empty($_POST['idStock'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$idstock=$_POST['idStock'];
		
		$sql=" DELETE FROM `stock` WHERE `idStock` = '$idstock' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);


		}

	}
		function deletetype(){
		if (!empty($_POST['types'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$idtype=$_POST['types'];
		
		$sql=" DELETE FROM `type` WHERE `idType` = '$idtype' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
	function deleteclient(){
		if (!empty($_POST['clientes'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$idclient=$_POST['clientes'];
		
		$sql=" DELETE FROM `client` WHERE `idClient` = '$idclient' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
	function deletemessages(){
		if (!empty($_POST['messages'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$id=$_POST['messages'];
		
		$sql=" DELETE FROM `messagerie` WHERE `id` = '$id' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
	function deletestocks(){
		
		if (!empty($_POST['stocks'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$id=$_POST['stocks'];
		
		$sql=" DELETE FROM `stock` WHERE `idStock` = '$id' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
	function deletecomandes(){

		if (!empty($_POST['commandes'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$id=$_POST['commandes'];
		
		$sql=" DELETE FROM `commande` WHERE `idCommande` = '$id' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
	function deleteemploye(){

		if (!empty($_POST['employes'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$id=$_POST['employes'];
		
		$sql=" DELETE FROM `connection` WHERE `idEmploye` = '$id' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
		function deletemodel(){
		if (!empty($_POST['models'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$idmodel=$_POST['models'];
		
		$sql=" DELETE FROM `model` WHERE `idModel` = '$idmodel' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
	function deletemarque(){
		if (!empty($_POST['marques'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$idmarque=$_POST['marques'];
		
		$sql=" DELETE FROM `marque` WHERE `idMarque` = '$idmarque' ";
		if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
		



	function getidMarque(){
		if (!empty($_POST['nomMarque'])){
			$cons = mysqli_connect("localhost","root","","vente");
			$marquename=$_POST['nomMarque'];
			$sql="SELECT  `idMarque` FROM `marque` WHERE `nom` like '$marquename'";
			$req = mysqli_query($cons,$sql) ;
			$d=mysqli_fetch_assoc($req);
		

		return $d ;
		}

		
	}

	function getidType(){
		if (!empty($_POST['nomType'])){
			$cons = mysqli_connect("localhost","root","","vente");
			$typename=mysqli_real_escape_string($cons,$_POST['nomType']);
			$sql="SELECT  `idType` FROM `type` WHERE `nom` like '$typename'";
			$req = mysqli_query($cons,$sql) ;
			$d=mysqli_fetch_assoc($req);
			
		

		return $d ;
		}

	}
	function getclients(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `client`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }
	if(!empty($d)){
	return $d ; }
	}

function getcommandes(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `commande`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
function addemploye(){

if(!empty($_POST['enom'])){
		$cons = mysqli_connect("localhost","root","","vente");
		$mail=$_POST['eemail'];
		$nom= $_POST['enom'];
		$mdp= $_POST['emdp'];
		$sql="INSERT INTO connection (nom,eMail,motdepasse)
	VALUES ('$nom', '$mail','$mdp')";
		
	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record "; 

	}



}

function getemployes(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `connection`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
function getstock(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `stock`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
function gettype(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `type`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
function getmodels(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `model`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
function getmarque(){

			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `marque`";
			$req = mysqli_query($cons,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
	function getmessagerie(){
			$login=$_SESSION['login'];
			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `messagerie` WHERE `recepteur`=$login ";
			$req = mysqli_query($cons,$sql) ;
			while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	if(!empty($d)){
	return $d ; }
	}
		function getmessagesclient(){
			$login=$_SESSION['login'];
			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `messagerie` WHERE `recepteur`=0 ";
			$req = mysqli_query($cons,$sql) ;
			while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	if(!empty($d)){
	return $d ; }
	}
function getmessagerieenvoye(){
			$login=$_SESSION['login'];
			$cons = mysqli_connect("localhost","root","","vente");
			$sql="SELECT  * FROM `messagerie` WHERE `emmeteur`=$login ";
			$req = mysqli_query($cons,$sql) ;
			while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	if(!empty($d)){
	return $d ; }
	}
	
	function getidModel(){
		if (!empty($_POST['ModelName'])){
			$cons = mysqli_connect("localhost","root","","vente");
			$modelname=$_POST['ModelName'];
			$sql="SELECT  `idModel` FROM `model` WHERE `nomModel` like '$modelname'";
			$req = mysqli_query($cons,$sql) ;
			$d=mysqli_fetch_assoc($req);
			
		

		return $d ;
		}

	}


}
