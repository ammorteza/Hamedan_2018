<!doctype html>
<html class="no-js" lang="en" dir="{{ $lan != 'en' ? 'rtl' : '' }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>اخبار همدان ۲۰۱۸</title>
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
        <!--Top Menu Start-->

        <div class="off-canvas position-right" id="offCanvasNews" data-off-canvas>

            <!-- Close button -->

            <center class="float-center">
                <img src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="80px">
            </center>
            <ul style="margin-top: 15px;" class="menu-slider">
                <li><a href="#">همدان</a></li>
                <li><a href="#">خبر</a></li>
                <li><a href="#">رویداد ها</a></li>
                <li><a href="#">همدان 2018</a></li>
            </ul>
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
                <div class="grid-x">
                    <div style="z-index: 99;" class="large-12 medium-12 small-12">
                        <div style="z-index: 9999;position: absolute; background:transparent;" class="title-bar element-dir" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                            <button class="menu-icon dark" type="button" data-toggle="offCanvasNews"></button>
                            <div class="title-bar-title"></div>
                        </div>
                        <div class="news-top-menu-show" data-sticky-container>
                            <div style="width: 100%;" class="title-bar news-top-menu  element-dir" data-sticky data-options="marginTop:0;">
                                <div class="title-bar-left">
                                    <ul style="margin-top: 30px;" class="dropdown menu align-right" data-dropdown-menu>
                                        @foreach($mainMenus as $mainMenu)
                                            @if($lan == 'fa')
                                                <li class="Shabnam-Bold"><a href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmFaSubject }}</a></li>
                                            @elseif($lan == 'en')
                                                <li><a class="Roboto-Bold" href="{{ url($mainMenu->mmPageLink . '') }}">{{ $mainMenu->mmEnSubject }}</a></li>
                                            @elseif($lan == 'ar')
                                                <li><a class="Al-Jazeera-Arabic-Bold" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmArSubject }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div style="margin-top: -70px;" class="float-left">
                                        <img src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="100px">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!--Top Menu End-->
        @yield('content')
        <footer class="footer">
            <div class="grid-x">
                <div class="large-12 medium-12">
                    <div class="grid-x">
                        {{--<div class="large-4 medium-12 small-12">
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
                        </div>--}}
                        <div class="large-8 medium-12 small-12">
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
                            @if(count($mainMenu->subMenu) > 0)
                                <div class="large-3 medium-3 small-12 footer-menu">
                                    @if($lan == 'fa')
                                        <h6 class="menu-header">{{ $mainMenu->mmFaSubject }}</h6>
                                        <ul>
                                            @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($mainMenu->id) as $subMenu)
                                                <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a></li>
                                            @endforeach
                                        </ul>
                                    @elseif($lan == 'en')
                                        <h6 class="menu-header cabin">{{ $mainMenu->mmEnSubject }}</h6>
                                        <ul>
                                            @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($mainMenu->id) as $subMenu)
                                                <li><a class="cabin" href="{{ url($subMenu->smPageLink . '') }}">{{ $subMenu->smEnSubject }}</a></li>
                                            @endforeach
                                        </ul>
                                    @elseif($lan == 'ar')
                                        <h6 class="menu-header">{{ $mainMenu->mmArSubject }}</h6>
                                        <ul>
                                            @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($mainMenu->id) as $subMenu)
                                                <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            @endif
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
        <script src="{{ asset('js/jssor.slider-27.0.3.min.js') }}"></script><!--News Image Slider-->
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

        <!--News Image Slider -->
        <script type="text/javascript">
            jssor_1_slider_init = function() {

                var jssor_1_SlideshowTransitions = [
                    {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                ];

                var jssor_1_options = {
                    $AutoPlay: 1,
                    $Cols: 1,
                    $Align: 0,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$,
                        $Cols: 5,
                        $SpacingX: 5,
                        $SpacingY: 5,
                        $Align: 390
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 980;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        </script>
        <!--News Image Slider -->
        <!--News Image Slider init-->
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!--News Image Slider init-->
        <!--Video Gallery start-->
        <script>
            $('#video-gallery').lightGallery({
                videojs: true
            });
        </script>
        <!--Video Gallery End-->

    </body>
</html>
