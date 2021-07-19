"use strict";

// Class Definition
var KTLoginV1 = function () {
	
	var login = $('#kt_login');

	var showErrorMsg = function (form, type, msg) {
		var alert = $('<div class="kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
			<span></span>\
		</div>');

		form.find('.alert').remove();
		alert.prependTo(form);
		//alert.animateClass('fadeIn animated');
		KTUtil.animateClass(alert[0], 'fadeIn animated');
		alert.find('span').html(msg);
	}

	// Private Functions

	var handleSignInFormSubmit = function () {
		$("#formLogin").on("submit", function(event){ // formulario

			event.preventDefault();
			var cadena = $(this).serializeArray();
			var btn = $(this);
			var form = $('.kt-login__form');
			console.info("ENTREE2");
			console.info(btn);
			console.info(form);
			form.validate({
				rules: {
					username: {
						required: true
					},
					password: {
						required: true
					}
				}
			});
		
			console.info(cadena);
			$.ajax({
				url: 'index.php/login/ingresar',
				type: 'POST',
				data: cadena
			})
			.done(function(respuesta) {
				
				var resultado = $.parseJSON(respuesta);
				if (resultado === 'error') {
					
					Swal.fire({
						  title: "Datos incorrectos",
						  text: "Verifica el usuario y contraseña e intenta nuevamente.",
						  type: "warning",
						  showConfirmButton: true
						});
						
					btn.removeClass('kt-loader kt-loader--right kt-loader--light').attr('disabled', false);
					showErrorMsg(form, 'danger', 'Usuario o Contraseña Incorrecta.');
					
				}else{
					btn.removeClass('kt-loader kt-loader--right kt-loader--light').attr('disabled', false);
					showErrorMsg(form, 'success', 'Acceso correcto');
					console.log(resultado);
					$(location).attr('href',"index.php/validadordeservicios");
				}
	
			})
			.fail(function() {
				//console.log("error");
			});
		});
	}

	// Public Functions
	return {
		// public functions
		init: function () {
			handleSignInFormSubmit();
		}
	};
}();

// Class Initialization
jQuery(document).ready(function () {
	KTLoginV1.init();
});