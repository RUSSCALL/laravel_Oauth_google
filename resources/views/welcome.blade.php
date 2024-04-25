<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Ceres
Product Version: 1.1.3
Purchase: https://keenthemes.com/products/ceres-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>Ceres HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="Ceres admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Ceres theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Ceres HTML Pro - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/ceres-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Ceres HTML Pro" />
		<link rel="canonical" href="https://preview.keenthemes.com/ceres-html-pro" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Coming Soon -->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-column-fluid text-center p-10">
					<!--begin::Logo-->
					<a href="../dist/index.html" class="mb-10 mb-lg-20 pt-lg-20">
						<img alt="Logo" src="assets/media/logos/default.svg" class="h-35px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="mb-10 mb-lg-15">
						<!--begin::Wrapper-->
						<div class="text-center d-flex flex-column flex-center">
							<!--begin::Coming soon-->
							<div class="d-flex flex-column flex-center">
								<!--begin::Title-->
								<h3 class="fw-bold fs-2qx text-dark m-0 pb-10">Coming Soon</h3>
								<!--end::Title-->
								<!--begin::Counter-->
								<div class="d-flex text-center mb-10 mb-lg-15">
									<div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
										<div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_days"></div>
										<div class="fs-7 fw-semibold text-muted">days</div>
									</div>
									<div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
										<div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_hours"></div>
										<div class="fs-7 text-muted">hrs</div>
									</div>
									<div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
										<div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_minutes"></div>
										<div class="fs-7 text-muted">min</div>
									</div>
									<div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
										<div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_seconds"></div>
										<div class="fs-7 text-muted">sec</div>
									</div>
								</div>
								<!--end::Counter-->
								<!--begin::Description-->
								<div class="fw-bold fs-2 text-muted mb-5">Get notified when we Launch!</div>
								<!--end::Description-->
								<!--begin::Form-->
								<form class="form fv-row text-center" data-kt-redirect-url="../dist/index.html" id="kt_coming_soon_form">
									<!--begin::Input group-->
									<div class="d-flex flex-center">
										<!--begin::Input-->
										<input class="form-control form-control-lg form-control-solid w-md-250px m-2" type="text" name="email" placeholder="Email Address" autocomplete="off" />
										<!--end::Input-->
										<!--begin::Action-->
										<button type="button" id="kt_coming_soon_submit" class="btn btn-lg btn-primary fw-bold m-2 text-nowrap">
											<span class="indicator-label">Notify me</span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<!--end::Action-->
									</div>
									<!--end::Input group-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Coming soon-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-300px" style="background-image: url(assets/media/illustrations/dozzy-1/11.png"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-5">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-semibold fs-6">
						<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
						<a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="https://keenthemes.com/products/ceres-html-pro" class="text-muted text-hover-primary px-2">Purchase</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Coming Soon-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/authentication/sign-up/coming-soon.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>