<?php
class Model {
	public $table ;
	public $id;

	function read($fields=null)
{
if ($fields=null){ $fields="*";}
$sql="SELECT * FROM ".$this->table;
$con = mysqli_connect("localhost","root","","vente");
$req = mysqli_query($con,$sql) ;
while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}
function getid(){
	if (!empty($_POST)){
		$cons = mysqli_connect("localhost","root","","vente");
		$marquename=$_POST['nomMarque'];
		$sql="SELECT  `idMarque` FROM `marque` WHERE `nom` like '$marquename'";
		$req = mysqli_query($cons,$sql) ;
		$d=mysqli_fetch_assoc($req);
	

	return $d ;
}
}
function find($id){
	if ($fields=null){ $fields="*";}
	$sql="SELECT * FROM `$this->table` WHERE `idMarque` = $id";
	$con = mysqli_connect("localhost","root","","vente");
	$req = mysqli_query($con,$sql) ;
	while($data=mysqli_fetch_assoc($req)){

	$d[]= $data; }

	return $d ;
}

	function save($data){

	if (isset($data["id"]) && !empty($data["id"]));
	$sql="UPDATE".$this->$table."SET";
	foreach($data as $k=>$v){
		$sql.="$k='$v',";
	}

	$sql=substr($sql,0,-1);
	$sql.="WHERE id=".$data["id"];
	mysql_query($sql) or die(mysql_error());
	}

function load($name){
	require(ROOT."/models/".$name.".php");
	return new $name();
}
}



