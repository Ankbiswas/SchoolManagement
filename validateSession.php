<?php 
     $currUser='';
     session_start();
     if (isset($_SESSION["logIn"])) {
		$currUser = $_SESSION["logIn"];
		echo $currUser;
	}
?>