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

		// инициализация
		initialize: function () {
			this.form__data = $('.form__data');
			this.setUpListener();
			this.createCaptcha();
			$('input, textarea').placeholder();
		},

		// подключить прослушку событий
		setUpListener: function () {
			$('.form__data').on('submit', app.submitForm); // отправка формы
			// $('.form__data').on('submit', app.createCaptcha);
			$('.form__data').on('keydown', 'input, textarea', app.removeError); // убираем подсказки и обводки с полей
			$('.form__data').on('click', '.form__reset', app.resetForm); // cброс формы: удаляем текс. подсказки, обводки теста и полей
			$('.form__data').on('blur', 'input, textarea', app.validField); // повторная проверка поля
			$('#captchaText').on('blur', app.validCaptchaCode); // проверка на совпадения каптча-кода в поле с картинкой
			$('.add_project').on('click', app.showPopUp); // вызов попап "добавить проект"
			$('.popup_project .form__data').on('submit', app.blockedSubmit) // блокировка отпривки формы "добавить работу"
		},

		// отправки формы
		submitForm: function (e) {
			e.preventDefault();

			var inpSubmit = app.form__data.find('input[type="submit"]'),
				str = null;

			if ( app.validateForm(app.form__data) === false || app.validCaptchaCode() === false ) {
				app.createCaptcha();
				return false;
			}

			inpSubmit.attr('disabled','disabled');
			str = app.form__data.serialize();

			$.ajax({
				url: 'contact_form/contact_process.php',
				type: 'POST',
				data: str
			})
			.done(function(msg) {
				console.log(msg);
				if (msg === 'OK') {
					var resultText = '<div class="animated flash has__success_txt">Спасибо за заявку! Я скоро вам отвечу!</div>';
					app.form__data.html(resultText);
				} else {
					app.form__data.html(msg);
				}
			})
			.always(function() {
				inpSubmit.removeAttr('disabled');
			});
			
		},

		// проверка формы перед отправкой
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

		// убираем подсказки и обводки с полей
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

		// cброс формы: удаляем текс. подсказки, обводки теста и полей
		resetForm: function () {
			var labels = app.form__data.find('label')
			app.form__data.find('.form__error').hide();
			var elms = app.form__data.find('input, textarea');

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

		// повторная проверка поля
		validField: function () {
			var input = $(this),
				inputVal = input.val(),
				formRow = $(this).closest('div '),
				label = formRow.find('label'),
				tooltip = formRow.find('.form__error'),
				labelText = formRow.find('label').text().toLowerCase(),
				txtError = 'Введите ' + labelText;
			
			if (inputVal.length === 0) {

				label
					.addClass('animated hinge has__error_txt')
					.next('textarea')
					.addClass('has__error');

				input.addClass('has__error');
				tooltip.text(txtError)
					   .addClass('has__error_txt')
					   .show();

			} 
		}, 
		
		// создать и отобразить каптча-код-картинку
		createCaptcha: function () {
			$("form").clientSideCaptcha({
				input: "#captchaText", 
				display: "#captcha",
				pass : function() { return true; },
				fail : function() { return false; }
			});
		},

		// проверка на совпадения каптча-кода в поле с картинкой
		validCaptchaCode: function () {
			var dataForm = $('.form__data').data().captchaText,
				valInput = $('.captcha__code').val();
			return dataForm === valInput ? true: false;
		},

		// вызов попапа
		showPopUp: function (e) {
			e.preventDefault();
			var speed = 400;
			
			$('.popup_project')
							   .removeClass('hide')
							   .fadeIn(speed)
							   .closest('body')
							   .append('<div class="shadow"></div>')
							   .find('.shadow')
							   .fadeIn(speed);

			$('.popup_project .exite, .shadow').on('click', function(event) {
				$('.popup_project').fadeOut(speed);
				$('.shadow').fadeOut(speed);
			});

			

		},

		// TODO допилить форму для добавления работ
		blockedSubmit: function () {
			$('#submit').val('не работает');

			return false;
		}


	}

	app.initialize();



});