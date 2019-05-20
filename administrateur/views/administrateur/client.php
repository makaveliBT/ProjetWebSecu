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
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="js/administrateur.js"></script>
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
   foreach($produit as $v ): ?> 
   <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">Supprimer</button><br/>
   <?php endforeach; ?></td>
      </tr>
 
</table>
      
      </div>         
         
   </div>
         


   </body>
   <script>
            $(document).ready(function () {

                $('#btn_delete').click(function () {
                    alert(1);
                    
            }); });
        </script>
</html>


<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="js/administrateur.js"></script>




