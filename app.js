$(function() {
	var form = $('#ajax-contact');
	var formMessages = $('#form-messages');
	var submit_success = $('#submit-success');

	$(form).submit(function(e) {		
		e.preventDefault();
		var formData = $(form).serialize();
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			$(submit_success).text("Wysłano!");			
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Wiadomość nie może zostać wysłana - prawdopodobnie UFO atakuje');
			}
		});

	});

});
