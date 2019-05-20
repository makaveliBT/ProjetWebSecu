
<!DOCTYPE HTML>

<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->

<?php
	if (!empty($_POST['disconnected'])){
		$_SESSION['login'] = "";
		$_SESSION['pass'] = "";
	}
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/owl.carousel.min.css">
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="http://localhost/ProjetWebSecu/css/style.css">

	<!-- Modernizr JS -->
	<script src="http://localhost/ProjetWebSecu/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<!-- <div class="page-inner"> -->
	<div class="row">
		<nav class="gtco-nav" role="navigation" style="background-image: url(http://localhost/ProjetWebSecu/images/img_bg_1.jpg)">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="home">FBMO <em>Vos Chaussures.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="active"><a href="http://localhost/ProjetWebSecu/home">Menu</a></li>
							
							
							<li><?php 
							if(empty($_SESSION)) { echo "<li><a href=\"connect\">se connecter</a></a></li>" ;} ?>
							<?php if(empty($_SESSION)) { echo " <li><a href=\"register\">S'inscrire!</a></li>" ;} ?>
					<?php if(!empty($_SESSION)) { echo "<li><a href=\"panier\">panier</a></li> ";} ?> 
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class = "gtco-connected">
		<p style="color:green;"> Account : </p>

		<?php
		if(!empty($_SESSION)){
			echo $_SESSION['nom'] ; } ?> <br />
			<?php if(!empty($_SESSION)){ echo $_SESSION['email'] ;}?>  <br/>
			<?php if(!empty($_SESSION)){echo $_SESSION['login']; }?>
			
			<?php 	if(empty($_SESSION)) { echo "<form id=\"myForm\" action=\"http://localhost/ProjetWebSecu/connect\"  method=\"POST\">  " ;}?>
		
			<?php 	if(empty($_SESSION)) { echo "<button id=\"subbbb\"  type= \"submit\" name=\"submit\">se connecter</button> " ; } ?>
		<?php 	if(empty($_SESSION)) { echo "</form>"  ; }?>
		<?php 	if(!empty($_SESSION)&& !empty($_SESSION['testc'])) { echo "<form id=\"myForm\" action=\"http://localhost/ProjetWebSecu/editprofil/index\"  method=\"POST\">  " ;}?>
		
			<?php 	if(!empty($_SESSION)&& !empty($_SESSION['testc'])) { echo "<button id=\"subbbb\"  type= \"submit\" name=\"submit\">editer votre profil</button> " ; } ?>
		<?php 	if(!empty($_SESSION)&& !empty($_SESSION['testc'])) { echo "</form>"  ; }?>
			<?php 	if(!empty($_SESSION)) { echo "<form id=\"myForm\" action=\"http://localhost/ProjetWebSecu/deco\"  method=\"POST\">  " ;}?>
		
			<?php 	if(!empty($_SESSION)) { echo "<button id=\"subbbb\"  type= \"submit\" name=\"submit\">se deconnecter</button> " ; } ?>
		<?php 	if(!empty($_SESSION)) { echo "</form>"  ; }?>
		<a id="adminAccess"></a><!--<a id="adminAccess" href="administrateur">adminPage</a>-->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="http://localhost/ProjetWebSecu/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="http://localhost/ProjetWebSecu/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="http://localhost/ProjetWebSecu/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="http://localhost/ProjetWebSecu/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="http://localhost/ProjetWebSecu/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="http://localhost/ProjetWebSecu/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="http://localhost/ProjetWebSecu/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="http://localhost/ProjetWebSecu/js/jquery.magnific-popup.min.js"></script>
	<script src="http://localhost/ProjetWebSecu/js/magnific-popup-options.js"></script>
	
	<script src="http://localhost/ProjetWebSecu/js/moment.min.js"></script>
	<script src="http://localhost/ProjetWebSecu/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="http://localhost/ProjetWebSecu/js/main.js"></script>
	<script src="http://localhost/ProjetWebSecu/js/header.js"></script>

	</body>
</html>

