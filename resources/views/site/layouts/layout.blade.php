<!DOCTYPE html>
<html lang="en">

<head>
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Layout |||||||||||||||||||||||||||| -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//www.instagram.com">
    <link rel="dns-prefetch" href="//www.linkedin.com">
    <link rel="dns-prefetch" href="//www.facebook.com">
    <link rel="dns-prefetch" href="//www.twitter.com">
    <link rel="dns-prefetch" href="//accounts.snapchat.com">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="subject" content="جمعية فكرة">
    <meta name="copyright" content="جمعية فكرة">
    <meta name="language" content="ar">
    <meta name="robots" content="index,follow">
    <meta name="topic" content="التطوع والتكنولوجيا">
    <meta name="Classification" content="التطوع والتكنولوجيا">
    <meta name="designer" content="Panorama Alqassiem">
    <meta name="owner" content="جمعية فكرة">
    <meta name="category" content="جمعية فكرة">
    <meta name="author" content="جمعية فكرة">
    <meta name="keywords" content="التمكين , الابتكار , الريادة , جمعية فكرة , جمعية فكرة بالقصيم"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="msapplication-TileColor" content="#342A6D">
    <meta name="theme-color" content="#80A444">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="جمعية فكرة للإبتكار وريادة الأعمال هي جمعية سعودية المنشأ تهتم بالأمور التقنية واعمال الريادة بالمملكة ومنطقة القصيم على الأخص">
    <link rel="icon" href="{{asset('site/images/assets/logo.png')}}">
    <meta property="og:image" content="images/assets/logo.png">
    @include('site.layouts.styles')
</head>

<body>
<div id="wrapper">
    <!-- header begin -->
@include('site.layouts.header')
<!-- header close -->


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        @yield('content')

    </div>


    <!-- footer begin -->
@include('site.layouts.footer')
<!-- footer close -->
    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>




@include('site.layouts.scripts')
{{--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>--}}
{{--<script>--}}
{{--    toastr.options = {--}}
{{--        "preventDuplicates": true,--}}
{{--        "closeButton": true,--}}
{{--        "positionClass": "toast-top-right",--}}
{{--        "timeOut": "200000",--}}
{{--        "newestOnTop": true,--}}
{{--    }--}}
{{--</script>--}}
</body>

</html>

