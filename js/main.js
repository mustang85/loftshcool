$(function() {

	/* animation contacts */

	$('.contacts .list__link').hover(function() {
		var currentIcon = $(this).find('.icon');
		$(currentIcon).addClass('shake animated');
	}, function() {
		var currentIcon = $(this).find('.icon');
		$(currentIcon).removeClass('animated shake')
	});

	/* validation form */

	var app = {

		initialize: function () {
			this.form__data = $('.form__data');
			this.setUpListener();
		},

		setUpListener: function () {
			$('.form__data').on('submit', app.submitForm);
			$('.form__data').on('keydown', 'input, textarea', app.removeError);
		},

		submitForm: function (e) {
			e.preventDefault();

			if (app.validateForm(app.form__data) === false ) {
				return false;
			}

			console.log('df');
		},

		validateForm: function (form) {
			var inputs = form.find('input, textarea'),
				valid = true;

			$.each(inputs, function(index, val) {

				var currentInput = $(val),
					val = currentInput.val(),
					formRow = currentInput.closest('div '),
					label = formRow.find('label'),
					tooltip = formRow.find('.form__error'),
					labelText = formRow.find('label').text().toLowerCase(),
					txtError = 'Введите ' + labelText;
					console.log(txtError);

				if (val.length === 0) {
					
					if (formRow.siblings('label').hasClass('captcha__title')) {
						txtError = formRow.siblings('label').text().slice(0,11);
					}

					label
						.addClass('animated hinge')
						.css('color','#f97e76')
						.next('textarea')
						.addClass('has__error');
					
					tooltip.text(txtError).show();
					valid = false;
				} else {

					label
						.addClass('animated flash')
						.css('color','#82ca51')
						.next('input')
						.addClass('has__success');
				}

			});

			return valid;
		},

		removeError: function () {

			$(this)
				.siblings('.form__error')
				.text('спасибо')
				.css('color','#82ca51')
				.fadeOut(2500);

			$(this)
				.removeClass('has__error')
				.addClass('has__success')
				.removeClass('hinge')
				.addClass('flash');

			$(this)
				.siblings('label')
				.removeClass('animated hinge')
				.css('color','#82ca51')
				.addClass('animated flash');
		}


	}

	app.initialize();


	/* placeholder for ie6-8 */
	$('[placeholder]').placeholder();


});