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
        <h1> Marque </h1> 
   <tr>
      <th><h1>idMarque</h1></th>
      <th><h1>nom</h1></th>
     
   </tr>
   <tr>
        <td>
      <?php
   foreach($marques as $v => $t): ?> 
   <h2><?php echo $t['idMarque'];  ?></h2>
   <?php endforeach; ?></td>
      
      <td>
      <?php
   foreach($marques as $v => $t): ?> 
   <h2><?php echo $t['nom'];  ?></h2>
   <?php endforeach; ?></td>
      <
   </tr>
 
</table>
      
      </div>         
         
   </div>
         


   </body>
</html>







