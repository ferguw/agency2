<!DOCTYPE html>
<?php
  include("_init.php");

 ?>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
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
    <base href="">
    <meta charset="utf-8" />
    <title>Metronic | Sign Up</title>
    <meta name="description" content="Singin page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/login-3.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/css/general.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <!--begin::Aside header-->
                    <a href="#" class="login-logo text-center pt-lg-25 pb-10">
                        <img src="assets/media/logos/logo-1.png" class="max-h-70px" alt="" />
                    </a>
                    <!--end::Aside header-->

                    <!--begin::Aside Title-->
                    <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">
                        Dapatkan Job Dari Klien Tanpa Perlu Ribet
                    </h3>
                    <!--end::Aside Title-->
                </div>
                <!--end::Aside Top-->

                <!--begin::Aside Bottom-->
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center"
                    style="background-position-y: calc(100% + 5rem); background-image: url(assets/media/svg/illustrations/login-visual-5.svg)">
                </div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="login-content flex-row-fluid d-flex flex-column p-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-row-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form">
                        <!--begin::Form-->
                        <form class="form" id="kt_login_singin_form" method="post">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <h3 class="font-weight-bolder Signtext-dark font-size-h2 font-size-h1-lg">Sign Up</h3>
                            </div>
                            <!--begin::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
                                <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text"
                                    name="fname" autocomplete="on" />
                            </div>
                            <!--end::Form group-->

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
                                <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text"
                                    name="lname" autocomplete="on" />
                            </div>

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text"
                                    name="email" autocomplete="on" />
                            </div>

                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="password"
                                    name="password" autocomplete="off" />
                            </div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5 text-center">
                                <button type="submit" name="signup_talent" id="kt_login_singin_form_submit_button"
                                    class="btn btn-green font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign
                                    Up</button>
                                    <!-- <a href="talent" id="kt_login_singin_form_submit_button"
                                    class="btn btn-green font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign
                                    In</a> -->
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->


    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#663259",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#F4E1F0",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
    <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
    <!--end::Global Theme Bundle-->


    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="assets/js/pages/custom/login/login-3.js?v=7.0.6"></script> -->
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
