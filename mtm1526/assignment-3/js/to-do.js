
$(document).ready(function () {
	
	var myBall = $('.ball');
	var ballHide = $('.hide');
	
	

	$('form').on('submit', function (ev) {

		
		var ballColor = $('#color').val();
		var ballProp = $('#property').val();
		var spanText = $('Text').val();
		

		ev.preventDefault();
		myBall.css(ballProp , ballColor );
		
		
		console.log(spanText);
		});
	
		ballHide.on('click', function() {
		myBall.toggleClass('hidden');

	});

});



