$(document).ready(function () {

	init();

	$('footer form').submit(function (e) {
		e.preventDefault();

		var env = this;
		var route = $(env).attr('action');
		var data = $(env).serialize();

		$.ajax({
			type: 'post',
			url: route,
			data: data,
			dataType: 'json',
			beforeSend: function () {

			},
			error: function () {},
			succes: function (response) {}
		});
	});
});

function init()
{
	//Set slider min height
	var minHeight = $(window).height();
	$('.slider').css('min-height', minHeight);
}