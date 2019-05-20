<?php 
$temps=3600
setcookie ('pseudo', $_SESSION['nomn'], time() + $temps ,null, null, false, true); ?>