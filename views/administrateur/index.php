
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
		<style>
	div.adminPage{
		min-height:  2000px;
		position: relative;
	}
	div.static {	
    position: relative;
    left: 190px;
    max-width: 400px;
    top: 200px;
    float: left;
	}
	div.admininfo {	
    position: relative;
    left: 190px;
  
    top: 120px;
    float: left;
	}
	div#statice {	
    position: relative;
    margin-right: 400px;
    margin-left: 500px;
    max-width: 400px;
    top: 200px;
    
	}

</style>
	</head>
	<body>
		<div class="adminPage">
			<div class="admininfo">

		
					
				</div>

			<div class="static">	
			<li class="has-dropdown" id="deux" ><a href="services.html">Produits</a>
				<ul class="dropdown">
					<li><a href="<?php echo WEBROOT ?>administrateur/modifierlestock">ajouter une marque </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/ajouterunmodel">gerer le  model  </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/ajoutertype">ajouter un type  </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/ajouterstock">gérer le  stock  </a></li>
					

				</ul>
			</li>
			</div>
			
			<div id="statice">
			<li class="has-dropdown" id="deux" ><a href="services.html">Clients</a>
				<ul class="dropdown">
					<li><a href="<?php echo WEBROOT ?>administrateur/client"> clients  </a></li>
					<?php if(!empty($_SESSION['test'])&& !empty($_SESSION)){ ?>
					<li><a href="<?php echo WEBROOT ?>administrateur/employe"> employe  </a></li>
					<?php  } ?>
					<li><a href="<?php echo WEBROOT ?>administrateur/messagerie">messagerie  </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/commande"> commandes </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/stock">le stock  </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/models"> les models </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/marque"> les marques </a></li>
					<li><a href="<?php echo WEBROOT ?>administrateur/type"> les types </a></li>
				</ul>
			</li>
		</div>
		
		</div>			
			
	
			


	</body>
</html>







