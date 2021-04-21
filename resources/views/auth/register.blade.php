
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
	<head>
		<meta charset="utf-8" />
		<title>Admin ● Boilerplate</title>
		<meta name="description" content="{{ $page['description'] ?? 'Welcome to CMS Boilerplate!' }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('template/css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('template/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('template/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('template/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->

		<link rel="shortcut icon" href="{{ asset('system/favico.png') }}" />

        <style>
        .login-aside{
            background: #1e3c72;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		
        <!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-20 pt-15">
						<!--begin::Aside header-->
						<a href="/admin" class="text-center mb-10">
							<img src="{{ asset('system/logo.png') }}" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
                        
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #fff;">KREDO EXAM</h3>
						<!--end::Aside title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({{ asset('media/svg/illustrations/login-visual-2.svg') }})"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->

				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_login_signin_form">
								
                                <!--begin::Title-->
								<div class="pb-13 pt-lg-0 pt-5">
									<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Join us! Fill up this form</h3>
									<!-- <span class="text-muted font-weight-bold font-size-h4">New Here?
									<a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Create an Account</a></span> -->
								</div>
								<!--begin::Title-->
								
                                <!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Name</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="name" autocomplete="off" />
								</div>
								<!--end::Form group-->

                                <!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="email" autocomplete="off" />
								</div>
								<!--end::Form group-->

                                <!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Password</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
								</div>
								<!--end::Form group-->

                                <!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Confirm Password</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="confirm_password" autocomplete="off" />
								</div>
								<!--end::Form group-->
                                

								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="button" id="kt_register_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Register</button>
                                    &nbsp; or &nbsp;&nbsp;&nbsp; 
									<button type="button" class="btn btn-outline-secondary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" onclick="window.location='/'">Sign In</button>
								</div>
								<!--end::Action-->

							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Content body-->
					<!--begin::Content footer-->
					@include("template.footer.auth.footer")
					<!--end::Content footer-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->

		<script>var HOST_URL = "<?=config("app.url")?>";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('template/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('template/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('template/js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->

		<!--begin::Page Scripts(used by this page)-->
        <script>
            // Class Definition
            var KTLogin = function() {
                var _login;

                var _showForm = function(form) {
                    var cls = 'login-' + form + '-on';
                    var form = 'kt_login_' + form + '_form';

                    _login.removeClass('login-forgot-on');
                    _login.removeClass('login-signin-on');
                    _login.removeClass('login-signup-on');

                    _login.addClass(cls);

                    KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
                }

                var _handleSignInForm = function() {
                    var validation;

                    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                    validation = FormValidation.formValidation(
                        KTUtil.getById('kt_login_signin_form'),
                        {
                            fields: {
                                name: {
                                    validators: {
                                        notEmpty: {
                                            message: 'Your name is required'
                                        }
                                    }
                                },
                                email: {
                                    validators: {
                                        notEmpty: {
                                            message: 'Your email is required'
                                        },
                                        emailAddress: {
                                            message: 'The value is not a valid email address'
                                        }
                                    }
                                },
                                password: {
                                    validators: {
                                        notEmpty: {
                                            message: 'Your password is required'
                                        }
                                    }
                                },
                                confirm_password: {
                                    validators: {
                                        notEmpty: {
                                            message: 'You need to confirm your password'
                                        },
                                        identical: {
                                            compare: function() {
                                                return $('[name="password"]').val();
                                            },
                                            message: 'Password does not match!'
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger(),
                                submitButton: new FormValidation.plugins.SubmitButton(),
                                bootstrap: new FormValidation.plugins.Bootstrap()
                            }
                        }
                    );

                    $('#kt_register_submit').on('click', function (e) {
                        e.preventDefault();

                        $("#kt_register_submit").addClass("spinner spinner-white spinner-right").prop("disabled", true);

                        validation.validate().then(function(status) {
                            if (status == 'Valid') {
                                $.ajax({
                                    url: "/register/action",
                                    method: "POST",
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        name: $("[name='name']").val(),
                                        email: $("[name='email']").val(),
                                        password: $("[name='password']").val(),
                                    },
                                    success: function(){
                                        toastr.success("Logged in! Please wait while we're redirecting you to console...");
                                        setTimeout(() => {
                                            location.reload();
                                        }, 1500);
                                    },
                                    error: function(err){
                                        $("#kt_register_submit").removeClass("spinner spinner-white spinner-right").prop("disabled", false);

                                        var body = err.responseJSON;
                                        if(body.hasOwnProperty("message")){
                                            toastr.error(body.message);
                                            return;
                                        }

                                        toastr.error("Something went wrong! Please try again later...");
                                    }
                                });
                                
                            } else {
                                $("#kt_register_submit").removeClass("spinner spinner-white spinner-right").prop("disabled", false);
                                swal.fire({
                                    text: "Sorry, looks like there are some errors detected. Please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                }).then(function() {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    });
             
                }
                // Public Functions
                return {
                    // public functions
                    init: function() {
                        _login = $('#kt_login');

                        _handleSignInForm();
                    }
                };
            }();

            // Class Initialization
            jQuery(document).ready(function() {
                KTLogin.init();
            });
        </script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>