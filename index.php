<!DOCtype HTML>

<html>

<head>

<title>Alex and Sophie Wedding</title>

<script src="a/js/jquery-1.10.2.js"></script>
<script src="a/js/jquery-ui.js"></script>
<script src="a/js/jquery-ui.min.js"></script>
<script src="a/js/base.js"></script>

<link rel="stylesheet" type="text/css" href="a/css/main.css">
<link rel="stylesheet" type="text/css" href="a/css/jquery-ui.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="description" content="Website for the wedding of Alex Morton and Sophie Hall">
<meta name="keywords" content="alex, sophie, morton, hall, wedding, RSVP, alexsophie, alexsophiewedding">
<meta charset="UTF-8">

<?php

	if ( isset($_SESSION['mypassword']) ) {

	session_unset();

	session_destroy();

	}

?>

</head>

	<body class="index_body">
		<div class="container">
			<div class="container_bg">

				<div class="header_container">
					<div class="header center text_center">Alex and Sophie
					</div>
				</div>
				
				<form class="centered login_form" id="form" name="form">
		    	<input name="p_word" class="password" type="text" autocomplete="off" autofocus>
		    	<input class="login_button" id="send" type="submit" value=">">
		    	<p class="error nopassword hide">Please Enter A Password</p>
		    	<p class="error wrongpassword hide">Incorrect Password</p>
				</form>

			</div>
		</div>
	</body>

</html>