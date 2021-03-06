<!doctype html>
<html class="no-js" lang="en" dir="rtl" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>پنل مدیریت</title>
    <link rel="icon" type="image/png" href="{{ asset('pic/footer/footer-logo.png?v' . config('app.version')) }}">
    <!-- Fonts -->
    <script src="{{ asset('css/ckeditor/ckeditor.js?v' . config('app.version')) }}"  type="text/javascript"></script>
    <script src="{{ asset('css/ckeditor/samples/js/sample.js?v' . config('app.version')) }}"  type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/foundation.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/ckeditor/samples/css/samples.css?v' . config('app.version')) }}">
    <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/font.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/key.css?v' . config('app.version')) }}">
</head>
<body class="Shabnam-Light body-color">
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <?php
            $forms = \Hamedan_2018\Form::getAllFormsThatHasPermission(Auth::user()->id);
        ?>
        <!--Right sidebar start-->
        <div style="background-color: #FFFFFF;" class="off-canvas position-right reveal-for-large" id="my-info" data-off-canvas data-position="right">
            <nav style="width: 100%;margin-top: 40px;z-index: 999;position: absolute;" class="accordion">
                <ul style="background-color:#FFFFFF;padding: 10px;line-height: 2;" class="vertical menu sub-menu accordion-menu" data-accordion-menu data-multi-open="false" >
                    @if(\Hamedan_2018\Permission::checkPermission(['ADMIN_NEWS' , 'ADMIN_NEWS_SLIDER']))
                        <li>
                            <a class="right-mp right-menu-btm-border" href="#"><i class="far fa-newspaper size-21 icon-pos" aria-hidden="true"></i>اخبار</a>
                            <ul class="menu vertical nested">
                                <li>
                                    @if(\Hamedan_2018\Permission::checkPermission('ADMIN_NEWS'))
                                        <a href="{{ url('/admin/news') }}">لیست خبر</a>
                                    @endif
                                    @if(\Hamedan_2018\Permission::checkPermission('ADMIN_NEWS_SLIDER'))
                                        <a href="{{ url('/admin/news/slider') }}">اسلایدر خبر</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(\Hamedan_2018\Permission::checkPermission('ADMIN_GALLERY'))
                        <li>
                            <a class="right-mp right-menu-btm-border" href="{{ url('/admin/album') }}"><i class="far fa-images size-21 icon-pos" aria-hidden="true"></i>گالری</a>
                        </li>
                    @endif
                    @if (count($forms) > 0)
                        <li>
                            <a class="right-mp right-menu-btm-border" href="#"><i class="far fa-newspaper size-21 icon-pos" aria-hidden="true"></i>فرم ها</a>
                            <ul class="menu vertical nested">
                                @foreach($forms as $form)
                                    <li>
                                        <a href="{{ url('/admin/form/' . $form->id) }}">{{ $form->fFaSubject }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="off-canvas-content large-12 medium-12 small-12">
            <div data-sticky-container>
                <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%;background-color: #FFFFFF;z-index: 100;height: 60px;">
                    <div class="title-bar-left">
                        <span style="color: #1b6d85">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="title-bar-right">
                        <a href="{{ url('/admin/signOut') }}" class="float-left"><i class="fas fa-sign-out-alt size-21 btn-red"></i></a>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<!--Copy Right Bar End-->
<script src="{{ asset('js/vendor/jquery.js?v' . config('app.version')) }}"  type="text/javascript"></script>
<script src="{{ asset('js/jssor.slider-27.0.3.min.js?v' . config('app.version')) }}"></script><!--News Image Slider-->
<script src="{{ asset('js/vendor/foundation.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/app.js?v' . config('app.version')) }}"></script>
<script>
    initSample();
</script>
<script>
    $(document).ready(function(){
        $('#selectImageModal').on("closed.zf.reveal" , function(){
            var gId = $('input[name=imageGalleryId]:checked').val();
            $('#selectedImageId').val(gId);
            $('#newsImg')
                .attr('src', $('#imgPath' + gId).val());
        });
    });
    CKEDITOR.on('instanceCreated', function(e) {
        if (e.editor.id === 'cke_1') {
            e.editor.on('change', function (event) {
                if ((CKEDITOR.instances.faDescription.getData() != '')) {
                    $('#registerNewsSubmit').attr("disabled", false);
                }else{
                    $('#registerNewsSubmit').attr("disabled", true);
                }
            });
        }
/*        if (e.editor.id === 'cke_1') {
            e.editor.on('change', function (event) {
                if ((CKEDITOR.instances.faDescription.getData() != '') &&
                    (CKEDITOR.instances.arDescription.getData() != '') &&
                    (CKEDITOR.instances.enDescription.getData() != '')) {
                    $('#registerNewsSubmit').attr("disabled", false);
                }else{
                    $('#registerNewsSubmit').attr("disabled", true);
                }
            });
        }

        if (e.editor.id === 'cke_2') {
            e.editor.on('change', function (event) {
                if ((CKEDITOR.instances.faDescription.getData() != '') &&
                    (CKEDITOR.instances.arDescription.getData() != '') &&
                    (CKEDITOR.instances.enDescription.getData() != '')) {
                    $('#registerNewsSubmit').attr("disabled", false);
                }else{
                    $('#registerNewsSubmit').attr("disabled", true);
                }
            });
        }

        if (e.editor.id === 'cke_3') {
            e.editor.on('change', function (event) {
                if ((CKEDITOR.instances.faDescription.getData() != '') &&
                    (CKEDITOR.instances.arDescription.getData() != '') &&
                    (CKEDITOR.instances.enDescription.getData() != '')) {
                    $('#registerNewsSubmit').attr("disabled", false);
                }else{
                    $('#registerNewsSubmit').attr("disabled", true);
                }
            });
        }*/
    });
/*    CKEDITOR.on('instanceCreated', function(e) {
        if (e.editor.id === 'cke_3') {
            e.editor.on('configLoaded', function (event) {
                if ((CKEDITOR.instances.faDescription.getData() != '') &&
                    (CKEDITOR.instances.arDescription.getData() != '') &&
                    (CKEDITOR.instances.enDescription.getData() != '')) {
                    $('#registerNewsSubmit').attr("disabled", false);
                }else{
                    $('#registerNewsSubmit').attr("disabled", true);
                }
            });
        }
    });*/
    CKEDITOR.on('instanceCreated', function(e) {
        if (e.editor.id === 'cke_1') {
            e.editor.on('configLoaded', function (event) {
                if ((CKEDITOR.instances.faDescription.getData() != '')) {
                    $('#registerNewsSubmit').attr("disabled", false);
                }else{
                    $('#registerNewsSubmit').attr("disabled", true);
                }
            });
        }
    });
</script>
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
</body>
</html>