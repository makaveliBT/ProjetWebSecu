<?php  
   
    ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>FBMO Vos chaussures</title>
    </head>
 
    <body>
 
    <?php include("header.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
	
		<div id="page">

		<?php 
		
		define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
		define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));


		require(ROOT.'core/model.php');
		require(ROOT.'core/controller.php');

		$param = explode('/',$_GET['p']);
		
		$controller = $param[0];
		if($param[0]==''){
			$controller = "home";
		}
		if($param[0]=="administrateur"){
			if(!empty($_SESSION)&& (!empty($_SESSION['test'])or !empty($_SESSION['testc']))){
				$controller="administrateur"; }
			else {
				$controller='connect';
				echo 'vous avez pas droit a cette page' ;
			}	

		}
		if($param[0]=="panier"){
			if(!empty($_SESSION)&&!empty($_SESSION['testc'])){
				$controller="panier"; }
			else {
				$controller='connect';
				echo 'vous avez pas droit a cette page' ;
			}	

		}
		$action = isset($param [1]) ? $param[1] : 'index';

		require('controllers/'.$controller.'.php');
		$controller = new $controller();
		if ( method_exists($controller, $action)) {
			$controller->$action();
		}
		else {
			echo ' eror 404';
		}
		?>
		</div>
    </div>
	
	
    
    <!-- Le pied de page -->
    
    <?php include("footer.php"); ?>
    
    </body>
</html>
