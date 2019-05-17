<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['SesT'])){
		echo "<h2> Valid request:  ".$_POST['updatepost']."</h2>";		
	}
	else{
	   echo "<h2> Invalid request(csrf token does not match) :  ".$_POST['updatepost']."</h2>";
	}
}
?>

<html>
<head></head>
<body style="background: url(back2.jpg); margin: 0; padding: 0; background-size: cover; background-position: center">


</body>
</html>