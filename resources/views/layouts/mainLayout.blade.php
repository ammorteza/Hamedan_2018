<!doctype html>
<html class="no-js" lang="en" dir="{{ $lan != 'en' ? 'rtl' : '' }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>همدان پایتخت تاریخ و تمدن ایران زمین</title>
        <link rel="icon" type="image/png" href="{{ asset('pic/hamedan2018.jpg') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/direction-reveal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/immersive-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pgwslider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
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
                                            <div class="top-menu" id="responsive-menu">
                                                <div class="top-bar-left">
                                                    <ul style="background: none" class="dropdown menu element-dir Roboto" data-dropdown-menu>
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
                                        </div>
                                    </div>
                                </div>
                                @foreach($pageInfo->pageHeaderImg as $pageImg)
                                    <li class="is-active orbit-slide">
                                        <img class="orbit-image {{ $pageInfo->headerType->phtType == 'SIMPLE' ? 'top-slider-simple' : 'top-slider' }}" src="{{ asset($pageImg->image->gPath) }}" alt="Space">
                                        @if ($pageInfo->headerType->phtType == 'SIMPLE')
                                            <figcaption class="orbit-caption align-center">
                                                @if($lan == 'fa')
                                                    <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pFaSubject }}</p>
                                                    <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pFaDescription }}</p>
                                                    <center>
                                                        <button style="margin-top: 15px;" class="button primary white-color">اطلاعات بیشتر</button>
                                                    </center>
                                                @elseif($lan == 'en')
                                                    <p style="text-align: center;" class="top-slider-header Roboto-Bold">{{ $pageInfo->pEnSubject }}</p>
                                                    <p style="text-align: center;" class="top-slider-description merienda">{{ $pageInfo->pEnDescription }}</p>
                                                    <center>
                                                        <button style="margin-top: 15px;" class="button primary white-color">More</button>
                                                    </center>
                                                @elseif($lan == 'ar')
                                                    <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pArSubject }}</p>
                                                    <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pArDescription }}</p>
                                                    <center>
                                                        <button style="margin-top: 15px;" class="button primary white-color">اطلاعات بیشتر</button>
                                                    </center>
                                                @endif
                                            </figcaption>
                                        @elseif($pageInfo->headerType->phtType == 'ADVANCE')
                                            <figcaption class="orbit-caption">
                                                <div class="grid-container">
                                                    <div class="grid-x">
                                                        <div style="padding-right: 180px;text-shadow: 1px 1px 2px black" class="large-12 medium-12 small-12">
                                                            @if($lan == 'fa')
                                                                <p class="top-slider-header">{{ $pageInfo->pFaSubject }}</p>
                                                                <p class="top-slider-description">{{ $pageInfo->pFaDescription }}</p>
                                                            @elseif($lan == 'en')
                                                                <p  class="top-slider-header Roboto-Bold">{{ $pageInfo->pEnSubject }}</p>
                                                                <p  class="top-slider-description merienda">{{ $pageInfo->pEnDescription }}</p>
                                                            @elseif($lan == 'ar')
                                                                <p style="text-align: center;" class="top-slider-header">{{ $pageInfo->pArSubject }}</p>
                                                                <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pArDescription }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        @endif
                                    </li>
                                @endforeach
                            </div>
                        </ul>
                        </div>
                    </div>
                </div>
                <!--Top Slider End-->
            </div>
            @yield('content')
            <footer class="footer">
                <div class="grid-x">
                    <div class="large-12 medium-12">
                        <div class="grid-x">
                            <div class="large-4 medium-12 small-12 element-dir">
                                @if($lan == 'fa')
                                    <label class="withe-color">از رویداد ها، جشنواره ها، تورها، خبر ها و... با خبر شوید!</label>
                                @elseif($lan == 'en')
                                    <label class="withe-color cabin">Watch events, festivals, tours, news and more!</label>
                                @elseif($lan == 'ar')
                                    <label class="withe-color">مشاهدة الأحداث والمهرجانات والجولات والأخبار وأكثر!</label>
                                @endif
                                <div class="input-group">
                                    <input class="input-group-field" type="text">
                                    <div class="input-group-button">
                                        @if($lan == 'fa')
                                            <input type="submit" class="button" value="عضویت ">
                                        @elseif($lan == 'en')
                                            <input type="submit" class="button cabin" value="Join ">
                                        @elseif($lan == 'ar')
                                            <input type="submit" class="button" value="عضوية ">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="large-7 medium-12 small-12">
                                <div class="footer-social-icons">
                                    @if($lan == 'fa')
                                        <h6 class="_14 withe-color BYekan center-el">رویداد همدان 2018 را در شبکه های اجتماعی دنبال کنید</h6>
                                    @elseif($lan == 'en')
                                        <h6 class="_14 withe-color BYekan center-el cabin">Follow the 2018 Hamadan event on social networks</h6>
                                    @elseif($lan == 'ar')
                                        <h6 class="_14 withe-color BYekan center-el">متابعة الحدث هامادان 2018 على الشبكات الاجتماعية</h6>
                                    @endif
                                    <ul class="social-icons center-el">
                                        <li><a href="" class="social-icon"> <i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fab fa-instagram"></i></a></li>
                                        <li><a href="" class="social-icon"> <i class="fab fa-telegram-plane"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div style="text-align: center" class="large-1 medium-12 small-12">
                                <img style=";margin-top: -50px;" src="{{ asset('pic/hamedan2018.png') }}" alt="Hamedan-2018" width="90px" height="90px">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 medium-12 element-distanse">
                        <div class="grid-x">
                            @foreach($mainMenus as $mainMenu)
                            <div class="large-3 medium-3 small-12 footer-menu">
                                @if($lan == 'fa')
                                    <a href=""><h6 class="menu-header">{{ $mainMenu->mmFaSubject }}</h6></a>
                                    <ul>
                                        @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($mainMenu->id) as $subMenu)
                                            <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a></li>
                                        @endforeach
                                    </ul>
                                @elseif($lan == 'en')
                                    <a href=""><h6 class="menu-header cabin">{{ $mainMenu->mmEnSubject }}</h6></a>
                                    <ul>
                                        @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($mainMenu->id) as $subMenu)
                                            <li><a class="cabin" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smEnSubject }}</a></li>
                                        @endforeach
                                    </ul>
                                @elseif($lan == 'ar')
                                    <a href=""><h6 class="menu-header">{{ $mainMenu->mmArSubject }}</h6></a>
                                    <ul>
                                        @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($mainMenu->id) as $subMenu)
                                            <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12">
                        <img style="margin-top: 60px;" class="float-center" src="{{ asset('pic/Iran-miras-logo.jpg') }}" alt="میراث فرهنگی صنایع دستی و گردشگری" width="90px" height="90px">
                    </div>
                </div>
            </footer>
            <!--Copy Right Bar Start-->
            <div class="">
                <div class="copyright-bar">
                    <div class="grid-x">
                        <div class="large-12 medium-12">
                            <span>Copyright ©  2018 Key Design and Development Team</span>
                        </div>
                    </div>
                </div>
            </div>
        <!--Copy Right Bar End-->
        <script src="{{ asset('js/vendor/jquery.js') }}"  type="text/javascript"></script>
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

        <!--slick Slider Script-->

        <!--slick Slider Script-->

    </body>
</html>
