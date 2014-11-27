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
			$('.form__data').on('click', '.form__reset', app.resetForm);
			$('.form__data').on('blur', 'input, textarea', app.validField);
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

				if (val.length === 0) {
					
					if (formRow.siblings('label').hasClass('captcha__title')) {
						txtError = formRow.siblings('label').text().slice(0,11);
					}

					label
						.addClass('animated hinge has__error_txt')
						.next('textarea')
						.addClass('has__error');

					currentInput.addClass('has__error');
					
					tooltip.text(txtError).show();
					valid = false;
				} else {

					label
						.addClass('animated flash')
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
				.addClass('has__success_txt')
				.fadeOut(2500);

			$(this)
				.removeClass('has__error')
				.addClass('has__success')
				.removeClass('hinge')
				.addClass('flash');

			$(this)
				.siblings('label')
				.removeClass('animated hinge has__error_txt')
				.addClass('animated flash has__success_txt');


		},

		resetForm: function () {
			var labels = app.form__data.find('label')
			app.form__data.find('.form__error').hide();
			var elms = app.form__data.find('input, textarea');
			console.log(elms);

			$.each(labels, function(index, val) {
			 	if (labels.hasClass('has__success_txt') || labels.hasClass('has__error_txt')) {
			 	 	labels.removeClass();
				}
			});

			$.each(elms, function(index, val) {

			 	if (elms.hasClass('has__success')) {
			 	 	elms.removeClass('has__success');
			 	} else {
			 		elms.removeClass('has__error');
			 	}

			});

		},

		validField: function () {
			var currentVal = $(this).val();
			
			if (currentVal.length === 0) {

				var	formRow = $(this).closest('div '),
					label = formRow.find('label'),
					tooltip = formRow.find('.form__error'),
					labelText = formRow.find('label').text().toLowerCase(),
					txtError = 'Введите ' + labelText;

				label
					.addClass('animated hinge has__error_txt')
					.next('textarea')
					.addClass('has__error');

				currentInput.addClass('has__error');
				tooltip.text(txtError).show();

			}
		}


	}

	app.initialize();


	/* placeholder for ie6-8 */
	$('[placeholder]').placeholder();


});