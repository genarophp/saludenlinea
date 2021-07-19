<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Comfenalco Valle EPS | Dashboard</title>
	<meta name="description" content="Dashboard Comfenalco Eps">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script>document.getElementsByTagName("html")[0].className += " js";</script>

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
	<link href="<?php echo base_url(); ?>assets/faq/css/style.css" rel="stylesheet" type="text/css" />
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

	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="<?php echo base_url(); ?>assets/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/logos/favicon.ico" />
</head>

<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="dashboard">
				<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-2021-small.png" />
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
				<div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
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
							<li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="/" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-analytics-2"></i><span class="kt-menu__link-text">Tablero</span></a></li>
							<li class="kt-menu__item " aria-haspopup="true"><a href="/" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-protected"></i><span class="kt-menu__link-text">Validador</span></a></li>
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
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="/" class="kt-menu__link "><span class="kt-menu__link-text">Ir al tablero</span></a></li>
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
									<span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hola,</span>
									<span class="kt-hidden kt-header__topbar-username kt-hidden-mobile"><?=$nombre ?></span>
									<img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>assets/media/logos/default.jpg" />

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
							<h3 class="kt-subheader__title">Tablero</h3>
							<span class="kt-subheader__separator kt-subheader__separator--v"></span>
							<span class="kt-subheader__desc">Información General</span>
							
							<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
								<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
								<span class="kt-input-icon__icon kt-input-icon__icon--right">
									<span><i class="flaticon2-search-1"></i></span>
								</span>
							</div>
						</div>
						<div class="kt-subheader__toolbar">
							<div class="kt-subheader__wrapper">								
								<a href="#" class="btn kt-subheader__btn-daterange"  data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
									<span class="kt-subheader__btn-daterange-title" >Hoy</span>&nbsp;
									<span class="kt-subheader__btn-daterange-date" ><?php echo date("Y-m-d");?></span>
									<i class="flaticon2-calendar-1"></i>
								</a>								
							</div>
						</div>
					</div>
					<!-- end:: Content Head -->

					<!-- begin:: Content -->
					<div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
						<!--Begin::Dashboard 1-->
						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl">
								<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
								<ul class="cd-faq__categories">
									<li><a class="cd-faq__category cd-faq__category-selected truncate" href="#">Preguntas Frecuentes</a></li>
									<li><a class="cd-faq__category truncate" href="#">Soporte</a></li>
									<li><a class="cd-faq__category truncate" href="#">Modelo de Operación</a></li>
									<li><a class="cd-faq__category truncate" href="#">Instructivo de Usuario</a></li>
								</ul> <!-- cd-faq__categories -->

								<div class="cd-faq__items">
									<ul id="basics" class="cd-faq__group">
										<li class="cd-faq__title"><h2>Preguntas Frecuentes</h2></li>
										<li class="cd-faq__item">
											<a class="cd-faq__trigger" href="#0"><span>¿Qué debo hacer si no puedo autenticarme en la aplicación?</span></a>
											<div class="cd-faq__content">
									<div class="text-component">
										<p>Debes validar si el usuario y contraseña son los mismos que te enviaron por correo electrónico, de lo contrario te debes comunicar con el administrador <b>gaparedesh@epscomfenalcovalle.com.co</b> para solicitar restablecer contraseña.</p>
									</div>
											</div> <!-- cd-faq__content -->
										</li>

										<li class="cd-faq__item">
											<a class="cd-faq__trigger" href="#0"><span>¿Cómo puedo cambiar/recuperar contraseña?</span></a>
											<div class="cd-faq__content">
									<div class="text-component">
										<p>Debes escribir al administrador <b>gaparedesh@epscomfenalcovalle.com.co</b> de la aplicación para recuperar la contraseña.</p>
									</div>
											</div> <!-- cd-faq__content -->
										</li>

										<li class="cd-faq__item">
											<a class="cd-faq__trigger" href="#0"><span>¿Qué pasa si no sale información del documento consultado?</span></a>
											<div class="cd-faq__content">
									<div class="text-component">
										<p>Se pueden dar 2 escenarios; el primero que la persona no sea un afiliado de la EPS o que el # de documento no sea el correcto; 
											segundo, que debido a una falla técnica no se pueda consultar la información, por lo que se debe solicitar al grupo de soporte tecnológico la revisión.</p>
									</div>
											</div> <!-- cd-faq__content -->
										</li>

										<li class="cd-faq__item">
											<a class="cd-faq__trigger" href="#0"><span>¿Qué significa periodo de protección laboral?</span></a>
											<div class="cd-faq__content">
									<div class="text-component">
										<p>El período de protección laboral consiste en que una vez suspendido el pago de la cotización como consecuencia 
										de la finalización de la relación laboral o de la pérdida de la capacidad de pago del trabajador independiente, 
										el trabajador y su núcleo familiar gozarán de los beneficios del plan obligatorio de salud hasta por treinta (30) días más, 
										contados a partir de la fecha de la desafiliación, siempre y cuando haya estado afiliado al Sistema como mínimo los doce meses anteriores, 
										para lo cual debe tenerse en cuenta que dicha afiliación debe haber sido en forma continua e ininterrumpida. 
										Cuando el usuario lleve cinco (5) años o más de afiliación continua a una misma Entidad Promotora de Salud, 
										tendrá derecho a un período de protección laboral de tres (3) meses, contados a partir de la fecha de su desafiliación.</p>
									</div>
											</div> <!-- cd-faq__content -->
										</li>
									</ul> <!-- cd-faq__group -->

									<ul id="mobile" class="cd-faq__group">
										<li class="cd-faq__title"><h2>Soporte</h2></li>
										<li class="cd-faq__item">
											<a class="cd-faq__trigger" href="#0"><span>¿Cómo puedo solicitar soporte de la aplicación?</span></a>
											<div class="cd-faq__content">
									<div class="text-component">
										<p>Te puedes comunicar con nuesto grupo de <b>Soporte Tecnológico</b> al celular <b>3207783553</b>.<br>
										Los ingenieros de soporte validarán tu caso para dar solución o escalarlo en caso de requerir un acompamiento adicional en la resolución de tu caso.</p>
									</div>
											</div> <!-- cd-faq__content -->
										</li>

										<li class="cd-faq__item">
											<a class="cd-faq__trigger" href="#0"><span>Horarios de atención de Soporte</span></a>
											<div class="cd-faq__content">
									<div class="text-component">
										<p>El grupo de <b>Soporte Técnológico</b> estará disponible para atender casos en el siguiente horario:</p><br>
										
										<p>Lunes: 		de 8:00 a.m. a 5:00 p.m.</p>
										<p>Martes: 		de 8:00 a.m. a 5:00 p.m.</p>
										<p>Miércoles: 	de 8:00 a.m. a 5:00 p.m.</p>
										<p>Jueves: 		de 8:00 a.m. a 5:00 p.m.</p>
										<p>Viernes: 	de 8:00 a.m. a 5:00 p.m.</p>
									</div>
											</div> <!-- cd-faq__content -->
										</li>

									<li class="cd-faq__item">
										<a class="cd-faq__trigger" href="#0"><span>¿Puedo dar prioridad a un caso de soporte?</span></a>
										<div class="cd-faq__content">
								<div class="text-component">
									<p>Si es un caso crítico, se debe indicar al grupo de soporte tecnológico, quienes recolectarán la evidencia del caso y lo escalarán debidamente par su solución oportuna.</p>
								</div>
										</div> <!-- cd-faq__content -->
									</li>
								</ul> <!-- cd-faq__group -->

								<ul id="account" class="cd-faq__group">
									<li class="cd-faq__title"><h2>Modelo de Operación</h2></li>
									<li class="cd-faq__item">
										<a class="cd-faq__trigger" href="#0"><span>Resumen Modelo de Operación</span></a>
										<div class="cd-faq__content">
											<div class="text-component">
												<p><b>Salud en Línea</b> es la aplicación web que permite a todos los usuarios consultar en tiempo real si un afiliado tiene derecho o no a prestación de servicios de EPS Comfenalco.</p>
												<p>El soporte de la aplicación está dado por el grupo de <b>Soporte Tecnológico</b></p>
												<p>Se brindará ayuda al usuario en caso de consultas sobre a aplicación o atención de incidentes.</p>
												<p>Se contemplan 4 niveles de atención de incidentes:<br><br>
													UNO (1)	<b>Impacto crítico al negocio:</b>	La totalidad del sistema queda inoperante, o impide de manera total la ejecución de los procesos.<br><br>
													DOS (2)	<b>Impacto significativo al negocio:</b> El uso de algunos de los programas soportados se detiene bajo ciertas condiciones, o el sistema, arroja resultados que impiden la continuidad de algunas operaciones o se presenta serio impacto en la productividad de Comfenalco Valle EPS.<br><br>
													TRES (3) <b>Algún impacto al negocio:</b> Al ejecutar algunos de los programas soportados, no funcionan adecuadamente alguna(s) funcionalidad(es) o sus resultados no corresponden con el alcance de la funcionalidad, afectando en alguna medida los datos, la productividad, o el nivel de servicio, existiendo alternativas disponibles que mitigan total o parcialmente el posible impacto generado.<br><br>
													CUATRO (4) <b>Impacto mínimo al negocio:</b> En el uso de programas soportados, se identifican fallas que no afectan la operación cotidiana de Comfenalco Valle EPS o no afectan un proceso crítico de funcionalidad. Incluye errores de presentación, documentación y ayudas.<br><br>
												</p>
												<p>El tiempo de respuesta se refiere al tiempo entre el momento que se recibe el reporte del incidente y se envía la primera notificación por parte de la herramienta de gestión de Comfenalco Valle EPS indicando el número de servicio y el grupo asignado para la atención del incidente.</p>
												<p><b>Tiempos de respuesta:</b><br><br>
													UNO (1)	1 Hora - 10 Horas<br><br>
													DOS (2)	2 Horas	- 16 Horas<br><br>
													TRES (3) 4 Horas - 30 Horas<br><br>
													CUATRO (4) 8 Horas - 42 Horas
												</p>													
												<img src="<?php echo base_url(); ?>assets/media/docs/modelo.png" />
												
											</div>
										</div> <!-- cd-faq__content -->
									</li>										
								</ul> <!-- cd-faq__group -->

								<ul id="payments" class="cd-faq__group">
									<li class="cd-faq__title"><h2>Instructivo de Usuario</h2></li>
									<li class="cd-faq__item">
										<a class="cd-faq__trigger" href="#0"><span>Descarga acá el Instructivo de Usuario</span></a>
										<div class="cd-faq__content">
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<a class="btn btn-primary" style="font-size: 16px;" href="<?php echo base_url(); ?>assets/media/docs/Instructivo.pdf" target="_blank">Descargar Instructivo</a>
												</div>
											</div>
											<br>
										</div> <!-- cd-faq__content -->
									</li>
								</ul> <!-- cd-faq__group -->
							</div> <!-- cd-faq__items -->

							<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
						
						<div class="cd-faq__overlay" aria-hidden="true"></div>
						</section> <!-- cd-faq -->									
							</div>
							
						</div>
					</div>

					<!-- end:: Content -->

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

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo base_url(); ?>assets/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo base_url(); ?>assets/app/custom/general/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="<?php echo base_url(); ?>assets/app/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	<script src="<?php echo base_url(); ?>assets/faq/js/util.js"></script>
  	<script src="<?php echo base_url(); ?>assets/faq/js/main.js"></script>
</body>
</html>