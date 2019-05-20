<!DOCTYPE HTML>
<html>
   <head>
      <style>
   div.adminPage{
      min-height:  2000px;
      position: relative;
      right: 180px;
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
        <h1> Models </h1> 
   <tr>
      <th><h1>idModel</h1></th>
      <th><h1>nomModel</h1></th>
      <th><h1>idMarque</h1></th>
      <th><h1>idType</h1></th>
      <th><h1>sexe</h1></th>
       <th><h1>age</h1></th>
     <th><h1>prix</h1></th>
     <th><h1>description</h1></th>
     <th><h1>image</h1></th>
   </tr>
   <tr>
        <td>
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['idModel'];  ?></h2>
   <?php endforeach; ?></td>
      
      <td>
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['nomModel'];  ?></h2>
   <?php endforeach; ?></td>
      <td>  
          
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['idMarque'];  ?></h2>
   <?php endforeach; ?></td>
   <td> 
      
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['idType'];  ?></h2>
   <?php endforeach; ?></td>
      <td> 
      
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['sexe'];  ?></h2>
   <?php endforeach; ?></td>
     <td>
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['age'];  ?></h2>
   <?php endforeach; ?></td>
    <td>
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['prix'];  ?></h2>
   <?php endforeach; ?></td>
      <td>
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['description'];  ?></h2>
   <?php endforeach; ?></td>
     <td>
      <?php
   foreach($models as $v => $t): ?> 
   <h2><?php echo $t['image'];  ?></h2>
   <?php endforeach; ?></td>
    <td>
          <?php
   foreach($models as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/index"  method="POST">
    
    <button class="btn btn-danger" id="subb" name="models"  value="<?php echo $v["idModel"]; ?>" type="submit" name="submit">suprrimer</button> 
    
  </form>
  <?php }  ?> </td>
 
   </tr>
 
</table>
      
      </div>         
         
   </div>
         


   </body>
</html>







