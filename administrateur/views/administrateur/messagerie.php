<!DOCTYPE HTML>
<html>
   <head>
     <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="js/administrateur.js"></script>
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
        <h1> boite de reception </h1>
   <tr>
      <th><h1>De </h1></th>
      <th><h1>Message</h1></th>
      <th><h1>Date</h1></th>
      
   </tr>
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
   foreach($messages as $v ): ?> 
   <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">Supprimer</button><br/>
   <?php endforeach; ?></td>
     
   </tr>
 
</table>
              <a href="<?php echo WEBROOT ?>views/administrateur/message.php">nouveau message </a> 
    </form>
     

     <table border="1">
        <h1> Message envoye </h1>
   <tr>
      <th><h1>A </h1></th>
      <th><h1>Message</h1></th>
      <th><h1>Date</h1></th>
   </tr>
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
   
 </tr>
</table>
      </div>         
         
   </div>
         
  

   </body>
 <script>
            $(document).ready(function () {

                $('#btn_delete').click(function () {
                    alert(1);
                    if (confirm("Êtes-vous sûr de supprimer cette/ces nounou(s)?"))
                    {
                        var id = [];

                        $(':checkbox:checked').each(function (i) {
                            id[i] = $(this).val();
                        });

                        if (id.length === 0) 
                        {
                            alert("Veuillez choisir au moins une nounou");
                        } else
                        {
                            $.ajax({
                                url: 'admin-delete.php',
                                method: 'POST',
                                data: {id: id},
                                success: function ()
                                {
                                    for (var i = 0; i < id.length; i++)
                                    {
                                        $('tr#' + id[i] + '').css('background-color', '#ccc');
                                        $('tr#' + id[i] + '').fadeOut('slow');
                                    }
                                }

                            });
                        }

                    } else
                    {
                        return false;
                    }
                });

            });
        </script>
</html>
     <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="js/administrateur.js"></script>





