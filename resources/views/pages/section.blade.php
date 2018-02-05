@extends('layouts.mainLayout')
@section('content')
    @foreach($sections as $section)
        <!--SUB MENU SECTION-->
        @if($section->sectionType->stType == 'SUB_MENU')
            <div class="grid-x grid-padding-x" data-sticky-container>
                <div style="border-bottom:.1rem solid hsla(0,15%,80%,.3);height: 100px;background-color: #FFFFFF;" class="large-12 medium-12" data-sticky data-top-anchor="650" data-margin-top="0">
                    <ul class="menu align-center top-menu middle-menu element-dir">
                        @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($section->sMmId) as $subMenu)
                            @if($lan == 'fa')
                                <li><a class="{{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a></li>
                            @elseif($lan == 'en')
                                <li><a class="{{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smEnSubject }}</a></li>
                            @elseif($lan == 'ar')
                                <li><a class="{{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        <!--END SUB MENU SECTION-->
        @elseif($section->sectionType->stType == 'CONTENT_LEFT')
        <!--CONTENT_LEFT SECTION-->
            <div id="ploop" class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div style="margin-top: 80px;color: #37474F;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <h1 class="Mj-Flow-Reqular">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 style="font-size: 4em;" class="wire-one">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h2 class="Al-Jazeera-Arabic-Regular">{{ $section->sArSubject }}</h2>
                        @endif
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 medium-12 padding-lr" style="color: #8a8a8a;">
                        @if($lan == 'fa')
                            <p class="">{!! $section->sFaDescription !!}</p>
                        @elseif($lan == 'en')
                            <div style="font-size: 0.9em" class="Raleway-Regular">
                                <p>{!! $section->sEnDescription !!}</p>
                            </div>
                        @elseif($lan == 'ar')
                            <p class="Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</p>
                        @endif
                    </div>
                </div>
                <div class="grid-x">
                    <div style="margin-top: 15px;" class="large-12 medium-12 element-dir">
                        <div class="direction-reveal direction-reveal--grid-bootstrap direction-reveal--demo-bootstrap">
                            <div class="grid-x">
                                <div class="large-6 medium-6">
                                    <div class="grid-x grid-padding-x">
                                        @foreach($section->sectionImg as $sectionImg)
                                            @if ($sectionImg->siOrder != 5)
                                                <div class="large-6 medium-6 padding-lr">
                                                    <a href="#" class="direction-reveal__card">
                                                        <img src="{{ asset($sectionImg->gallery->gPath) }}" alt="Image" class="img-fluid">

                                                        <div class="direction-reveal__overlay">
                                                            @if($lan == 'fa')
                                                                <h4 class="direction-reveal__title">{{ $sectionImg->siFaSubject }}</h4>
                                                                <p class="direction-reveal__text one-line">{{ $sectionImg->siFaDescription }}</p>
                                                            @elseif($lan == 'en')
                                                                <h6 class="direction-reveal__title cabin float-left">{{ $sectionImg->siEnSubject }}</h6>
                                                                <p class="direction-reveal__text one-line float-left">{{ $sectionImg->siEnDescription }}</p>
                                                            @elseif($lan == 'ar')
                                                                <h4 class="direction-reveal__title">{{ $sectionImg->siArSubject }}</h4>
                                                                <p class="direction-reveal__text one-line">{{ $sectionImg->siArDescription }}</p>
                                                            @endif
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="large-6 medium-6 padding-lr">
                                    @foreach($section->sectionImg as $sectionImg)
                                        @if ($sectionImg->siOrder == 5)
                                            <a href="#" class="direction-reveal__card">
                                                <img src="{{ asset($sectionImg->gallery->gPath) }}" alt="Image" class="img-fluid">
                                                <div class="direction-reveal__overlay">
                                                    @if($lan == 'fa')
                                                        <h3 class="direction-reveal__title">{{ $sectionImg->siFaSubject }}</h3>
                                                        <p class="direction-reveal__text one-line">{{ $sectionImg->siFaDescription }}</p>
                                                    @elseif($lan == 'en')
                                                        <h3 class="direction-reveal__title float-left">{{ $sectionImg->siEnSubject }}</h3>
                                                        <p class="direction-reveal__text one-line float-left">{{ $sectionImg->siEnDescription }}</p>
                                                    @elseif($lan == 'ar')
                                                        <h3 class="direction-reveal__title">{{ $sectionImg->siArSubject }}</h3>
                                                        <p class="direction-reveal__text one-line">{{ $sectionImg->siArDescription }}</p>
                                                    @endif
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT_LEFT SECTION-->
        @elseif($section->sectionType->stType == 'CONTENT_IMAGE_SLIDER')
            <!--CONTENT_IMAGE_SLIDER SECTION-->
            <div class="grid-container">
                <div class="grid-x padding-lr">
                    <div style="margin-top: 50px;color: #37474F;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <h1 class="Mj-Flow-Reqular">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 style="font-size: 4em" class="wire-one">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h2 class="Al-Jazeera-Arabic-Regular">{{ $section->sArSubject }}</h2>
                        @endif
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 medium-12 center-el" style="color: #8a8a8a">
                        @if($lan == 'fa')
                            <p class="">{!! $section->sFaDescription !!}</p>
                        @elseif($lan == 'en')
                            <div style="font-size: 0.9em;" class="Roboto-Regular">
                                <p>{!! $section->sEnDescription !!}</p>
                            </div>
                        @elseif($lan == 'ar')
                            <p class="Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</p>
                        @endif
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 medium-12 element-distanse">
                        <ul class="pgwSlider">
                            @foreach($section->sectionImg as $sectionImg)
                                <li>
                                    @if($lan == 'fa')
                                        <img src="{{ asset($sectionImg->gallery->gPath) }}" alt="{{ $sectionImg->siFaSubject }}" data-description="{{ $sectionImg->siFaDescription }}">
                                    @elseif($lan == 'en')
                                        <img src="{{ asset($sectionImg->gallery->gPath) }}" alt="{{ $sectionImg->siEnSubject }}" data-description="{{ $sectionImg->siEnDescription }}">
                                    @elseif($lan == 'ar')
                                        <img src="{{ asset($sectionImg->gallery->gPath) }}" alt="{{ $sectionImg->siArSubject }}" data-description="{{ $sectionImg->siArDescription }}">
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CONTENT_IMAGE_SLIDER SECTION-->
        @elseif($section->sectionType->stType == 'SECTION_SPLITTER')
            <!--Section Spliter Start-->
            <div class="grid-x">
                <div class="large-12 medium-12 small-12">
                    <img class="float-center section-spliter-margin" src="{{ asset('pic/section-spliter.png') }}">
                </div>
            </div>
            <!--Section Spliter Start-->
        @elseif($section->sectionType->stType == 'CONTENT_WIDE_SLIDER')
            <!--Content Wide Slider Start-->
            <div class="grid-container">
                <div class="grid-x padding-lr">
                    <div style="margin-top: 50px;color: #37474F;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <h1 class="">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 style="font-size: 4em" class="wire-one">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h2 class="Al-Jazeera-Arabic-Regular">{{ $section->sArSubject }}</h2>
                        @endif
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 element-distanse">
                        <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
                            <ul class="orbit-container">
                                <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                                <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                                <?php
                                    $item = 0;
                                    $itemCount = count($section->sectionImg);
                                ?>
                                @for($i = 0 ; $i < $itemCount / 4 ; $i++)
                                    <li style="padding: 50px 10px 50px 10px" class="orbit-slide">
                                        <div class="docs-example-orbit-slide">
                                            <div class="grid-x">
                                                @for( ; $item < (($i + 1) * 4);$item++)
                                                    <div class="medium-3 style_prevu_kit element-dir">
                                                        <img class="img-size" src="{{ asset($section->sectionImg[$item]['gallery']['gPath']) }}">
                                                        @if($lan == 'fa')
                                                            <p style="margin-top: -50px;" class="withe-color my-text-shadow-effect-blue center-el">{{ $section->sectionImg[$item]['siFaSubject'] }}</p>
                                                        @elseif($lan == 'en')
                                                            <p style="margin-top: -50px;" class="withe-color my-text-shadow-effect-blue center-el Roboto">{{ $section->sectionImg[$item]['siEnSubject'] }}</p>
                                                        @elseif($lan == 'ar')
                                                            <p style="margin-top: -50px;" class="withe-color my-text-shadow-effect-blue center-el Al-Jazeera-Arabic-Regular">{{ $section->sectionImg[$item]['siArSubject'] }}</p>
                                                        @endif

                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Content Wide Slider Start-->
        @elseif($section->sectionType->stType == 'BREAD_CRUMB')
            <div class="grid-container">
                <div class="grid-x">
                    <div style="margin-top: 30px;color: #37474F;" class="large-12 medium-12">
                        <nav aria-label="You are here:" role="navigation">
                            <ul class="breadcrumbs {{ $lan == 'en' ? 'float-left' : '' }}">
                                @foreach($pageInfo->breadCrumb as $breadCrumb)
                                    @if($lan == 'fa')
                                        <li class="float-right"><a href="{{ url($breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pFaSubject }}</a></li>
                                    @elseif($lan == 'en')
                                        <li class="float-left Roboto"><a href="{{ url($breadCrumb->refPage->pLinkUrl) . '/en' }}">{{ $breadCrumb->refPage->pEnSubject }}</a></li>
                                    @elseif($lan == 'ar')
                                        <li><a href="{{ url($breadCrumb->refPage->pLinkUrl) . '/ar' }}">{{ $breadCrumb->refPage->pArSubject }}</a></li>
                                    @endif
                                @endforeach
                                <li>
                                    @if($lan == 'fa')
                                        <span class="show-for-sr">Current: </span> {{ $pageInfo->pFaSubject }}
                                    @elseif($lan == 'en')
                                        <span class="show-for-sr">Current: </span> {{ $pageInfo->pEnSubject }}
                                    @elseif($lan == 'ar')
                                        <span class="show-for-sr">Current: </span> {{ $pageInfo->pArSubject }}
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        @elseif($section->sectionType->stType == 'CONTENT_SPONSOR')
            <div class="grid-container">
                <div class="grid-x">
                    <div class="large-12">
                        <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit data-timer-delay="8000">
                            <ul class="orbit-container">
                                <?php
                                    $sponsors = \Hamedan_2018\Sponsor::getAllSponsors();
                                    $item = 0;
                                    $itemCount = count($sponsors);
                                ?>
                                @for($i = 0 ; $i < $itemCount / 6 ; $i++)
                                    <li class="is-active orbit-slide">
                                        <div class="docs-example-orbit-slide">
                                            <div class="grid-x logo-slider">
                                                @for( ; $item < (($i + 1) * 6) && $item < count($sponsors);$item++)
                                                    <div class="large-2 medium-6 small-12 logo-slider-padd">
                                                        <img  src="{{ asset($sponsors[$item]['sPath']) }}" width="100px" height="100px">
                                                        <p class="element-distanse">{{ $sponsors[$item]['sSubject'] }}</p>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($section->sectionType->stType == 'CONTENT_IMAGE_RIGHT_TEXT_LEFT')
            <!--Content Image Right And Text Left Start-->
            <div style="margin-top: 80px;" class="grid-container">
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 {{ $lan == 'en' ? 'padding-lr-txt-img-r' : 'padding-lr-txt-img-l'}}">
                        @if($lan == 'fa')
                            <h4>{{ $section->sFaSubject }}</h4>
                        @elseif($lan == 'en')
                            <h4 class="Roboto">{{ $section->sEnSubject }}</h4>
                        @elseif($lan == 'ar')
                            <h4>{{ $section->sArSubject }}</h4>
                        @endif

                        @if($lan == 'fa')
                            <p class="text-color text-al">{{ $section->sFaDescription }}</p>
                        @elseif($lan == 'en')
                            <p class="text-color text-al">{{ $section->sEnDescription }}</p>
                        @elseif($lan == 'ar')
                            <p class="text-color text-al">{{ $section->sArDescription }}</p>
                        @endif
                    </div>
                    <div class="large-6 medium-12 small-12 padding-lr">
                        <img src="{{ asset($section->sectionImg[0]['gallery']['gPath'] )}}">
                    </div>

                </div>
            </div>
            <!--Content Image Right And Text Left Start-->
        @elseif($section->sectionType->stType == 'CONTENT_IMAGE_LEFT_TEXT_RIGHT')
            <!--Content Image Left And Text Right Start-->
            <div style="margin-top: 200px;" class="grid-container">
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr">
                        <img src="{{ asset('pic/top_slider/1.jpg')}}">
                    </div>

                    <div style="" class="large-6 medium-12 small-12 padding-lr-txt-img-r">

                        <h4>سوغات همدان</h4>
                        <p class="text-color text-al">
                            نخستین باری که اسم این شهر برده شد، در حدود ۱۱۰۰ سال پیش از میلاد بود که نام همدان را اَمدانه ذکر شده‌است. این شهر تحت نام‌های دیگری از قبیل هگمتانه، هگمتان، اکباتان، اکباتانا، آمدانه، آنادانا نیز نوشته شده‌است. در کتیبه‌های آشوری نام آن شهر آمدانه آمده، این اسم بایستی مشتق از کلمهٔ ماد باشد چنان‌که آشوریان قوم ماد را آمادای ذکر کرده‌اند. از این رو آمادانه به معنی محل مادها و جایی‌است که مادها زندگی می‌کردند.[۱۸] در دوران مادها به زبان پارسی باستان این شهر هگمتانه یا هگمتانه به معنی «جای تجمع» خوانده می‌شد. اکباتان نیز همان تلفظ هگمتانه به زبان یونانی است.[۱]

                            نام هگمتانه به مرور زمان در دوران ساسانیان به اَهمتان، اَهمدان و سپس به همدان دگرگون شده‌است.
                        </p>
                    </div>

                </div>
            </div>
            <!--Content Image Left And Text Right Start-->
        @endif
    @endforeach
    <!--Video Js Start-->
    <div class="grid-container">
        <div class="grid-x">
            <div class="large-12">
                <div id="instructions">
                    <video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px"
                           controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'
                           data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                        <source src="pic/video/2.mp4"/>
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!--Video Js End-->

    <!--Just One Fade Image Start-->
    <div class="grid-x">
        <div class="large-12 medium-12 small-12">
            <div class="grid-x">
                <div style="position: relative;display: inline-block;top: 58vh;text-align: center;z-index: 50;" class="large-12 medium-12 small-12">
                    <h1 class="my-text-shadow-effect white-color"> غار آبی علیصدر </h1>
                    <p class="white-color my-text-shadow-effect ">شگفت انگیز ترین غار آبی جهان</p>
                    <button class="button primary element-distanse">اطلاعات بیشتر</button>
                </div>
            </div>
            <span style="width: 100%" class="faded faded-top">
            <img style="height: 100vh;width: 100%;" src="{{ asset('pic/gallery/2.jpg')}}">
            </span>
        </div>

    </div>
    <!--Just One Fade Image End-->

    <!--Title and Description Section Start-->
    <div class="grid-container element-distance-tb">
        <div class="grid-x">
            <div class="large-12">
                <h3 class="center-el titr-color">همدان پایتخت گردشگری کشور های آسیایی</h3>
                <p class="text-color text-justify element-distanse">
                    در حدود اوایل هزارهٔ دوم پیش از میلاد رویدادهایی در آسیای مرکزی پدیدار می‌شود که موجب نقل و انتقال اقوام ایرانی‌تبار که در سرزمین پهناوری در این ناحیه ساکن بودند، می‌گردد. در این هنگام دو قبیلهٔ ایرانی مادی و پارسی که با یکدیگر تفاوت اندکی در گویش داشتند، بسوی سرزمین‌های جنوبی‌تر کوچ کردند. تیرهٔ مادی در نواحی جنوب شرقی دریاچه ارومیه بین همدان و تبریز امروزی جای گرفت و بعدها تا اصفهان نیز پیش رفت.[۲۲]

                    در زمان مادها مهم‌ترین راه‌های کاروانرو در اکباتانا تلاقی می‌کردند و این شهر قلب ماد قدیم به‌شمار می‌رفت معمولاً معتقدند که هگمتانه به معنی محل تجمع یا بازار یا چیزی نظیر آن است البته احتمال دیگری نیز وجود دارد که جلسات عمومی اتحادیه قبایل در این نقطه برگزار می‌شده‌است. در یکی از جلسات عمومی اتحادیه قبایل، دیاکو به رهبری انتخاب شد. دیاکو هگمتانه را به عنوان پایتخت خود انتخاب کرد. مکان این شهر برای پایتخت شدن کاملاً مناسب بود، زیرا مشرف بر راهی بود که به بابل و آشور می‌رفت.[۲۳] بر اساس نوشته‌های هرودوت مورخ یونانی به دستور دیاکو نخستین پادشاه ماد در اکباتانا استحکامات عظیمی شامل ۷ دژ مشهور به قصر هفت حصار و کاخ‌های شاهی برپا شد.[۲۴] بیشتر پژوهندگان علوم تاریخ و باستان‌شناسی بر این باورند که تپه و بناهای امروزی هگمتانه، در دل شهر همدان، برجای‌ماندهٔ بقایای همین تأسیسات می‌باشند.[۲۵]
                </p>
            </div>
        </div>
    </div>
    <!--Title and Description Section End-->
@stop
