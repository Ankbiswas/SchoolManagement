<?php

   session_start();
	unset($_SESSION["logIn"]);
	unset($_SESSION["emailId"]);  
	header("Location: index.html");
?>