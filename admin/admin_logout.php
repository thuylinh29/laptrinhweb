<?php
	session_start();
	session_destroy();
	//setcookie("id_user",'',-1);
	header("Location:../index.php");
?>