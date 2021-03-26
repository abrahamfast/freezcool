<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>{{ $title ?? 'development' }}</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/css/style.rtl.css">
    <link rel="stylesheet" href="/css/style.header-classic-variant-two.rtl.css" media="(min-width: 1200px)">
    <link rel="stylesheet" href="/css/style.mobile-header-variant-one.rtl.css" media="(max-width: 1199px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
    @livewireStyles
</head>

<body>
    <div class="site">
        @include('partials/mobileheader')
        @include('partials/siteheader')
        <div class="site__body">
            @yield('body')
        </div>
        @include('partials.site_footer')
    </div>
    @include('partials.mobile_menu')
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="/vendor/nouislider/nouislider.min.js"></script>
    <script src="/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="/vendor/select2/js/select2.min.js"></script>
    <script src="/js/number.js"></script>
    <script src="/js/main.js"></script>

    @livewireScripts
</body>

</html>
