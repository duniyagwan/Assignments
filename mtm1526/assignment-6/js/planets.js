$(document).ready(function(){
	$.get('planets', function(data){
		
});
	
$('#gethtml').on('click', function(){
	$('#fillme').load('load-me.html');
});
	
$('#sendme').on('change', function(){
	$.post('save.php', {
		sendme : $('#sendme').val()
		});
	});
});