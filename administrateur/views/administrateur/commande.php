<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FBMO Vos chaussures</title>
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
  
  
  <!-- Theme style  -->
    <link rel="stylesheet" href="css/style_Panier.css" />

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->


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
      <table border="1">
        <h1> Commandes </h1> 
   <tr>
      <th><h1>idCommande</h1></th>
      <th><h1>addlivr</h1></th>
      <th><h1>idVille</h1></th>
      <th><h1>idClient</h1></th>
      <th><h1>envoye</h1></th>
     
   </tr>
   <tr>
        <td>
      <?php
   foreach($commandes as $v => $t): ?> 
   <h2><?php echo $t['idCommande'];  ?></h2>
   <?php endforeach; ?></td>
      
      <td>
      <?php
   foreach($commandes as $v => $t): ?> 
   <h2><?php echo $t['addlivr'];  ?></h2>
   <?php endforeach; ?></td>
      <td>  
          
      <?php
   foreach($commandes as $v => $t): ?> 
   <h2><?php echo $t['idVille'];  ?></h2>
   <?php endforeach; ?></td>
      <td> 
      
      <?php
   foreach($commandes as $v => $t): ?> 
   <h2><?php echo $t['idClient'];  ?></h2>
   <?php endforeach; ?></td>
     <td>
      <?php
   foreach($commandes as $v => $t): ?> 
   <h2><?php echo $t['envoye'];  ?></h2>
   <?php endforeach; ?></td>
    
      
   </tr>
 
</table>
      
      </div>         
         
   </div>
         
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

   </body>
</html>







