$(function() {
	$('.contacts .list__link').hover(function() {
		var currentIcon = $(this).find('.icon');
		$(currentIcon).addClass('shake animated');
	}, function() {
		var currentIcon = $(this).find('.icon');
		$(currentIcon).removeClass('animated shake')
	});
}());