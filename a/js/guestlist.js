$( document ).ready(function() {

	$.ajax({
	type: "GET",
	url: "../a/php/guestlistphp.php",
	success: function(data){

		$('.guestlist').html(data);

		}

	});

});