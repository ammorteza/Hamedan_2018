<!doctype html>
<html class="no-js" lang="en" dir="{{ $lan != 'en' ? 'rtl' : '' }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if($lan == 'fa')
        <title>{{ $pageInfo->pFaTitle . ' | همدان پایتخت گردشگری کشور های آسیایی' }}</title>
    @elseif($lan == 'en')
        <title>{{ $pageInfo->pEnTitle . ' | Hamedan Capital of Asian Tourism' }}</title>
    @elseif($lan == 'ar')
        <title>{{ $pageInfo->pArTitle . ' | همدان العاصمه للسياحة قارة آسيا'}}</title>
    @endif
    <link rel="icon" type="image/png" href="{{ asset('pic/footer/footer-logo.png') }}">
    <!— Global site tag (gtag.js) - Google Analytics —>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116472209-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116472209-1');
    </script>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.0.0/web-fonts-with-css/css/fontawesome-all.min.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/direction-reveal.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/immersive-slider.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/pgwslider.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/lightgallery.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/ihover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hoverEffect/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hoverEffect/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hoverEffect/set1.css') }}">


    <link href="https://fonts.googleapis.com/css?family=Satisfy|Poiret+One|Cabin|Wire+One|Merienda|Roboto" rel="stylesheet">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/about-me.css?v' . config('app.version')) }}">

    <link rel="stylesheet" href="{{ asset('css/foundation.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/font.css?v' . config('app.version')) }}">
    <link rel="stylesheet" href="{{ asset('css/key.css?v' . config('app.version')) }}">


</head>
<body class="Shabnam-Light">
<!--Top Slider Start-->
<div class="off-canvas position-right" id="offCanvas" data-off-canvas>
    <!-- Close button -->
    <center class="float-center">
        <img src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="80px">
    </center>
    <ul style="margin-top: 15px;" class="menu-slider">
        @foreach($mainMenus as $mainMenu)
            @if($lan == 'fa')
                <li class="Shabnam-Bold"><a class="{{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmFaSubject }}</a></li>
            @elseif($lan == 'en')
                <li><a class="Roboto-Bold {{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($mainMenu->mmPageLink . '') }}">{{ $mainMenu->mmEnSubject }}</a></li>
            @elseif($lan == 'ar')
                <li><a class="Al-Jazeera-Arabic-Bold {{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmArSubject }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
<div class="off-canvas-content" data-off-canvas-content>
    <div class="grid-x">
        <div class="large-12 medium-12">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;" data-timer-delay="10000">
                <ul class="orbit-container">
                    <div style="z-index: 9999;position: absolute; background:transparent;" class="title-bar element-dir" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                        <button style="color: #000;" class="menu-icon my-text-shadow-effect" type="button" data-toggle="offCanvas"></button>
                        <div class="title-bar-title"></div>
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
                                                        <li><a class="Roboto-Bold {{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($mainMenu->mmPageLink . '') }}">{{ $mainMenu->mmEnSubject }}</a></li>
                                                    @elseif($lan == 'ar')
                                                        <li><a class="Al-Jazeera-Arabic-Bold {{ $mainMenu->id == $pageInfo->pMmId ? 'is-active' : '' }}" href="{{ url($lan . $mainMenu->mmPageLink) }}">{{ $mainMenu->mmArSubject }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <center class="header-image-show1" style="margin-bottom: -30px;">
                                                <img style="margin-top: -130px;" src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="80px">
                                            </center>
                                            <div class="element-dir-l header-image-show2"  style="margin-bottom: -30px;">
                                                <img style="margin-top: -130px;" src="{{ asset('pic/footer/footer-logo.png') }}" alt="Hamedan-2018" width="150px" height="80px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top: -70px;" class="element-dir-l flag-icon-full">
                                <ul  style="position: absolute;z-index: 9999;" class="languagepicker roundborders large">
                                    @if($lan == 'fa')
                                        <a href="{{ url('/fa') }}"><li><img src="{{ asset('pic/flag/persian_w.png?v' . config('app.version')) }}" width="24px" height="24px"/>فارسی</li></a>
                                        <a href="{{ url('/') }}"><li><img src="{{ asset('pic/flag/uk.png?v' . config('app.version')) }}" width="24px" height="24px"/>English</li></a>
                                        <a href="{{ url('/ar') }}"><li><img src="{{ asset('pic/flag/arabic.png?v' . config('app.version')) }}" width="24px" height="24px"/>العربیه</li></a>
                                    @elseif($lan == 'ar')
                                        <a href="{{ url('/ar') }}"><li><img src="{{ asset('pic/flag/arabic_w.png?v' . config('app.version')) }}" width="24px" height="24px"/>العربیه</li></a>
                                        <a href="{{ url('/fa') }}"><li><img src="{{ asset('pic/flag/persian.png?v' . config('app.version')) }}" width="24px" height="24px"/>فارسی</li></a>
                                        <a href="{{ url('/') }}"><li><img src="{{ asset('pic/flag/uk.png?v' . config('app.version')) }}" width="24px" height="24px"/>English</li></a>
                                    @else
                                        <a href="{{ url('/') }}"><li><img src="{{ asset('pic/flag/uk_w.png?v' . config('app.version')) }}" width="24px" height="24px"/>English</li></a>
                                        <a href="{{ url('/fa') }}"><li><img src="{{ asset('pic/flag/persian.png?v' . config('app.version')) }}" width="24px" height="24px"/>فارسی</li></a>
                                        <a href="{{ url('/ar') }}"><li><img src="{{ asset('pic/flag/arabic.png?v' . config('app.version')) }}" width="24px" height="24px"/>العربیه</li></a>
                                    @endif
                                </ul>
                            </div>
                            <!--Display Tag In 1024-->
                            <div class=" flag-icon-1024 element-dir">
                                @if($lan == 'fa')
                                    <a href="{{ url('/fa') }}"><img src="{{ asset('pic/flag/persian_w.png?v' . config('app.version')) }}" width="24px" height="24px"/>فارسی</a>
                                    <a href="{{ url('/') }}"><img src="{{ asset('pic/flag/uk.png?v' . config('app.version')) }}" width="24px" height="24px"/>English</a>
                                    <a href="{{ url('/ar') }}"><img src="{{ asset('pic/flag/arabic.png?v' . config('app.version')) }}" width="24px" height="24px"/>العربیه</a>
                                @elseif($lan == 'ar')
                                    <a href="{{ url('/ar') }}"><img src="{{ asset('pic/flag/arabic_w.png?v' . config('app.version')) }}" width="24px" height="24px"/>العربیه</a>
                                    <a href="{{ url('/fa') }}"><img src="{{ asset('pic/flag/persian.png?v' . config('app.version')) }}" width="24px" height="24px"/>فارسی</a>
                                    <a href="{{ url('/') }}"><img src="{{ asset('pic/flag/uk.png?v' . config('app.version')) }}" width="24px" height="24px"/>English</a>
                                @else
                                    <a href="{{ url('/') }}"><img src="{{ asset('pic/flag/uk_w.png?v' . config('app.version')) }}" width="24px" height="24px"/>English</a>
                                    <a href="{{ url('/fa') }}"><img src="{{ asset('pic/flag/persian.png?v' . config('app.version')) }}" width="24px" height="24px"/>فارسی</a>
                                    <a href="{{ url('/ar') }}"><img src="{{ asset('pic/flag/arabic.png?v' . config('app.version')) }}" width="24px" height="24px"/>العربیه</a>
                                @endif
                            </div>
                            <!--Display Tag In 1024 End-->

                        </div>
                        <!--Display Tag In small-->
                        <div style="z-index: 996" align="{{ $lan == 'en' ? 'right' : 'left' }}" class="grid-x">
                            <div class="small-12 flag-icon-small element-dir-l">
                                @if($lan == 'fa')
                                    <a href="{{ url('/fa') }}"><img src="{{ asset('pic/flag/persian_w.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                    <a href="{{ url('/') }}"><img src="{{ asset('pic/flag/uk.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                    <a href="{{ url('/ar') }}"><img src="{{ asset('pic/flag/arabic.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                @elseif($lan == 'ar')
                                    <a href="{{ url('/ar') }}"><img src="{{ asset('pic/flag/arabic_w.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                    <a href="{{ url('/fa') }}"><img src="{{ asset('pic/flag/persian.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                    <a href="{{ url('/') }}"><img src="{{ asset('pic/flag/uk.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                @else
                                    <a href="{{ url('/') }}"><img src="{{ asset('pic/flag/uk_w.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                    <a href="{{ url('/fa') }}"><img src="{{ asset('pic/flag/persian.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                    <a href="{{ url('/ar') }}"><img src="{{ asset('pic/flag/arabic.png?v' . config('app.version')) }}" width="28px" height="28px"/></a>
                                @endif
                            </div>
                        </div>
                        <!--Display Tag In small End-->
                        @foreach($pageInfo->pageHeaderImg as $pageImg)
                            <li class="is-active orbit-slide">
                                @if ($pageInfo->headerType->phtType == 'SIMPLE')
                                    <img  class="background-cover orbit-image top-slider-simple" src="{{ asset($pageImg->image->gPath . '?v' . config('app.version')) }}" alt="Space">
                                    <figcaption class="orbit-caption align-center my-text-shadow-effect">
                                        @if($lan == 'fa')
                                            <p style="text-align: center;" class="top-slider-header-sample Shabnam-Bold my-fadeIn-and-move">{{ $pageInfo->pFaSubject }}</p>
                                            <p style="text-align: center;" class="top-slider-description-sample Duel-Regular">{{ $pageInfo->pFaDescription }}</p>
                                            @if ($pageImg->phiLink != null)
                                                <center>
                                                    <a href="{{ url($pageImg->phiLink . '') }}" style="margin-top: 15px;" class="button primary white-color">{{ $pageImg->phiLinkFaTitle }}</a>
                                                </center>
                                            @endif
                                        @elseif($lan == 'en')
                                            <p style="text-align: center;" class="top-slider-header-sample Roboto-Bold">{{ $pageInfo->pEnSubject }}</p>
                                            <p style="text-align: center;" class="top-slider-description-sample merienda">{{ $pageInfo->pEnDescription }}</p>
                                            @if ($pageImg->phiLink != null)
                                                <center>
                                                    <a href="{{ url($pageImg->phiLink . '') }}" style="margin-top: 15px;" class="button primary white-color">{{ $pageImg->phiLinkEnTitle }}</a>
                                                </center>
                                            @endif
                                        @elseif($lan == 'ar')
                                            <p style="text-align: center;" class="top-slider-header-sample Al-Jazeera-Arabic-Bold">{{ $pageInfo->pArSubject }}</p>
                                            <p style="text-align: center;" class="top-slider-description-sample">{{ $pageInfo->pArDescription }}</p>
                                            @if ($pageImg->phiLink != null)
                                                <center>
                                                    <a href="{{ url($pageImg->phiLink . '') }}" style="margin-top: 15px;" class="button primary white-color">{{ $pageImg->phiLinkArTitle }}</a>
                                                </center>
                                            @endif
                                        @endif
                                    </figcaption>
                                @elseif ($pageInfo->headerType->phtType == 'PUBLIC')
                                    <img style="height: 50vh" class="background-cover orbit-image top-slider-simple image-black-overlay" src="{{ asset('pic/gallery/lan_1.jpg') }}" alt="Space">
                                    <figcaption class="orbit-caption align-center my-text-shadow-effect">
                                        @if($lan == 'fa')
                                            <p style="text-align: center;" class="top-slider-header-public Shabnam-Bold my-fadeIn-and-move">{{ $pageInfo->pFaSubject }}</p>
                                            @if ($pageImg->phiLink != null)
                                                <center>
                                                    <a href="{{ url($pageImg->phiLink . '') }}" style="margin-top: 15px;" class="button primary white-color">{{ $pageImg->phiLinkFaTitle }}</a>
                                                </center>
                                            @endif
                                        @elseif($lan == 'en')
                                            <p style="text-align: center;" class="top-slider-header-public Roboto-Bold">{{ $pageInfo->pEnSubject }}</p>
                                            @if ($pageImg->phiLink != null)
                                                <center>
                                                    <a href="{{ url($pageImg->phiLink . '') }}" style="margin-top: 15px;" class="button primary white-color">{{ $pageImg->phiLinkEnTitle }}</a>
                                                </center>
                                            @endif
                                        @elseif($lan == 'ar')
                                            <p style="text-align: center;" class="top-slider-header-public Al-Jazeera-Arabic-Bold">{{ $pageInfo->pArSubject }}</p>
                                            @if ($pageImg->phiLink != null)
                                                <center>
                                                    <a href="{{ url($pageImg->phiLink . '') }}" style="margin-top: 15px;" class="button primary white-color">{{ $pageImg->phiLinkArTitle }}</a>
                                                </center>
                                            @endif
                                        @endif
                                    </figcaption>
                                @elseif($pageInfo->headerType->phtType == 'ADVANCE')
                                    <img  class="background-cover orbit-image top-slider my-zoom-out" src="{{ asset($pageImg->image->gPath . '?v' . config('app.version')) }}" alt="Space">
                                    <figcaption class="orbit-caption">
                                        <div class="top-slider-grid-container">
                                            <div class="grid-x">
                                                <div class="large-12 medium-6 small-6 my-text-shadow-effect">
                                                    @if($lan == 'fa')
                                                        <p class="top-slider-header Shabnam-Bold">{{ $pageImg->phiFaSubject }}</p>
                                                        <p class="top-slider-description Duel-Regular">{{ $pageImg->phiFaDescription }}</p>
                                                        <a href="{{ url($lan . $pageImg->phiLink) }}" class="top-slider-description-btn">{{ $pageImg->phiLinkFaTitle }}</a>
                                                    @elseif($lan == 'en')
                                                        <div class="cabin">
                                                            <p  class="top-slider-header Roboto-Bold">{{ $pageImg->phiEnSubject }}</p>
                                                            <p  class="top-slider-description merienda">{{ $pageImg->phiEnDescription }}</p>
                                                            <a href="{{ url($pageImg->phiLink . '') }}" class="top-slider-description-btn">{{ $pageImg->phiLinkEnTitle }}</a>
                                                        </div>
                                                    @elseif($lan == 'ar')
                                                        <p class="top-slider-header Al-Jazeera-Arabic-Bold">{{ $pageImg->phiArSubject }}</p>
                                                        <p class="top-slider-description Emad-Nora-Arabic">{{ $pageImg->phiArDescription }}</p>
                                                        <a href="{{ url($lan . $pageImg->phiLink) }}" class="top-slider-description-btn">{{ $pageImg->phiLinkArTitle }}</a>
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
                        <nav class="orbit-bullets orbit-bullets-hide">
                            <div style="margin-top:15vh;" class="grid-x">
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
                        <nav class="orbit-bullets  orbit-bullets-show center-el element-distanse">
                            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                        </nav>
                    </div>
                    <div class="grid-container">
                        <div style="height: 50px;" class="grid-x arrow-mrg">
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
    </div>
    <!--Top Slider End-->
</div>
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
                            <li><a href="https://www.instagram.com/hamedan2018official" target="_blank" class="social-icon"> <i class="fab fa-instagram fa-instagram-m"></i></a></li>
                            <li><a href="" class="social-icon"> <i class="fab fa-telegram-plane"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div style="text-align: center" class="large-4 medium-12 small-12">
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
                {{--                            <div class="large-1 medium-6 small-12">
                                                <img class="float-center"  src="{{ asset('pic/footer/ostan-footer.png') }}" alt="استانداری همدان" width="60px" height="60px">
                                                <p class="logo-slider withe-color my-text-shadow-effect">استانداری همدان</p>
                                            </div>
                                            <div class="large-1 medium-6 small-12">
                                                <img class="float-center"  src="{{ asset('pic/footer/shahrdari-footer.png') }}" alt="استانداری همدان" width="60px" height="60px">
                                                <p class="logo-slider withe-color my-text-shadow-effect">شهرداری همدان</p>
                                            </div>--}}
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
<script src="{{ asset('js/vendor/jquery.js?v' . config('app.version')) }}"  type="text/javascript"></script>
<script src="{{ asset('js/scripts/bundle.js?v' . config('app.version')) }}"></script> <!--Content left-->
<script src="{{ asset('js/jquery.immersive-slider.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/pgwslider.js?v' . config('app.version')) }}"></script><!--Content Image slider-->


<!--Light Box Image slider-->
<script src="{{ asset('js/light_box/picturefill.min.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lightgallery.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-pager.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-autoplay.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-fullscreen.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-zoom.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-hash.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-share.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/lg-video.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<script src="{{ asset('js/light_box/froogaloop2.min.js?v' . config('app.version')) }}"></script><!--Content Image slider-->
<!--Light Box Image slider-->

<!--unit video gallery slider-->
<script src="{{ asset('js/unitegallery/js/ug-common-libraries.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-functions.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-thumbsgeneral.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-thumbsstrip.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-touchthumbs.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-panelsbase.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-strippanel.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-gridpanel.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-thumbsgrid.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-tiles.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-tiledesign.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-avia.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-slider.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-sliderassets.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-touchslider.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-zoomslider.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-video.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-gallery.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-lightbox.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-carousel.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/unitegallery/js/ug-api.js?v' . config('app.version')) }}"></script>

<link rel="stylesheet" href="{{ asset('js/unitegallery/css/unite-gallery.css?v' . config('app.version')) }}">

<script src="{{ asset('js/unitegallery/themes/default/ug-theme-default.js?v' . config('app.version')) }}"></script>
<link rel="stylesheet" href="{{ asset('js/unitegallery/themes/default/ug-theme-default.css?v' . config('app.version')) }}"



<!--Single File Uploader Start-->
<script src="{{ asset('js/single-file-uploader.js?v' . config('app.version')) }}"  type="text/javascript"></script>
<script src="{{ asset('js/multiple-file-uploader.js?v' . config('app.version')) }}"  type="text/javascript"></script>
<!--Single File Uploader End-->



{{--<script src="{{ asset('js/unitegallery/js/unitgallery.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/unitegallery/css/unite-gallery.css') }}">
<script src="{{ asset('js/unitegallery/js/ug-theme-compact.js') }}"></script>--}}

<!--unit video gallery slider-->

<script src="{{ asset('js/country-flags.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/vendor/foundation.js?v' . config('app.version')) }}"></script>
<script src="{{ asset('js/app.js?v' . config('app.version')) }}"></script>




<!--Remove zoom out class-->
<script>
    setTimeout(function(){
        $('.my-zoom-out').removeClass('my-zoom-out');
    },10000);
</script>

{{--<script>
    var x = window.matchMedia("(min-width: 700px)")
    setTimeout(function(){
        $('.my-zoom-out').removeClass('my-zoom-out');
    },0);
    x.addListener(setTimeout)
</script>
--}}
<!--Remove zoom out class-->

<!--unit video gallery slider-->
<script type="text/javascript">

    jQuery(document).ready(function(){
        jQuery("#gallery").unitegallery({
            theme_panel_position: "bottom",
            gallery_width:"100%",
            gallery_height:"90vh",
        });

    });

</script>
<!--unit video gallery slider-->

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

<!--LightBox gallery Start-->
<script>
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });
</script>
<!--LightBox gallery End-->


<!--Multi Step Forms-->
<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale('+scale+')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 100,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 100,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInBack'
        });
    });
</script>
<!--Multi Step Forms-->
<!--About Me Section Start-->
<script>
    $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });
</script>
<!--About Me Section End-->


</body>
</html>
