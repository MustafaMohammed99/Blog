<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title', 'Page Title')</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/dashboard/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/pages/page-blog.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->


    @stack('styles')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body data-open="hover" data-menu="horizontal-menu" data-col="content-detached-right-sidebar"
    class="horizontal-layout content-detached-right-sidebar navbar-floating footer-static pace-done menu-expanded horizontal-menu">
    <div class="pace  pace-inactive">
        <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%"
            data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
        data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="navbar-brand"
                        href="../../../html/rtl/horizontal-menu-template/index.html"><span class="brand-logo">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu ficon">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-mail ficon">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Chat"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-message-square ficon">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Calendar"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-calendar ficon">
                                <rect x="3" y="4" width="18" height="18" rx="2"
                                    ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-square ficon">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star ficon text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark ps ps__rtl">
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; left: -7px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle"
                        id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                            class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="javascript:void(0);" data-language="en"><i
                                class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"
                            href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i>
                            French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i
                                class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                            href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i>
                            Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-moon ficon">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-search ficon">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg></a>
                    <div class="search-input">
                        <div class="search-input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..."
                            tabindex="-1" data-search="search">
                        <div class="search-input-close"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg></div>
                        <ul class="search-list search-list-main ps ps__rtl">
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; left: -7px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="javascript:void(0);"
                        data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-shopping-cart ficon">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg><span class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">My Cart</h4>
                                <div class="badge badge-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps ps__rtl">
                            <div class="media align-items-center"><img class="d-block rounded mr-1"
                                    src="../../../app-assets/images/pages/eCommerce/1.png" alt="donuts"
                                    width="62">
                                <div class="media-body"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x ficon cart-item-remove">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Apple watch 5</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span
                                                class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-minus">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span><input class="touchspin-cart form-control"
                                                type="number" value="1"><span
                                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-up" type="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1"
                                    src="../../../app-assets/images/pages/eCommerce/7.png" alt="donuts"
                                    width="62">
                                <div class="media-body"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x ficon cart-item-remove">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Google Home Mini</a></h6><small
                                            class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span
                                                class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-minus">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span><input class="touchspin-cart form-control"
                                                type="number" value="3"><span
                                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-up" type="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1"
                                    src="../../../app-assets/images/pages/eCommerce/2.png" alt="donuts"
                                    width="62">
                                <div class="media-body"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x ficon cart-item-remove">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span
                                                class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-minus">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span><input class="touchspin-cart form-control"
                                                type="number" value="2"><span
                                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-up" type="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1"
                                    src="../../../app-assets/images/pages/eCommerce/3.png" alt="donuts"
                                    width="62">
                                <div class="media-body"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x ficon cart-item-remove">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iMac Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span
                                                class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-minus">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span><input class="touchspin-cart form-control"
                                                type="number" value="1"><span
                                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-up" type="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1"
                                    src="../../../app-assets/images/pages/eCommerce/5.png" alt="donuts"
                                    width="62">
                                <div class="media-body"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x ficon cart-item-remove">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> MacBook Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span
                                                class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-minus">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span><input class="touchspin-cart form-control"
                                                type="number" value="1"><span
                                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                                    class="btn btn-primary bootstrap-touchspin-up" type="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; left: -7px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="font-weight-bolder mb-0">Total:</h6>
                                <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary btn-block waves-effect waves-float waves-light"
                                href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link"
                        href="javascript:void(0);" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg"
                            width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell ficon">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps ps__rtl"><a class="d-flex"
                                href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img
                                                src="../../../app-assets/images/portrait/small/avatar-s-15.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img
                                                src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-x avatar-icon">
                                                    <line x1="18" y1="6" x2="6"
                                                        y2="18"></line>
                                                    <line x1="6" y1="6" x2="18"
                                                        y2="18"></line>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-check avatar-icon">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-alert-triangle avatar-icon">
                                                    <path
                                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                    </path>
                                                    <line x1="12" y1="9" x2="12"
                                                        y2="13"></line>
                                                    <line x1="12" y1="17" x2="12.01"
                                                        y2="17"></line>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High
                                                memory</span>&nbsp;usage</p><small class="notification-text"> BLR
                                            Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; left: -7px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer"><a
                                class="btn btn-primary btn-block waves-effect waves-float waves-light"
                                href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John
                                Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img
                                class="round" src="../../../app-assets//images/portrait/small/avatar-s-11.jpg"
                                alt="avatar" width="40" height="40"><span
                                class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><svg xmlns="http://www.w3.org/2000/svg"
                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user mr-50">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg> Profile</a><a class="dropdown-item" href="app-email.html"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-50">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg> Inbox</a><a class="dropdown-item" href="app-todo.html"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-square mr-50">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg> Task</a><a class="dropdown-item" href="app-chat.html"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-message-square mr-50">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings.html"><svg xmlns="http://www.w3.org/2000/svg"
                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-settings mr-50">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg> Settings</a><a class="dropdown-item" href="page-pricing.html"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-credit-card mr-50">
                                <rect x="1" y="4" width="22" height="16"
                                    rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg> Pricing</a><a class="dropdown-item" href="page-faq.html"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-help-circle mr-50">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg> FAQ</a><a class="dropdown-item" href="page-auth-login-v2.html"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-power mr-50">
                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                <line x1="12" y1="2" x2="12" y2="12"></line>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/doc.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-alert-circle mr-75">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border"
            role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand"
                            href="../../../html/rtl/horizontal-menu-template/index.html"><span class="brand-logo">
                                <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%"
                                            x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                            x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path"
                                                    d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                    style="fill:currentColor"></path>
                                                <path id="Path1"
                                                    d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                    fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                    points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                                </polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                    points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                                </polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                    opacity="0.099999994"
                                                    points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                                </polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                            data-toggle="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="index.html"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg><span data-i18n="Dashboards">Dashboards</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="dashboard-analytics.html" data-toggle="dropdown"
                                    data-i18n="Analytics"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-activity">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg><span data-i18n="Analytics">Analytics</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="dashboard-ecommerce.html" data-toggle="dropdown"
                                    data-i18n="eCommerce"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shopping-cart">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                        </path>
                                    </svg><span data-i18n="eCommerce">eCommerce</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-package">
                                <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg><span data-i18n="Apps">Apps</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="app-email.html" data-toggle="dropdown" data-i18n="Email"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg><span data-i18n="Email">Email</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="app-chat.html" data-toggle="dropdown" data-i18n="Chat"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg><span data-i18n="Chat">Chat</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="app-todo.html" data-toggle="dropdown" data-i18n="Todo"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-check-square">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                    </svg><span data-i18n="Todo">Todo</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="app-calendar.html" data-toggle="dropdown" data-i18n="Calendar"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18"
                                            rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6">
                                        </line>
                                        <line x1="8" y1="2" x2="8" y2="6">
                                        </line>
                                        <line x1="3" y1="10" x2="21" y2="10">
                                        </line>
                                    </svg><span data-i18n="Calendar">Calendar</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="app-kanban.html" data-toggle="dropdown" data-i18n="Kanban"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="14" width="7" height="7">
                                        </rect>
                                        <rect x="3" y="14" width="7" height="7">
                                        </rect>
                                    </svg><span data-i18n="Kanban">Kanban</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Invoice"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13">
                                        </line>
                                        <line x1="16" y1="17" x2="8" y2="17">
                                        </line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg><span data-i18n="Invoice">Invoice</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-invoice-list.html" data-toggle="dropdown"
                                            data-i18n="List"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="List">List</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-invoice-preview.html" data-toggle="dropdown"
                                            data-i18n="Preview"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Preview">Preview</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-invoice-edit.html" data-toggle="dropdown"
                                            data-i18n="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Edit">Edit</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-invoice-add.html" data-toggle="dropdown"
                                            data-i18n="Add"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Add">Add</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="app-file-manager.html" data-toggle="dropdown"
                                    data-i18n="File Manager"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-save">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                        </path>
                                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                        <polyline points="7 3 7 8 15 8"></polyline>
                                    </svg><span data-i18n="File Manager">File Manager</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="eCommerce"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shopping-cart">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                        </path>
                                    </svg><span data-i18n="eCommerce">eCommerce</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-ecommerce-shop.html" data-toggle="dropdown"
                                            data-i18n="Shop"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Shop">Shop</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-ecommerce-details.html" data-toggle="dropdown"
                                            data-i18n="Details"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Details">Details</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-ecommerce-wishlist.html" data-toggle="dropdown"
                                            data-i18n="Wishlist"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Wishlist">Wishlist</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-ecommerce-checkout.html" data-toggle="dropdown"
                                            data-i18n="Checkout"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Checkout">Checkout</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="User"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg><span data-i18n="User">User</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-user-list.html" data-toggle="dropdown" data-i18n="List"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="List">List</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-user-view.html" data-toggle="dropdown" data-i18n="View"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="View">View</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="app-user-edit.html" data-toggle="dropdown" data-i18n="Edit"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Edit">Edit</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-layers">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg><span data-i18n="User Interface">User Interface</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="ui-typography.html" data-toggle="dropdown" data-i18n="Typography"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-type">
                                        <polyline points="4 7 4 4 20 4 20 7"></polyline>
                                        <line x1="9" y1="20" x2="15" y2="20">
                                        </line>
                                        <line x1="12" y1="4" x2="12" y2="20">
                                        </line>
                                    </svg><span data-i18n="Typography">Typography</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="ui-colors.html" data-toggle="dropdown" data-i18n="Colors"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-droplet">
                                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                                    </svg><span data-i18n="Colors">Colors</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="ui-feather.html" data-toggle="dropdown" data-i18n="Feather"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg><span data-i18n="Feather">Feather</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Cards"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16"
                                            rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10">
                                        </line>
                                    </svg><span data-i18n="Cards">Cards</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="card-basic.html" data-toggle="dropdown" data-i18n="Basic"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="card-advance.html" data-toggle="dropdown"
                                            data-i18n="Advance"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Advance">Advance</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="card-statistics.html" data-toggle="dropdown"
                                            data-i18n="Statistics"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Statistics">Statistics</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="card-analytics.html" data-toggle="dropdown"
                                            data-i18n="Analytics"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Analytics">Analytics</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="card-actions.html" data-toggle="dropdown"
                                            data-i18n="Card Actions"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Card Actions">Card Actions</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Components"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-briefcase">
                                        <rect x="2" y="7" width="20" height="14"
                                            rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg><span data-i18n="Components">Components</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-alerts.html" data-toggle="dropdown"
                                            data-i18n="Alerts"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Alerts">Alerts</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-avatar.html" data-toggle="dropdown"
                                            data-i18n="Avatar"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Avatar">Avatar</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-badges.html" data-toggle="dropdown"
                                            data-i18n="Badges"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Badges">Badges</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-breadcrumbs.html" data-toggle="dropdown"
                                            data-i18n="Breadcrumbs"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-buttons.html" data-toggle="dropdown"
                                            data-i18n="Buttons"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Buttons">Buttons</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-carousel.html" data-toggle="dropdown"
                                            data-i18n="Carousel"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Carousel">Carousel</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-collapse.html" data-toggle="dropdown"
                                            data-i18n="Collapse"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Collapse">Collapse</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-divider.html" data-toggle="dropdown"
                                            data-i18n="Divider"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Divider">Divider</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-dropdowns.html" data-toggle="dropdown"
                                            data-i18n="Dropdowns"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Dropdowns">Dropdowns</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-list-group.html" data-toggle="dropdown"
                                            data-i18n="List Group"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="List Group">List Group</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-media-objects.html" data-toggle="dropdown"
                                            data-i18n=""><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="">Media Objects</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-modals.html" data-toggle="dropdown"
                                            data-i18n="Modals"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Modals">Modals</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-navs-component.html" data-toggle="dropdown"
                                            data-i18n="Navs Component"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Navs Component">Navs Component</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-pagination.html" data-toggle="dropdown"
                                            data-i18n="Pagination"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Pagination">Pagination</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-pill-badges.html" data-toggle="dropdown"
                                            data-i18n="Pill Badges"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Pill Badges">Pill Badges</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-pills-component.html" data-toggle="dropdown"
                                            data-i18n="Pills Component"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Pills Component">Pills Component</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-popovers.html" data-toggle="dropdown"
                                            data-i18n="Popovers"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Popovers">Popovers</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-progress.html" data-toggle="dropdown"
                                            data-i18n="Progress"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Progress">Progress</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-spinner.html" data-toggle="dropdown"
                                            data-i18n="Spinner"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Spinner">Spinner</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-tabs-component.html" data-toggle="dropdown"
                                            data-i18n="Tabs Component"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Tabs Component">Tabs Component</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-timeline.html" data-toggle="dropdown"
                                            data-i18n="Timeline"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Timeline">Timeline</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-bs-toast.html" data-toggle="dropdown"
                                            data-i18n="Toasts"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Toasts">Toasts</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="component-tooltips.html" data-toggle="dropdown"
                                            data-i18n="Tooltips"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Tooltips">Tooltips</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Extensions"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-box">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12">
                                        </line>
                                    </svg><span data-i18n="Extensions">Extensions</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-sweet-alerts.html" data-toggle="dropdown"
                                            data-i18n="Sweet Alert"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Sweet Alert">Sweet Alert</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-blockui.html" data-toggle="dropdown"
                                            data-i18n="Block UI"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Block UI">BlockUI</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-toastr.html" data-toggle="dropdown"
                                            data-i18n="Toastr"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Toastr">Toastr</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-sliders.html" data-toggle="dropdown"
                                            data-i18n="Sliders"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Sliders">Sliders</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-drag-drop.html" data-toggle="dropdown"
                                            data-i18n="Drag &amp; Drop"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-tour.html" data-toggle="dropdown"
                                            data-i18n="Tour"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Tour">Tour</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-clipboard.html" data-toggle="dropdown"
                                            data-i18n="Clipboard"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Clipboard">Clipboard</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-media-player.html" data-toggle="dropdown"
                                            data-i18n="Media player"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Media player">Media Player</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-context-menu.html" data-toggle="dropdown"
                                            data-i18n="Context Menu"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Context Menu">Context Menu</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-swiper.html" data-toggle="dropdown"
                                            data-i18n="swiper"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="swiper">Swiper</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-tree.html" data-toggle="dropdown"
                                            data-i18n="Tree"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Tree">Tree</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-ratings.html" data-toggle="dropdown"
                                            data-i18n="Ratings"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Ratings">Ratings</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="ext-component-i18n.html" data-toggle="dropdown"
                                            data-i18n="l18n"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="l18n">l18n</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Page Layouts"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-layout">
                                        <rect x="3" y="3" width="18" height="18"
                                            rx="2" ry="2"></rect>
                                        <line x1="3" y1="9" x2="21" y2="9">
                                        </line>
                                        <line x1="9" y1="21" x2="9" y2="9">
                                        </line>
                                    </svg><span data-i18n="Page Layouts">Page Layouts</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="layout-boxed.html" data-toggle="dropdown"
                                            data-i18n="Layout Boxed"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Layout Boxed">Layout Boxed</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="layout-without-menu.html" data-toggle="dropdown"
                                            data-i18n="Without Menu"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Without Menu">Without Menu</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="layout-empty.html" data-toggle="dropdown"
                                            data-i18n="Layout Empty"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Layout Empty">Layout Empty</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="layout-blank.html" data-toggle="dropdown"
                                            data-i18n="Layout Blank"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Layout Blank">Layout Blank</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-edit">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Form Elements"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-copy">
                                        <rect x="9" y="9" width="13" height="13"
                                            rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg><span data-i18n="Form Elements">Form Elements</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-input.html" data-toggle="dropdown" data-i18n="Input"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Input">Input</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-input-groups.html" data-toggle="dropdown"
                                            data-i18n="Input Groups"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Input Groups">Input Groups</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-input-mask.html" data-toggle="dropdown"
                                            data-i18n="Input Mask"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Input Mask">Input Mask</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-textarea.html" data-toggle="dropdown"
                                            data-i18n="Textarea"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Textarea">Textarea</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-checkbox.html" data-toggle="dropdown"
                                            data-i18n="Checkbox"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Checkbox">Checkbox</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-radio.html" data-toggle="dropdown" data-i18n="Radio"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Radio">Radio</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-switch.html" data-toggle="dropdown" data-i18n="Switch"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Switch">Switch</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-select.html" data-toggle="dropdown" data-i18n="Select"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Select">Select</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-number-input.html" data-toggle="dropdown"
                                            data-i18n="Number Input"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Number Input">Number Input</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-file-uploader.html" data-toggle="dropdown"
                                            data-i18n="File Uploader"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="File Uploader">File Uploader</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-quill-editor.html" data-toggle="dropdown"
                                            data-i18n="Quill Editor"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Quill Editor">Quill Editor</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="form-date-time-picker.html" data-toggle="dropdown"
                                            data-i18n="Date &amp; Time Picker"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Date &amp; Time Picker">Date &amp; Time
                                                Picker</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="form-layout.html" data-toggle="dropdown" data-i18n="Form Layout"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-box">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12">
                                        </line>
                                    </svg><span data-i18n="Form Layout">Form Layout</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="form-wizard.html" data-toggle="dropdown" data-i18n="Form Wizard"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-package">
                                        <line x1="16.5" y1="9.4" x2="7.5" y2="4.21">
                                        </line>
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12">
                                        </line>
                                    </svg><span data-i18n="Form Wizard">Form Wizard</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="form-validation.html" data-toggle="dropdown"
                                    data-i18n="Form Validation"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check-circle">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg><span data-i18n="Form Validation">Form Validation</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="form-repeater.html" data-toggle="dropdown"
                                    data-i18n="Form Repeater"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-rotate-cw">
                                        <polyline points="23 4 23 10 17 10"></polyline>
                                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                                    </svg><span data-i18n="Form Repeater">Form Repeater</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="table-bootstrap.html" data-toggle="dropdown" data-i18n="Table"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-server">
                                        <rect x="2" y="2" width="20" height="8"
                                            rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8"
                                            rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6.01" y2="6">
                                        </line>
                                        <line x1="6" y1="18" x2="6.01" y2="18">
                                        </line>
                                    </svg><span data-i18n="Table">Table</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Datatable"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="14" width="7" height="7">
                                        </rect>
                                        <rect x="3" y="14" width="7" height="7">
                                        </rect>
                                    </svg><span data-i18n="Datatable">Datatable</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="table-datatable-basic.html" data-toggle="dropdown"
                                            data-i18n="Basic"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="table-datatable-advanced.html" data-toggle="dropdown"
                                            data-i18n="Advanced"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Advanced">Advanced</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="table-ag-grid.html" data-toggle="dropdown" data-i18n="agGrid Table"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="14" width="7" height="7">
                                        </rect>
                                        <rect x="3" y="14" width="7" height="7">
                                        </rect>
                                    </svg><span data-i18n="agGrid Table">agGrid Table</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item sidebar-group-active active" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-file-text">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg><span data-i18n="Pages">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Authentication"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-unlock">
                                        <rect x="3" y="11" width="18" height="11"
                                            rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                    </svg><span data-i18n="Authentication">Authentication</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-login-v1.html" data-toggle="dropdown"
                                            data-i18n="LoginV1" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="LoginV1">Login v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-login-v2.html" data-toggle="dropdown"
                                            data-i18n="LoginV2" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="LoginV2">Login v2</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-register-v1.html" data-toggle="dropdown"
                                            data-i18n="RegisterV1" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="RegisterV1">Register v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-register-v2.html" data-toggle="dropdown"
                                            data-i18n="RegisterV2" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="RegisterV2">Register v2</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-forgot-password-v1.html" data-toggle="dropdown"
                                            data-i18n="ForgotPasswordV1" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="ForgotPasswordV1">Forgot Password v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-forgot-password-v2.html" data-toggle="dropdown"
                                            data-i18n="ForgotPasswordV2" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="ForgotPasswordV2">Forgot Password v2</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-reset-password-v1.html" data-toggle="dropdown"
                                            data-i18n="ResetPasswordV1" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="ResetPasswordV1">Reset Password v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-auth-reset-password-v2.html" data-toggle="dropdown"
                                            data-i18n="ResetPasswordV2" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="ResetPasswordV2">Reset Password v2</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="page-account-settings.html" data-toggle="dropdown"
                                    data-i18n="Account Settings"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg><span data-i18n="Account Settings">Account Settings</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="page-profile.html" data-toggle="dropdown" data-i18n="Profile"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg><span data-i18n="Profile">Profile</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="page-faq.html" data-toggle="dropdown" data-i18n="FAQ"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12.01" y2="17">
                                        </line>
                                    </svg><span data-i18n="FAQ">FAQ</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="page-knowledge-base.html" data-toggle="dropdown"
                                    data-i18n="Knowledge Base"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-info">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12">
                                        </line>
                                        <line x1="12" y1="8" x2="12.01" y2="8">
                                        </line>
                                    </svg><span data-i18n="Knowledge Base">Knowledge Base</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="page-pricing.html" data-toggle="dropdown" data-i18n="Pricing"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-dollar-sign">
                                        <line x1="12" y1="1" x2="12" y2="23">
                                        </line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg><span data-i18n="Pricing">Pricing</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu sidebar-group-active active"
                                data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Blog"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-clipboard">
                                        <path
                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                        </path>
                                        <rect x="8" y="2" width="8" height="4"
                                            rx="1" ry="1"></rect>
                                    </svg><span data-i18n="Blog">Blog</span></a>
                                <ul class="dropdown-menu">
                                    <li class="active" data-menu=""><a
                                            class="dropdown-item d-flex align-items-center"
                                            href="page-blog-list.html" data-toggle="dropdown"
                                            data-i18n="List"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="List">List</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-blog-detail.html" data-toggle="dropdown"
                                            data-i18n="Detail"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Detail">Detail</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-blog-edit.html" data-toggle="dropdown"
                                            data-i18n="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Edit">Edit</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Mail Template"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg><span data-i18n="Mail Template">Mail Template</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html"
                                            data-toggle="dropdown" data-i18n="Welcome" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Welcome">Welcome</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html"
                                            data-toggle="dropdown" data-i18n="Reset Password" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Reset Password">Reset Password</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html"
                                            data-toggle="dropdown" data-i18n="Verify Email" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Verify Email">Verify Email</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html"
                                            data-toggle="dropdown" data-i18n="Deactivate Account"
                                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Deactivate Account">Deactivate Account</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html"
                                            data-toggle="dropdown" data-i18n="Invoice" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Invoice">Invoice</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html"
                                            data-toggle="dropdown" data-i18n="Promotional" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Promotional">Promotional</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Miscellaneous"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-file">
                                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                        <polyline points="13 2 13 9 20 9"></polyline>
                                    </svg><span data-i18n="Miscellaneous">Miscellaneous</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-misc-coming-soon.html" data-toggle="dropdown"
                                            data-i18n="Coming Soon" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Coming Soon">Coming Soon</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-misc-not-authorized.html" data-toggle="dropdown"
                                            data-i18n="Not Authorized" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Not Authorized">Not Authorized</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-misc-under-maintenance.html" data-toggle="dropdown"
                                            data-i18n="Maintenance" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Maintenance">Maintenance</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="page-misc-error.html" data-toggle="dropdown" data-i18n="Error"
                                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Error">Error</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-bar-chart-2">
                                <line x1="18" y1="20" x2="18" y2="10"></line>
                                <line x1="12" y1="20" x2="12" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="14"></line>
                            </svg><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Charts"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-pie-chart">
                                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                        <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                    </svg><span data-i18n="Charts">Charts</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="chart-apex.html" data-toggle="dropdown" data-i18n="Apex"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Apex">Apex</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="chart-chartjs.html" data-toggle="dropdown"
                                            data-i18n="Chartjs"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Chartjs">Chartjs</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="maps-leaflet.html" data-toggle="dropdown" data-i18n="Leaflet Maps"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map">
                                        <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                        <line x1="8" y1="2" x2="8" y2="18">
                                        </line>
                                        <line x1="16" y1="6" x2="16" y2="22">
                                        </line>
                                    </svg><span data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-box">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg><span data-i18n="Misc">Misc</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-i18n="Menu Levels"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-menu">
                                        <line x1="3" y1="12" x2="21" y2="12">
                                        </line>
                                        <line x1="3" y1="6" x2="21" y2="6">
                                        </line>
                                        <line x1="3" y1="18" x2="21" y2="18">
                                        </line>
                                    </svg><span data-i18n="Menu Levels">Menu Levels</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                            href="#" data-toggle="dropdown" data-i18n="Second Level"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Second Level">Second Level 2.1</span></a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                            class="dropdown-item d-flex align-items-center dropdown-toggle"
                                            href="#" data-toggle="dropdown" data-i18n="Second Level"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                            </svg><span data-i18n="Second Level">Second Level 2.2</span></a>
                                        <ul class="dropdown-menu">
                                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                    href="#" data-toggle="dropdown"
                                                    data-i18n="Third Level"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="14" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-circle">
                                                        <circle cx="12" cy="12" r="10">
                                                        </circle>
                                                    </svg><span data-i18n="Third Level">Third Level 3.1</span></a>
                                            </li>
                                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                    href="#" data-toggle="dropdown"
                                                    data-i18n="Third Level"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="14" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-circle">
                                                        <circle cx="12" cy="12" r="10">
                                                        </circle>
                                                    </svg><span data-i18n="Third Level">Third Level 3.2</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="disabled" data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="" data-toggle="dropdown" data-i18n="Disabled Menu"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-eye-off">
                                        <path
                                            d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24">
                                        </path>
                                        <line x1="1" y1="1" x2="23" y2="23">
                                        </line>
                                    </svg><span data-i18n="Disabled Menu">Disabled Menu</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                                    data-toggle="dropdown" data-i18n="Documentation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-folder">
                                        <path
                                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg><span data-i18n="Documentation">Documentation</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="https://pixinvent.ticksy.com/" data-toggle="dropdown"
                                    data-i18n="Raise Support"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-life-buoy">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="4.93" y1="4.93" x2="9.17" y2="9.17">
                                        </line>
                                        <line x1="14.83" y1="14.83" x2="19.07" y2="19.07">
                                        </line>
                                        <line x1="14.83" y1="9.17" x2="19.07" y2="4.93">
                                        </line>
                                        <line x1="14.83" y1="9.17" x2="18.36" y2="5.64">
                                        </line>
                                        <line x1="4.93" y1="19.07" x2="9.17" y2="14.83">
                                        </line>
                                    </svg><span data-i18n="Raise Support">Raise Support</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">

            @yield('content')

        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay" style="touch-action: pan-y; user-select: none;"></div>
    <div class="drag-target" style="touch-action: pan-y; user-select: none;"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT © 2020<a
                    class="ml-25" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights
                    Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted &amp; Made
                with<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top waves-effect waves-float waves-light" type="button"
        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/dashboard/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/dashboard/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/dashboard/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @stack('scripts')

    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>



</body>



<!-- END: Body-->

</html>
