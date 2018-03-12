<!doctype html>
<html class="no-js" lang="en" dir="rtl" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ورود</title>
    <link rel="icon" type="image/png" href="{{ asset('pic/footer/footer-logo.png') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/key.css') }}">
</head>
<body class="Shabnam-Light">
    <div class="grid-container">
        <div class="grid-x" style="margin-top: 5em">
            <div class="medium-12 small-12">
                <img class="float-center" src="{{ asset('pic/footer/footer-logo.png') }}" width="100px" height="60px">
            </div>
        </div>
        <div class="grid-x">
            <div class="medium-12 small-12">
                <h5 class="BYekan text-center titr-color">پنل مدیریت همدان 2018</h5>
            </div>
        </div>
        <div style="margin-top:20px;" class="grid-x">
            <div style="margin:0 auto;" class="large-3 medium-6 small-10 cell callout ">
            </div>
        </div>
        <div class="grid-x">
            <div class="large-12 medium-12 small-12">
                <ul class="menu small-font align-center ul-margin">
                    <li><a class="footer-menu" href="#">درباره ما</a></li>
                    <li><a class="footer-menu" href="#">ارتباط با ما</a></li>
                </ul>
            </div>
            <div style="margin-top: 5px;" class="large-12 medium-12 small-12">
                <img class="float-center"  src="{{ asset('pic/login-logo.png') }}"  width="250px" height="40px">
            </div>
            <div class="large-12 medium-12 small-12">
                <p style="margin-top: 10px;" class="login-footer-txt-size">تمامی حقوق این وب سایت متعلق به سازمان میراث فرهنگی، صنایع دستی و گردشگری استان همدان می باشد.</p>
            </div>

        </div>
    </div>
<!--Copy Right Bar End-->
<script src="{{ asset('js/vendor/jquery.js') }}"  type="text/javascript"></script>
<script src="{{ asset('js/vendor/foundation.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>