$(document).ready(function () {

	$('footer form').submit(function (e) {
		e.preventDefault();

		var env = this;
		var route = $(env).attr('action');
		var data = $(env).serialize();

		$.ajax({
			type: 'post',
			url: route,
			data: data,
			dataType: 'json'
		});
	});
});