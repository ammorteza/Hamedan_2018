<!doctype html>
<html class="no-js" lang="en" dir="rtl" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <div class="grid-x">
            <div class="medium-12 small-12">
                <img class="float-center" src="{{ asset('pic/footer/footer-logo.png') }}" width="150px" height="80px">
            </div>
        </div>
        <div class="grid-x">
            <div class="medium-12 small-12">
                <h5 class="BYekan text-center  login-txt">پنل مدیریت همدان 2018</h5>
            </div>
        </div>
        <div style="margin-top:20px;" class="grid-x">
            <div style="margin:0 auto;" class="large-3 medium-6 small-10 cell callout ">
                <form data-abide novalidate>
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> خطا در ورود</p>
                    </div>
                    <div class="columns padding-lr">
                        <label>نام کاربری
                            <input style="font-family: FontAwesome;" class="form-element-margin-btm" type="text"  autofocus name="user">
                        </label>
                        <span v-show="errors.has('user')" class="error-font">لطفا نام کاربری را وارد کنید!</span>
                    </div>
                    <div style="margin-top: 20px;" class="medium-12 columns padding-lr">
                        <label>رمز عبور
                            <input style="font-family: FontAwesome;" class="form-element-margin-btm" type="password"  name="pass" v-model="authInfo.password"  v-validate="'required'" :class="{'input': true, 'error-border': errors.has('pass')}">
                        </label>
                        <span v-show="errors.has('pass')" class="error-font">لطفا رمز عبور را وارد کنید!</span>
                    </div>
                    <div class="medium-12 padding-lr top-margin-element">
                        <button style="margin-top: 20px;"  name="submit" class="my-button my-saipa expanded">ورود</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="grid-x">
            <div class="large-12 medium-12 small-12">
                <ul class="menu small-font align-center ul-margin">
                    <li><a class="footer-menu" href="#">دانلود اپلیکیشن</a></li>
                    <li><a class="footer-menu" href="#">درباره ما</a></li>
                    <li><a class="footer-menu" href="#">ارتباط با ما</a></li>
                </ul>
            </div>
            <div class="large-12 medium-12 small-12">
                <p class="footer-txt-size">تمامی حقوق این وب سایت متعلق به نمایندگی سایپا کد ۳۱۱ می باشد.</p>
            </div>
            <div style="margin-top: 20px;" class="large-12 medium-12 small-12">
                <img class="float-center" :src="'pic/keylogo.png'" width="130px" height="20px">
            </div>
        </div>
    </div>
<!--Copy Right Bar End-->
<script src="{{ asset('js/vendor/jquery.js') }}"  type="text/javascript"></script>
<script src="{{ asset('js/vendor/foundation.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>