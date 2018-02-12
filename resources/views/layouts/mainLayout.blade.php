<!doctype html>
<html class="no-js" lang="en" dir="{{ $lan != 'en' ? 'rtl' : '' }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if($lan == 'fa')
            <title>{{ $pageInfo->pFaTitle }}</title>
        @elseif($lan == 'en')
            <title>{{ $pageInfo->pEnTitle }}</title>
        @elseif($lan == 'ar')
            <title>{{ $pageInfo->pArTitle }}</title>
        @endif
        <link rel="icon" type="image/png" href="{{ asset('pic/hamedan2018.jpg') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/direction-reveal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/immersive-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pgwslider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/videoJs/videoJs.css') }}">
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
        <link rel="stylesheet" href="{{ asset('css/key.css') }}">
    </head>
    <body class="Shabnam-Light">
            <div class="grid-x">
                <!--Top Slider Start-->
                <div class="large-12 medium-12">
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;" data-timer-delay="10000">
                        <ul class="orbit-container">
                            <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
                                <div class="title-bar-title">منو</div>
                            </div>
                            <div class="grid-x">
                                <div class="large-12 medium-12 top-menu-btm-border" style="position: absolute;" >
                                    <div class="grid-x">
                                        <div class="large-12 medium-12 top-menu-border">
                                            <div class="top-menu" id="responsive-menu">
                                                <div class="top-bar-left">
                                                    <ul style="background: none;height: 4.7rem;" class="dropdown menu element-dir Roboto my-text-shadow-effect" data-dropdown-menu>
                                                        @foreach($mainMenus as $mainMenu)
                                                            @if($lan == 'fa')
                                                                <li class="Shabnam-Bold"><a class="{{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmFaSubject }}</a></li>
                                                            @elseif($lan == 'en')
                                                                <li><a class="{{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($mainMenu->mmPageLink . '') }}">{{ $mainMenu->mmEnSubject }}</a></li>
                                                            @elseif($lan == 'ar')
                                                                <li><a class="Al-Jazeera-Arabic-Bold {{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmArSubject }}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    <center style="margin-bottom: -30px;">
                                                        <img style="margin-top: -130px;" src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="80px">
                                                    </center>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{--<div class="grid-x">
                                    <div class="large-12">
                                        <img style="top:54px;left:7rem;z-index: 16;position: absolute;direction: ltr;" src="{{ asset('pic/header-logo.png') }}" alt="Hamedan-2018" width="150px" height="100px">
                                    </div>
                                </div>--}}
                                @foreach($pageInfo->pageHeaderImg as $pageImg)
                                    <li class="is-active orbit-slide">
                                        <img class="orbit-image {{ $pageInfo->headerType->phtType == 'SIMPLE' ? 'top-slider-simple' : 'top-slider my-zoom-out' }}" src="{{ asset($pageImg->image->gPath) }}" alt="Space">
                                        @if ($pageInfo->headerType->phtType == 'SIMPLE')
                                            <figcaption class="orbit-caption align-center my-text-shadow-effect">
                                                @if($lan == 'fa')
                                                    <p style="text-align: center;" class="top-slider-header Shabnam-Bold my-fadeIn-and-move">{{ $pageInfo->pFaSubject }}</p>
                                                    <p style="text-align: center;" class="top-slider-description Duel-Regular">{{ $pageInfo->pFaDescription }}</p>
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
                                                    <p style="text-align: center;" class="top-slider-header Al-Jazeera-Arabic-Bold">{{ $pageInfo->pArSubject }}</p>
                                                    <p style="text-align: center;" class="top-slider-description">{{ $pageInfo->pArDescription }}</p>
                                                    <center>
                                                        <button style="margin-top: 15px;" class="button primary white-color">مزيد من المعلومات</button>
                                                    </center>
                                                @endif
                                            </figcaption>
                                        @elseif($pageInfo->headerType->phtType == 'ADVANCE')
                                            <figcaption class="orbit-caption">
                                                <div class="top-slider-grid-container">
                                                    <div class="grid-x">
                                                        <div class="large-12 medium-6 small-6 my-text-shadow-effect">
                                                            @if($lan == 'fa')
                                                                <p class="top-slider-header Shabnam-Bold">{{ $pageImg->phiFaSubject }}</p>
                                                                <p class="top-slider-description Duel-Regular">{{ $pageImg->phiFaDescription }}</p>
                                                            @elseif($lan == 'en')
                                                                <div class="cabin">
                                                                    <p  class="top-slider-header Roboto-Bold">{{ $pageImg->phiEnSubject }}</p>
                                                                    <p  class="top-slider-description merienda">{{ $pageImg->phiEnDescription }}</p>
                                                                    <a href="#" class="top-slider-description-btn">Read More</a>
                                                                </div>
                                                            @elseif($lan == 'ar')
                                                                <p class="top-slider-header Al-Jazeera-Arabic-Bold">{{ $pageImg->phiArSubject }}</p>
                                                                <p class="top-slider-description Emad-Nora-Arabic">{{ $pageImg->phiArDescription }}</p>
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
                        @if($pageInfo->headerType->phtType == 'ADVANCE')
                            <div style="margin-top: -19%;" class="top-slider-grid-container">
                                <nav class="orbit-bullets">
                                    <div style="padding-top:15vh;" class="grid-x">
                                        <?php $i = 0; ?>
                                        @foreach($pageInfo->pageHeaderImg as $pageImg)
                                            <div class="large-3 medium-3 small-3 padding-lr">
                                                <button class="{{ $i == 0 ? 'is-active' : '' }}" data-slide="{{ $i }}">
                                                    @if($lan == 'fa')
                                                        <p class="element-dir float-right Shabnam-Bold">{{ $pageImg->phiFaSubject }}</p>
                                                    @elseif($lan == 'en')
                                                        <p class="Roboto element-dir-l float-left">{{ $pageImg->phiEnSubject }}</p>
                                                    @elseif($lan == 'ar')
                                                        <p class="Al-Jazeera-Arabic-Regular element-dir float-right">{{ $pageImg->phiArSubject }}</p>
                                                    @endif
                                                    <span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
                                                </button>
                                            </div>
                                            <?php $i++; ?>
                                        @endforeach
                                    </div>
                            </nav>
                        </div>
                        <div class="grid-container">
                            <div class="grid-x">
                                <div style="margin-top: 2px;"  class="large-12 medium-12 small-12">
                                    <a class="jumper" href="#ploop">
                                        <div class="arrow bounce my-text-shadow-effect align-center">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
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
                            <div class="large-4 medium-12 small-12">
                                @if($lan == 'fa')
                                    <label class="withe-color">از رویداد ها، جشنواره ها، تورها، خبر ها و... با خبر شوید!</label>
                                @elseif($lan == 'en')
                                    <label class="withe-color cabin">Watch events, festivals, tours, news and more!</label>
                                @elseif($lan == 'ar')
                                    <label class="withe-color">مشاهدة الأحداث والمهرجانات والجولات والأخبار وأكثر!</label>
                                @endif
                                <div class="input-group element-dir">
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
                            <div class="large-6 medium-12 small-12">
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
                            <div style="text-align: center" class="large-2 medium-12 small-12">
                                <img style=";margin-top: -20px;" src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="100px">
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
                                            <li><a class="cabin" href="{{ url($subMenu->smPageLink . '') }}">{{ $subMenu->smEnSubject }}</a></li>
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
                <div style="margin-top: 60px;" class="grid-x">
                    <div class="medium-12">
                        <div class="grid-x align-center">
                            <div class="large-1 medium-6 small-12">
                                <img class="float-center"  src="{{ asset('pic/footer/miras-footer.png') }}" alt="میراث فرهنگی صنایع دستی و گردشگری" width="60px" height="60px">
                                <p class="logo-slider withe-color my-text-shadow-effect">سازمان میراث فرهنگی، صنایع دستی و گردشگری</p>
                            </div>
                            <div class="large-1 medium-6 small-12">
                                <img class="float-center"  src="{{ asset('pic/footer/ostan-footer.png') }}" alt="استانداری همدان" width="60px" height="60px">
                                <p class="logo-slider withe-color my-text-shadow-effect">استانداری همدان</p>
                            </div>
                            <div class="large-1 medium-6 small-12">
                                <img class="float-center"  src="{{ asset('pic/footer/shahrdari-footer.png') }}" alt="استانداری همدان" width="60px" height="60px">
                                <p class="logo-slider withe-color my-text-shadow-effect">شهرداری همدان</p>
                            </div>
                        </div>
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
        <script src="{{ asset('js/scripts/bundle.js') }}"></script> <!--Content left-->
        <script src="{{ asset('js/jquery.immersive-slider.js') }}"></script><!--Content Image slider-->
        <script src="{{ asset('js/pgwslider.js') }}"></script><!--Content Image slider-->
        <script src="{{ asset('js/videojs/videoJs.js') }}"></script><!--Content Image slider-->
        <script src="{{ asset('js/vendor/foundation.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <!--Remove zoom out class-->
        <script>
            setTimeout(function(){
                $('.my-zoom-out').removeClass('my-zoom-out');
            },10000);
        </script>

        <!--Remove zoom out class-->
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

        <!--jump to section Script-->
        <script>
            $(document).ready(function() {
                $(".jumper").on("click", function( e ) {

                    e.preventDefault();

                    $("body, html").animate({
                        scrollTop: $( $(this).attr('href') ).offset().top
                    }, 600);

                });
            });
        </script>
        <!--jump to section Script-->

        <!--Video JS-->
        <script>
            $(function(){
                var $refreshButton = $('#refresh');
                var $results = $('#css_result');

                function refresh(){
                    var css = $('style.cp-pen-styles').text();
                    $results.html(css);
                }

                refresh();
                $refreshButton.click(refresh);

                // Select all the contents when clicked
                $results.click(function(){
                    $(this).select();
                });
            });

        </script>
        <!--Video JS-->

    </body>
</html>
