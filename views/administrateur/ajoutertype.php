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
		TYPENAME:	<input type="text" name="nomtype" >
		<button id="sub"  type="submit" name="submit">signup</button> 
		</form>
		<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
		<script src="js/administrateur.js"></script>
	</div>
	</div>
	</body>	
</html>