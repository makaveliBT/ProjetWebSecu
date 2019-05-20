<?php
class Deco extends Controller {
	function index(){

		$this->render('index');
	}
}
?>
<?php
// Initialisation de la session.
// Si vous utilisez un autre nom
// sessio
session_unset(); 

// destroy the session 
session_destroy(); 
echo "<script type='text/javascript'>document.location.replace('http://localhost/ProjetWebSecu/home');</script>";
?>
