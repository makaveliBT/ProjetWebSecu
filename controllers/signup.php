<?php
	class signup extends Controller {
	function index(){	
	if (!empty($_POST)){
		$cons = mysqli_connect("localhost","root","","loginsystem");
		$first= mysqli_real_escape_string($cons,$_POST['first']);
		$last= mysqli_real_escape_string($cons,$_POST['last']);
		$email= mysqli_real_escape_string($cons,$_POST['email']);
		$uid= mysqli_real_escape_string($cons,$_POST['uid']);
		$pwd= mysqli_real_escape_string($cons,$_POST['pwd']);
	$sql="INSERT INTO users (user_first, user_last, user_email,user_uid,user_pwd)
	VALUES ('$first', '$last', '$email','$uid','$pwd')";

	if (!mysqli_query($cons,$sql)) {
  	die('Error: ' . mysqli_error($cons));
	}
	echo "1 record added";

	mysqli_close($cons);
	

	}
}}
?>