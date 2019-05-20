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
    
       <td>
          <?php
   foreach($commandes as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/index"  method="POST">
    
    <button class="btn btn-danger" id="subb" name="commandes"  value="<?php echo $v["idCommande"]; ?>" type="submit" name="submit">suprrimer</button> 
    
  </form>
  <?php }  ?> </td>
   <td>
          <?php
   foreach($commandes as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/gerercommande"  method="POST">
    
    <button class="btn btn-danger" id="subb" name="modifier"  value="<?php echo $v["idCommande"]; ?>" type="submit" >modifier</button> 
    
  </form>
  <?php }  ?> </td>
   </tr>
 
</table>
      
      </div>         
         
   </div>
         

   </body>
</html>







