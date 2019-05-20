<!DOCTYPE HTML>
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
      <table border="1">
   <tr>
      <th><h1>idClient</h1></th>
      <th><h1>Nom</h1></th>
      <th><h1>Prénom</h1></th>
      <th><h1>ville</h1></th>
      <th><h1>adresse</h1></th>
      <th><h1>Telephone</h1></th>
      <th><h1>email</h1></th>
   </tr>
   <?php if(!empty($produit)) {
      ?>
        
   <tr>
    <td>
    <?php

   foreach($produit as $v => $t): ?> 
   <h2><?php echo $t['idClient'];  ?></h2>
   <?php endforeach; ?></td>
      
      <td>
      <?php
   foreach($produit as $v => $t): ?> 
   <h2><?php echo $t['nom'];  ?></h2>
   <?php endforeach; ?></td>
      <td>  
          
      <?php
   foreach($produit as $v => $t): ?> 
   <h2><?php echo $t['prenom'];  ?></h2>
   <?php endforeach; ?></td>
      <td> 
      
      <?php
   foreach($produit as $v => $t): ?> 
   <h2><?php echo $t['idVille'];  ?></h2>
   <?php endforeach; ?></td>
     <td>
      <?php
   foreach($produit as $v => $t): ?> 
   <h2><?php echo $t['addresse'];  ?></h2>
   <?php endforeach; ?></td>
       <td>
      <?php
   foreach($produit as $v => $t): ?> 
    <h2><?php echo $t['numTel'];  ?></h2>
   <?php endforeach; ?></td>
     
      <td> 

       <?php
   foreach($produit as $v => $t): ?> 
   <h2><?php echo $t['eMail'];  ?></h2>
   <?php endforeach; ?></td>
       <td>
      <?php
   foreach($produit as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/index"  method="POST">
    
    <button class="btn btn-danger" id="sub" name="clientes"  value="<?php echo $v["idClient"]; ?>" type="submit" name="submit">suprrimer</button> 
    
  </form>
  <?php }  ?> 
   </td>
      </tr>
    
 <?php } ?>
</table>
      
      </div>         
         
   </div>
         

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="jss/administrateur.js"></script>

   </body>
       
</html>






