"use strict";

// Class Definition
var Validador = function () {

	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	
	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_wizard_v1', {
			startStep: 1
		});
		if(wizard.currentStep == 1){
			$('#btnWizardPrev').hide();
		}else{
			$('#btnWizardPrev').show();
		}

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

		// Change event
		wizard.on('change', function(wizard) {
			if(wizard.currentStep == 1 || wizard.currentStep == 5){
				$('#btnWizardPrev').hide();
			}else{
				$('#btnWizardPrev').show();
			}
			setTimeout(function() {
				KTUtil.scrollTop();	
			}, 500);
		});
	}	

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {	
				//= Step 1
				address1: {
					required: true 
				},
				postcode: {
					required: true
				},	   
				city: {
					required: true
				},	 
				state: {
					required: true
				},	 
				country: {
					required: true
				}
			},
			
			// Display error  
			invalidHandler: function(event, validator) {	 
				KTUtil.scrollTop();

				swal({
					"title": "", 
					"text": "There are some errors in your submission. Please correct them.", 
					"type": "error",
					"confirmButtonClass": "btn btn-secondary"
				});
			},

			// Submit valid form
			submitHandler: function (form) {
				
			}
		});   
	}
	// Private Functions
	var scrollDatX = false;
	if ($('#us_tipo').val() == "admin") {
		scrollDatX = true;
	}
	var tableValidadorServicios = $('#tableValidadorServicios').DataTable(
									{"columnDefs": [
										{
											targets: 0,
											render: function(data, type, full, meta) {
												var status = {
													NO: {'title': 'NO', 'class': ' kt-badge--danger'},
													SI: {'title': 'SI', 'class': ' kt-badge--success'}
												};
												if (typeof status[data] === 'undefined') {
													return data;
												}
												return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
										},
										},
										{ "width": "50%", "targets": 3 },
										{"className": "dt-center",
											"targets": "_all"},
									],
										responsive:true,
										"lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
										"language": {
												"sProcessing":     "Procesando...",
												"sLengthMenu":     "Mostrar _MENU_ registros",
												"sZeroRecords":    "No se encontraron resultados",
												"sEmptyTable":     "Ningún dato disponible en esta tabla =(",
												"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
												"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
												"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
												"sInfoPostFix":    "",
												"sSearch":         "Buscar:",
												"sUrl":            "",
												"sInfoThousands":  ",",
												"sLoadingRecords": "Cargando...",
												"oPaginate": {
													"sFirst":    "Primero",
													"sLast":     "Último",
													"sNext":     "Siguiente",
													"sPrevious": "Anterior"
												},
												"oAria": {
													"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
													"sSortDescending": ": Activar para ordenar la columna de manera descendente"
												},
												"buttons": {
													"copy": "Copiar",
													"colvis": "Visibilidad"
												}
											}
									});
	
	var tableAfiliado = $('#tableAfiliado').DataTable({"columnDefs": [
										{"className": "dt-center",
											"targets": "_all"},
											],
											"scrollX": scrollDatX,
											colReorder: true,
											responsive:true,
											"lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
											"language": {
												"sProcessing":     "Procesando...",
												"sLengthMenu":     "Mostrar _MENU_ registros",
												"sZeroRecords":    "No se encontraron resultados",
												"sEmptyTable":     "Ningún dato disponible en esta tabla =(",
												"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
												"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
												"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
												"sInfoPostFix":    "",
												"sSearch":         "Buscar:",
												"sUrl":            "",
												"sInfoThousands":  ",",
												"sLoadingRecords": "Cargando...",
												"oPaginate": {
													"sFirst":    "Primero",
													"sLast":     "Último",
													"sNext":     "Siguiente",
													"sPrevious": "Anterior"
												},
												"oAria": {
													"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
													"sSortDescending": ": Activar para ordenar la columna de manera descendente"
												},
												"buttons": {
													"copy": "Copiar",
													"colvis": "Visibilidad"
												}
											}
										});
	
	var tableSede = $('#tableSede').DataTable({"columnDefs": [
											{"className": "dt-center",
												"targets": "_all"},
												],
												responsive:true,
												"lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
												"language": {
													"sProcessing":     "Procesando...",
													"sLengthMenu":     "Mostrar _MENU_ registros",
													"sZeroRecords":    "No se encontraron resultados",
													"sEmptyTable":     "Ningún dato disponible en esta tabla =(",
													"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
													"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
													"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
													"sInfoPostFix":    "",
													"sSearch":         "Buscar:",
													"sUrl":            "",
													"sInfoThousands":  ",",
													"sLoadingRecords": "Cargando...",
													"oPaginate": {
														"sFirst":    "Primero",
														"sLast":     "Último",
														"sNext":     "Siguiente",
														"sPrevious": "Anterior"
													},
													"oAria": {
														"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
														"sSortDescending": ": Activar para ordenar la columna de manera descendente"
													},
													"buttons": {
														"copy": "Copiar",
														"colvis": "Visibilidad"
													}
												}
											});
	
	var tableGpoFamiliar = $('#tableGpoFamiliar').DataTable({"columnDefs": [
												{"className": "dt-center",
													"targets": "_all"},
													],
													"scrollX": scrollDatX,
													responsive:true,
													"lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
													"language": {
														"sProcessing":     "Procesando...",
														"sLengthMenu":     "Mostrar _MENU_ registros",
														"sZeroRecords":    "No se encontraron resultados",
														"sEmptyTable":     "Ningún dato disponible en esta tabla =(",
														"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
														"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
														"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
														"sInfoPostFix":    "",
														"sSearch":         "Buscar:",
														"sUrl":            "",
														"sInfoThousands":  ",",
														"sLoadingRecords": "Cargando...",
														"oPaginate": {
															"sFirst":    "Primero",
															"sLast":     "Último",
															"sNext":     "Siguiente",
															"sPrevious": "Anterior"
														},
														"oAria": {
															"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
															"sSortDescending": ": Activar para ordenar la columna de manera descendente"
														},
														"buttons": {
															"copy": "Copiar",
															"colvis": "Visibilidad"
														}
													}
												});



	var handleValidarServicios = function () {
		$("#formValidarServicios").on("submit", function(event){ // formulario

			event.preventDefault();
			var cadena = $(this).serializeArray();
			var form = $("#formValidarServicios");
			
			form.validate({
				rules: {
					tiposDeDocumento: {
						required: true
					},
					password: {
						required: true
					}
				}
			});

			tableValidadorServicios
			.clear()
			.draw();

			tableAfiliado
			.clear()
			.draw();

			tableSede
			.clear()
			.draw();

			tableGpoFamiliar
			.clear()
			.draw();


			$.ajax({
				url: 'validadordeservicios/validarServicios',
				type: 'POST',
				data: cadena,
				beforeSend: function() {
					Swal.fire({
						 title: "Consultando información...",
						 text: "Este proceso puede tardar unos segundos, por favor espere.",
						 imageUrl: "../assets/media/logos/loading.gif",
						 //showConfirmButton: false
					   });
				   }
			})
			.done(function(respuesta) {
				Swal.close();
				var resultado = $.parseJSON(respuesta);
				if (resultado === 'error') {
					
					Swal.fire({
						  title: "Opps",
						  text: "Verifica el tipo y numero de documento y vuelva a intentarlo!",
						  type: "warning",
						  showConfirmButton: true
						});
					
				}else{
					wizard.goNext();
					if (resultado.responseMessageOut.header.responseStatus.statusCode = "SUCCESS") {
						if (resultado.responseMessageOut.body.response.validadorResponse !== 'undefined') {
							var Derechos = resultado.responseMessageOut.body.response.validadorResponse.Derechos;
							var rowNode = tableValidadorServicios
							
											 .row.add([ checkUndefinedEmpty(typeof Derechos.DerechoPrestacion== 'undefined'? false : Derechos.DerechoPrestacion ) === false ? 'N/A' : Derechos.DerechoPrestacion,
											 			checkUndefinedEmpty(typeof Derechos.Programa== 'undefined'? false : Derechos.Programa ) === false ? 'N/A' : Derechos.Programa,
														checkUndefinedEmpty(typeof Derechos.DescripcionPrograma== 'undefined'? false : Derechos.DescripcionPrograma ) === false ? 'N/A' : Derechos.DescripcionPrograma,
														checkUndefinedEmpty(typeof Derechos.MENSAJE== 'undefined'? false : Derechos.MENSAJE ) === false ? 'N/A' : Derechos.MENSAJE])
											 .draw()
											 .node();

							if(Derechos.DerechoPrestacion == 'SI' && Afiliado.EstadoDescripcion == 'Retirado' &&  Afiliado.FechaRetiro >= ($fechaActual = date('Ymd')) && Afiliado.FechaDesafiliacion <= ($fechaActual = date('Ymd')) ) 
								{
									Derechos.DerechoPrestacion = 'SI';
									Derechos.MENSAJE = 'El usuario SI tiene derecho a prestación de servicios, por periodo de Protección Laboral';
								}
							else{							
								var Afiliado = resultado.responseMessageOut.body.response.validadorResponse.DsAfiliado.Afiliado;
								//console.info(cadena[2].value);
								if( Array.isArray(Afiliado) && Afiliado.length > 0){
									for (var z = 0; z < Afiliado.length; z++) {
										$("#estadoAfil").text("1) Estado: "+Afiliado[z].EstadoDescripcion);
										$("#claseAfil").text("2) Clase AFiliado: "+Afiliado[z].ClaseAfiliacion);
										$("#nivelAfil").text("3) Nivel: "+Afiliado[z].Estrato);
										$("#regimenAfil").text("4) Descripción : "+Afiliado[z].DescripcionPrograma);
										if(cadena[2].value == "admin"){
											tableAfiliado.row.add([checkUndefinedEmpty(typeof Afiliado[z].TipoDocAfiliado== 'undefined'? false : Afiliado[z].TipoDocAfiliado ) === false ? 'N/A' : Afiliado[z].TipoDocAfiliado,
																checkUndefinedEmpty(typeof Afiliado[z].IdAfiliado== 'undefined'? false : Afiliado[z].IdAfiliado ) === false ? 'N/A' : Afiliado[z].IdAfiliado,
																checkUndefinedEmpty(typeof Afiliado[z].EstadoDescripcion== 'undefined'? false : Afiliado[z].EstadoDescripcion ) === false ? 'N/A' : Afiliado[z].EstadoDescripcion,
																checkUndefinedEmpty(typeof Afiliado[z].Nombre== 'undefined'? false :  Afiliado[z].Nombre) === false ? 'N/A' : Afiliado[z].Nombre,
																checkUndefinedEmpty(typeof Afiliado[z].PrimerApellido== 'undefined'? false : Afiliado[z].PrimerApellido ) === false ? 'N/A' : Afiliado[z].PrimerApellido,
																checkUndefinedEmpty(typeof Afiliado[z].SegundoApellido== 'undefined'? false : Afiliado[z].SegundoApellido) === false ? 'N/A' : Afiliado[z].SegundoApellido,
																checkUndefinedEmpty(typeof Afiliado[z].FechaNacimiento== 'undefined'? false : Afiliado[z].FechaNacimiento) === false ? 'N/A' : Afiliado[z].FechaNacimiento,
																checkUndefinedEmpty(typeof Afiliado[z].Estrato== 'undefined'? false : Afiliado[z].Estrato ) === false ? 'N/A' : Afiliado[z].Estrato,
																checkUndefinedEmpty(typeof Afiliado[z].ClaseAfiliacion== 'undefined'? false : Afiliado[z].ClaseAfiliacion ) === false ? 'N/A' : Afiliado[z].ClaseAfiliacion,
																checkUndefinedEmpty(typeof Afiliado[z].FechaAfiliacion== 'undefined'? false :  Afiliado[z].FechaAfiliacion) === false ? 'N/A' : Afiliado[z].FechaAfiliacion,
																checkUndefinedEmpty(typeof Afiliado[z].FechaDesafiliacion== 'undefined'? false :Afiliado[z].FechaDesafiliacion  ) === false ? 'N/A' : Afiliado[z].FechaDesafiliacion,
																checkUndefinedEmpty(typeof Afiliado[z].FechaRetiro== 'undefined'? false :  Afiliado[z].FechaRetiro) === false ? 'N/A' : Afiliado[z].FechaRetiro,
																checkUndefinedEmpty(typeof Afiliado[z].Sexo== 'undefined'? false : Afiliado[z].Sexo ) === false ? 'N/A' : Afiliado[z].Sexo,
																checkUndefinedEmpty(typeof Afiliado[z].SedeCapita== 'undefined'? false : Afiliado[z].SedeCapita ) === false ? 'N/A' : Afiliado[z].SedeCapita,
																checkUndefinedEmpty(typeof Afiliado[z].email== 'undefined'? false :  Afiliado[z].email) === false ? 'N/A' : Afiliado[z].email,
																checkUndefinedEmpty(typeof Afiliado[z].Programa== 'undefined'? false :  Afiliado[z].Programa) === false ? 'N/A' : Afiliado[z].Programa,
																checkUndefinedEmpty(typeof Afiliado[z].IdPrograma== 'undefined'? false :  Afiliado[z].IdPrograma) === false ? 'N/A' : Afiliado[z].IdPrograma,
																checkUndefinedEmpty(typeof Afiliado[z].DescripcionPrograma== 'undefined'? false :  Afiliado[z].DescripcionPrograma) === false ? 'N/A' : Afiliado[z].DescripcionPrograma,
																checkUndefinedEmpty(typeof Afiliado[z].NombreDepartamento== 'undefined'? false :  Afiliado[z].NombreDepartamento) === false ? 'N/A' : Afiliado[z].NombreDepartamento,
																checkUndefinedEmpty(typeof Afiliado[z].NombreMunicipio== 'undefined'? false : Afiliado[z].NombreMunicipio ) === false ? 'N/A' : Afiliado[z].NombreMunicipio,
																checkUndefinedEmpty(typeof Afiliado[z].TipoDocTrabajador== 'undefined'? false : Afiliado[z].TipoDocTrabajador ) === false ? 'N/A' : Afiliado[z].TipoDocTrabajador,
																checkUndefinedEmpty(typeof Afiliado[z].TidTrabajador== 'undefined'? false :  Afiliado[z].TidTrabajador) === false ? 'N/A' : Afiliado[z].TidTrabajador,
																checkUndefinedEmpty(typeof Afiliado[z].IDTrabajador== 'undefined'? false :  Afiliado[z].IDTrabajador) === false ? 'N/A' : Afiliado[z].IDTrabajador,
																checkUndefinedEmpty(typeof Afiliado[z].TipoDocEmpresa== 'undefined'? false : Afiliado[z].TipoDocEmpresa ) === false ? 'N/A' : Afiliado[z].TipoDocEmpresa, 
																checkUndefinedEmpty(typeof Afiliado[z].IDEmpresa== 'undefined'? false :  Afiliado[z].IDEmpresa) === false ? 'N/A' : Afiliado[z].IDEmpresa,
																checkUndefinedEmpty(typeof Afiliado[z].TidEmpresa== 'undefined'? false : Afiliado[z].TidEmpresa ) === false ? 'N/A' : Afiliado[z].TidEmpresa,
																checkUndefinedEmpty(typeof Afiliado[z].TIdAfiliado== 'undefined'? false : Afiliado[z].TIdAfiliado ) === false ? 'N/A' : Afiliado[z].TIdAfiliado,
																checkUndefinedEmpty(typeof Afiliado[z].Estado== 'undefined'? false :  Afiliado[z].Estado) === false ? 'N/A' : Afiliado[z].Estado,
																checkUndefinedEmpty(typeof Afiliado[z].IdEntidad== 'undefined'? false : Afiliado[z].IdEntidad ) === false ? 'N/A' : Afiliado[z].IdEntidad,
																checkUndefinedEmpty(typeof Afiliado[z].Direccion== 'undefined'? false :  Afiliado[z].Direccion) === false ? 'N/A' : Afiliado[z].Direccion,
																checkUndefinedEmpty(typeof Afiliado[z].Telefono== 'undefined'? false : Afiliado[z].Telefono ) === false ? 'N/A' : Afiliado[z].Telefono,
																checkUndefinedEmpty(typeof Afiliado[z].NombreEmpresa == 'undefined'? false : Afiliado[z].NombreEmpresa ) === false ? 'N/A' : Afiliado[z].NombreEmpresa,
																checkUndefinedEmpty(typeof Afiliado[z].Telefono2  == 'undefined'? false : Afiliado[z].Telefono2 ) === false ? 'N/A' : Afiliado[z].Telefono2,
																checkUndefinedEmpty(typeof Afiliado[z].IdCapita== 'undefined'? false : Afiliado[z].IdCapita ) === false ? 'N/A' : Afiliado[z].IdCapita,
																checkUndefinedEmpty(typeof Afiliado[z].IdMunicipio== 'undefined'? false : Afiliado[z].IdMunicipio ) === false ? 'N/A' : Afiliado[z].IdMunicipio,
																checkUndefinedEmpty(typeof Afiliado[z].EstadoCivil== 'undefined'? false :  Afiliado[z].EstadoCivil) === false ? 'N/A' : Afiliado[z].EstadoCivil,
																checkUndefinedEmpty(typeof Afiliado[z].IdUnico== 'undefined'? false :  Afiliado[z].IdUnico ) === false ? 'N/A' : Afiliado[z].IdUnico,
																checkUndefinedEmpty(typeof Afiliado[z].FechaAfiliacionSSS== 'undefined'? false : Afiliado[z].FechaAfiliacionSSS ) === false ? 'N/A' : Afiliado[z].FechaAfiliacionSSS,
																checkUndefinedEmpty(typeof Afiliado[z].IdRegional== 'undefined'? false : Afiliado[z].IdRegional ) === false ? 'N/A' : Afiliado[z].IdRegional,
																checkUndefinedEmpty(typeof Afiliado[z].DiasCotizados== 'undefined'? false : Afiliado[z].DiasCotizados ) === false ? 'N/A' : Afiliado[z].DiasCotizados,
																checkUndefinedEmpty(typeof Afiliado[z].IdArp== 'undefined'? false : Afiliado[z].IdArp ) === false ? 'N/A' : Afiliado[z].IdArp,
																checkUndefinedEmpty(typeof Afiliado[z].IdDiscapacidad== 'undefined'? false : Afiliado[z].IdDiscapacidad ) === false ? 'N/A' : Afiliado[z].IdDiscapacidad,
																checkUndefinedEmpty(typeof Afiliado[z].DirEmpresa == 'undefined'? false : Afiliado[z].DirEmpresa ) === false ? 'N/A' : Afiliado[z].DirEmpresa,
																checkUndefinedEmpty(typeof Afiliado[z].IdHistoria09== 'undefined'? false : Afiliado[z].IdHistoria09 ) === false ? 'N/A' : Afiliado[z].IdHistoria09,
																checkUndefinedEmpty(typeof Afiliado[z].IdHistoria12== 'undefined'? false : Afiliado[z].IdHistoria12 ) === false ? 'N/A' : Afiliado[z].IdHistoria12,
																checkUndefinedEmpty(typeof Afiliado[z].IdConyuge== 'undefined'? false :Afiliado[z].IdConyuge  ) === false ? 'N/A' : Afiliado[z].IdConyuge,
																checkUndefinedEmpty(typeof Afiliado[z].CabezaFamilia== 'undefined'? false : Afiliado[z].CabezaFamilia ) === false ? 'N/A' : Afiliado[z].CabezaFamilia,
																checkUndefinedEmpty(typeof Afiliado[z].NombreTrabajador== 'undefined'? false :  Afiliado[z].NombreTrabajador) === false ? 'N/A' : Afiliado[z].NombreTrabajador,
																checkUndefinedEmpty(typeof Afiliado[z].Principal== 'undefined'? false : Afiliado[z].Principal ) === false ? 'N/A' : Afiliado[z].Principal,
																checkUndefinedEmpty(typeof Afiliado[z].IdBarrio== 'undefined'? false : Afiliado[z].IdBarrio ) === false ? 'N/A' : Afiliado[z].IdBarrio,
																checkUndefinedEmpty(typeof Afiliado[z].PorcentajeDescuento== 'undefined'? false :Afiliado[z].PorcentajeDescuento  ) === false ? 'N/A' : Afiliado[z].PorcentajeDescuento,
																checkUndefinedEmpty(typeof Afiliado[z].TipoDescuento== 'undefined'? false : Afiliado[z].TipoDescuento ) === false ? 'N/A' : Afiliado[z].TipoDescuento,
																checkUndefinedEmpty(typeof Afiliado[z].IdIpsCapita== 'undefined'? false : Afiliado[z].IdIpsCapita ) === false ? 'N/A' : Afiliado[z].IdIpsCapita,
																checkUndefinedEmpty(typeof Afiliado[z].SemCotSSS== 'undefined'? false : Afiliado[z].SemCotSSS ) === false ? 'N/A' : Afiliado[z].SemCotSSS,
																checkUndefinedEmpty(typeof Afiliado[z].CodigoRegional== 'undefined'? false : Afiliado[z].CodigoRegional ) === false ? 'N/A' : Afiliado[z].CodigoRegional
											])
											.draw()
											.node();
										}else{
											tableAfiliado.row.add([checkUndefinedEmpty(typeof Afiliado[z].TipoDocAfiliado== 'undefined'? false : Afiliado[z].TipoDocAfiliado ) === false ? 'N/A' : Afiliado[z].TipoDocAfiliado,
																	checkUndefinedEmpty(typeof Afiliado[z].IdAfiliado== 'undefined'? false : Afiliado[z].IdAfiliado ) === false ? 'N/A' : Afiliado[z].IdAfiliado,
																	checkUndefinedEmpty(typeof Afiliado[z].EstadoDescripcion== 'undefined'? false : Afiliado[z].EstadoDescripcion ) === false ? 'N/A' : Afiliado[z].EstadoDescripcion,
																	checkUndefinedEmpty(typeof Afiliado[z].Nombre== 'undefined'? false :  Afiliado[z].Nombre) === false ? 'N/A' : Afiliado[z].Nombre,
																	checkUndefinedEmpty(typeof Afiliado[z].PrimerApellido== 'undefined'? false : Afiliado[z].PrimerApellido ) === false ? 'N/A' : Afiliado[z].PrimerApellido,
																	checkUndefinedEmpty(typeof Afiliado[z].SegundoApellido== 'undefined'? false : Afiliado[z].SegundoApellido) === false ? 'N/A' : Afiliado[z].SegundoApellido,
																	checkUndefinedEmpty(typeof Afiliado[z].FechaNacimiento== 'undefined'? false : Afiliado[z].FechaNacimiento) === false ? 'N/A' : Afiliado[z].FechaNacimiento,
																	checkUndefinedEmpty(typeof Afiliado[z].Estrato== 'undefined'? false : Afiliado[z].Estrato ) === false ? 'N/A' : Afiliado[z].Estrato,
																	checkUndefinedEmpty(typeof Afiliado[z].ClaseAfiliacion== 'undefined'? false : Afiliado[z].ClaseAfiliacion ) === false ? 'N/A' : Afiliado[z].ClaseAfiliacion,
																	checkUndefinedEmpty(typeof Afiliado[z].FechaAfiliacion== 'undefined'? false :  Afiliado[z].FechaAfiliacion) === false ? 'N/A' : Afiliado[z].FechaAfiliacion,
																	checkUndefinedEmpty(typeof Afiliado[z].FechaDesafiliacion== 'undefined'? false :Afiliado[z].FechaDesafiliacion  ) === false ? 'N/A' : Afiliado[z].FechaDesafiliacion,
																	checkUndefinedEmpty(typeof Afiliado[z].FechaRetiro== 'undefined'? false :  Afiliado[z].FechaRetiro) === false ? 'N/A' : Afiliado[z].FechaRetiro,
												])
												.draw()
												.node();
											break;
										}
									}
								}else if(Afiliado.IDTrabajador !== 'undefined' ){
									$("#estadoAfil").text("1) Estado: "+Afiliado.EstadoDescripcion);
									$("#claseAfil").text("2) Clase AFiliado: "+Afiliado.ClaseAfiliacion);
									$("#nivelAfil").text("3) Nivel: "+Afiliado.Estrato);
									$("#regimenAfil").text("4) Descripción : "+Afiliado.DescripcionPrograma);
									if(cadena[2].value == "admin"){
											tableAfiliado
											.row.add([checkUndefinedEmpty(Afiliado.TipoDocAfiliado== 'undefined'? false : Afiliado.TipoDocAfiliado ) === false ? 'N/A' : Afiliado.TipoDocAfiliado,
													checkUndefinedEmpty(Afiliado.IdAfiliado== 'undefined'? false : Afiliado.IdAfiliado  ) === false ? 'N/A' : Afiliado.IdAfiliado,
													checkUndefinedEmpty(Afiliado.EstadoDescripcion== 'undefined'? false : Afiliado.EstadoDescripcion ) === false ? 'N/A' : Afiliado.EstadoDescripcion,
													checkUndefinedEmpty(Afiliado.Nombre== 'undefined'? false : Afiliado.Nombre ) === false ? 'N/A' : Afiliado.Nombre,
													checkUndefinedEmpty(Afiliado.PrimerApellido== 'undefined'? false : Afiliado.PrimerApellido ) === false ? 'N/A' : Afiliado.PrimerApellido,
													checkUndefinedEmpty(Afiliado.SegundoApellido== 'undefined'? false : Afiliado.SegundoApellido ) === false ? 'N/A' : Afiliado.SegundoApellido,
													checkUndefinedEmpty(Afiliado.FechaNacimiento== 'undefined'? false : Afiliado.FechaNacimiento ) === false ? 'N/A' : Afiliado.FechaNacimiento,
													checkUndefinedEmpty(Afiliado.Estrato== 'undefined'? false :  Afiliado.Estrato) === false ? 'N/A' : Afiliado.Estrato,
													checkUndefinedEmpty(Afiliado.ClaseAfiliacion== 'undefined'? false :  Afiliado.ClaseAfiliacion) === false ? 'N/A' : Afiliado.ClaseAfiliacion,
													checkUndefinedEmpty(Afiliado.FechaAfiliacion== 'undefined'? false : Afiliado.FechaAfiliacion ) === false ? 'N/A' : Afiliado.FechaAfiliacion,
													checkUndefinedEmpty(Afiliado.FechaDesafiliacion== 'undefined'? false : Afiliado.FechaDesafiliacion ) === false ? 'N/A' : Afiliado.FechaDesafiliacion,
													checkUndefinedEmpty(Afiliado.FechaRetiro== 'undefined'? false :  Afiliado.FechaRetiro) === false ? 'N/A' : Afiliado.FechaRetiro,
													checkUndefinedEmpty(Afiliado.Sexo== 'undefined'? false :  Afiliado.Sexo) === false ? 'N/A' : Afiliado.Sexo,
													checkUndefinedEmpty(Afiliado.SedeCapita== 'undefined'? false : Afiliado.SedeCapita ) === false ? 'N/A' : Afiliado.SedeCapita,
													checkUndefinedEmpty(Afiliado.email== 'undefined'? false :  Afiliado.email) === false ? 'N/A' : Afiliado.email,
													checkUndefinedEmpty(Afiliado.Programa== 'undefined'? false :  Afiliado.Programa) === false ? 'N/A' : Afiliado.Programa,
													checkUndefinedEmpty(Afiliado.IdPrograma== 'undefined'? false :  Afiliado.IdPrograma) === false ? 'N/A' : Afiliado.IdPrograma,
													checkUndefinedEmpty(Afiliado.DescripcionPrograma== 'undefined'? false :  Afiliado.DescripcionPrograma) === false ? 'N/A' : Afiliado.DescripcionPrograma,
													checkUndefinedEmpty(Afiliado.NombreDepartamento== 'undefined'? false : Afiliado.NombreDepartamento ) === false ? 'N/A' : Afiliado.NombreDepartamento,
													checkUndefinedEmpty(Afiliado.NombreMunicipio== 'undefined'? false : Afiliado.NombreMunicipio ) === false ? 'N/A' : Afiliado.NombreMunicipio,
													checkUndefinedEmpty(Afiliado.TipoDocTrabajador== 'undefined'? false : Afiliado.TipoDocTrabajador ) === false ? 'N/A' : Afiliado.TipoDocTrabajador,
													checkUndefinedEmpty(Afiliado.TidTrabajador== 'undefined'? false : Afiliado.TidTrabajador ) === false ? 'N/A' : Afiliado.TidTrabajador,
													checkUndefinedEmpty(Afiliado.IDTrabajador== 'undefined'? false :  Afiliado.IDTrabajador) === false ? 'N/A' : Afiliado.IDTrabajador,
													checkUndefinedEmpty(Afiliado.TipoDocEmpresa== 'undefined'? false :  Afiliado.TipoDocEmpresa) === false ? 'N/A' : Afiliado.TipoDocEmpresa, 
													checkUndefinedEmpty(Afiliado.IDEmpresa== 'undefined'? false : Afiliado.IDEmpresa ) === false ? 'N/A' : Afiliado.IDEmpresa,
													checkUndefinedEmpty(Afiliado.TidEmpresa== 'undefined'? false :  Afiliado.TidEmpresa) === false ? 'N/A' : Afiliado.TidEmpresa,
													checkUndefinedEmpty(Afiliado.TIdAfiliado== 'undefined'? false :  Afiliado.TIdAfiliado) === false ? 'N/A' : Afiliado.TIdAfiliado,
													checkUndefinedEmpty(Afiliado.Estado== 'undefined'? false : Afiliado.Estado ) === false ? 'N/A' : Afiliado.Estado,
													checkUndefinedEmpty(Afiliado.IdEntidad== 'undefined'? false :  Afiliado.IdEntidad) === false ? 'N/A' : Afiliado.IdEntidad,
													checkUndefinedEmpty(Afiliado.Direccion== 'undefined'? false :  Afiliado.Direccion) === false ? 'N/A' : Afiliado.Direccion,
													checkUndefinedEmpty(Afiliado.Telefono== 'undefined'? false :  Afiliado.Telefono) === false ? 'N/A' : Afiliado.Telefono,
													checkUndefinedEmpty(Afiliado.NombreEmpresa== 'undefined'? false : Afiliado.NombreEmpresa ) === false ? 'N/A' : Afiliado.NombreEmpresa,
													checkUndefinedEmpty(Afiliado.Telefono2== 'undefined'? false : Afiliado.Telefono2 ) === false ? 'N/A' : Afiliado.Telefono2,
													checkUndefinedEmpty(Afiliado.IdCapita== 'undefined'? false : Afiliado.IdCapita ) === false ? 'N/A' : Afiliado.IdCapita,
													checkUndefinedEmpty(Afiliado.IdMunicipio== 'undefined'? false : Afiliado.IdMunicipio ) === false ? 'N/A' : Afiliado.IdMunicipio,
													checkUndefinedEmpty(Afiliado.EstadoCivil== 'undefined'? false :  Afiliado.EstadoCivil) === false ? 'N/A' : Afiliado.EstadoCivil,
													checkUndefinedEmpty(Afiliado.IdUnico== 'undefined'? false :  Afiliado.IdUnico) === false ? 'N/A' : Afiliado.IdUnico,
													checkUndefinedEmpty(Afiliado.FechaAfiliacionSSS== 'undefined'? false : Afiliado.FechaAfiliacionSSS ) === false ? 'N/A' : Afiliado.FechaAfiliacionSSS,
													checkUndefinedEmpty(Afiliado.IdRegional== 'undefined'? false : Afiliado.IdRegional ) === false ? 'N/A' : Afiliado.IdRegional,
													checkUndefinedEmpty(Afiliado.DiasCotizados== 'undefined'? false :  Afiliado.DiasCotizados) === false ? 'N/A' : Afiliado.DiasCotizados,
													checkUndefinedEmpty(Afiliado.IdArp== 'undefined'? false :  Afiliado.IdArp) === false ? 'N/A' : Afiliado.IdArp,
													checkUndefinedEmpty(Afiliado.IdDiscapacidad== 'undefined'? false : Afiliado.IdDiscapacidad ) === false ? 'N/A' : Afiliado.IdDiscapacidad,
													checkUndefinedEmpty(Afiliado.DirEmpresa== 'undefined'? false : Afiliado.DirEmpresa ) === false ? 'N/A' : Afiliado.DirEmpresa,
													checkUndefinedEmpty(Afiliado.IdHistoria09== 'undefined'? false : Afiliado.IdHistoria09) === false ? 'N/A' : Afiliado.IdHistoria09,
													checkUndefinedEmpty(Afiliado.IdHistoria12== 'undefined'? false : Afiliado.IdHistoria12 ) === false ? 'N/A' : Afiliado.IdHistoria12,
													checkUndefinedEmpty(Afiliado.IdConyuge== 'undefined'? false :  Afiliado.IdConyuge) === false ? 'N/A' : Afiliado.IdConyuge,
													checkUndefinedEmpty(Afiliado.CabezaFamilia== 'undefined'? false : Afiliado.CabezaFamilia ) === false ? 'N/A' : Afiliado.CabezaFamilia,
													checkUndefinedEmpty(Afiliado.NombreTrabajador== 'undefined'? false :  Afiliado.NombreTrabajador) === false ? 'N/A' : Afiliado.NombreTrabajador,
													checkUndefinedEmpty(Afiliado.Principal== 'undefined'? false : Afiliado.Principal ) === false ? 'N/A' : Afiliado.Principal,
													checkUndefinedEmpty(Afiliado.IdBarrio== 'undefined'? false :  Afiliado.IdBarrio) === false ? 'N/A' : Afiliado.IdBarrio,
													checkUndefinedEmpty(Afiliado.PorcentajeDescuento== 'undefined'? false : Afiliado.PorcentajeDescuento ) === false ? 'N/A' : Afiliado.PorcentajeDescuento,
													checkUndefinedEmpty(Afiliado.TipoDescuento== 'undefined'? false :  Afiliado.TipoDescuento) === false ? 'N/A' : Afiliado.TipoDescuento,
													checkUndefinedEmpty(Afiliado.IdIpsCapita== 'undefined'? false : Afiliado.IdIpsCapita ) === false ? 'N/A' : Afiliado.IdIpsCapita,
													checkUndefinedEmpty(Afiliado.SemCotSSS== 'undefined'? false :  Afiliado.SemCotSSS) === false ? 'N/A' : Afiliado.SemCotSSS,
													checkUndefinedEmpty(Afiliado.CodigoRegional== 'undefined'? false :  Afiliado.CodigoRegional) === false ? 'N/A' : Afiliado.CodigoRegional
											])
											.draw()
											.node();
									}else{
										tableAfiliado
										.row.add([checkUndefinedEmpty(Afiliado.TipoDocAfiliado== 'undefined'? false : Afiliado.TipoDocAfiliado ) === false ? 'N/A' : Afiliado.TipoDocAfiliado,
													checkUndefinedEmpty(Afiliado.IdAfiliado== 'undefined'? false : Afiliado.IdAfiliado  ) === false ? 'N/A' : Afiliado.IdAfiliado,
													checkUndefinedEmpty(Afiliado.EstadoDescripcion== 'undefined'? false : Afiliado.EstadoDescripcion ) === false ? 'N/A' : Afiliado.EstadoDescripcion,
													checkUndefinedEmpty(Afiliado.Nombre== 'undefined'? false : Afiliado.Nombre ) === false ? 'N/A' : Afiliado.Nombre,
													checkUndefinedEmpty(Afiliado.PrimerApellido== 'undefined'? false : Afiliado.PrimerApellido ) === false ? 'N/A' : Afiliado.PrimerApellido,
													checkUndefinedEmpty(Afiliado.SegundoApellido== 'undefined'? false : Afiliado.SegundoApellido ) === false ? 'N/A' : Afiliado.SegundoApellido,
													checkUndefinedEmpty(Afiliado.FechaNacimiento== 'undefined'? false : Afiliado.FechaNacimiento ) === false ? 'N/A' : Afiliado.FechaNacimiento,
													checkUndefinedEmpty(Afiliado.Estrato== 'undefined'? false :  Afiliado.Estrato) === false ? 'N/A' : Afiliado.Estrato,
													checkUndefinedEmpty(Afiliado.ClaseAfiliacion== 'undefined'? false :  Afiliado.ClaseAfiliacion) === false ? 'N/A' : Afiliado.ClaseAfiliacion,
													checkUndefinedEmpty(Afiliado.FechaAfiliacion== 'undefined'? false : Afiliado.FechaAfiliacion ) === false ? 'N/A' : Afiliado.FechaAfiliacion,
													checkUndefinedEmpty(Afiliado.FechaDesafiliacion== 'undefined'? false : Afiliado.FechaDesafiliacion ) === false ? 'N/A' : Afiliado.FechaDesafiliacion,
													checkUndefinedEmpty(Afiliado.FechaRetiro== 'undefined'? false :  Afiliado.FechaRetiro) === false ? 'N/A' : Afiliado.FechaRetiro,
											])
											.draw()
											.node();
									}
								}
							}

							var SedeAtencion = resultado.responseMessageOut.body.response.validadorResponse.DsSede.SedeAtencion;
						
								var rowNode = tableSede
												 .row.add([ checkUndefinedEmpty(SedeAtencion.IdSedeAtencion== 'undefined'? false : SedeAtencion.IdSedeAtencion ) === false ? 'N/A' : SedeAtencion.IdSedeAtencion,
															checkUndefinedEmpty(SedeAtencion.SedeAtencion== 'undefined'? false :  SedeAtencion.SedeAtencion) === false ? 'N/A' : SedeAtencion.SedeAtencion,
															checkUndefinedEmpty(SedeAtencion.CodSedeAtencion== 'undefined'? false :  SedeAtencion.CodSedeAtencion) === false ? 'N/A' : SedeAtencion.CodSedeAtencion])
												 .draw()
												 .node();
	
	
							var GrupoFamiliar = resultado.responseMessageOut.body.response.validadorResponse.DsGrupoFamiliar.Beneficiario;
							if(cadena[2].value == "admin"){
								if( Array.isArray(GrupoFamiliar) && GrupoFamiliar.length > 0){
									for (var i = 0; i < GrupoFamiliar.length; i++) {
										var rowNode = tableGpoFamiliar
													.row.add([checkUndefinedEmpty(GrupoFamiliar[i].TipoDocBeneficiario== 'undefined'? false :  GrupoFamiliar[i].TipoDocBeneficiario) === false ? 'N/A' : GrupoFamiliar[i].TipoDocBeneficiario, 
															  checkUndefinedEmpty(GrupoFamiliar[i].IDBeneficiario== 'undefined'? false :  GrupoFamiliar[i].IDBeneficiario) === false ? 'N/A' : GrupoFamiliar[i].IDBeneficiario,
															  checkUndefinedEmpty(GrupoFamiliar[i].Nombre== 'undefined'? false :  GrupoFamiliar[i].Nombre) === false ? 'N/A' : GrupoFamiliar[i].Nombre,
															  checkUndefinedEmpty(GrupoFamiliar[i].PrimerApellido== 'undefined'? false :  GrupoFamiliar[i].PrimerApellido) === false ? 'N/A' : GrupoFamiliar[i].PrimerApellido,
															  checkUndefinedEmpty(GrupoFamiliar[i].SegundoApellido== 'undefined'? false : GrupoFamiliar[i].SegundoApellido ) === false ? 'N/A' : GrupoFamiliar[i].SegundoApellido,
															  checkUndefinedEmpty(GrupoFamiliar[i].Sexo== 'undefined'? false : GrupoFamiliar[i].Sexo ) === false ? 'N/A' : GrupoFamiliar[i].Sexo,
															  checkUndefinedEmpty(GrupoFamiliar[i].TidTrabajador== 'undefined'? false : GrupoFamiliar[i].TidTrabajador ) === false ? 'N/A' : GrupoFamiliar[i].TidTrabajador,
															  checkUndefinedEmpty(GrupoFamiliar[i].IDTrabajador== 'undefined'? false : GrupoFamiliar[i].IDTrabajador ) === false ? 'N/A' : GrupoFamiliar[i].IDTrabajador,
															  checkUndefinedEmpty(GrupoFamiliar[i].TipoDocTrabajador== 'undefined'? false :  GrupoFamiliar[i].TipoDocTrabajador) === false ? 'N/A' : GrupoFamiliar[i].TipoDocTrabajador,
															  checkUndefinedEmpty(GrupoFamiliar[i].EstadoCaja== 'undefined'? false :  GrupoFamiliar[i].EstadoCaja) === false ? 'N/A' : GrupoFamiliar[i].EstadoCaja,
															  checkUndefinedEmpty(GrupoFamiliar[i].EstadoPOS== 'undefined'? false :  GrupoFamiliar[i].EstadoPOS) === false ? 'N/A' : GrupoFamiliar[i].EstadoPOS,
															  checkUndefinedEmpty(GrupoFamiliar[i].EstadoPCO== 'undefined'? false : GrupoFamiliar[i].EstadoPCO ) === false ? 'N/A' : GrupoFamiliar[i].EstadoPCO
														])
													.draw()
													.node();
									}
									tableGpoFamiliar
									.order( [ 5, 'asc' ] )
									.draw();
								}else if(GrupoFamiliar.IDBeneficiario !== 'undefined' ){
									var rowNode = tableGpoFamiliar
													.row.add([checkUndefinedEmpty(GrupoFamiliar.TipoDocBeneficiario== 'undefined'? false :  GrupoFamiliar.TipoDocBeneficiario) === false ? 'N/A' : GrupoFamiliar.TipoDocBeneficiario, 
															  checkUndefinedEmpty(GrupoFamiliar.IDBeneficiario== 'undefined'? false :  GrupoFamiliar.IDBeneficiario) === false ? 'N/A' : GrupoFamiliar.IDBeneficiario,
															  checkUndefinedEmpty(GrupoFamiliar.Nombre== 'undefined'? false :  GrupoFamiliar.Nombre) === false ? 'N/A' : GrupoFamiliar.Nombre,
															  checkUndefinedEmpty(GrupoFamiliar.PrimerApellido== 'undefined'? false : GrupoFamiliar.PrimerApellido ) === false ? 'N/A' : GrupoFamiliar.PrimerApellido,
															  checkUndefinedEmpty(GrupoFamiliar.SegundoApellido== 'undefined'? false : GrupoFamiliar.SegundoApellido ) === false ? 'N/A' : GrupoFamiliar.SegundoApellido,
															  checkUndefinedEmpty(GrupoFamiliar.Sexo== 'undefined'? false : GrupoFamiliar.Sexo ) === false ? 'N/A' : GrupoFamiliar.Sexo,
															  checkUndefinedEmpty(GrupoFamiliar.TidTrabajador== 'undefined'? false :  GrupoFamiliar.TidTrabajador) === false ? 'N/A' : GrupoFamiliar.TidTrabajador,
															  checkUndefinedEmpty(GrupoFamiliar.IDTrabajador== 'undefined'? false : GrupoFamiliar.IDTrabajador ) === false ? 'N/A' : GrupoFamiliar.IDTrabajador,
															  checkUndefinedEmpty(GrupoFamiliar.TipoDocTrabajador== 'undefined'? false : GrupoFamiliar.TipoDocTrabajador ) === false ? 'N/A' : GrupoFamiliar.TipoDocTrabajador,
															  checkUndefinedEmpty(GrupoFamiliar.EstadoCaja== 'undefined'? false : GrupoFamiliar.EstadoCaja ) === false ? 'N/A' : GrupoFamiliar.EstadoCaja,
															  checkUndefinedEmpty(GrupoFamiliar.EstadoPOS== 'undefined'? false : GrupoFamiliar.EstadoPOS ) === false ? 'N/A' : GrupoFamiliar.EstadoPOS,
															  checkUndefinedEmpty(GrupoFamiliar.EstadoPCO== 'undefined'? false :  GrupoFamiliar.EstadoPCO) === false ? 'N/A' : GrupoFamiliar.EstadoPCO
														])
													.draw()
													.node();
									tableGpoFamiliar
									.order( [ 5, 'asc' ] )
									.draw();
								}
							}
						}
					}
				}
	
			})
			.fail(function() {
				////console.log("error");
			});
		});

		$("#grupoFamiliarTab").on("click", function(event){
			////console.info("entro")
			tableAfiliado
			.order( [ 5, 'asc' ] )
			.draw();
		});
	}
	function checkUndefinedEmpty(variable)
	{
		if(variable !== false && variable !== null && variable !== undefined )
		{	
			if(Object.entries(variable).length === 0)
			{
				return false;
			}
			return true;
		}
		return false;
	}
	var contadortableAfiliado = 0;
	$('#tableAfiliado_wrapper .dataTables_scrollBody').on('scroll', function(e) {
		contadortableAfiliado++;
		if(contadortableAfiliado === 30 ){
			tableAfiliado
			.order( [ 5, 'asc' ] )
			.draw();
			contadortableAfiliado = 0;
		}
		
	});
	var contadortableGpoFamiliar = 0;
	$('#tableGpoFamiliar_wrapper .dataTables_scrollBody').on('scroll', function(e) {
		contadortableGpoFamiliar++;
		if(contadortableGpoFamiliar === 30 ){
			tableGpoFamiliar
			.order( [ 5, 'asc' ] )
			.draw();
			contadortableGpoFamiliar = 0;
		}
		
	});

	

	// Public Functions
	return {
		// public functions
		init: function () {
			wizardEl = KTUtil.get('kt_wizard_v1');
            formEl = $('#formValidarServicios');
			initWizard(); 
            initValidation();
			handleValidarServicios();
		}
	};
}();

// Class Initialization
jQuery(document).ready(function () {
	Validador.init();
});
