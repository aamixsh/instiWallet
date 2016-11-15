$(document).ready(function(){
	$('#pay_form').submit(function(event){
		event.preventDefault();
		var form = $(this);
		var data = form.serialize();

		$.ajax({
			url: 'payment.php',
			data: data
		});
	});
});