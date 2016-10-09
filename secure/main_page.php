<?php 
		include ('../a/php/check_secure.php');
?>

<!DOCtype HTML>
 
<html>

	<head>

	<script src="../a/js/jquery-1.10.2.js"></script>
	<script async src="../a/js/jquery-ui.min.js"></script>
	<script async src="../a/js/base.js"></script>

	<link rel="stylesheet" type="text/css" href="../a/css/main.css">
	<link rel="stylesheet" type="text/css" href="../a/css/jquery-ui.min.css">
	<link rel="stylesheet" href="../a/font-awesome/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	</head>

	<body class="body">
		<div class="container">
			<div class="container_bg">
				<div class="center">
					<div class="header_container">
						<div class="header dark-blue text_center">Alex and Sophie
						</div>

							<div class="menu_button">
							</div>

							<div class="nav_menu_div center_gfsa text_center">
							<ul class="nav_menu text_center">
								<li class="nav_choice"><a id="owlink" href="#">Our Wedding<br>
								<i class="fa fa-heart" aria-hidden="true"></i></a></li>
								<li class="padding_top nav_choice"><a id="ptslink" href="#">Places to Stay<br>
								<i class="fa fa-heart" aria-hidden="true"></i></a></li>
								<li class="padding_top nav_choice"><a id="meallink" href="#">Meal<br>
								<i class="fa fa-heart" aria-hidden="true"></i></a></li>
								<li class="padding_top nav_choice"><a id="locationlink" href="#">Travel and Transportation<br>
								<i class="fa fa-heart" aria-hidden="true"></i></a></li>
								<li class="padding_top nav_choice"><a id="giftlistlink" href="#">Giftlist<br>
								<i class="fa fa-heart" aria-hidden="true"></i></a></li>
								<li class="padding_top nav_choice rsvp_click"><!-- <a id="RSVPlink" href="#"> -->RSVP<!-- </a> --><br>
								<i class="fa fa-heart" aria-hidden="true"></i></li>
							</ul>
							</div>
						</div>

						<div>
						 <img class="img_header" src="../a/images/header.jpg">
						</div>

					<div class="sub_head ow text_center" id="ow">Our Wedding</div>
						<div class="text_center main_info"><div id="wed_date">Saturday August 29th<br>2015<br></div>
							2pm<br>
							<br>
							Ceremony<br>
							Springkell<br>
							<br>
							<div class="rsvp_click page_rsvp ow_rsvp">RSVP</div><br>
							<br>
							Reception to follow
						</div>

					<hr class="page_splitter center"></hr>
					<div class="sub_head text_center" id="pts">Places To Stay</div>
						<div class="text_center main_info"><a class="pts_link" href="http://www.somertonhotel.co.uk/" target="_blank">The Somerton House Hotel, Lockerbie</a>
							<a class="pts_link" href="http://www.queenshotellockerbie.co.uk/" target="_blank">The Queens Hotel, Lockerbie</a>
							<a class="pts_link" href="http://www.williamwoodfarm.com/" target="_blank">Williamwood Cottages</a>
							<a class="pts_link" href="http://www.cressfieldhotel.co.uk/" target="_blank">Cressfield Country House Hotel, Ecclefechan</a>
							<a class="pts_link" href="http://www.ecclefechanhotel.co.uk/" target="_blank">Ecclefechan Hotel, Ecclefechan</a>
						</div>

					<hr class="page_splitter center"></hr>
					<div class=" sub_head meal sub_head2 text_center" id="meal">Meal</div>
						<div class="menu center_gfdg text_center main_info">
							<div class="menu_header">Starter</div>
							Smoked Borders Salmon<br>
							with Capers & Lemon Dressing<br>
							<br>
							Homemade Soup served with Bread Rolls<br>
							<br>
							<div class="menu_header">Main</div>
							Roasted Sirloin of Beef<br>
							with Yorkshire Pudding, Pan Gravy, Roast Potatoes & Seasonal Veg<br>
							<br>
							Ballotine of Chicken, Haggis Stuffed<br>
							with Whisky Sauce, Creamed Potatoes & Seasonal Veg<br>
							<br>
							<div class="menu_header">Pudding</div>
							Sticky Toffee Pudding<br>
							with Vanilla Pod Ice Cream &  Toffee Sauce<br>
							<br>
							Orchard Apple & Pear Crumble<br>
							with Vanilla Custard
						</div>

					<hr class="page_splitter center"></hr>
					<div class="sub_head location text_center" id="location">Travel and Transportation</div>
						<div class="travel_info text_center">Springkell<br>Eaglesfield<br>Lockerbie<br>Dumfriesshire<br>Scotland<br>DG11 3AL</div>
							<iframe class="google_map_location main_info" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4569.300345680264!2d-3.1668309698364183!3d55.06686373706484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5cd142581c4c154e!2sSpringkell!5e0!3m2!1sen!2suk!4v1430672432152&z=9" frameborder="0" style="border:0"></iframe>

						<hr class="page_splitter center"></hr>
					<div class="sub_head location text_center" id="giftlist">Giftlist</div>
						<div class="center text_center wishlist_info main_info">Should you wish to use our giftlist<br>
							we have registered our preferences with Barbours.<br><br>
							24-36 Buccleuch Street, Dumfries, DG1 2AL<br>
							Tel: (01387) 254343<br><br>
							You can view the giftlist at <a class="barbours" href="http://www.barbours.co.uk/weddinglists/?cid=11&wid=141" target="_blank">www.barbours.co.uk</a>
						</div>
						<hr class="page_splitter center"></hr>
					</div>
			</div>
		</div>

		<div class="popup_position">
			<form class="popup_form hide">
				<div class="popup_close"></div>
				<div class="sub_head rsvp_header text_center">RSVP</div><br>
				<div class="popup_form_info">
					<div class="can_attend"><input id="can_attend_radio" type="radio" name="attend" value="can attend"><label for="can_attend_radio">Can Attend</label></div>
					<div class="cant_attend"><input id="cant_attend_radio" type="radio" name="attend" value="cant attend"><label for="cant_attend_radio">Can't Attend</label></div>
					<div class="no_attend_selected error hide">Please Check If You Can Attend Or Not</div>
					<div class="clone_this">
						<label for="guest_1_name">Guest Full Name: </label>
							<input class="guest_1_name popup_input" id="guest_name" type="text">
							<div class="no_guestname1 error hide">Please Insert Guest Name</div>
							<div class="no_guestname2 error hide">Please Insert Both Guest Names</div>
						<label for="starter_choice">Starter: </label>
							<select class="menu_choice starter_choice popup_input" id="starter_choice">
								<option class="starter1">Smoked Border Salmon</option>
								<option class="starter2">Homemade Soup</option>
							</select>
						<label for="main_course_choice" id="main_choice">Main Course: </label>	
							<select class="menu_choice main_course_choice popup_input">
								<option class="maincourse1">Roasted Sirloin of Beef</option>
								<option class="maincourse2">Ballotine of Chicken</option>
							</select>
						<label for="pudding_choice">Pudding: </label>
							<select class="menu_choice pudding_choice popup_input" id="pudding_choice">
								<option class="puddingchoice1">Sticky Toffee Pudding</option>
								<option class="puddingchoice2">Orchard Apple & Pear Crumble</option>
							</select>
						<label for="guest_1_diet_req">Dietary Requirements: </label>
							<input class="guest_1_diet_req diet_req popup_input" type="text">
					</div><br>
				</div>
				<div class="add_new_guest toggle_guest">Click here to RSVP for another guest</div>
				<input class="rsvp_submit" type="submit" value="Send RSVP">
				<div class="email_success hide">Your RSVP was sent successfully!</div>
			</form>
		</div>

		<footer>
			<div class="center footer_info text_center">Queries? Contact us - mobile: 07805660605 email: sophieandalex2015@gmail.com || Website designed by Graeme Brunton || Flower graphic by <a href="http://www.freepik.com/">Freepik</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a></div>
		</footer>
	</body>

</html>