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
        <h1> boite de reception </h1>
   <tr>
      <th><h1>De </h1></th>
      <th><h1>Message</h1></th>
      <th><h1>Date</h1></th>
      
   </tr>
   <?php if(!empty($messages)){
    ?>
   <tr>

          <td>
      <?php
   foreach($messages as $v ): ?> 
   <h2><?php echo $v['emmeteur'];  ?></h2>
   <?php endforeach; ?></td>
      
      
          <td>
      <?php
   foreach($messages as $v ): ?> 
   <h2><?php echo $v['message'];  ?></h2>
   <?php endforeach; ?></td>

          <td>
      <?php
   foreach($messages as $v ): ?> 
   <h2><?php echo $v['DD'];  ?></h2>
   <?php endforeach; ?></td>
           <td>
          <?php
   foreach($messages as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/index"  method="POST">
    
    <button class="btn btn-danger" id="subb" name="messages"  value="<?php echo $v["id"]; ?>" type="submit" name="submit">suprrimer</button> 
    
  </form>
  <?php }  ?> </td>
     
   </tr>
 <?php } ?>
</table>
              <a href="<?php echo WEBROOT ?>administrateur/message">nouveau message </a> 
    </form>
     

     <table border="1">
        <h1> Message envoye </h1>
   <tr>
      <th><h1>A </h1></th>
      <th><h1>Message</h1></th>
      <th><h1>Date</h1></th>
   </tr>
   <?php if(!empty($messagesenvoyer)){
    ?>
   <tr>

          <td>
      <?php
   foreach($messagesenvoyer as $v ): ?> 
   <h2><?php echo $v['recepteur'];  ?></h2>
   <?php endforeach; ?></td>
      
      
          <td>
      <?php
   foreach($messagesenvoyer  as $v ): ?> 
   <h2><?php echo $v['message'];  ?></h2>
   <?php endforeach; ?></td>

      
     
           <td>
      <?php
   foreach($messagesenvoyer  as $v ): ?> 
   <h2><?php echo $v['DD'];  ?></h2>
   <?php endforeach; ?></td>
    <td>
          <?php
   foreach($messagesenvoyer as $v ) {

    ?>
  <form id="myForm" action="http://localhost/ProjetWebSecu/administrateur/index"  method="POST">
    
    <button class="btn btn-danger" id="sub" name="messages"  value="<?php echo $v["id"]; ?>" type="submit" name="submit">suprrimer</button> 
    
  </form>
  <?php }  ?> </td>
 </tr>
<?php } ?>
</table>


      </div>         
         
   </div>
         
  

   </body>
 
            
</html>
     <





