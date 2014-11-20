$(function() {

	/* validation form */
	console.log('dsf');

	var app = {

		initialize: function () {
			this.form__data = $('.form__data');
			this.tooltip = this.form__data.find('.form__error'),

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
					formRow = currentInput.closest('div'),
					label = formRow.find('label'),
					labelText = formRow.find('label').text().toLowerCase(),
					txtError = 'Введите ' + labelText;

				if (val.length === 0) {
					label
						.addClass('animated hinge')
						.css('color','#f97e76')
						.next('textarea')
						.addClass('has__error');

					app.tooltip.text(txtError).show();
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