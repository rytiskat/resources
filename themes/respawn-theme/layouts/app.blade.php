<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>img.lazy{min-height:1px}</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('theme::title', config('app.name', 'Devsome'))</title>
    <meta name="description" content="{{ config('app.description', 'Description') }}">
    <!-- Coded by Devsome.com | theme by m1xawy-->
    <meta name="author" content="Alexander Frank">
    <link rel="icon" href="{{ asset('themes/respawn-theme/assets/img/favicon.png') }}">

    <!-- Fonts -->
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:300,regular,500,600,700%7CQuicksand:300,regular&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,600,800,300&#038;subset=latin&#038;display=swap&#038;ver=1599216051" media="print" onload="this.media='all'">

    <!-- Styles -->
    <link href="{{(Session::get('locale') === 'ar') ? mix('/css/app-rtl.css') : mix('/css/app.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ mix('/plugins/datatables/css/dataTables.css') }}" rel="stylesheet">

    <!-- toastr -->
    <link href="{{ asset('plugins/toastr/css/toastr.css') }}" rel="stylesheet">

    <!-- select2 -->
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Respawn Styles -->
    <link rel="stylesheet" href="{{ asset('themes/respawn-theme/assets/css/respawn-style.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('themes/respawn-theme/assets/css/respawn-style-inline.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('themes/respawn-theme/assets/css/m1xawy.css') }}" media="all" />

    @stack('theme::css')

    <script src="{{ asset('themes/respawn-theme/assets/js/respawn-script-head.js') }}"></script>

</head>
<!-- header settings -->
<!-- menu full with -->
<!--header position-->
<body>

<div id="app">
    <div class="main-wrapper">

        @include('theme::layouts.navbar')

        <!-- header Title -->
        <div class="page-title-wrap " data-type="Home">
            <div class="page-title-bg rest-enable-parallax"></div>
            <div class="page-title-tint"></div>
            <div class="container header-flex header-enable-parallax">
                <h1>
                    Home
                </h1>
                <h4>
                    <p id="breadcrumbs"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last" aria-current="page">Home</span></span></span></p>
                </h4>
            </div>
        </div>
        <!-- header Title -->

        <!-- content -->
        <div class="main-content">
            <main role="main" class="container">
                <div class="row mt-5">
                    @yield('theme::content')
                    @section('theme::sidebar')
                        @include('theme::layouts.sidebar')
                    @show
                </div>
            </main>
        </div>
        <!-- content -->

        @include('theme::layouts.footer')

        <a id="back-to-top" title="Back to top"><i class="fas fa-angle-double-up" aria-hidden="true"></i></a>

    </div>
</div>
<!-- wrapper -->

<script src="{{ asset('themes/respawn-theme/assets/js/respawn-script-foot.js') }}"></script>

<script>

    jQuery(".col-md-12 > h1").hide();
    jQuery(".btn-link:contains('Forgot Your Password?')").removeClass("btn btn-link");
    jQuery(".btn-link[data-toggle='collapse']").removeClass("btn btn-link");

    if (jQuery(".col-md-12 > h1").text().length > 0) {
        jQuery(".page-title-wrap h1").text(jQuery(".col-md-12 > h1").text());
        jQuery(".page-title-wrap .breadcrumb_last").text(jQuery(".col-md-12 > h1").text());
        jQuery(".page-title-wrap").attr("data-type",jQuery(".col-md-12 > h1").text());

    } else if(window.location.href.indexOf("register") > -1){
        jQuery(".page-title-wrap h1").text("Register");
        jQuery(".page-title-wrap .breadcrumb_last").text("Register");
        jQuery(".page-title-wrap").attr("data-type","Register");

    } else if(window.location.href.indexOf("login") > -1){
        jQuery(".page-title-wrap h1").text("Login");
        jQuery(".page-title-wrap .breadcrumb_last").text("Login");
        jQuery(".page-title-wrap").attr("data-type","Login");

    }else {
        jQuery(".page-title-wrap h1").text("Untitled");
        jQuery(".page-title-wrap .breadcrumb_last").text("Untitled");
        jQuery(".page-title-wrap").attr("data-type","Untitled");
    }

</script>

<script>
    const serverTime = new Date({{ \Carbon\Carbon::now()->format('Y, n, j, G, i, s') }});
    const currentTimestamp = {{ \Carbon\Carbon::now()->format('U') }} - Math.round(+new Date() / 1000);
</script>
<script src="{{ mix('/js/app.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('plugins/datatables/js/dataTables.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('plugins/toastr/js/toastr.min.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- custom -->
<script src="{{ asset('js/custom.js') }}"></script>

@stack('theme::javascript')

</body>
</html>
