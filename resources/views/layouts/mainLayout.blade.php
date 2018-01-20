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
                                                        @if($lan == 'Fa')
                                                            <li><a href="">{{ $mainMenu->mmFaSubject }}</a></li>
                                                        @elseif($lan == 'En')
                                                            <li><a href="">{{ $mainMenu->mmEnSubject }}</a></li>
                                                        @elseif($lan == 'Ar')
                                                            <li><a href="">{{ $mainMenu->mmArSubject }}</a></li>
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
                                @foreach($pageInfo->pageHeaderImg as $pageImg)
                                    <li class="is-active orbit-slide">
                                        <img class="orbit-image top-slider" src="{{ asset($pageImg->image->gPath) }}" alt="Space">
                                        <figcaption class="orbit-caption align-center">
                                            @if($lan == 'Fa')
                                                <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pFaSubject }}</p>
                                                <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pFaDescription }}</p>
                                                <center>
                                                    <button style="margin-top: 15px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                                </center>
                                            @elseif($lan == 'En')
                                                <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pEnSubject }}</p>
                                                <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pEnDescription }}</p>
                                                <center>
                                                    <button style="margin-top: 15px;" class="button primary large white-color">More</button>
                                                </center>
                                            @elseif($lan == 'Ar')
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
            @if(count($subMenu) > 0)
            <!--Middle Menu Start-->
            <div class="grid-x grid-padding-x" data-sticky-container>
                <div style="border-bottom:.1rem solid hsla(0,15%,80%,.3);height: 100px;background-color: #FFFFFF;" class="large-12 medium-12" data-sticky data-top-anchor="650" data-margin-top="0">
                    <ul class="menu align-center top-menu middle-menu element-dir">
                        <li><a href="#">جاذبه ها</a></li>
                        <li><a href="#">صنایع دستی</a></li>
                        <li><a href="#">تورهای گردشگری</a></li>
                        <li><a href="#">مراکز اقامتی</a></li>
                        <li><a href="#">مراکز پذیرایی</a></li>
                    </ul>
                </div>
            </div>
            <!--Middle Menu End-->
            @endif
            @yield('content')
            <script src="{{ asset('js/vendor/jquery.js') }}"></script>
            <script src="{{ asset('js/vendor/foundation.js') }}"></script>
            <script src="{{ asset('js/scripts/bundle.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
