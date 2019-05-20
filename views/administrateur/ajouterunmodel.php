
<!DOCTYPE html>
<html>
<head>
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
label
{

    display: inline-block;

    width: 150px;

    float: left;

}


   

</style>


   </head>
   <body>
    
      <div class="adminPage">
         <div class="admininfo">
		
		<form id= "myForm" action="http://localhost/ProjetWebSecu/administrateur"  method="POST">
		<label for="MODELNAME">MODELNAME :</label><input  id="MODELNAME" type="text" name="nomModel" ><br />
		<label for="SEXE">SEXE :</label><input id="SEXE" type="text" name="sexe" ><br />
		<label for="PRIX">PRIX :</label><input id="PRIX"  type="text" name="prix" ><br />
		<label for="MARQUENAME">MARQUENAME :</label><input id="MARQUENAME" type="text" name="nomMarque"><br />
		<label for="NOMTYPE">NOMTYPE :</label><input id="NOMTYPE" type="text" name="nomType" ><br />
		<label for="AGE">AGE :</label><input id="AGE" type="text" name="age" ><br />
		<label for="DESCRIPTION">DESCRIPTION :</label><input id="DESCRIPTION" type="text" name="description" ><br />
	 <label for="IMAGE">IMAGE :</label><input id="IMAGE" type="text" name="image" >
		<button  id="sub" type="submit" name="submit">signup</button> 
		</form>
			
		
</div>
</div>
</body>
</html>