<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Comfenalco Valle Eps | Validador</title>
		<meta name="description" content="Validador Comfenalco Eps">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

		<!--end::Fonts -->


		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo base_url(); ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?php echo base_url(); ?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/app/custom/wizard/wizard-v1.default.css" rel="stylesheet" type="text/css" />
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo base_url(); ?>assets/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="dashboard">
					<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-2-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__item" id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="dashboard">
								<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-2021-small.png" />
							</a>
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item " aria-haspopup="true"><a href="dashboard" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-analytics-2"></i><span class="kt-menu__link-text">Tablero</span></a></li>
								<li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="validadordeservicios" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-protected"></i><span class="kt-menu__link-text">Validador</span></a></li>
								
							<?php if($tipo == "admin"): ?>
								<li class="kt-menu__item kt-menu__item" aria-haspopup="true"><a href="usuarios" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user"></i><span class="kt-menu__link-text">Usuarios</span></a></li>
							<?php endif;?>
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
								<ul class="kt-menu__nav ">
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="dashboard" class="kt-menu__link "><span class="kt-menu__link-text">Ir al tablero</span></a></li>							
								</ul>
							</div>
						</div>

						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<!--begin: User Bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
									<div class="kt-header__topbar-user">
										<!-- <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
										<img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>assets/media/bg/default.jpg" /> -->

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><?=substr($nombre, 0, 1) ?></span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo base_url(); ?>assets/media/misc/bg-1.jpg)">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>assets/media/logos/default.jpg" />

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success"><?=substr($nombre, 0, 1) ?></span>
										</div>
										<div class="kt-user-card__name">
											<?=$nombre ?>
										</div>
										<div class="kt-user-card__badge">
											<span class="btn btn-success btn-sm btn-bold btn-font-md">Bienvenido</span>
										</div>
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
												Id: <?=$identificacion ?>
												</div>
												<div class="kt-notification__item-time">
												Email: <?=$email ?>
												</div>
											</div>
										</a>
										<div class="kt-notification__custom">
											<a id="cerrar_sesion" href="#" target="_blank" class="btn btn-label-brand btn-sm btn-bold">Cerrar sesión</a>
										</div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User Bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h3 class="kt-subheader__title">Validador de derechos</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
								<span class="kt-subheader__desc">Información de Afiliado</span>
								
								<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
									<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
									<span class="kt-input-icon__icon kt-input-icon__icon--right">
										<span><i class="flaticon2-search-1"></i></span>
									</span>
								</div>
							</div>
							<div class="kt-subheader__toolbar">
								<div class="kt-subheader__wrapper">
								<a href="#" class="btn kt-subheader__btn-daterange"  data-toggle="kt-tooltip" title="Fecha actual" data-placement="left">
										<span class="kt-subheader__btn-daterange-title" >Hoy</span>&nbsp;
										<span class="kt-subheader__btn-daterange-date" ><?php echo date("Y-m-d");?></span>
										<i class="flaticon2-calendar-1"></i>
									</a>
									
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
										<div class="kt-grid__item">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v1__nav">
												<div class="kt-wizard-v1__nav-items">
													<a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-globe"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																 Consultar Afiliado
															</div>
														</div>
													</a>
													<a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-list"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																Validador Servicios
															</div>
														</div>
													</a>
													<a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-user-ok"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																Información Afiliado
															</div>
														</div>
													</a>
													<a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-bus-stop"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																Sede de Atención
															</div>
														</div>
													</a>
													<a id="grupoFamiliarTab" class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-users"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																Grupo Familiar
															</div>
														</div>
													</a>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

											<!--begin: Form Wizard Form-->
											<form class="kt-form" id="formValidarServicios">

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
												
													<div class="form-group form-group-last">
														<div class="alert alert-secondary" role="alert">
															<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
															<div class="alert-text" style="font-size: 16px;">
																Recuerde que la Información del Afiliado es confidencial y solo tiene acceso personal autorizado.
															</div>
														</div>
													</div>
													<div class="form-group">
														<label for="exampleSelect1">Seleccione tipo de documento</label>
														<select class="form-control" id="tiposDeDocumento" name="tipoDeDocumento">
															<option value="">Seleccione:</option>
															<option value="CC">CEDULA CIUDADANIA</option>
															<option value="TI">TARJETA IDENTIDAD</option>
															<option value="CN">CERTIFICADO DE NACIDO VIVO</option>
															<option value="RC">REGISTRO CIVIL</option>
															<option value="CE">CEDULA EXTRANJERIA</option>
															<option value="PA">PASAPORTE</option>
															<option value="AS">ADULTO SIN IDENTIFICAR</option>
															<option value="CD">CARNÉ DIPLOMÁTICO</option>
															<option value="MS">MENOR SIN IDENTIFICAR</option>
															<option value="PE">PERMANENCIA ESPECIAL</option>
															<option value="SC">SALVOCONDUCTO</option>															
														</select>
													</div>
													<div class="form-group">
														<label>Numero de identificación</label>
														<input class="form-control" type="text" value="" id="example-text-input" placeholder="Ingrese numero" name="numeroIdentificacion">
														<input type="hidden" value="<?=$tipo?>" id="us_tipo" name="us_tipo">
													</div>
													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<button type="reset" class="btn btn-secondary">Limpiar</button>
															<button type="submit"  class="btn btn-primary" style="font-size: 16px;">Consultar</button>
														</div>
													</div>	
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
													<div class="kt-portlet">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">
																	Información Validador de servicios
																</h3>
															</div>
														</div>
														<div class="kt-portlet__body row">
															<div class="row">
																<div class="col-lg-12">
																	<table class="table table-striped- table-bordered table-hover table-checkable" id="tableValidadorServicios" style="font-size:16px;">
																		<thead>
																			<tr>
																				<th>Derecho Prestación</th>
																				<th>Programa</th> 
																				<th>Descripción Programa</th>
																				<th>Mensaje</th>
																			</tr>
																		</thead>
																		<tbody>
																		</tbody>
																	</table>
																</div>
																<!-- <div class="col-lg-2">														
																	<div class="kt-portlet__head-label">
																		<h6 id="estadoAfil" class="kt-portlet__head-title">
																			1) Estado: 
																		</h6>
																		
																	</div>
																	<div class="kt-portlet__head-label">
																		<h6 id="claseAfil" class="kt-portlet__head-title">
																			2) Clase AFiliado:
																		</h6>
																	</div>
																	<div class="kt-portlet__head-label">
																		<h6 id="nivelAfil" class="kt-portlet__head-title">
																			3) Nivel: 
																		</h6>
																	</div>
																	<div class="kt-portlet__head-label">
																		<h6 id="regimenAfil" class="kt-portlet__head-title">
																			4) Descripción: 
																		</h6>
																	</div>																
																</div> -->
															</div>														
														</div>														
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
														<div class="kt-portlet">
															<div class="kt-portlet__head">
																<div class="kt-portlet__head-label">
																	<h3 class="kt-portlet__head-title">
																		Información Afiliado
																	</h3>
																</div>
															</div>
															<div class="kt-portlet__body">
																<table class="table table-striped- table-bordered table-hover table-checkable" id="tableAfiliado">
																	<thead>
																		<tr> 
																			<th>Tipo de Documento</th>
																			<th>Numero documento</th>
																			<th>Estado del Afiliado</th>
																			<th>Nombre</th>
																			<th>Primer Apellido</th>
																			<th>Segundo Apellido</th>
																			<th>Fecha Nacimiento</th>
																			<th>Estrato ó Nivel</th>
																			<th>Clase Afiliacion</th>
																			<th>Fecha Afiliacion</th>
																			<th>Fecha Desafiliacion</th>
																			<th>Fecha Limite de servicio</th>
																			<?php if ($tipo == "admin") {
																			echo"
																			<th>Sexo</th>
																			<th>Sede Capita</th>
																			<th>email</th>
																			<th>Programa</th>
																			<th>Id Programa</th>
																			<th>Descripcion Programa</th>
																			<th>Nombre Departamento</th>
																			<th>Nombre Municipio</th>
																			<th>Tipo Doc Trabajador</th>
																			<th>Tid Trabajador</th>
																			<th>ID Trabajador</th>
																			<th>Tipo Doc Empresa</th> 
																			<th>ID Empresa</th>
																			<th>Tid Empresa</th>
																			<th>TId Afiliado</th>
																			<th>Estado</th>
																			<th>Id Entidad</th>
																			<th>Direccion</th>
																			<th>Telefono</th>
																			<th>Nombre Empresa</th>
																			<th>Telefono2</th>
																			<th>Id Capita</th>
																			<th>Id Municipio</th>
																			<th>Estado Civil</th>
																			<th>Id Unico</th>
																			<th>Fecha AfiliacionSSS</th>
																			<th>Id Regional</th>
																			<th>Dias Cotizados</th>
																			<th>Id Arp</th>
																			<th>Id Discapacidad</th>
																			<th>Dir Empresa</th>
																			<th>Id Historia09</th>
																			<th>Id Historia12</th>
																			<th>Id Conyuge</th>
																			<th>Cabeza Familia</th>
																			<th>Nombre Trabajador</th>
																			<th>Principal</th>
																			<th>Id Barrio</th>
																			<th>Porcentaje Descuento</th>
																			<th>Tipo Descuento</th>
																			<th>Id Ips Capita</th>
																			<th>Sem CotSSS</th>
																			<th>Codigo Regional</th>";
																		} ?>
																		</tr>
																	</thead>
																	<tbody>
																	</tbody>
																</table>
															</div>
														</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
													<div class="kt-portlet">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">
																	Información Sede Atención
																</h3>
															</div>
														</div>
														<div class="kt-portlet__body">
															<table class="table table-striped- table-bordered table-hover table-checkable" id="tableSede">
																<thead>
																	<tr>
																		<th>Id Sede Atención</th>
																		<th>Sede Atención</th> 
																		<th>Cod Sede Atención</th>
																	</tr>
																</thead>
																<tbody>
																</tbody>
															</table>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Wizard Step 5-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
														<div class="kt-portlet">
															<div class="kt-portlet__head">
																<div class="kt-portlet__head-label">
																	<h3 class="kt-portlet__head-title">
																		Información Grupo Familiar
																	</h3>
																</div>
															</div>
															<div class="kt-portlet__body">
																<table class="table table-striped- table-bordered table-hover table-checkable" id="tableGpoFamiliar">
																	<thead>
																		<tr>
																			<th>Tipo Documento</th> 
																			<th>Numero de documento</th>
																			<th>Nombre</th>
																			<th>Primer Apellido</th>
																			<th>Segundo Apellido</th>
																			<?php if($tipo == "admin") {
																			echo"<th>Sexo</th>
																				<th>Tipo Identificación Trabajador</th>
																				<th>Numero documento Trabajador</th>
																				<th>Tipo Documento Trabajador</th>
																				<th>Estado Caja</th>
																				<th>Estado POS</th>
																				<th>Estado PCO</th>";
																			}
																			?>
																		</tr>
																	</thead>
																	<tbody>
																	</tbody>
																</table>
															</div>
														</div>
												</div>

												<!--end: Form Wizard Step 5-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Anterior
													</div>
													<div id="btnWizardPrev" class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														Siguiente
													</div>
												</div>

												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
						<div class="kt-footer__copyright">
							2021&nbsp;&copy;&nbsp;<a href="https://www.comfenalcovalle.com.co/salud/" target="_blank" class="kt-link">Comfenalco EPS #Delagente</a>
						</div>
						<div class="kt-footer__menu">
							<a href="https://www.comfenalcovalle.com.co/salud/" target="_blank" class="kt-footer__menu-link kt-link">Contácto</a>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->


		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

	



		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};

			var DataTableScroll = {"scrollX": true};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/jquery-validation/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
       <!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo base_url(); ?>assets/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo base_url(); ?>assets/app/custom/general/dashboard.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/app/custom/validador/validador.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="<?php echo base_url(); ?>assets/app/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>