<!doctype html>
<html class="no-js" lang="en" dir="rtl" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>پنل مدیریت</title>
    <link rel="icon" type="image/png" href="{{ asset('pic/footer/footer-logo.png') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/key.css') }}">
</head>
<body class="Shabnam-Light body-color">
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <!--Right sidebar start-->
        <div style="background-color: #FFFFFF;" class="off-canvas position-right reveal-for-large" id="my-info" data-off-canvas data-position="right">
            <nav style="width: 100%;margin-top: 40px;z-index: 999;position: absolute;" class="accordion">
                <ul style="background-color:#FFFFFF;padding: 10px;line-height: 2;" class="vertical menu sub-menu accordion-menu" data-accordion-menu data-multi-open="false" >
                    <li>
                        <a class="right-mp right-menu-btm-border" href="#"><i class="far fa-newspaper size-21 icon-pos" aria-hidden="true"></i>اخبار</a>
                        <ul class="menu vertical nested">
                            <li>
                                <a href="">درج خبر</a>
                                <a href="">اسلاید خبر</a>
                                <a href="">آلبوم</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="off-canvas-content large-12 medium-12 small-12">
            <div data-sticky-container>
                <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%;background-color: #FFFFFF;" data-top-anchor="1" data-btm-anchor="content:bottom">
                    <div class="title-bar-left">
                        <span style="color: #1b6d85">علی جهان پاک</span>
                    </div>
                    <div class="title-bar-right">
                        <a href="#" class="float-left"><i class="fas fa-sign-out-alt"></i>خروج</a>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<!--Copy Right Bar End-->
<script src="{{ asset('js/vendor/jquery.js') }}"  type="text/javascript"></script>
<script src="{{ asset('js/vendor/foundation.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>