

<html>
    <head>
        <meta charset="utf-8" />
        <title>FBMO Vos chaussures</title>
    </head>
 
    <body>
 
    <?php include("header.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">

		<?php 
		define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));


		require(ROOT.'core/model.php');
		require(ROOT.'core/controller.php');

		$param = explode('/',$_GET['p']);
		
		$controller = $param[0];
		if($param[0]==''){
			$controller = "home";
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
	
	
    
    <!-- Le pied de page -->
    
    <?php include("footer.php"); ?>
    
    </body>
</html>