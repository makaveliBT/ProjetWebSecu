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
               

	
		<form id="myForm" action="../administrateur/index"  method="POST">
	
		Nom d'employe: <input type="text" name="enom" >
    eMail: <input type="text" name="eemail" >
    mdp: <input type="password" name="emdp" >
		
		<button  id="sub" type="submit" value ="<?php echo $_POST['modifier']; ?>"  name="idcommande">signup</button> 
		
		</form>

	
		<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
		<script src="jss/administrateur.js"></script>
		

	</div>
	</div>
	</body>
		
</html>