<?php
foreach($produits as $t): ?> 
	<h1><a href="<?php echo WEBROOT ?>produits/view/<?php echo $t['idMarque']; ?>"><?php echo $t['nom'];?></a></h1>
<?php endforeach; ?>

