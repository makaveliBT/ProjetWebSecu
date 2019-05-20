<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
	
	<body>
		
	<div class="gtco-loader"></div>
	
	<div class="gtco-section">
		<div class = "gtco-image">
			<div class="row">
				<?php
					echo "<div class='col-lg-4 col-md-4 col-sm-6'>";
						echo "<a href='images/". $produit[0]['image'] ."' class='fh5co-card-item image-popup'>";
							echo "<figure>";
								echo "<div class='overlay'><i class='ti-plus'></i></div>";
								echo "<img src='images/". $produit[0]['image'] ."' alt='Image' class='img-responsive'>";
							echo "</figure>";
						echo "</a>";
					echo "</div>";
					echo "<div class='fh5co-text'>";
						echo "<h2 id='nomProduit'>" . $produit[0]['nomModel'] . "</h2>";
						echo "<p>sexe: " . $produit[0]['sexe'] . " age: " . $produit[0]['age'] . "</p>";
						echo "<p><span class='price cursive-font'>" . $produit[0]['prix'] . "€</span></p>";
					echo "</div>";
					echo "<div class='fh5co-text'>";
						echo "<h2> Maque: " . $produit[0]['nomMarque'] . "</h2>";
						echo "<p> Description: " . $produit[0]['description'] . "</p>";
					echo "</div>";
				?>
			</div>
			
			<button class="btn btn-primary" id="buttonADD"> Ajouter au panier </button>
			
			<form action="addPanier.php" method="post">
				<input type="number" value="1" min="1" max="<?php echo $produit[0]['nombre']; ?>">
				<fieldset>
					<legend>Select a color</legend>
					<?php
						$produitByColor
						for($i=0; $i<count($produit); $i++){
							
						}
						foreach($produit as $product){
							echo '<div>';
								echo '<input type="radio" id="huey" name="colorChoice"/>';
								echo '<label for="huey">'. $product['couleur'] .'</label>';
							echo '</div>';
						}
					?>
				</fieldset>
				<input type="submit" value="add">
			</form>
			
			<div id="idResultAddPanier">
				
			</div>
		</div>
	</div>
	<!-- </div> -->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/produit.js"></script>

	</body>
</html>

