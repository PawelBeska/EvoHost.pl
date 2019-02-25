<!DOCTYPE html>
<html lang="en">

<head>
    <title>EVOHOST - Panel partnerski</title>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Panel partnera - eVoHost.pl">
    <meta name="author" content="Panel partnera - eVoHost.pl">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/js/components/bootstrap/dist/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/flag-icon/flag-icon.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/menu-search/css/component.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/color/color-1.css')}}" id="color" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/js/components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/js/components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/j-pro/css/demo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/j-pro/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/pages/j-pro/css/j-forms.css')}}">
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery-ui/jquery-ui.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!"><i class="ti-menu"></i></a>
                        <a class="mobile-search morphsearch-search" href="#"><i class="ti-search"></i></a>
                        <a href="{{route('partner.index')}}">EVOHOST.PL</a>
                        <a class="mobile-options"><i class="ti-more"></i></a>
                    </div>
                    @yield('header')
                </div>
            </nav>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @yield('sidebar')
                    @yield('body')
                </div>
            </div>
        </div>
    </div>



    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->



    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->



    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/tether/dist/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/classie/classie.js')}}"></script>


    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/i18next/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/components/jquery-i18next/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/pages/j-pro/js/jquery.ui.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/pages/j-pro/js/custom/subscrbe-form.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/admin/js/script.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/pcoded.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/demo-12.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/js/jquery.mousewheel.min.js')}}"></script>
    <script>
        $('div.card-header-right').on('click', 'i.icofont-refresh', function () {
            window.datatable.ajax.reload();
        });
    </script>
<script>

</script>
</body>

</html>