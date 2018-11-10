//Preload
window.addEventListener('DOMContentLoaded', function () {
	hideLoader();
});


$(document).ready(function () {

	init();

	$('footer form').submit(function (e) {
		e.preventDefault();

		var env = this;
		var route = $(env).attr('action');
		var data = $(env).serialize();

		if (validateFooterForm(env)) {
			showLoader();
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
		}
	});
});

/**
 * [init description]
 * @return {[type]} [description]
 */
function init()
{
	//Set slider min height
	var minHeight = $(window).height();
	$('.slider').css('min-height', minHeight);
}

/**
 * [validateFooterForm description]
 * @param  {[type]} form [description]
 * @return {[type]}      [description]
 */
function validateFooterForm(form)
{
	//Clean forms errors display
	$('footer .footer-display-errors').html('');

	var inputName = $('input[name=nombre]', form);
	var inputLastName = $('input[name=apellido]', form);
	var inputEmail = $('input[name=email]', form);
	var inputPhone = $('input[name=telefono]', form);
	var inputMensaje = $('input[name=mensaje]', form);

	var error = false;

	//Validate name
	if ($.trim(inputName.val()).length == 0) {
		$('#frmFooterName').html('**El campo nombre(s) es requerido.');

		error = true;
	}

	//Validate last name
	if ($.trim(inputLastName.val()).length == 0) {
		$('#frmFooterLastName').html('**El campo apellido(s) es requerido.');

		error = true;
	}

	//Validate email
	if ($.trim(inputEmail.val()).length == 0) {
		$('#frmFooterEmail').html('**El campo correo electrónico es requerido.');

		error = true;
	}else if (!validateEmail(inputEmail.val())) {
		$('#frmFooterEmail').html('**El campo correo electrónico es inválido.');

		error = true;
	}

	//Validate phone
	if ($.trim(inputPhone.val()).length == 0) {
		$('#frmFooterPhone').html('**El campo teléfono es requerido.');

		error = true;
	}

	if (error) {
		sweetAlert({
			title: "¡Advertencia!", 
		    text: "El formulario se ha llenado con errores", 
		    icon: "error"
		});
	}

	return (error) ? false : true;
}

/**
 * [validateEmail description]
 * @param  {[type]} email [description]
 * @return {[type]}       [description]
 */
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

/**
 * [hideLoader description]
 * @return {[type]} [description]
 */
function hideLoader()
{
	$('.preloader').fadeOut('slow', function () {
		$('.preloader').removeClass("d-flex align-items-center justify-content-center");
	});
}

function showLoader()
{
	$('.preloader').addClass("d-flex align-items-center justify-content-center");
	$('.preloader').fadeIn('slow');
}