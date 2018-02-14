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
                                <li><a class="BYekan {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a></li>
                            @elseif($lan == 'en')
                                <li><a class="Roboto-Regular {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($subMenu->smPageLink . '') }}">{{ strtoupper($subMenu->smEnSubject) }}</a></li>
                            @elseif($lan == 'ar')
                                <li><a class="Al-Jazeera-Arabic-Bold {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a></li>
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
                    <div class="large-12 medium-12 padding-lr text-color">
                        @if($lan == 'fa')
                            <p>{!! $section->sFaDescription !!}</p>
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
                                                                <h5 class="direction-reveal__title cabin float-left Roboto">{{ $sectionImg->siEnSubject }}</h5>
                                                                <p class="direction-reveal__text one-line float-left Raleway-Regular">{{ $sectionImg->siEnDescription }}</p>
                                                            @elseif($lan == 'ar')
                                                                <h5 class="direction-reveal__title Al-Jazeera-Arabic-Bold">{{ $sectionImg->siArSubject }}</h5>
                                                                <p class="direction-reveal__text one-line Al-Jazeera-Arabic-Regular">{{ $sectionImg->siArDescription }}</p>
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
                                                        <h4 class="direction-reveal__title">{{ $sectionImg->siFaSubject }}</h4>
                                                        <p class="direction-reveal__text one-line">{{ $sectionImg->siFaDescription }}</p>
                                                    @elseif($lan == 'en')
                                                        <h5 class="direction-reveal__title float-left Roboto">{{ $sectionImg->siEnSubject }}</h5>
                                                        <p class="direction-reveal__text one-line float-left Raleway-Regular">{{ $sectionImg->siEnDescription }}</p>
                                                    @elseif($lan == 'ar')
                                                        <h5 class="direction-reveal__title Al-Jazeera-Arabic-Bold">{{ $sectionImg->siArSubject }}</h5>
                                                        <p class="direction-reveal__text one-line Al-Jazeera-Arabic-Regular">{{ $sectionImg->siArDescription }}</p>
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
                    <div class="large-12 medium-12 text-color">
                        @if($lan == 'fa')
                            <p>{!! $section->sFaDescription !!}</p>
                        @elseif($lan == 'en')
                            <div class="Raleway-Regular">
                                {!! $section->sEnDescription !!}
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
                                        <img  src="{{ asset($sectionImg->gallery->gPath) }}" alt="{{ $sectionImg->siEnSubject }}" data-description="{{ $sectionImg->siEnDescription }}">
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
                                @if($lan == 'fa' || $lan== 'ar')
                                <button style="margin-right: 99.5%;" class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                                <button style="margin-right: 0.8%;" class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                                @elseif($lan == 'en')
                                    <button style="margin-right: 99%;" class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                                    <button style="margin-left: 97.5%;" class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                                @endif
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
                                        <li class="float-right Shabnam-Bold"><a href="{{ url($lan . $breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pFaSubject }}</a></li>
                                    @elseif($lan == 'en')
                                        <li class="float-left Roboto"><a href="{{ url($breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pEnSubject }}</a></li>
                                    @elseif($lan == 'ar')
                                        <li><a href="{{ url($lan . $breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pArSubject }}</a></li>
                                    @endif
                                @endforeach
                                <li>
                                    @if($lan == 'fa')
                                        <span class="show-for-sr Shabnam-Bold">Current: </span> {{ $pageInfo->pFaSubject }}
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
                                                        @if($lan == 'fa')
                                                            <p class="element-distanse">{{ $sponsors[$item]['sFaSubject'] }}</p>
                                                        @elseif($lan == 'en')
                                                            <p class="element-distanse Roboto">{{ $sponsors[$item]['sEnSubject'] }}</p>
                                                        @elseif($lan == 'ar')
                                                            <p class="element-distanse Al-Jazeera-Arabic-Bold">{{ $sponsors[$item]['sArSubject'] }}</p>
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
        @elseif($section->sectionType->stType == 'CONTENT_IMAGE_RIGHT_TEXT_LEFT')
            <!--Content Image Right And Text Left Start-->
            <div style="margin-top: 80px;" class="grid-container">
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 titr-color {{ $lan == 'en' ? 'padding-lr-txt-img-r' : 'padding-lr-txt-img-l'}}">
                        @if($lan == 'fa')
                            <h3 class="Shabnam-Bold">{{ $section->sFaSubject }}</h3>
                        @elseif($lan == 'en')
                            <h2 class="Roboto">{{ $section->sEnSubject }}</h2>
                        @elseif($lan == 'ar')
                            <h2 class="Al-Jazeera-Arabic-Bold">{{ $section->sArSubject }}</h2>
                        @endif

                        @if($lan == 'fa')
                            <p class="text-color text-al">{{ $section->sFaDescription }}</p>
                            <button class="button primary">اطلاعات بیشتر</button>
                        @elseif($lan == 'en')
                            <p class="text-color text-al Raleway-Regular">{{ $section->sEnDescription }}</p>
                            <button class="button primary">Read More</button>
                        @elseif($lan == 'ar')
                            <p class="text-color text-al Al-Jazeera-Arabic-Regular">{{ $section->sArDescription }}</p>
                            <button class="button primary">أكثر</button>
                        @endif
                    </div>
                    <div class="large-6 medium-12 small-12 padding-lr">
                        <img src="{{ asset($section->sectionImg[0]['gallery']['gPath'] )}}">
                        @if ($section->sectionImg[0]['gallery']['gFaPhotographer'] != '')
                            @if($lan == 'fa')
                                <i class="fas fa-camera blue-color camera-margin"></i><span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gFaPhotographer'] }}</span>
                            @elseif($lan == 'en')
                                <i class="fas fa-camera blue-color camera-margin"></i><span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gEnPhotographer'] }}</span>
                            @elseif($lan == 'ar')
                                <i class="fas fa-camera blue-color camera-margin"></i><span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gArPhotographer'] }}</span>
                            @endif
                        @endif
                        @if ($section->sectionImg[0]['gallery']['gFaLocation'] != '')
                            @if($lan == 'fa')
                                <i class="fas fa-map-marker blue-color camera-margin "></i><span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gFaLocation']}}</span>
                            @elseif($lan == 'en')
                                <i class="fas fa-map-marker blue-color camera-margin "></i><span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gEnLocation']}}</span>
                            @elseif($lan == 'ar')
                                <i class="fas fa-map-marker blue-color camera-margin "></i><span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gArLocation']}}</span>
                            @endif
                        @endif
                    </div>

                </div>
            </div>
            <!--Content Image Right And Text Left Start-->
        @elseif($section->sectionType->stType == 'CONTENT_IMAGE_LEFT_TEXT_RIGHT')
            <!--Content Image Left And Text Right Start-->
            <div style="margin-top: 200px;" class="grid-container">
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr">
                        <img src="{{ asset($section->sectionImg[0]['gallery']['gPath'] )}}">
                    </div>
                    <div style="" class="large-6 medium-12 small-12 padding-lr-txt-img-r">
                        @if($lan == 'fa')
                            <h4>{{ $section->sFaSubject }}</h4>
                        @elseif($lan == 'en')
                            <h4 class="Roboto">{{ $section->sEnSubject }}</h4>
                        @elseif($lan == 'ar')
                            <h4 class="Al-Jazeera-Arabic-Bold">{{ $section->sArSubject }}</h4>
                        @endif

                        @if($lan == 'fa')
                            <p class="text-color text-al">{{ $section->sFaDescription }}</p>
                        @elseif($lan == 'en')
                            <p class="text-color text-al Raleway-Regular">{{ $section->sEnDescription }}</p>
                        @elseif($lan == 'ar')
                            <p class="text-color text-al Al-Jazeera-Arabic-Regular">{{ $section->sArDescription }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <!--Content Image Left And Text Right Start-->
        @elseif($section->sectionType->stType == 'CONTENT_VIDEO')
            <!--Video Js Start-->
            <div class="grid-container">
                <div class="grid-x">
                    <div class="large-12">
                        <div id="instructions">
                            <video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px"
                                   controls preload="none" poster="{{ $section->sectionVideo[0]['gallery']['gPosterPath'] }}"
                                   data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                                <source src="{{ $section->sectionVideo[0]['gallery']['gPath'] }}"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <!--Video Js End-->
        @elseif($section->sectionType->stType == 'CONTENT_IMAGE_TOP_FADE')
            <!--image top fade Start-->
            <div class="grid-x">
                <div class="large-12 medium-12 small-12">
                    <div class="grid-x">
                        <div style="position: relative;display: inline-block;top: 65vh;text-align: center;z-index: 50;" class="large-12 medium-12 small-12">
                            @if($lan == 'fa')
                                <h1 class="my-text-shadow-effect white-color Shabnam-Bold">{{ $section->sFaSubject }}</h1>
                            @elseif($lan == 'en')
                                <h1 class="my-text-shadow-effect white-color Roboto-Bold">{{ $section->sEnSubject }}</h1>
                            @elseif($lan == 'ar')
                                <h1 class="my-text-shadow-effect white-color">{{ $section->sArSubject }}</h1>
                            @endif

                            @if($lan == 'fa')
                                <p class="white-color my-text-shadow-effect ">{{ $section->sFaDescription }}</p>
                            @elseif($lan == 'en')
                                <p class="white-color my-text-shadow-effect merienda">{{ $section->sEnDescription }}</p>
                            @elseif($lan == 'ar')
                                <p class="white-color my-text-shadow-effect">{{ $section->sArDescription }}</p>
                            @endif

                            @if($lan == 'fa')
                                <a href="{{ url($section->sLink . '')}}" class="button primary element-distanse">{{ $section->sLinkFaTitle }}</a>
                            @elseif($lan == 'en')
                                <a href="{{ url($section->sLink . '')}}" class="button primary element-distanse">{{ $section->sLinkEnTitle }}</a>
                            @elseif($lan == 'ar')
                                <a href="{{ url($section->sLink . '')}}" class="button primary element-distanse">{{ $section->sLinkArTitle }}</a>
                            @endif
                        </div>
                    </div>
                    <span style="width: 100%" class="faded faded-top">
                    <img style="height: 100vh;width: 100%;" src="{{ asset($section->sectionImg[0]['gallery']['gPath'])}}">
                    </span>
                </div>
            </div>
            <!--image top fade End-->
        @elseif($section->sectionType->stType == 'CONTENT_TEXT')
            <!--Text Section Start-->
            <div class="grid-container element-distance-tb">
                <div class="grid-x">
                    <div class="large-12">
                        @if($lan == 'fa')
                            <h1 class="center-el titr-color Mj-Flow-Reqular">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 style="font-size: 4em;" class="center-el titr-color wire-one">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h1 class="center-el titr-color Al-Jazeera-Arabic-Bold">{{ $section->sArSubject }}</h1>
                        @endif

                        @if($lan == 'fa')
                            <div class="text-justify element-distanse">{!! $section->sFaDescription !!}</div>
                        @elseif($lan == 'en')
                            <div class="text-justify element-distanse Raleway-Regular">{!! $section->sEnDescription !!}</div>
                        @elseif($lan == 'ar')
                            <div class="text-justify element-distanse Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</div>
                        @endif
                    </div>
                </div>
            </div>
            <!--Text Section End-->
        @endif
    @endforeach

@stop
