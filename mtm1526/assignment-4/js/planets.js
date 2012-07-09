$(document).ready(function(){

	$.get('includes/earth.html', function(data){
		$('div').prepend(data);
	});
	$('#earth').on('click', function(){
		$('#fillme').load('includes/earth.html');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	$('#mars').on('click', function(){
		$('#fillme').load('includes/mars.html');
		$('nav li').removeClass('current');
		$('#mars').addClass('current');
	});
	$('#jupiter').on('click', function(){
		$('#fillme').load('includes/jupiter.html');
		$('nav li').removeClass('current');
		$('#jupiter').addClass('current');
	});
	$('#venus').on('click', function(){
		$('#fillme').load('includes/neptune.html');
		$('nav li').removeClass('current');
		$('#venus').addClass('current');
	});

});