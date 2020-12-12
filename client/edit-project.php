<!DOCTYPE html>
<?php
  session_start();
  include('session_check.php');

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
    <base href="../">
    <meta charset="utf-8" />
    <title>Client | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->


    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="assets/css/client.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">

    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed ">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left rounded-0" id="kt_header_mobile_toggle">
                <span></span>
            </button>

            <button class="btn btn-hover-icon-primary p-0 ml-5" id="kt_sidebar_mobile_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Substract.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z"
                                fill="#000000" fill-rule="nonzero" />
                            <path
                                d="M10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L10.1818182,16 C8.76751186,16 8,15.2324881 8,13.8181818 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span> </button>

            <button class="btn btn-hover-icon-primary p-0 ml-2" id="kt_aside_mobile_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span> </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left d-flex flex-column " id="kt_aside">
                <!--begin::Brand-->
                <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-9">
                    <!--begin::Logo-->
                    <div class="btn p-0 symbol symbol-40 symbol-success" href="?page=index" id="kt_quick_user_toggle">
                        <div class="symbol-label s-avatar">
                            <img alt="Logo" src="assets/media/svg/avatars/saitama.png" width=""
                                class="h-100 align-self-end" />
                        </div>
                    </div>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->

                <!--begin::Nav Wrapper-->
                <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
                    <!--begin::Nav-->
                    <ul class="nav flex-column">
                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Latest Projects">
                            <a href="#" class="nav-link btn btn-icon btn-lg btn-borderless active">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                            <path
                                                d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Metronic Features">
                            <a href="#" class="nav-link btn btn-icon btn-lg btn-borderless" data-toggle="tab"
                                data-target="#kt_aside_tab_2" role="tab">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Latest Reports">
                            <a href="#" class="nav-link btn btn-icon btn-lg btn-borderless" data-toggle="tab"
                                data-target="#kt_aside_tab_3" role="tab">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16"
                                                rx="1.5" />
                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Project Management">
                            <a href="#" class="nav-link btn btn-icon btn-lg btn-borderless" data-toggle="tab"
                                data-target="#kt_aside_tab_4" role="tab">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="User Management">
                            <a href="#" class="nav-link btn btn-icon btn-lg btn-borderless" data-toggle="tab"
                                data-target="#kt_aside_tab_5" role="tab">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Finance & Accounting">
                            <a href="#" class="nav-link btn btn-icon btn-lg btn-borderless" data-toggle="tab"
                                data-target="#kt_aside_tab_6" role="tab">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Nav Wrapper-->

                <!--begin::Footer-->
                <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-8">
                    <!--begin::Notifications-->
                    <a href="#" class="btn btn-icon btn-lg btn-borderless mb-1 position-relative"
                        id="kt_quick_notifications_toggle" data-toggle="tooltip" data-placement="right"
                        data-container="body" data-boundary="window" title="Notifications">
                        <span class="svg-icon svg-icon-xxl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-1 mr-1">3</span>
                    </a>
                    <!--end::Notifications-->

                    <!--begin::Quick Actions-->
                    <a href="#" class="btn btn-icon btn-lg btn-borderless mb-1" id="kt_quick_actions_toggle"
                        data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window"
                        title="Quick Actions">
                        <span class="svg-icon svg-icon-xxl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </a>
                    <!--end::Quick Actions-->

                    <!--begin::Quick Panel-->
                    <a href="#" class="btn btn-icon btn-lg btn-borderless mb-1" id="kt_quick_panel_toggle"
                        data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window"
                        title="Quick Panel">
                        <span class="svg-icon svg-icon-xxl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                    <path
                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </a>
                    <!--end::Quick Panel-->

                    <!--begin::Languages-->
                    <div class="dropdown" data-toggle="tooltip" data-placement="right" data-container="body"
                        data-boundary="window" title="Languages">
                        <a href="#" class="btn btn-icon btn-lg btn-borderless" data-toggle="dropdown"
                            data-offset="0px,0px">
                            <img class="w-20px h-20px rounded" src="assets/media/svg/flags/226-united-states.svg"
                                alt="image" />
                        </a>
                        <!--begin::Dropdown-->
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-left">
                            <!--begin::Nav-->
                            <ul class="navi navi-hover py-4">
                                <!--begin::Item-->
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="assets/media/svg/flags/226-united-states.svg" alt="" />
                                        </span>
                                        <span class="navi-text">English</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="navi-item active">
                                    <a href="#" class="navi-link">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="assets/media/svg/flags/128-spain.svg" alt="" />
                                        </span>
                                        <span class="navi-text">Spanish</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="assets/media/svg/flags/162-germany.svg" alt="" />
                                        </span>
                                        <span class="navi-text">German</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="assets/media/svg/flags/063-japan.svg" alt="" />
                                        </span>
                                        <span class="navi-text">Japanese</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="assets/media/svg/flags/195-france.svg" alt="" />
                                        </span>
                                        <span class="navi-text">French</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Dropdown-->
                    </div>
                    <!--end::Languages-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header  header-fixed ">
                    <!--begin::Header Wrapper-->
                    <div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
                        <!--begin::Container-->
                        <div
                            class=" container-fluid  d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
                            <!--begin::Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Menu-->
                                <div id="kt_header_menu"
                                    class="header-menu header-menu-mobile  header-menu-layout-default ">
                                    <!--begin::Nav-->
                                    <ul class="menu-nav ">
                                        <li class="menu-item menu-item-submenu menu-item-rel">
                                            <a href="client" class="menu-link "><span
                                                    class="menu-text">Dashboard</span></a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-submenu menu-item-rel menu-item-open menu-item-here">
                                            <a href="client/list-project" class="menu-link "><span
                                                    class="menu-text">Project</span></a>
                                        </li>

                                        <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
                                            aria-haspopup="true"><a href="client/report-job" class="menu-link"><span
                                                    class="menu-text">Report</span><span class="menu-desc"></span><i
                                                    class="menu-arrow"></i></a>
                                        </li>
                                        <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
                                            aria-haspopup="true"><a href="client/history" class="menu-link"><span
                                                    class="menu-text">History</span><span class="menu-desc"></span><i
                                                    class="menu-arrow"></i></a>
                                        </li>
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu Wrapper-->

                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header Wrapper-->
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class=" container-fluid ">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <!--begin: Pic-->
                                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                            <div class="symbol symbol-50 symbol-lg-120">
                                                <img alt="Pic" src="assets/media/project-logos/3.png" />
                                            </div>

                                            <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                                                <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                                            </div>
                                        </div>
                                        <!--end: Pic-->
                                        <!--begin: Info-->
                                        <div class="flex-grow-1">
                                            <!--begin: Title-->
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="mr-3">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                                        <?php echo $data_client_detail_project['comp']; ?> <i
                                                            class="flaticon2-correct text-success icon-md ml-2"></i>
                                                    </a>
                                                    <!--end::Name-->

                                                    <!--begin::Contacts-->
                                                    <div class="d-flex flex-wrap my-2">
                                                        <a href="mailto: <?php echo $data_client_detail_project['email']; ?>"
                                                            class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                            fill="#000000" />
                                                                        <circle fill="#000000" opacity="0.3" cx="19.5"
                                                                            cy="17.5" r="2.5" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span> <?php echo $data_client_detail_project['email']; ?>
                                                        </a>
                                                        <a href="#"
                                                            class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <mask fill="white">
                                                                            <use xlink:href="#path-1" />
                                                                        </mask>
                                                                        <g />
                                                                        <path
                                                                            d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span> PR Manager
                                                        </a>
                                                          <a href="http://maps.google.com?q=<?php echo $data_client_detail_project['lokasi']; ?>" target="_blank"
                                                            class="text-muted text-hover-primary font-weight-bold">
                                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span> <?php echo $data_client_detail_project['address']; ?>
                                                        </a>
                                                    </div>
                                                    <!--end::Contacts-->
                                                </div>
                                                <div class="my-lg-0 my-1">
                                                    <a href="#"
                                                        class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">Reports</a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-info font-weight-bolder text-uppercase">New
                                                        Task</a>
                                                </div>
                                            </div>
                                            <!--end: Title-->

                                            <!--begin: Content-->
                                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                                <div
                                                    class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
                                                    <?php echo $data_client_detail_project['deskripsi']; ?>
                                                </div>

                                                <div class="d-flex flex-wrap align-items-center py-2">
                                                    <div class="d-flex align-items-center mr-10">
                                                        <div class="mr-6">
                                                            <div class="font-weight-bold mb-2">Start Date & Time</div>
                                                            <span
                                                                class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold"><?php echo $data_client_detail_project['start']; ?></span>
                                                        </div>
                                                        <div class="">
                                                            <div class="font-weight-bold mb-2">End Date & Time</div>
                                                            <span
                                                                class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold"><?php echo $data_client_detail_project['end']; ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div
                                                        class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
                                                        <span class="font-weight-bold">Progress</span>
                                                        <div class="progress progress-xs mt-2 mb-2">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 63%;" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="font-weight-bolder text-dark">78%</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!--end: Content-->
                                        </div>
                                        <!--end: Info-->
                                    </div>

                                    <div class="separator separator-solid my-7"></div>

                                    <?php 
                                        // $query_salary_cek = mysqli_query($conn, "SELECT * FROM job_req WHERE idj = '$idj'")
                                        // $data_salary_cek = mysqli_fetch_assoc($query_salary_cek);
                                    ?>

                                    <!--begin: Items-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!--begin: Item-->
                                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                            <span class="mr-4">
                                                <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                                            </span>
                                            <div class="d-flex flex-column text-dark-75">
                                                <span class="font-weight-bolder font-size-sm">Salary</span>
                                                <span class="font-weight-bolder font-size-h5"><span
                                                        class="text-dark-50 font-weight-bold">Rp.</span><?php echo $data_client_detail_project['salary']; ?></span>
                                            </div>
                                        </div>
                                        <!--end: Item-->

                                        <!--begin: Item-->
                                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                            <span class="mr-4">
                                                <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                                            </span>
                                            <div class="d-flex flex-column text-dark-75">
                                                <span class="font-weight-bolder font-size-sm">Ammout of Talent</span>
                                                <span class="font-weight-bolder font-size-h5"><span
                                                        class="text-dark-50 font-weight-bold"></span><?php echo $data_client_detail_project['talentamout']; ?> Person</span>
                                            </div>
                                        </div>
                                        <!--end: Item-->

                                        <!--begin: Item-->
                                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                            <span class="mr-4">
                                                <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                            </span>
                                            <div class="d-flex flex-column text-dark-75">
                                                <span class="font-weight-bolder font-size-sm">Grand Total</span>
                                                <span class="font-weight-bolder font-size-h5"><span
                                                        class="text-dark-50 font-weight-bold">Rp.</span><?php echo $data_client_detail_project['grandtotal']; ?></span>
                                            </div>
                                        </div>
                                        <!--end: Item-->

                                        <!--begin: Item-->
                                        <div class="d-flex align-items-center flex-lg-fill my-1" a>
                                            <span class="mr-4">
                                                <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                                            </span>
                                            <div class="symbol-group symbol-hover">
                                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                                    title="Mark Stone">
                                                    <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                                </div>
                                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                                    title="Charlie Stone">
                                                    <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                                </div>
                                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                                    title="Luca Doncic">
                                                    <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                                </div>
                                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                                    title="Nick Mana">
                                                    <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                                </div>
                                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                                    title="Teresa Fox">
                                                    <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                                </div>
                                                <div class="symbol symbol-30 symbol-circle symbol-light">
                                                    <a href="client/list-talent.php?idj=<?php echo $idj?>">
                                                    <span class="symbol-label font-weight-bold">5+</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Item-->
                                    </div>
                                    <!--begin: Items-->
                                </div>
                            </div>
                            <!--end::Card-->

                            <!--begin::Card-->
                            <div class="card card-custom gutter-bs">
                                <!--begin::Header-->
                                <div class="card-header card-header-tabs-line">
                                    <div class="card-toolbar">
                                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x"
                                            role="tablist">
                                            <li class="nav-item mr-3">
                                                <a class="nav-link active" data-toggle="tab"
                                                    href="#kt_apps_projects_view_tab_2">
                                                    <span class="nav-icon mr-2"><span class="svg-icon mr-3">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span></span>
                                                    <span class="nav-text font-weight-bold">Project Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mr-3">
                                                <a class="nav-link" data-toggle="tab"
                                                    href="#kt_apps_projects_view_tab_3">
                                                    <span class="nav-icon mr-2"><span class="svg-icon mr-3">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span></span>
                                                    <span class="nav-text font-weight-bold">Access Control</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mr-3">
                                                <a class="nav-link" data-toggle="tab"
                                                    href="#kt_apps_projects_view_tab_4">
                                                    <span class="nav-icon mr-2"><span class="svg-icon mr-3">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10"
                                                                        r="6" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span></span>
                                                    <span class="nav-text font-weight-bold">Settings</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab"
                                                    href="#kt_apps_projects_view_tab_1">
                                                    <span class="nav-icon mr-2"><span class="svg-icon mr-3">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                                        fill="#000000" />
                                                                    <circle fill="#000000" opacity="0.3" cx="18.5"
                                                                        cy="5.5" r="2.5" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span></span>
                                                    <span class="nav-text font-weight-bold">Notes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="card-body px-0">
                                    <div class="tab-content pt-5">
                                        <!--begin::Tab Content-->
                                        <div class="tab-pane active" id="kt_apps_projects_view_tab_2" role="tabpanel">
                                            <form class="form" method="post">
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Project Info:</h3>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Project
                                                        Name</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control form-control-lg form-control-solid" name="projectname"
                                                            type="text" value="<?php echo $data_client_detail_project['judul']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Project
                                                        Description</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <textarea class="form-control form-control-lg form-control-solid" name="projectdescription" rows="8" cols="80"><?php echo $data_client_detail_project['deskripsi']; ?></textarea>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Project
                                                        Owner</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control form-control-lg form-control-solid"
                                                            type="text" value="Bold" />
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Customer
                                                        Name</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control form-control-lg form-control-solid"
                                                            type="text" value="Loop Inc." />
                                                        <span class="form-text text-muted">If you want your invoices
                                                            addressed to a company. Leave blank to use your full
                                                            name.</span>
                                                    </div>
                                                </div> -->
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Address</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control form-control-lg form-control-solid" name="address"
                                                            type="text" value="<?php echo $data_client_detail_project['address']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Maps</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control form-control-lg form-control-solid" name="lokasi"
                                                            type="text" value="<?php echo $data_client_detail_project['lokasi']; ?>" />
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed my-10"></div>

                                                <!--begin::Heading-->
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Contact Info:</h3>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Contact
                                                        Phone</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="la la-phone"></i></span></div>
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid" name="phone"
                                                                value="<?php echo $data_client_detail_project['phone']; ?>" placeholder="Phone" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Email
                                                        Address</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="la la-at"></i></span></div>
                                                            <input type="email" name="email"
                                                                class="form-control form-control-lg form-control-solid"
                                                                value="<?php echo $data_client_detail_project['email']; ?>" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Company
                                                        Site</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid" name="compweb"
                                                                placeholder="http://example.com" value="<?php echo $data_client_detail_project['compweb']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                        <button type="submit"
                                                            class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                                            name="update_project_info">
                                                            UPDATE
                                                        </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!--end::Tab Content-->

                                        <!--begin::Tab Content-->
                                        <div class="tab-pane" id="kt_apps_projects_view_tab_3" role="tabpanel">
                                            <form class="form">
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <!--begin::Notice-->
                                                        <div class="alert alert-custom alert-light-danger fade show mb-9"
                                                            role="alert">
                                                            <div class="alert-icon"><i class="flaticon-warning"></i>
                                                            </div>
                                                            <div class="alert-text">Configure user passwords to expire
                                                                periodically.
                                                                <br />Users will need warning that their passwords are
                                                                going to expire, or they might inadvertently get locked
                                                                out of the system!</div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="ki ki-close"></i></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end::Notice-->
                                                    </div>
                                                </div>

                                                <!--begin::Heading-->
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Account:</h3>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <div class="form-group row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 col-form-label text-right">Username</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div
                                                            class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                            <input
                                                                class="form-control form-control-lg form-control-solid"
                                                                type="text" value="nick84" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Email
                                                        Address</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="la la-at"></i></span></div>
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                value="nick.watson@loop.com" placeholder="Email" />
                                                        </div>
                                                        <span class="form-text text-muted">Email will not be publicly
                                                            displayed. <a href="#">Learn more</a>.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 col-form-label text-right">Language</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <select class="form-control form-control-lg form-control-solid">
                                                            <option>Select Language...</option>
                                                            <option value="id">Bahasa Indonesia - Indonesian</option>
                                                            <option value="msa">Bahasa Melayu - Malay</option>
                                                            <option value="ca">Català - Catalan</option>
                                                            <option value="cs">Čeština - Czech</option>
                                                            <option value="da">Dansk - Danish</option>
                                                            <option value="de">Deutsch - German</option>
                                                            <option value="en" selected="">English</option>
                                                            <option value="en-gb">English UK - British English</option>
                                                            <option value="es">Español - Spanish</option>
                                                            <option value="eu">Euskara - Basque (beta)</option>
                                                            <option value="fil">Filipino</option>
                                                            <option value="fr">Français - French</option>
                                                            <option value="ga">Gaeilge - Irish (beta)</option>
                                                            <option value="gl">Galego - Galician (beta)</option>
                                                            <option value="hr">Hrvatski - Croatian</option>
                                                            <option value="it">Italiano - Italian</option>
                                                            <option value="hu">Magyar - Hungarian</option>
                                                            <option value="nl">Nederlands - Dutch</option>
                                                            <option value="no">Norsk - Norwegian</option>
                                                            <option value="pl">Polski - Polish</option>
                                                            <option value="pt">Português - Portuguese</option>
                                                            <option value="ro">Română - Romanian</option>
                                                            <option value="sk">Slovenčina - Slovak</option>
                                                            <option value="fi">Suomi - Finnish</option>
                                                            <option value="sv">Svenska - Swedish</option>
                                                            <option value="vi">Tiếng Việt - Vietnamese</option>
                                                            <option value="tr">Türkçe - Turkish</option>
                                                            <option value="el">Ελληνικά - Greek</option>
                                                            <option value="bg">Български език - Bulgarian</option>
                                                            <option value="ru">Русский - Russian</option>
                                                            <option value="sr">Српски - Serbian</option>
                                                            <option value="uk">Українська мова - Ukrainian</option>
                                                            <option value="he">עִבְרִית - Hebrew</option>
                                                            <option value="ur">اردو - Urdu (beta)</option>
                                                            <option value="ar">العربية - Arabic</option>
                                                            <option value="fa">فارسی - Persian</option>
                                                            <option value="mr">मराठी - Marathi</option>
                                                            <option value="hi">हिन्दी - Hindi</option>
                                                            <option value="bn">বাংলা - Bangla</option>
                                                            <option value="gu">ગુજરાતી - Gujarati</option>
                                                            <option value="ta">தமிழ் - Tamil</option>
                                                            <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                            <option value="th">ภาษาไทย - Thai</option>
                                                            <option value="ko">한국어 - Korean</option>
                                                            <option value="ja">日本語 - Japanese</option>
                                                            <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                            <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Time
                                                        Zone</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <select class="form-control form-control-lg form-control-solid">
                                                            <option data-offset="-39600"
                                                                value="International Date Line West">(GMT-11:00)
                                                                International Date Line West</option>
                                                            <option data-offset="-39600" value="Midway Island">
                                                                (GMT-11:00) Midway Island</option>
                                                            <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa
                                                            </option>
                                                            <option data-offset="-36000" value="Hawaii">(GMT-10:00)
                                                                Hawaii</option>
                                                            <option data-offset="-28800" value="Alaska">(GMT-08:00)
                                                                Alaska</option>
                                                            <option data-offset="-25200"
                                                                value="Pacific Time (US &amp; Canada)">(GMT-07:00)
                                                                Pacific Time (US &amp; Canada)</option>
                                                            <option data-offset="-25200" value="Tijuana">(GMT-07:00)
                                                                Tijuana</option>
                                                            <option data-offset="-25200" value="Arizona">(GMT-07:00)
                                                                Arizona</option>
                                                            <option data-offset="-21600"
                                                                value="Mountain Time (US &amp; Canada)">(GMT-06:00)
                                                                Mountain Time (US &amp; Canada)</option>
                                                            <option data-offset="-21600" value="Chihuahua">(GMT-06:00)
                                                                Chihuahua</option>
                                                            <option data-offset="-21600" value="Mazatlan">(GMT-06:00)
                                                                Mazatlan</option>
                                                            <option data-offset="-21600" value="Saskatchewan">
                                                                (GMT-06:00) Saskatchewan</option>
                                                            <option data-offset="-21600" value="Central America">
                                                                (GMT-06:00) Central America</option>
                                                            <option data-offset="-18000"
                                                                value="Central Time (US &amp; Canada)">(GMT-05:00)
                                                                Central Time (US &amp; Canada)</option>
                                                            <option data-offset="-18000" value="Guadalajara">(GMT-05:00)
                                                                Guadalajara</option>
                                                            <option data-offset="-18000" value="Mexico City">(GMT-05:00)
                                                                Mexico City</option>
                                                            <option data-offset="-18000" value="Monterrey">(GMT-05:00)
                                                                Monterrey</option>
                                                            <option data-offset="-18000" value="Bogota">(GMT-05:00)
                                                                Bogota</option>
                                                            <option data-offset="-18000" value="Lima">(GMT-05:00) Lima
                                                            </option>
                                                            <option data-offset="-18000" value="Quito">(GMT-05:00) Quito
                                                            </option>
                                                            <option data-offset="-14400"
                                                                value="Eastern Time (US &amp; Canada)">(GMT-04:00)
                                                                Eastern Time (US &amp; Canada)</option>
                                                            <option data-offset="-14400" value="Indiana (East)">
                                                                (GMT-04:00) Indiana (East)</option>
                                                            <option data-offset="-14400" value="Caracas">(GMT-04:00)
                                                                Caracas</option>
                                                            <option data-offset="-14400" value="La Paz">(GMT-04:00) La
                                                                Paz</option>
                                                            <option data-offset="-14400" value="Georgetown">(GMT-04:00)
                                                                Georgetown</option>
                                                            <option data-offset="-10800" value="Atlantic Time (Canada)">
                                                                (GMT-03:00) Atlantic Time (Canada)</option>
                                                            <option data-offset="-10800" value="Santiago">(GMT-03:00)
                                                                Santiago</option>
                                                            <option data-offset="-10800" value="Brasilia">(GMT-03:00)
                                                                Brasilia</option>
                                                            <option data-offset="-10800" value="Buenos Aires">
                                                                (GMT-03:00) Buenos Aires</option>
                                                            <option data-offset="-9000" value="Newfoundland">(GMT-02:30)
                                                                Newfoundland</option>
                                                            <option data-offset="-7200" value="Greenland">(GMT-02:00)
                                                                Greenland</option>
                                                            <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00)
                                                                Mid-Atlantic</option>
                                                            <option data-offset="-3600" value="Cape Verde Is.">
                                                                (GMT-01:00) Cape Verde Is.</option>
                                                            <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                            <option data-offset="0" value="Monrovia">(GMT) Monrovia
                                                            </option>
                                                            <option data-offset="0" value="UTC">(GMT) UTC</option>
                                                            <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin
                                                            </option>
                                                            <option data-offset="3600" value="Edinburgh">(GMT+01:00)
                                                                Edinburgh</option>
                                                            <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon
                                                            </option>
                                                            <option data-offset="3600" value="London">(GMT+01:00) London
                                                            </option>
                                                            <option data-offset="3600" value="Casablanca">(GMT+01:00)
                                                                Casablanca</option>
                                                            <option data-offset="3600" value="West Central Africa">
                                                                (GMT+01:00) West Central Africa</option>
                                                            <option data-offset="7200" value="Belgrade">(GMT+02:00)
                                                                Belgrade</option>
                                                            <option data-offset="7200" value="Bratislava">(GMT+02:00)
                                                                Bratislava</option>
                                                            <option data-offset="7200" value="Budapest">(GMT+02:00)
                                                                Budapest</option>
                                                            <option data-offset="7200" value="Ljubljana">(GMT+02:00)
                                                                Ljubljana</option>
                                                            <option data-offset="7200" value="Prague">(GMT+02:00) Prague
                                                            </option>
                                                            <option data-offset="7200" value="Sarajevo">(GMT+02:00)
                                                                Sarajevo</option>
                                                            <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje
                                                            </option>
                                                            <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw
                                                            </option>
                                                            <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb
                                                            </option>
                                                            <option data-offset="7200" value="Brussels">(GMT+02:00)
                                                                Brussels</option>
                                                            <option data-offset="7200" value="Copenhagen">(GMT+02:00)
                                                                Copenhagen</option>
                                                            <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid
                                                            </option>
                                                            <option data-offset="7200" value="Paris">(GMT+02:00) Paris
                                                            </option>
                                                            <option data-offset="7200" value="Amsterdam">(GMT+02:00)
                                                                Amsterdam</option>
                                                            <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin
                                                            </option>
                                                            <option data-offset="7200" value="Bern">(GMT+02:00) Bern
                                                            </option>
                                                            <option data-offset="7200" value="Rome">(GMT+02:00) Rome
                                                            </option>
                                                            <option data-offset="7200" value="Stockholm">(GMT+02:00)
                                                                Stockholm</option>
                                                            <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna
                                                            </option>
                                                            <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo
                                                            </option>
                                                            <option data-offset="7200" value="Harare">(GMT+02:00) Harare
                                                            </option>
                                                            <option data-offset="7200" value="Pretoria">(GMT+02:00)
                                                                Pretoria</option>
                                                            <option data-offset="10800" value="Bucharest">(GMT+03:00)
                                                                Bucharest</option>
                                                            <option data-offset="10800" value="Helsinki">(GMT+03:00)
                                                                Helsinki</option>
                                                            <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev
                                                            </option>
                                                            <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv
                                                            </option>
                                                            <option data-offset="10800" value="Riga">(GMT+03:00) Riga
                                                            </option>
                                                            <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia
                                                            </option>
                                                            <option data-offset="10800" value="Tallinn">(GMT+03:00)
                                                                Tallinn</option>
                                                            <option data-offset="10800" value="Vilnius">(GMT+03:00)
                                                                Vilnius</option>
                                                            <option data-offset="10800" value="Athens">(GMT+03:00)
                                                                Athens</option>
                                                            <option data-offset="10800" value="Istanbul">(GMT+03:00)
                                                                Istanbul</option>
                                                            <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk
                                                            </option>
                                                            <option data-offset="10800" value="Jerusalem">(GMT+03:00)
                                                                Jerusalem</option>
                                                            <option data-offset="10800" value="Moscow">(GMT+03:00)
                                                                Moscow</option>
                                                            <option data-offset="10800" value="St. Petersburg">
                                                                (GMT+03:00) St. Petersburg</option>
                                                            <option data-offset="10800" value="Volgograd">(GMT+03:00)
                                                                Volgograd</option>
                                                            <option data-offset="10800" value="Kuwait">(GMT+03:00)
                                                                Kuwait</option>
                                                            <option data-offset="10800" value="Riyadh">(GMT+03:00)
                                                                Riyadh</option>
                                                            <option data-offset="10800" value="Nairobi">(GMT+03:00)
                                                                Nairobi</option>
                                                            <option data-offset="10800" value="Baghdad">(GMT+03:00)
                                                                Baghdad</option>
                                                            <option data-offset="14400" value="Abu Dhabi">(GMT+04:00)
                                                                Abu Dhabi</option>
                                                            <option data-offset="14400" value="Muscat">(GMT+04:00)
                                                                Muscat</option>
                                                            <option data-offset="14400" value="Baku">(GMT+04:00) Baku
                                                            </option>
                                                            <option data-offset="14400" value="Tbilisi">(GMT+04:00)
                                                                Tbilisi</option>
                                                            <option data-offset="14400" value="Yerevan">(GMT+04:00)
                                                                Yerevan</option>
                                                            <option data-offset="16200" value="Tehran">(GMT+04:30)
                                                                Tehran</option>
                                                            <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul
                                                            </option>
                                                            <option data-offset="18000" value="Ekaterinburg">(GMT+05:00)
                                                                Ekaterinburg</option>
                                                            <option data-offset="18000" value="Islamabad">(GMT+05:00)
                                                                Islamabad</option>
                                                            <option data-offset="18000" value="Karachi">(GMT+05:00)
                                                                Karachi</option>
                                                            <option data-offset="18000" value="Tashkent">(GMT+05:00)
                                                                Tashkent</option>
                                                            <option data-offset="19800" value="Chennai">(GMT+05:30)
                                                                Chennai</option>
                                                            <option data-offset="19800" value="Kolkata">(GMT+05:30)
                                                                Kolkata</option>
                                                            <option data-offset="19800" value="Mumbai">(GMT+05:30)
                                                                Mumbai</option>
                                                            <option data-offset="19800" value="New Delhi">(GMT+05:30)
                                                                New Delhi</option>
                                                            <option data-offset="19800" value="Sri Jayawardenepura">
                                                                (GMT+05:30) Sri Jayawardenepura</option>
                                                            <option data-offset="20700" value="Kathmandu">(GMT+05:45)
                                                                Kathmandu</option>
                                                            <option data-offset="21600" value="Astana">(GMT+06:00)
                                                                Astana</option>
                                                            <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka
                                                            </option>
                                                            <option data-offset="21600" value="Almaty">(GMT+06:00)
                                                                Almaty</option>
                                                            <option data-offset="21600" value="Urumqi">(GMT+06:00)
                                                                Urumqi</option>
                                                            <option data-offset="23400" value="Rangoon">(GMT+06:30)
                                                                Rangoon</option>
                                                            <option data-offset="25200" value="Novosibirsk">(GMT+07:00)
                                                                Novosibirsk</option>
                                                            <option data-offset="25200" value="Bangkok">(GMT+07:00)
                                                                Bangkok</option>
                                                            <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi
                                                            </option>
                                                            <option data-offset="25200" value="Jakarta">(GMT+07:00)
                                                                Jakarta</option>
                                                            <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00)
                                                                Krasnoyarsk</option>
                                                            <option data-offset="28800" value="Beijing">(GMT+08:00)
                                                                Beijing</option>
                                                            <option data-offset="28800" value="Chongqing">(GMT+08:00)
                                                                Chongqing</option>
                                                            <option data-offset="28800" value="Hong Kong">(GMT+08:00)
                                                                Hong Kong</option>
                                                            <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00)
                                                                Kuala Lumpur</option>
                                                            <option data-offset="28800" value="Singapore">(GMT+08:00)
                                                                Singapore</option>
                                                            <option data-offset="28800" value="Taipei">(GMT+08:00)
                                                                Taipei</option>
                                                            <option data-offset="28800" value="Perth">(GMT+08:00) Perth
                                                            </option>
                                                            <option data-offset="28800" value="Irkutsk">(GMT+08:00)
                                                                Irkutsk</option>
                                                            <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00)
                                                                Ulaan Bataar</option>
                                                            <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul
                                                            </option>
                                                            <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka
                                                            </option>
                                                            <option data-offset="32400" value="Sapporo">(GMT+09:00)
                                                                Sapporo</option>
                                                            <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo
                                                            </option>
                                                            <option data-offset="32400" value="Yakutsk">(GMT+09:00)
                                                                Yakutsk</option>
                                                            <option data-offset="34200" value="Darwin">(GMT+09:30)
                                                                Darwin</option>
                                                            <option data-offset="34200" value="Adelaide">(GMT+09:30)
                                                                Adelaide</option>
                                                            <option data-offset="36000" value="Canberra">(GMT+10:00)
                                                                Canberra</option>
                                                            <option data-offset="36000" value="Melbourne">(GMT+10:00)
                                                                Melbourne</option>
                                                            <option data-offset="36000" value="Sydney">(GMT+10:00)
                                                                Sydney</option>
                                                            <option data-offset="36000" value="Brisbane">(GMT+10:00)
                                                                Brisbane</option>
                                                            <option data-offset="36000" value="Hobart">(GMT+10:00)
                                                                Hobart</option>
                                                            <option data-offset="36000" value="Vladivostok">(GMT+10:00)
                                                                Vladivostok</option>
                                                            <option data-offset="36000" value="Guam">(GMT+10:00) Guam
                                                            </option>
                                                            <option data-offset="36000" value="Port Moresby">(GMT+10:00)
                                                                Port Moresby</option>
                                                            <option data-offset="36000" value="Solomon Is.">(GMT+10:00)
                                                                Solomon Is.</option>
                                                            <option data-offset="39600" value="Magadan">(GMT+11:00)
                                                                Magadan</option>
                                                            <option data-offset="39600" value="New Caledonia">
                                                                (GMT+11:00) New Caledonia</option>
                                                            <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji
                                                            </option>
                                                            <option data-offset="43200" value="Kamchatka">(GMT+12:00)
                                                                Kamchatka</option>
                                                            <option data-offset="43200" value="Marshall Is.">(GMT+12:00)
                                                                Marshall Is.</option>
                                                            <option data-offset="43200" value="Auckland">(GMT+12:00)
                                                                Auckland</option>
                                                            <option data-offset="43200" value="Wellington">(GMT+12:00)
                                                                Wellington</option>
                                                            <option data-offset="46800" value="Nuku'alofa">(GMT+13:00)
                                                                Nuku'alofa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center mb-0">
                                                    <label
                                                        class="col-xl-3 col-lg-3 col-form-label text-right">Communication</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                Email
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                SMS
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                Phone
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed my-10"></div>

                                                <!--begin::Heading-->
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Security:</h3>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Login
                                                        verification</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <button type="button"
                                                            class="btn btn-light-primary font-weight-bold btn-sm">Setup
                                                            login verification</button>
                                                        <span class="form-text text-muted">
                                                            After you log in, you will be asked for additional
                                                            information to confirm your identity and protect your
                                                            account from being compromised.
                                                            <a href="#">Learn more</a>.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Password
                                                        reset verification</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                Require personal information to reset your password
                                                            </label>
                                                        </div>
                                                        <span class="form-text text-muted">
                                                            For extra security, this requires you to confirm your email
                                                            or phone number when you reset your password.
                                                            <a href="#">Learn more</a>.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <button type="button"
                                                            class="btn btn-light-danger font-weight-bold btn-sm">Deactivate
                                                            your account ?</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--end::Tab Content-->

                                        <!--begin::Tab Content-->
                                        <div class="tab-pane" id="kt_apps_projects_view_tab_4" role="tabpanel">
                                            <form class="form">
                                                <!--begin::Heading-->
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Setup Email Notification:</h3>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Email
                                                        Notification</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <span class="switch">
                                                            <label>
                                                                <input type="checkbox" checked="checked"
                                                                    name="email_notification_1" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Send Copy
                                                        To Personal Email</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <span class="switch">
                                                            <label>
                                                                <input type="checkbox" name="email_notification_2" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed my-10"></div>

                                                <!--begin::Heading-->
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Activity Related Emails:</h3>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">When To
                                                        Email</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-list">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                You have new notifications
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                You're sent a direct message
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>
                                                                Someone adds you as a connection
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">When To
                                                        Escalate Emails</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-list">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                Upon new order
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                New membership approval
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>
                                                                Member registration
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed my-10"></div>

                                                <!--begin::Heading-->
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                        <h3 class="font-size-h6 mb-5">Updates From Keenthemes:</h3>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Email You
                                                        With</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="checkbox-list">
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                News about Metronic product and feature updates
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" />
                                                                <span></span>
                                                                Tips on getting more out of Keen
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>
                                                                Things you missed since you last logged into Keen
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>
                                                                News about Metronic on partner products and other
                                                                services
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" checked="checked" />
                                                                <span></span>
                                                                Tips on Metronic business products
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--end::Tab Content-->

                                        <!--begin::Tab Content-->
                                        <div class="tab-pane" id="kt_apps_projects_view_tab_1" role="tabpanel">
                                            <div class="container">
                                                <form class="form">
                                                    <div class="form-group">
                                                        <textarea
                                                            class="form-control form-control-lg form-control-solid"
                                                            id="exampleTextarea" rows="3"
                                                            placeholder="Type notes"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="#"
                                                                class="btn btn-light-primary font-weight-bold">Add
                                                                notes</a>
                                                            <a href="#"
                                                                class="btn btn-clean font-weight-bold">Cancel</a>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="separator separator-dashed my-10"></div>

                                                <!--begin::Timeline-->
                                                <div class="timeline timeline-3">
                                                    <div class="timeline-items">
                                                        <div class="timeline-item">
                                                            <div class="timeline-media">
                                                                <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                                            </div>
                                                            <div class="timeline-content">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="mr-2">
                                                                        <a href="#"
                                                                            class="text-dark-75 text-hover-primary font-weight-bold">
                                                                            New order has been placed
                                                                        </a>
                                                                        <span class="text-muted ml-2">
                                                                            Today
                                                                        </span>
                                                                        <span
                                                                            class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
                                                                    </div>
                                                                    <div class="dropdown ml-2" data-toggle="tooltip"
                                                                        title="Quick actions" data-placement="left">
                                                                        <a href="#"
                                                                            class="btn btn-hover-light-primary btn-sm btn-icon"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="ki ki-more-hor icon-md"></i>
                                                                        </a>
                                                                        <div
                                                                            class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                            <!--begin::Navigation-->
                                                                            <ul class="navi navi-hover">
                                                                                <li
                                                                                    class="navi-header font-weight-bold py-4">
                                                                                    <span class="font-size-lg">Choose
                                                                                        Label:</span>
                                                                                    <i class="flaticon2-information icon-md text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="right"
                                                                                        title="Click to learn more..."></i>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mb-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-success">Customer</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-primary">Member</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mt-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-footer py-4">
                                                                                    <a class="btn btn-clean font-weight-bold btn-sm"
                                                                                        href="#">
                                                                                        <i
                                                                                            class="ki ki-plus icon-sm"></i>
                                                                                        Add new
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <!--end::Navigation-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="p-0">
                                                                    Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium,
                                                                    totam rem aperiam, eaque ipsa quae ab illo inventore
                                                                    veritatis et quasi architecto.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item">
                                                            <div class="timeline-media">
                                                                <i class="flaticon2-shield text-danger"></i>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="mr-2">
                                                                        <a href="#"
                                                                            class="text-dark-75 text-hover-primary font-weight-bold">
                                                                            Member has sent a request.
                                                                        </a>
                                                                        <span class="text-muted ml-2">
                                                                            8:30PM 20 June
                                                                        </span>
                                                                        <span
                                                                            class="label label-light-danger font-weight-bolder label-inline ml-2">pending</span>
                                                                    </div>
                                                                    <div class="dropdown ml-2" data-toggle="tooltip"
                                                                        title="Quick actions" data-placement="left">
                                                                        <a href="#"
                                                                            class="btn btn-hover-light-primary btn-sm btn-icon"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="ki ki-more-hor icon-md"></i>
                                                                        </a>
                                                                        <div
                                                                            class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                            <!--begin::Navigation-->
                                                                            <ul class="navi navi-hover">
                                                                                <li
                                                                                    class="navi-header font-weight-bold py-4">
                                                                                    <span class="font-size-lg">Choose
                                                                                        Label:</span>
                                                                                    <i class="flaticon2-information icon-md text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="right"
                                                                                        title="Click to learn more..."></i>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mb-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-success">Customer</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-primary">Member</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mt-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-footer py-4">
                                                                                    <a class="btn btn-clean font-weight-bold btn-sm"
                                                                                        href="#">
                                                                                        <i
                                                                                            class="ki ki-plus icon-sm"></i>
                                                                                        Add new
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <!--end::Navigation-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="p-0">
                                                                    Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium,
                                                                    totam rem aperiam, eaque ipsa quae ab illo inventore
                                                                    veritatis et quasi architecto.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item">
                                                            <div class="timeline-media">
                                                                <i class="flaticon2-layers text-warning"></i>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="mr-2">
                                                                        <a href="#"
                                                                            class="text-dark-75 text-hover-primary font-weight-bold">
                                                                            System deployment has been completed.
                                                                        </a>
                                                                        <span class="text-muted ml-2">
                                                                            11:00AM 30 June
                                                                        </span>
                                                                        <span
                                                                            class="label label-light-warning font-weight-bolder label-inline ml-2">done</span>
                                                                    </div>
                                                                    <div class="dropdown ml-2" data-toggle="tooltip"
                                                                        title="Quick actions" data-placement="left">
                                                                        <a href="#"
                                                                            class="btn btn-hover-light-primary btn-sm btn-icon"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="ki ki-more-hor icon-md"></i>
                                                                        </a>
                                                                        <div
                                                                            class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                            <!--begin::Navigation-->
                                                                            <ul class="navi navi-hover">
                                                                                <li
                                                                                    class="navi-header font-weight-bold py-4">
                                                                                    <span class="font-size-lg">Choose
                                                                                        Label:</span>
                                                                                    <i class="flaticon2-information icon-md text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="right"
                                                                                        title="Click to learn more..."></i>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mb-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-success">Customer</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-primary">Member</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mt-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-footer py-4">
                                                                                    <a class="btn btn-clean font-weight-bold btn-sm"
                                                                                        href="#">
                                                                                        <i
                                                                                            class="ki ki-plus icon-sm"></i>
                                                                                        Add new
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <!--end::Navigation-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="p-0">
                                                                    Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium,
                                                                    totam rem aperiam, eaque ipsa quae ab illo inventore
                                                                    veritatis et quasi architecto.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item">
                                                            <div class="timeline-media">
                                                                <i class="flaticon2-notification fl text-primary"></i>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="mr-2">
                                                                        <a href="#"
                                                                            class="text-dark-75 text-hover-primary font-weight-bold">
                                                                            Database backup has been completed.
                                                                        </a>
                                                                        <span class="text-muted ml-2">
                                                                            2 months ago
                                                                        </span>
                                                                        <span
                                                                            class="label label-light-primary font-weight-bolder label-inline ml-2">delivered</span>
                                                                    </div>
                                                                    <div class="dropdown ml-2" data-toggle="tooltip"
                                                                        title="Quick actions" data-placement="left">
                                                                        <a href="#"
                                                                            class="btn btn-hover-light-primary btn-sm btn-icon"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="ki ki-more-hor icon-md"></i>
                                                                        </a>
                                                                        <div
                                                                            class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                                            <!--begin::Navigation-->
                                                                            <ul class="navi navi-hover">
                                                                                <li
                                                                                    class="navi-header font-weight-bold py-4">
                                                                                    <span class="font-size-lg">Choose
                                                                                        Label:</span>
                                                                                    <i class="flaticon2-information icon-md text-muted"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="right"
                                                                                        title="Click to learn more..."></i>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mb-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-success">Customer</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-primary">Member</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="navi-item">
                                                                                    <a href="#" class="navi-link">
                                                                                        <span class="navi-text">
                                                                                            <span
                                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="navi-separator mt-3 opacity-70">
                                                                                </li>
                                                                                <li class="navi-footer py-4">
                                                                                    <a class="btn btn-clean font-weight-bold btn-sm"
                                                                                        href="#">
                                                                                        <i
                                                                                            class="ki ki-plus icon-sm"></i>
                                                                                        Add new
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <!--end::Navigation-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="p-0">
                                                                    Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium,
                                                                    totam rem aperiam, eaque ipsa quae ab illo inventore
                                                                    veritatis et quasi architecto.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Aside Secondary-->
            <div class="sidebar sidebar-left d-flex flex-row-auto flex-column " id="kt_sidebar">
                <!--begin::Aside Secondary Header-->
                <div class="sidebar-header flex-column-auto pt-9 pb-5 px-5 px-lg-10">
                    <!--begin::Toolbar-->
                    <div class="d-flex">
                        <!--begin::Desktop Search-->
                        <div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline">
                            <!--begin::Form-->
                            <form method="get" class="quick-search-form">
                                <div class="input-group rounded" style="background-color: #EBDBCB;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon--></span> </span>
                                    </div>

                                    <input type="text" class="form-control form-control-primary h-40px"
                                        placeholder="Search..." />

                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="quick-search-close ki ki-close icon-sm text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->

                            <!--begin::Search Toggle-->
                            <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                            <!--end::Search Toggle-->

                            <!--begin::Dropdown-->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-anim-up">
                                <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350"
                                    data-mobile-height="200">
                                </div>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Desktop Search-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Aside Secondary Header-->

                <!-- sidebar kanan -->
                <!--begin::Aside Secondary Content-->
                <div class="sidebar-content flex-column-fluid pb-10 pt-9 px-5 px-lg-10">
                    <!--begin::List Widget 1-->
                    <div class="card card-custom card-shadowless bg-white gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Pengajuan Gabung Project</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">5 Pengajuan Menunggu</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-8">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-light-primary mr-5 s-avatar">
                                    <img alt="f-klien" src="assets/media/users/100_3.jpg" width="100%" />
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Amang</a>
                                    <span class="text-muted">Nexa - Next generation SAAS</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-light-primary mr-5 s-avatar">
                                    <img alt="f-klien" src="assets/media/users/100_3.jpg" width="100%" />
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Amang</a>
                                    <span class="text-muted">B & Q - Food Company </span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-light-primary mr-5 s-avatar">
                                    <img alt="f-klien" src="assets/media/users/100_3.jpg" width="100%" />
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Amang</a>
                                    <span class="text-muted">Ad Brand - Luxury Footwear </span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-light-primary mr-5 s-avatar">
                                    <img alt="f-klien" src="assets/media/users/100_3.jpg" width="100%" />
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Amang</a>
                                    <span class="text-muted">Air B & B - Real Estate</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-light-primary mr-5 s-avatar">
                                    <img alt="f-klien" src="assets/media/users/100_3.jpg" width="100%" />
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Amang</a>
                                    <span class="text-muted">Nexa - Next generation SAAS</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <div class="col-12 text-center">
                                    <a href="client/tawaran-job" class="btn btn-pj btn-light-primary">More</a>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 1-->
                </div>
                <!--end::Aside Secondary Content-->
            </div>
            <!--end::Aside Secondary-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->



    <!-- begin::Notifications Panel-->
    <div id="kt_quick_notifications" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between mb-10">
            <h3 class="font-weight-bold m-0">
                Notifications
                <small class="text-muted font-size-sm ml-2">24 New</small>
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_notifications_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Nav-->
            <div class="navi navi-icon-circle navi-spacer-x-0">
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">
                                5 new user generated report
                            </div>
                            <div class="text-muted">
                                Reports based on sales
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                2 new items submited
                            </div>
                            <div class="text-muted">
                                by Grog John
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                79 PSD files generated
                            </div>
                            <div class="text-muted">
                                Reports based on sales
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                $2900 worth producucts sold
                            </div>
                            <div class="text-muted">
                                Total 234 items
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                4.5h-avarage response time
                            </div>
                            <div class="text-muted">
                                Fostest is Barry
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i
                                    class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                3 Defence alerts
                            </div>
                            <div class="text-muted">
                                40% less alerts thar last week
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                Avarage 4 blog posts per author
                            </div>
                            <div class="text-muted">
                                Most posted 12 time
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                16 authors joined last week
                            </div>
                            <div class="text-muted">
                                9 photodrapehrs, 7 designer
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                2 new items have been submited
                            </div>
                            <div class="text-muted">
                                by Grog John
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                2.8 GB-total downloads size
                            </div>
                            <div class="text-muted">
                                Mostly PSD end AL concepts
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                $2900 worth producucts sold
                            </div>
                            <div class="text-muted">
                                Total 234 items
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                7 new user generated report
                            </div>
                            <div class="text-muted">
                                Reports based on sales
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->

                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold  font-size-lg">
                                4.5h-avarage response time
                            </div>
                            <div class="text-muted">
                                Fostest is Barry
                            </div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::Notifications Panel-->

    <!--begin::Quick Actions Panel-->
    <div id="kt_quick_actions" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
            <h3 class="font-weight-bold m-0">
                Quick Actions
                <small class="text-muted font-size-sm ml-2">finance & reports</small>
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_actions_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <div class="row gutter-b">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Accounting</span>
                    </a>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Members</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <div class="row gutter-b">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                        fill="#000000" />
                                    <path
                                        d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Projects</span>
                    </a>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Customers</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <div class="row gutter-b">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
                                    <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
                                    <path
                                        d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Email</span>
                    </a>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Color-profile.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <circle fill="#000000" cx="12" cy="9" r="5" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Settings</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <div class="row">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                        <span class="svg-icon svg-icon-3x svg-icon-primary m-0">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> <span
                            class="d-block font-weight-bold font-size-h6 mt-2">Orders</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Actions Panel-->

    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
                User Profile
                <small class="text-muted font-size-sm ml-2">12 messages</small>
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="client/profil" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        James Jones
                    </a>
                    <div class="text-muted mt-1">
                        Application Developer
                    </div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon--></span> </span>
                                <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                            </span>
                        </a>

                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->

            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="client/profil" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Profile
                            </div>
                            <div class="text-muted">
                                Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->

                <!--begin::Item-->
                <a href="custom/apps/user/profile-3.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-warning">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13"
                                                rx="1.5" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8"
                                                rx="1.5" />
                                            <path
                                                d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6"
                                                rx="1.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Messages
                            </div>
                            <div class="text-muted">
                                Inbox and tasks
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->

                <!--begin::Item-->
                <a href="custom/apps/user/profile-2.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-danger">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Activities
                            </div>
                            <div class="text-muted">
                                Logs and notifications
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->

                <!--begin::Item-->
                <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Tasks
                            </div>
                            <div class="text-muted">
                                latest tasks and projects
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
            </div>
            <!--end::Nav-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->

            <!--begin::Notifications-->
            <div>
                <!--begin:Heading-->
                <h5 class="mb-5">
                    Recent Notifications
                </h5>
                <!--end:Heading-->

                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-warning mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                        fill="#000000" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </span>

                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                            purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-success mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                    <path
                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                            be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-danger mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                        fill="#000000" />
                                    <path
                                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                            would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5">
                    <span class="svg-icon svg-icon-info mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                                    <path
                                        d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                        fill="#000000"
                                        transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                                    <path
                                        d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                                    <path
                                        d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </span>

                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                            best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->


    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-left pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New
                                    Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active
                                    Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                                    Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-warning mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                                    purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-success mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                            <path
                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                                    be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-danger mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                                    would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
                            <span class="svg-icon svg-icon-info mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                                            <path
                                                d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                fill="#000000"
                                                transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                                            <path
                                                d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                                            <path
                                                d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                                    best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>

                    <!--end::Section-->
                </div>
                <!--end::Tabpane-->

                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">
                                        5 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        79 PSD files generated
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                            class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                            class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        3 Defence alerts
                                    </div>
                                    <div class="text-muted">
                                        40% less alerts thar last week
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        Avarage 4 blog posts per author
                                    </div>
                                    <div class="text-muted">
                                        Most posted 12 time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        16 authors joined last week
                                    </div>
                                    <div class="text-muted">
                                        9 photodrapehrs, 7 designer
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items have been submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2.8 GB-total downloads size
                                    </div>
                                    <div class="text-muted">
                                        Mostly PSD end AL concepts
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        7 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                            class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->

                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" name="quick_panel_notifications_2" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->

                        <div class="separator separator-dashed my-6"></div>

                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->

                        <div class="separator separator-dashed my-6"></div>

                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->

    <!--begin::Chat Panel-->
    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon--></span> </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-primary label-inline font-weight-bold">new</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>

                                        <li class="navi-separator my-3"></li>

                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        How likely are you to recommend our company
                                        to your friends and family?
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Hey there, we’re just writing to let you know
                                        that you’ve been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <!--end::Message Out-->

                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <!--end::Message Out-->

                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        You can unwatch this repository immediately by clicking here: <a
                                            href="#">https://github.com</a>
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Discover what students who viewed Learn Figma - UI/UX Design. Essential Training
                                        also viewed
                                    </div>
                                </div>
                                <!--end::Message Out-->

                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                        provided
                                    </div>
                                </div>
                                <!--end::Message Out-->
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->

                    <!--begin::Footer-->
                    <div class="card-footer align-items-center">
                        <!--begin::Compose-->
                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i
                                        class="flaticon2-photograph icon-lg"></i></a>
                                <a href="#" class="btn btn-clean btn-icon btn-md"><i
                                        class="flaticon2-photo-camera  icon-lg"></i></a>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                            </div>
                        </div>
                        <!--begin::Compose-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Chat Panel-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon--></span></div>
    <!--end::Scrolltop-->

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

    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.6"></script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js?v=7.0.6"></script>
    <!-- <script src="assets/js/pages/crud/datatables/data-sources/html.js?v=7.0.6"></script> -->
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
