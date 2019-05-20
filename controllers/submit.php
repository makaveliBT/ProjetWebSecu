<?php
	require(dirname(getcwd()) . '\index.php');
	require(dirname(getcwd()) . '\core\controller.php');
	require(dirname(getcwd()) . '\core\model.php');
	require('administrateur.php');
	
	$nom= $_POST['nomtype'];
	if (!empty($_POST['nomtype'])){
		$administrateur = new administrateur();
		echo $administrateur->addType($nom);
	}
	else{
		echo "inserez un nom";
	}
?>