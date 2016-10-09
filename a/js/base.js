$( document ).ready(function() {

//Login
	$('.login_button').on("click touchstart", function(e){
		e.preventDefault();
			loginpassword = $('.password').val();

				if (loginpassword == ""){
					$('.nopassword').removeClass('hide');
					$('.wrongpassword').addClass('hide');
				}

				else{
					$.ajax({
						type: "POST",
						url: "a/php/login.php?action=login",
						data: { p_word: loginpassword},
						success: function(data){

							var time = data;

							if(data == 'day'){ 
								window.location="secure/main_page.php?time=day";
							}
							else if(data == 'night'){
								window.location="secure/main_page_ng.php?time=night";
							}
							else if(data == 'guestlist'){
								window.location="secure/guestlist.php?time=guestlist";
							}
							else {
								$('.wrongpassword').removeClass('hide');
								$('.nopassword').addClass('hide');
							}
						 }
					});


			};

	})

	//Clone RSVP
		$('.popup_form').on("click", ".add_new_guest", function(){
			$('.clone_this').clone(false).addClass('cloned_rsvp').insertAfter('.clone_this');
			$('.clone_this').append("<div class='rsvp_space'><br></div>");
			$('.cloned_rsvp').children('.guest_1_name').addClass('guest_2_name');
			$('.cloned_rsvp').children('.starter_choice').addClass('starter_choice2');
			$('.cloned_rsvp').children('.main_course_choice').addClass('main_course_choice2');
			$('.cloned_rsvp').children('.pudding_choice').addClass('pudding_choice2');
			$('.cloned_rsvp').children('.guest_1_diet_req').addClass('guest_2_diet_req');
			$('.cloned_rsvp').children('.bus_1_selection').addClass('bus_2_selection');
			$('.cloned_rsvp').children('.guest_1_name').removeClass('guest_1_name');
			$('.cloned_rsvp').children('.starter_choice').removeClass('starter_choice');
			$('.cloned_rsvp').children('.main_course_choice').removeClass('main_course_choice');
			$('.cloned_rsvp').children('.pudding_choice').removeClass('pudding_choice');
			$('.cloned_rsvp').children('.guest_1_diet_req').removeClass('guest_1_diet_req');
			$('.cloned_rsvp').children('.bus_1_selection').removeClass('bus_1_selection');
			$('.add_new_guest').text("Click Here To Remove Second Guest");
			$('.add_new_guest').addClass('remove_guest');
			$('.add_new_guest').removeClass('add_new_guest');
		})

		$('.popup_form').on("click", ".remove_guest", function(){
			$('.cloned_rsvp').remove();
			$('.rsvp_space').remove();
			$('.remove_guest').text("Click here to RSVP for another guest");
			$('.remove_guest').addClass('add_new_guest');
			$('.remove_guest').removeClass('remove_guest');
		})

	//Send RSVP
		$('.rsvp_submit').on("click touchstart", function(e){
				e.preventDefault();

				attend = $('input[name="attend"]:checked').val();
				bus1 = $('input[class=bus_1_selection]:checked').val();
				bus2 = $('input[class=bus_2_selection]:checked').val();

			if (attend === undefined) {

				$('.no_attend_selected').removeClass('hide');
			}

			else if ((attend =='can attend' || 'cant attend') && ($('.guest_1_name').val() == "") && ($('.guest_2_name').val() == "") && ($(".cloned_rsvp")[0])) {

				$('.no_guestname2').removeClass('hide');
				$('.no_guestname1').addClass('hide');
				$('.no_attend_selected').addClass('hide');			
			}

			else if ((attend =='can attend' || 'cant attend') && ($('.guest_1_name').val() == "") && ($('.guest_2_name').val() !="") && ($(".cloned_rsvp")[0]) ) {

				$('.no_guestname2').removeClass('hide');
				$('.no_guestname1').addClass('hide');
				$('.no_attend_selected').addClass('hide');			
			}

			else if ((attend =='can attend' || 'cant attend') && ($('.guest_1_name').val() == "")) {

				$('.no_guestname1').removeClass('hide');
				$('.no_guestname2').addClass('hide');
				$('.no_attend_selected').addClass('hide');			
			}

			else if ((attend =='can attend' || 'cant attend') && ($('.guest_2_name').val() == "") && ($(".cloned_rsvp")[0])){
				$('.no_guestname2').removeClass('hide');
				$('.no_guestname1').addClass('hide');
				$('.no_attend_selected').addClass('hide');
			}

			else if ((attend == 'cant attend') && ($(".cloned_rsvp")[0])) {

				if (window.location.href.indexOf('_ng') > -1 ) {

					guestname1 = $('.guest_1_name').val();
					guestname2 = $('.guest_2_name').val();
					attending = attend;

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=2_guests_cant_attend_night",
						data: { guest1name: guestname1, guest2name: guestname2, attending2: attending},
						success: function(data){

							$('.email_success').removeClass("hide");
							$('.popup_form').delay(1200).fadeOut("slow");
							$('.container').delay(1200).css("background-color", "#f9f9ef");
							$('.img_header').delay(1200).css("border-style", "solid");
						}
					});
				}

				else {

					guestname1 = $('.guest_1_name').val();
					guestname2 = $('.guest_2_name').val();
					attending = attend;

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=2_guests_cant_attend",
						data: { guest1name: guestname1, guest2name: guestname2, attending2: attending},
						success: function(data){

							$('.email_success').removeClass("hide");
							$('.popup_form').delay(1200).fadeOut("slow");
							$('.container').delay(1200).css("background-color", "#f9f9ef");
							$('.img_header').delay(1200).css("border-style", "solid");
						}
					});
				}
			}

			else if (attend == 'cant attend') {

				if (window.location.href.indexOf('_ng') > -1 ) {

					guestname1 = $('.guest_1_name').val();
					attending = attend;

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=1_guest_cant_attend_night",
						data: { guest1name: guestname1, attending1: attending},
						success: function(data){

							$('.email_success').removeClass("hide");
							$('.popup_form').delay(1200).fadeOut("slow");
							$('.container').delay(1200).css("background-color", "#f9f9ef");
							$('.img_header').delay(1200).css("border-style", "solid");
						}
					});
				}

				else {

					guestname1 = $('.guest_1_name').val();
					attending = attend;

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=1_guest_cant_attend",
						data: { guest1name: guestname1, attending1: attending},
						success: function(data){

							$('.email_success').removeClass("hide");
							$('.popup_form').delay(1200).fadeOut("slow");
							$('.container').delay(1200).css("background-color", "#f9f9ef");
							$('.img_header').delay(1200).css("border-style", "solid");
						}
					});
				}
			}

			else if ((attend == 'can attend') && ($(".cloned_rsvp")[0])) {

				if ((window.location.href.indexOf('_ng') > -1 ) && (bus1 === undefined || bus1 == 'Yes') && (bus2 === undefined || bus2 == 'Yes')) {

					guestname1 = $('.guest_1_name').val();
					guestname2 = $('.guest_2_name').val();

					if (bus2 === undefined) {
						bus2 = 'No';
					}

					if (bus1 === undefined) {
						bus1 = 'No';
					}

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=2_guests_bus",
						data: { guest1name: guestname1, guest2name: guestname2, bus1: bus1, bus2: bus2},
						success: function(data){

						$('.email_success').removeClass("hide");
						$('.popup_form').delay(1200).fadeOut("slow");
						$('.container').delay(1200).css("background-color", "#f9f9ef");
						$('.img_header').delay(1200).css("border-style", "solid");
						}
					});
				}

				else {

					guestname1 = $('.guest_1_name').val();
					gueststarter1 = $('.starter_choice').val();
					guestmain1 = $('.main_course_choice').val();
					guestpudding1 = $('.pudding_choice').val();
					guestdietreq1 = $('.guest_1_diet_req').val();
					attending = attend;

					guestname2 = $('.guest_2_name').val();
					gueststarter2 = $('.starter_choice2').val();
					guestmain2 = $('.main_course_choice2').val();
					guestpudding2 = $('.pudding_choice2').val();
					guestdietreq2 = $('.guest_2_diet_req').val();

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=2_guests",
						data: { guest1name: guestname1, guest1starter: gueststarter1, guest1main: guestmain1, guest1pudding: guestpudding1, guest1dietreq: guestdietreq1,
										guest2name: guestname2, guest2starter: gueststarter2, guest2main: guestmain2, guest2pudding: guestpudding2, guest2dietreq: guestdietreq2},
						success: function(data){

							$('.email_success').removeClass("hide");
							$('.popup_form').delay(1200).fadeOut("slow");
							$('.container').delay(1200).css("background-color", "#f9f9ef");
							$('.img_header').delay(1200).css("border-style", "solid");
						}

					});
				}
			}


			else {

				if ((window.location.href.indexOf('_ng') > -1 ) && (bus1 === undefined || bus1 == 'Yes')) {

						guestname1 = $('.guest_1_name').val();

						if (bus1 === undefined) {
							bus1 = 'No';
						}

						$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=1_guest_bus",
						data: { guest1name: guestname1, bus1: bus1},
						success: function(data){

						$('.email_success').removeClass("hide");
						$('.popup_form').delay(1200).fadeOut("slow");
						$('.container').delay(1200).css("background-color", "#f9f9ef");
						$('.img_header').delay(1200).css("border-style", "solid");
							}
						});
					}

				else {

					guestname1 = $('.guest_1_name').val();
					gueststarter1 = $('.starter_choice').val();
					guestmain1 = $('.main_course_choice').val();
					guestpudding1 = $('.pudding_choice').val();
					guestdietreq1 = $('.guest_1_diet_req').val();
					attending = attend;

					$.ajax({
						type: "POST",
						url: "../a/php/email.php?action=1_guest",
						data: { guest1name: guestname1, guest1starter: gueststarter1, guest1main: guestmain1, guest1pudding: guestpudding1, guest1dietreq: guestdietreq1},
						success: function(data){

						$('.email_success').removeClass("hide");
						$('.popup_form').delay(1200).fadeOut("slow");
						$('.container').delay(1200).css("background-color", "#f9f9ef");
						$('.img_header').delay(1200).css("border-style", "solid");
						}

					});
			};
		};
	});

	//JS Design

	$('.menu_button').on("click", function(){
		$('.nav_menu').slideToggle("slow","swing");
	})

	//RSVP Popup Design

	$('.rsvp_click').on("click", function(){
		$('.popup_form').fadeIn("slide");
		$('.container').css("background-color", "rgba(0,0,0,0.3)");
		$('.img_header').css("border-style", "hidden");
		$('.body').css("overflow-y", "hidden");
	})

	$('.popup_close').on("click", function(){
		$('.popup_form').fadeOut("slow");
		//$('.container').css("background-color", "#f9f9ef");
		$('.container').css("background-color", "#C9EBFF");
		$('.img_header').css("border-style", "solid");
		$('.body').css("overflow-y", "auto");
	})

	$(".can_attend input:radio").click(function() {
		$('.menu_choice').prop('disabled', false);
		$('.menu_choice').css('text-decoration', 'none');
		$('.diet_req').attr("disabled", false);
		$('.bus_1_selection').attr("disabled", false);
		$('.bus_2_selection').attr("disabled", false);
	})

	$(".cant_attend input:radio").click(function() {
		$('.menu_choice').prop('disabled', true);
		$('.menu_choice').css('text-decoration', 'line-through');
		$('.diet_req').attr("disabled", true);
		$('.bus_1_selection').attr("disabled", true);
		$('.bus_2_selection').attr("disabled", true);
	})

	//map border

	$('.google_map_location').css('border-style', 'solid').css('border-width', '2px').css('border-color', '#FFFFFF');

	//Click/Scroll Function

	function goToByScroll(id){
		id = id.replace("link", "");

		$('html,body').animate({
		scrollTop: $("#"+id).offset().top},
		'slow');
		}

	$(".nav_menu_div > ul > li > a").click(function(e) { 
	// Prevent a page reload when a link is pressed
	e.preventDefault(); 
	// Call the scroll function
	goToByScroll($(this).attr("id"));           
	});

	$(".rsvp_ow_link").click(function(e) { 
	// Prevent a page reload when a link is pressed
	e.preventDefault(); 
	// Call the scroll function
	goToByScroll($(this).attr("id"));           
	});

});