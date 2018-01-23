<!doctype html>
<html class="no-js" lang="en" dir="{{ $lan != 'en' ? 'rtl' : '' }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
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
        <link rel="stylesheet" href="{{ asset('css/immersive-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pgwslider.css') }}">
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
                                <div class="large-12 medium-12 top-menu-btm-border" style="position: absolute;">
                                    <div class="grid-x">
                                        <div class="large-12 medium-12 top-menu-border">
                                            <div style="padding-top: 20px;" class="top-bar top-menu" id="responsive-menu">
                                                <div class="top-bar-left">
                                                    <ul style="background: none" class="dropdown menu element-dir" data-dropdown-menu>
                                                        @foreach($mainMenus as $mainMenu)
                                                            @if($lan == 'fa')
                                                                <li><a class="{{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($mainMenu->mmPageLink . '') }}">{{ $mainMenu->mmFaSubject }}</a></li>
                                                            @elseif($lan == 'en')
                                                                <li><a class="{{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmEnSubject }}</a></li>
                                                            @elseif($lan == 'ar')
                                                                <li><a class="{{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmArSubject }}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <center>
                                                <img style="z-index:15;margin-right: 15px;margin-top: -100px;" src="{{ asset('pic/hamedan2018.png') }}" alt="Hamedan-2018" width="82px" height="82px">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($pageInfo->pageHeaderImg as $pageImg)
                                <li class="is-active orbit-slide">
                                    <img class="orbit-image top-slider" src="{{ asset($pageImg->image->gPath) }}" alt="Space">
                                    <figcaption class="orbit-caption align-center">
                                        @if($lan == 'fa')
                                            <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pFaSubject }}</p>
                                            <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pFaDescription }}</p>
                                            <center>
                                                <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                            </center>
                                        @elseif($lan == 'en')
                                            <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pEnSubject }}</p>
                                            <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pEnDescription }}</p>
                                            <center>
                                                <button style="margin-top: 15px;" class="button primary large white-color">More</button>
                                            </center>
                                        @elseif($lan == 'ar')
                                            <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pArSubject }}</p>
                                            <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pArDescription }}</p>
                                            <center>
                                                <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                            </center>
                                        @endif
                                    </figcaption>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--Top Slider End-->
            </div>
            @yield('content')
            <script src="{{ asset('js/vendor/jquery.js') }}"></script>
            <script src="{{ asset('js/vendor/foundation.js') }}"></script>
            <script src="{{ asset('js/scripts/bundle.js') }}"></script> <!--Content left-->
            <script src="{{ asset('js/jquery.immersive-slider.js') }}"></script><!--Content Image slider-->
            <script src="{{ asset('js/pgwslider.js') }}"></script><!--Content Image slider-->
            <script src="{{ asset('js/app.js') }}"></script>
            <script type="text/javascript">
            $(document).ready( function() {
                $("#immersive_slider").immersive_slider({
                    container: ".main"
                });
            });
            </script>
            <script>
                var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
                (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
                    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                    s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>

            <!--pgwslider-->
            <script>
                $(document).ready(function() {
                    $('.pgwSlider').pgwSlider();
                });
            </script>
            <!--pgwslider-->
    </body>
</html>
