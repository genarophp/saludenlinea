<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>Comfenalco Valle EPS | Usuarios</title>
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
							<li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="dashboard" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-analytics-2"></i><span class="kt-menu__link-text">Tablero</span></a></li>
							<li class="kt-menu__item " aria-haspopup="true"><a href="validadordeservicios" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-protected"></i><span class="kt-menu__link-text">Validador</span></a></li>
							<li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="usuarios" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user"></i><span class="kt-menu__link-text">Usuarios</span></a></li>
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
				<div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                    <div class="container" style="margin-top:5%;">
						<div class="kt-wizard-v1__nav-icon">
							<div class="row">
								<!-- <i class="flaticon-user-ok fa-5x"></i> -->
								<h1 class="page-header text-center">Administración de Usuarios</h1>
							</div>							
						</div>
						<hr>
                        <div class="row" style="margin-top:5%;">
                            <div class="col-sm-12" style="font-size:15px;">
                                <?php
                                    if(validation_errors()){
                                ?>
									<div class="alert alert-info text-center">
										<?php echo validation_errors(); ?>
									</div>
                                <?php
                                    }
								
                    
                                    if($this->session->flashdata('message')){
                                        ?>
                                        <div class="alert alert-info text-center">
                                            <?php echo $this->session->flashdata('message'); ?>
                                        </div>
                                        <?php
                                    }	
                                ?>