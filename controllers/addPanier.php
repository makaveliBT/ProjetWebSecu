<?php
	require(dirname(getcwd()) . '\core\model.php');
	require(dirname(getcwd()) . '\models\Produits.php');
	
	$nomProduit = (isset($_GET["nomProduit"])) ? $_GET["nomProduit"] : NULL;

	if ($nomProduit) {
		$produits = new Produits();
		echo $produits->addPanier($nomProduit);//ajout au panier
	}
	else echo "error product";
?>