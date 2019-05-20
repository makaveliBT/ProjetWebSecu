<?php

echo $_POST['id'];
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
 $cons = mysqli_connect("localhost","root","","vente");
  $sql = "DELETE FROM client WHERE idClient = '".$id."'";
	if (!mysqli_query($cons,$sql)) {
		die('Error: ' . mysqli_error($cons));
		}
		echo "1 ed";

		mysqli_close($cons);
	

		}

	}
 }
}
?>