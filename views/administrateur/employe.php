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
        <h1> Employes </h1> 
   <tr>
      <th><h1>idEmploye</h1></th>
      <th><h1>nom</h1></th>
      <th><h1>eMail</h1></th>
  
     
   </tr>
   <tr>
        <td>
      <?php
   foreach($employes as $v => $t): ?> 
   <h2><?php echo $t['idEmploye'];  ?></h2>
   <?php endforeach; ?></td>
      
      <td>
      <?php
   foreach($employes as $v => $t): ?> 
   <h2><?php echo $t['nom'];  ?></h2>
   <?php endforeach; ?></td>
      <td>  
          
      <?php
   foreach($employes as $v => $t): ?> 
   <h2><?php echo $t['eMail'];  ?></h2>
   <?php endforeach; ?></td>
      
       <td>
          <?php
   foreach($employes as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/index"  method="POST">
    
    <button class="btn btn-danger" id="subb" name="employes" value="<?php echo $v["idEmploye"]; ?>">suprrimer</button> 
    
  </form>
  <?php }  ?> </td>
   
   </tr>
 
</table>
     <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/ajouterunemploye"  method="POST">
    
    <button class="btn btn-danger" id="subb" name="modifier"   type="submit" >ajouter</button> 
    
  </form> 
      </div>         
         
   </div>
         

   </body>
</html>