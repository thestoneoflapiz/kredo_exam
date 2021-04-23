
<!DOCTYPE html>
<!--
    Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
    Author: KeenThemes
    Website: http://www.keenthemes.com/
    Contact: support@keenthemes.com
    Follow: www.twitter.com/keenthemes
    Dribbble: www.dribbble.com/keenthemes
    Like: www.facebook.com/keenthemes
    Purchase: https://1.envato.market/EA4JP
    Renew Support: https://1.envato.market/EA4JP
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>{{ $page["title"] ?? "Welcome" }} ● Boilerplate</title>
		<meta name="description" content="{{ $page['description'] ?? 'Welcome to CMS Boilerplate!' }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="{{ $page['cannonical'] ?? url('/') }}" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('template/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('template/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('template/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('template/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ asset('css/public.css') }}" rel="stylesheet" type="text/css" />
        @yield("styles")
		<style>
		.img_for_posts{
			width:50px; height:45px;
			margin:5px 10px;
		}
		</style>
		<!--end::Layout Themes-->

		<link rel="shortcut icon" href="{{ asset('system/favico.png') }}" />
	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" style="background-image: url({{ asset('media/bg/bg-11.jpg') }})" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile">
            <!--begin::Logo-->
            <a href="index.html">
                <img alt="Logo" src="{{ asset('system/logo-h.png') }}" class="logo-default max-h-30px" />
            </a>
            <!--end::Logo-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>
                <!-- <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl"> -->
                        <!--begin::Svg Icon | path: asset('media/svg/icons/General/User.svg-->
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg> -->
                        <!--end::Svg Icon-->
                    <!-- </span>
                </button> -->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    @include("template.header.public.header")
                    <!--end::Header-->

                    <!--begin::Content-->
                    @yield("content")
                    <!--end::Content-->

                    <!--begin::Footer-->
                    @include("template.footer.public.footer")
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
		<!--end::Main-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon |  media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Sticky Toolbar-->
		<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
            <!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Request a Demo" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="/contact-us">
					<i class="flaticon2-telegram-logo"></i>
				</a>
			</li>
			<!--end::Item-->
            <!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Share to Facebook" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-info btn-hover-info" href="javascript:toastr.info('Sharing to Facebook!');">
					<i class="flaticon-facebook-letter-logo"></i>
				</a>
			</li>
			<!--end::Item-->
            <!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Share to Twitter" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="javascript:toastr.info('Sharing to Twitter!');">
					<i class="flaticon-twitter-logo"></i>
				</a>
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Sticky Toolbar-->

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
	
    	<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('template/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('template/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('template/js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->
	
    	<!--begin::Page Vendors(used by this page)-->
		<script src="{{ asset('template/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<!--end::Page Vendors-->
		
        <!--begin::Page Scripts(used by this page)-->
        @yield("scripts")
		<!--end::Page Scripts-->

		<script>
		$("[name=search_posts]").on('keypress',function(e) {
			if(e.which == 13) {
				window.location="/search/posts?keyword="+e.target.value;
			}
		});
		</script>
	</body>
	<!--end::Body-->
</html>