<!DOCtype HTML>

<html>

<head>

<title>Alex and Sophie Wedding</title>

<script src="a/js/jquery-1.10.2.js"></script>
<script async src="a/js/jquery-ui.min.js"></script>
<script async src="a/js/base.js"></script>

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
					<div class="header home_page_header center dark-blue text_center">Alex and Sophie
					</div>
				</div>
				<div class='login-pic-text'>
					<div class='pass_border roses-index'>
						<form class="login_form" id="form" name="form">
							<div>
				    		<input name="p_word" class="password" type="text" autocomplete="off" autofocus>
				    		<input class="login_button" id="send" type="submit" value=">">
				    	</div>
				    	<p class="error nopassword fp-error hide">Please Enter A Password</p>
				    	<p class="error wrongpassword fp-error hide">Incorrect Password</p>
						</form>
					</div>
				</div>

			</div>
		</div>
	</body>

</html>