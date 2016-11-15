$(document).ready(function(){
	$('#form_quickpay').submit(function(event){
		event.preventDefault();
		var form = $(this);
		var data = form.serialize();
		$.ajax({
			url: 'templates/quickpay.php',
			data: data
		});
	});
});