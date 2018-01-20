<!doctype html>
<html class="no-js" lang="en" dir="rtl" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>همدان پایتخت تاریخ و تمدن ایران زمین</title>
        <link rel="icon" type="image/png" href="{{ asset('pic/hamedan2018.jpg') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/direction-reveal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/key.css') }}">
    </head>
    <body class="BYekan">
            <div class="grid-x">
                <!--Top Slider Start-->
                    <div class="large-12 medium-12">
                        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                            <ul class="orbit-container">
                                <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                    <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
                                    <div class="title-bar-title">منو</div>
                                </div>
                                <div class="grid-x">
                                    <div class="large-12 medium-12" style="position: absolute;border-bottom:.1rem solid hsla(0,0%,100%,.3);z-index: 15;">
                                        <div style="padding-top: 20px;padding-right: 35px;" class="top-bar top-menu" id="responsive-menu">
                                            <div class="top-bar-left">
                                                <ul style="background: none" class="dropdown menu element-dir" data-dropdown-menu>
                                                    @foreach($mainMenus as $mainMenu)
                                                        <li><a href="">{{ $mainMenu->mmFaSubject }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <center>
                                            <img style="z-index:15;margin-right: 15px;margin-top: -100px;" src="{{ asset('pic/hamedan2018.png') }}" alt="Hamedan-2018" width="82px" height="82px">
                                        </center>
                                    </div>
                                </div>
                                <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                                <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                                <li class="is-active orbit-slide">
                                    <img class="orbit-image top-slider" src="{{ asset('pic/top_slider/1.jpg') }}" alt="Space">
                                    <figcaption class="orbit-caption align-center">
                                        <p style="text-align: center;" class="top-slider-header">همدان</p>
                                        <p style="text-align: center;" class="top-slider-description">پایتخت تاریخ و تمدن ایران زمین</p>
                                        <center>
                                            <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                        </center>
                                    </figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image top-slider top-slider" src="{{ asset('pic/top_slider/2.jpg') }}" alt="Space">
                                    <figcaption class="orbit-caption align-center">
                                        <p style="text-align: center;" class="top-slider-header">صنایع دستی</p>
                                        <p style="text-align: center;" class="top-slider-description">آثار هنرمندان ایران زمین</p>
                                        <center>
                                            <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                        </center>

                                    </figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image top-slider top-slider" src="{{ asset('pic/top_slider/3.jpg') }}" alt="Space">
                                    <figcaption class="orbit-caption align-center">
                                        <p style="text-align: center;" class="top-slider-header">همدان</p>
                                        <p style="text-align: center;" class="top-slider-description">پایتخت تاریخ و تمدن ایران زمین</p>
                                        <center>
                                            <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                        </center>

                                    </figcaption>
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image top-slider top-slider" src="{{ asset('pic/top_slider/4.jpg') }}" alt="Space">
                                    <figcaption class="orbit-caption align-center">
                                        <p style="text-align: center;" class="top-slider-header">همدان</p>
                                        <p style="text-align: center;" class="top-slider-description">پایتخت تاریخ و تمدن ایران زمین</p>
                                        <center>
                                            <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                        </center>

                                    </figcaption>
                                </li>

                            </ul>
                        </div>
                    </div>
                <!--Top Slider End-->

            </div>
            @yield('content')

        <script src="{{ asset('js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/foundation.js') }}"></script>
        <script src="{{ asset('js/scripts/bundle.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
