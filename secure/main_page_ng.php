<?php

	include ('../a/php/check_secure.php');
?>

<!DOCtype HTML>
 
<html>

	<head>

	<script src="../a/js/jquery-1.10.2.js"></script>
	<script src="../a/js/jquery-ui.js"></script>
	<script src="../a/js/jquery-ui.min.js"></script>
	<script src="../a/js/base.js"></script>

	<link rel="stylesheet" type="text/css" href="../a/css/main.css">
	<link rel="stylesheet" type="text/css" href="../a/css/jquery-ui.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	</head>

	<body class="body">
		<div class="container">
			<div class="container_bg">
				<div class="center">
					<div class="header_container">
						<div class="header text_center">Alex and Sophie
						</div>

							<div class="menu_button">
							</div>

							<div class="nav_menu_div text_center">
							<ul class="nav_menu text_center">
								<li class="padding_bottom nav_choice"><a id="owlink" href="#">Our Wedding</a></li>
								<li class="padding_top padding_bottom nav_choice"><a id="ptslink" href="#">Places to Stay</a></li>
								<li class="padding_top padding_bottom nav_choice"><a id="locationlink" href="#">Travel and Transportation</a></li>
								<li class="padding_top padding_bottom nav_choice"><a id="giftlistlink" href="#">Giftlist</a></li>
								<li class="padding_top padding_bottom nav_choice rsvp_click"><!-- <a id="RSVPlink" href="#"> -->RSVP<!-- </a> --></li>
							</ul>
							</div>
						</div>

						<div>
						 <img class="img_header" src="../a/images/header.jpg">
						</div>

					<div class="sub_head ow text_center" id="ow">Our Wedding</div><br>
						<div class="text_center">Saturday August 29th 2015<br>
							8pm<br>
							<br>
							Reception<br>
							Springkell<br>
							<br>
							<div class="rsvp_click ow_rsvp page_rsvp">RSVP</div><br>
							<br>
						</div><br>

					<hr class="page_splitter center"></hr>
					<div class="sub_head text_center" id="pts">Places To Stay</div><br>
						<div class="text_center"><a class="pts_link" href="http://www.somertonhotel.co.uk/" target="_blank">The Somerton House Hotel, Lockerbie</a><br><br>
							<a class="pts_link" href="http://www.queenshotellockerbie.co.uk/" target="_blank">The Queens Hotel, Lockerbie</a><br><br>
							<a class="pts_link" href="http://www.williamwoodfarm.com/" target="_blank">Williamwood Cottages</a><br><br>
							<a class="pts_link" href="http://www.cressfieldhotel.co.uk/" target="_blank">Cressfield Country House Hotel, Ecclefechan</a><br><br>
							<a class="pts_link" href="http://www.ecclefechanhotel.co.uk/" target="_blank">Ecclefechan Hotel, Ecclefechan</a><br><br>
						</div><br>

					<hr class="page_splitter center"></hr>
					<div class="sub_head location text_center" id="location">Travel and Transportation</div><br>
						<div class="travel_info text_center">Springkell, Eaglesfield, Lockerbie, Dumfriesshire, Scotland, DG11 3AL</div><br>
							<iframe class="google_map_location" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4569.300345680264!2d-3.1668309698364183!3d55.06686373706484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5cd142581c4c154e!2sSpringkell!5e0!3m2!1sen!2suk!4v1430672432152" frameborder="0" style="border:0"></iframe><br><br>
							<div class="bus_info text_center">There will be a Houstons executive coach pickup from The Waterfront Cafe on the Whitesands at 7pm.<br><br>
							Please tick the box in the RSVP if you would like to be on the coach.<br><br>
							There are 50 seats available and will be a first come first serve basis.<br><br>
							The coach will be returning to Dumfries at 1am<br></div>

						<hr class="page_splitter center"></hr>
					<div class="sub_head location text_center" id="giftlist">Giftlist</div><br>
					<div class="center text_center wishlist_info">Should you wish to use our giftlist<br>
							we have registered our preferences with Barbours.<br><br>
							24-36 Buccleuch Street, Dumfries, DG1 2AL<br>
							Tel: (01387) 254343<br><br>
							You can view the giftlist at <a class="barbours" href="http://www.barbours.co.uk/weddinglists/?cid=11&wid=141" target="_blank">www.barbours.co.uk</a><br><br><br><br><br><br><br><br>
						</div>
				</div>
			</div>
		</div>

		<div class="popup_position centered">
			<form class="popup_form hide">
				<div class="popup_close"></div>
				<div class="sub_head rsvp_header text_center">RSVP</div><br>
					<div class="popup_form_info">
					<div class="can_attend" id="can_attend"><input type="radio" name="attend" value="can attend">Can Attend</div>
					<div class="cant_attend" id="cant_attend"><input type="radio" name="attend" value="cant attend">Can't Attend</div>
					<div class="no_attend_selected error hide">Please Check If You Can Attend Or Not</div>
					<div class="clone_this">
						<label for="guest_1_name">Guest Full Name: </label>
							<input class="guest_1_name popup_input" id="guest_name" type="text">
							<div class="no_guestname1 error hide">Please Insert Guest Name</div>
							<div class="no_guestname2 error hide">Please Insert Both Guest Names</div>
							<input class="bus_1_selection" name="bus_selection" type="checkbox" value="Yes">I would like bus pickup<br>
					</div>
				</div>
				<div class="add_new_guest">Click here to RSVP for another guest</div>
				<input class="rsvp_submit" type="submit" value="Send RSVP">
				<div class="email_success hide">Your RSVP was sent successfully!</div>
			</form>
		</div>

		<footer>
			<div class="center footer_info text_center">Queries? Contact us - mobile: 07805660605 email: sophieandalex2015@gmail.com</div>
		</footer>
	</body>

</html>