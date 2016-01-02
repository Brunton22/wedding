<?php

	session_start();

	if (!(isset($_SESSION['mypassword']) && $_SESSION['mypassword'] != '')) {

		header("location:../index.php");

	}


?>