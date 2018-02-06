<!doctype html>
<html class="no-js" lang="en" dir="rtl" xmlns:v-on="http://www.w3.org/1999/xhtml">
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
        <link rel="stylesheet" href="{{ asset('css/videoJs/videoJs.css') }}">
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
        <link rel="stylesheet" href="{{ asset('css/key.css') }}">
    </head>
    <body class="BYekan">
        <!--Top Menu Start-->
        <div class="grid-container">
            <div class="grid-x">
                <div class="large-12">
                    <div data-sticky-container>
                        <div class="title-bar news-top-menu" data-sticky data-options="marginTop:0;">
                            <div class="title-bar-left">
                                <ul class="dropdown menu align-right" data-dropdown-menu>
                                    <li><a href="#">همدان</a></li>
                                    <li><a href="#">همدان 2018</a></li>
                                </ul>
                            </div>
                            <div class="title-bar-right">
                                <img style=";margin-top: -20px;" src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="100px">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Top Menu End-->
        @yield('content')

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
