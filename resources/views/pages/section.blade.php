@extends('layouts.mainLayout')
@section('content')
    @foreach($sections as $section)
        <!--SUB MENU SECTION-->
        @if($section->sectionType->stType == 'SUB_MENU')
            <div class="grid-x grid-padding-x" data-sticky-container>
                <div style="z-index: 998;" class="large-12 medium-12 small-12 middle-menu-bottom" data-sticky data-top-anchor="650" data-margin-top="0">
                    <ul class="menu align-center top-menu middle-menu element-dir sub-menu-none">
                        @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($section->sMmId) as $subMenu)
                            @if($lan == 'fa')
                                <li><a class="Shabnam-Bold {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a></li>
                            @elseif($lan == 'en')
                                <li><a class="Roboto-Regular {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($subMenu->smPageLink . '') }}">{{ strtoupper($subMenu->smEnSubject) }}</a></li>
                            @elseif($lan == 'ar')
                                <li><a class="Al-Jazeera-Arabic-Bold {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    <nav class="pn-ProductNav sub-menu-show">
                        <div class="pn-ProductNav_Contents">
                            @foreach(\Hamedan_2018\SubMenu::getAllSubMenuWithMainMenuId($section->sMmId) as $subMenu)
                                @if($lan == 'fa')
                                    <a class="Shabnam-Bold pn-ProductNav_Link {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a>
                                @elseif($lan == 'en')
                                    <a class="Roboto-Regular pn-ProductNav_Link {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($subMenu->smPageLink . '') }}">{{ strtoupper($subMenu->smEnSubject) }}</a>
                                @elseif($lan == 'ar')
                                    <a class="Al-Jazeera-Arabic-Bold pn-ProductNav_Link {{ $subMenu->id == $pageInfo->pSmId ? 'is-active' : '' }}" href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a>
                                @endif
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
            <!--END SUB MENU SECTION-->
        @elseif($section->sectionType->stType == 'CONTENT_LEFT')
            <!--CONTENT_LEFT SECTION-->
            <div class="grid-container {{ $section->sFullScreen == true ? 'section-height' : '' }}">
                <div class="grid-x grid-padding-x">
                    <div style="margin-top: 80px;color: #37474F;" class="large-12 medium-12 float-center center-el">
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
                                                    <a href="{{ url(($lan != 'en' ? $lan : '') . $sectionImg->siLink) }}" class="direction-reveal__card">
                                                        @if($lan == 'fa')
                                                            <img style="height: 174px;width: 100vw;" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siFaSubject }}" class="img-fluid">
                                                        @elseif($lan == 'en')
                                                            <img style="height: 174px;width: 100vw;" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siEnSubject }}" class="img-fluid">
                                                        @elseif($lan == 'ar')
                                                            <img style="height: 174px;width: 100vw;" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siArSubject }}" class="img-fluid">
                                                        @endif
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
                                            <a href="{{ url(($lan != 'en' ? $lan : '') . $sectionImg->siLink) }}" class="direction-reveal__card">
                                                @if($lan == 'fa')
                                                    <img style="height: 356px;width: 100vw;" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siFaSubject }}" class="img-fluid">
                                                @elseif($lan == 'en')
                                                    <img style="height: 356px;width: 100vw;" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siEnSubject }}" class="img-fluid">
                                                @elseif($lan == 'ar')
                                                    <img style="height: 356px;width: 100vw;" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siArSubject }}" class="img-fluid">
                                                @endif
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
            <div class="grid-container {{ $section->sFullScreen == true ? 'section-height' : '' }}">
                <div class="grid-x padding-lr">
                    <div style="margin-top: 50px;color: #37474F;" class="large-12 medium-12 float-center center-el">
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
                            <div>{!! $section->sFaDescription !!}</div>
                        @elseif($lan == 'en')
                            <div class="Raleway-Regular">
                                {!! $section->sEnDescription !!}
                            </div>
                        @elseif($lan == 'ar')
                            <div class="Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</div>
                        @endif
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-12 medium-12 element-distanse">
                        <ul class="pgwSlider">
                            @foreach($section->sectionImg as $sectionImg)
                                <li>
                                    @if($lan == 'fa')
                                        <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siFaSubject }}" data-description="{{ $sectionImg->siFaDescription }}">
                                    @elseif($lan == 'en')
                                        <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siEnSubject }}" data-description="{{ $sectionImg->siEnDescription }}">
                                    @elseif($lan == 'ar')
                                        <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siArSubject }}" data-description="{{ $sectionImg->siArDescription }}">
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
            <div class="grid-x element-distanse">
                <div class="large-12 medium-12 small-12">
                    <img class="float-center section-spliter-margin" src="{{ asset('pic/section-spliter.png') }}">
                </div>
            </div>
            <!--Section Spliter Start-->
        @elseif($section->sectionType->stType == 'CONTENT_WIDE_SLIDER')
            <!--Content Wide Slider Start-->
            <div class="grid-container {{ $section->sFullScreen == true ? 'section-height' : '' }}">
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
                                                        <a href="{{ url(($lan != 'en' ? $lan : '') . $section->sectionImg[$item]['siLink']) }}">
                                                            <img  style="height: 520px" class="img-size" src="{{ asset($section->sectionImg[$item]['gallery']['gPath'] .'?v' . config('app.version')) }}">
                                                            @if($lan == 'fa')
                                                                <p style="margin-top: -50px;" class="withe-color my-text-shadow-effect-blue center-el">{{ $section->sectionImg[$item]['siFaSubject'] }}</p>
                                                            @elseif($lan == 'en')
                                                                <p style="margin-top: -50px;" class="withe-color my-text-shadow-effect-blue center-el Roboto">{{ $section->sectionImg[$item]['siEnSubject'] }}</p>
                                                            @elseif($lan == 'ar')
                                                                <p style="margin-top: -50px;" class="withe-color my-text-shadow-effect-blue center-el Al-Jazeera-Arabic-Regular">{{ $section->sectionImg[$item]['siArSubject'] }}</p>
                                                            @endif
                                                        </a>
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
                                        <li class="float-right Shabnam-Bold"><a href="{{ url($lan . ($breadCrumb->refPage->pLinkUrl == '/' ? '' : '/page') . $breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pFaSubject }}</a></li>
                                    @elseif($lan == 'en')
                                        <li class="float-left Roboto"><a href="{{ url(($breadCrumb->refPage->pLinkUrl == '/' ? '' : '/page') . $breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pEnSubject }}</a></li>
                                    @elseif($lan == 'ar')
                                        <li><a href="{{ url($lan . ($breadCrumb->refPage->pLinkUrl == '/' ? '' : '/page') . $breadCrumb->refPage->pLinkUrl) }}">{{ $breadCrumb->refPage->pArSubject }}</a></li>
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
                                                        <img  src="{{ asset($sponsors[$item]['sPath'] .'?v' . config('app.version')) }}" width="100px" height="100px">
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
            <div class="grid-container  {{ $section->sFullScreen == true ? 'section-height content-image-text-padding-top' : '' }}">
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 titr-color {{ $lan == 'en' ? 'padding-lr-txt-img-r' : 'padding-lr-txt-img-l'}}">
                        @if($lan == 'fa')
                            <h3 class="Shabnam-Bold center-ele-mq">{{ $section->sFaSubject }}</h3>
                        @elseif($lan == 'en')
                            <h3 class="Roboto center-ele-mq">{{ $section->sEnSubject }}</h3>
                        @elseif($lan == 'ar')
                            <h3 class="Al-Jazeera-Arabic-Bold center-ele-mq">{{ $section->sArSubject }}</h3>
                        @endif

                        @if($lan == 'fa')
                            <div class="text-color text-al Shabnam-Light">{!! $section->sFaDescription !!}</div>
                            @if ($section->sLinkFaTitle != null)
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;">{{ $section->sLinkFaTitle }}</a>
                            @endif
                        @elseif($lan == 'en')
                            <div class="text-color text-al Raleway-Regular">{!! $section->sEnDescription !!}</div>
                            @if ($section->sLinkEnTitle != null)
                                <a href="{{ url($section->sLink) }}" style="margin-top: 15px;">{{ $section->sLinkEnTitle }}</a>
                            @endif
                        @elseif($lan == 'ar')
                            <div class="text-color text-al Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</div>
                            @if ($section->sLinkArTitle != null)
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;">{{ $section->sLinkArTitle }}</a>
                            @endif
                        @endif
                    </div>
                    <div class="large-6 medium-12 small-12 padding-lr">
                        <img src="{{ asset($section->sectionImg[0]['gallery']['gPath'] .'?v' . config('app.version'))}}">
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
            <div class="grid-container {{ $section->sFullScreen == true ? 'section-height content-image-text-padding-top' : '' }}">
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr">
                        <img src="{{ asset($section->sectionImg[0]['gallery']['gPath'] .'?v' . config('app.version'))}}">
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
                    <div style="padding-left: 50px" class="large-6 medium-12 small-12 padding-lr-txt-img-r">
                        @if($lan == 'fa')
                            <h3 class="Shabnam-Bold center-ele-mq">{{ $section->sFaSubject }}</h3>
                        @elseif($lan == 'en')
                            <h3 class="Roboto center-ele-mq">{{ $section->sEnSubject }}</h3>
                        @elseif($lan == 'ar')
                            <h3 class="Al-Jazeera-Arabic-Bold center-ele-mq">{{ $section->sArSubject }}</h3>
                        @endif
                        @if($lan == 'fa')
                            <div class="text-color text-al Shabnam-Light">{!! $section->sFaDescription !!}</div>
                            @if ($section->sLinkFaTitle != null)
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;">{{ $section->sLinkFaTitle }}</a>
                            @endif
                        @elseif($lan == 'en')
                            <div class="text-color text-al Raleway-Regular">{!! $section->sEnDescription !!}</div>
                            @if ($section->sLinkEnTitle != null)
                                <a href="{{ url($section->sLink) }}" style="margin-top: 15px;">{{ $section->sLinkEnTitle }}</a>
                            @endif
                        @elseif($lan == 'ar')
                            <div class="text-color text-al Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</div>
                            @if ($section->sLinkArTitle != null)
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;">{{ $section->sLinkArTitle }}</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <!--Content Image Left And Text Right Start-->
        @elseif($section->sectionType->stType == 'CONTENT_VIDEO')
            <!--Video Js Start-->
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div style="color: #37474F;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <h1 class="Mj-Flow-Reqular">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 style="font-size: 4em;" class="wire-one">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h2 class="Al-Jazeera-Arabic-Regular">{{ $section->sArSubject }}</h2>
                        @endif
                    </div>
                </div>
                <div class="grid-container element-distance-tb">
                    <div class="grid-x">
                        <div class="large-12 medium-12 small-12">
                            <div class="text-center"  id="gallery" style="display:none">
                                @foreach($section->sectionVideo as $sectionVideo)
                                    @if($lan == 'fa')
                                        <img alt="{{ $sectionVideo['svFaSubject'] }}"
                                             src="{{ asset($sectionVideo['gallery']['gPosterPath'] .'?v' . config('app.version')) }}"
                                             data-type="html5video"
                                             data-image="{{ asset($sectionVideo['gallery']['gPosterPath'] .'?v' . config('app.version')) }}"
                                             data-videomp4="{{ asset($sectionVideo['gallery']['gPath'] .'?v' . config('app.version')) }}"
                                             data-description="{{ $sectionVideo['svFaSubject'] }}">
                                    @elseif($lan == 'en')
                                        <img alt="{{ $sectionVideo['svEnSubject'] }}"
                                             src="{{ asset($sectionVideo['gallery']['gPosterPath'] .'?v' . config('app.version')) }}"
                                             data-type="html5video"
                                             data-image="{{ asset($sectionVideo['gallery']['gPosterPath'] .'?v' . config('app.version')) }}"
                                             data-videomp4="{{ asset($sectionVideo['gallery']['gPath'] .'?v' . config('app.version')) }}"
                                             data-description="{{ $sectionVideo['svEnSubject'] }}">
                                    @elseif($lan == 'ar')
                                        <img alt="{{ $sectionVideo['svArSubject'] }}"
                                             src="{{ asset($sectionVideo['gallery']['gPosterPath'] .'?v' . config('app.version')) }}"
                                             data-type="html5video"
                                             data-image="{{ asset($sectionVideo['gallery']['gPosterPath'] .'?v' . config('app.version')) }}"
                                             data-videomp4="{{ asset($sectionVideo['gallery']['gPath'] .'?v' . config('app.version')) }}"
                                             data-description="{{ $sectionVideo['svArSubject'] }}">
                                    @endif
                                @endforeach
                            </div>
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
                                <h1 class="my-text-shadow-effect white-color Al-Jazeera-Arabic-Bold">{{ $section->sArSubject }}</h1>
                            @endif

                            @if($lan == 'fa')
                                <p class="white-color my-text-shadow-effect ">{{ $section->sFaDescription }}</p>
                            @elseif($lan == 'en')
                                <p class="white-color my-text-shadow-effect merienda">{{ $section->sEnDescription }}</p>
                            @elseif($lan == 'ar')
                                <p class="white-color my-text-shadow-effect">{{ $section->sArDescription }}</p>
                            @endif

                            @if($lan == 'fa')
                                <a href="{{ url($lan . $section->sLink)}}" class="button primary element-distanse">{{ $section->sLinkFaTitle }}</a>
                            @elseif($lan == 'en')
                                <a href="{{ url($section->sLink . '')}}" class="button primary element-distanse">{{ $section->sLinkEnTitle }}</a>
                            @elseif($lan == 'ar')
                                <a href="{{ url($lan . $section->sLink)}}" class="button primary element-distanse">{{ $section->sLinkArTitle }}</a>
                            @endif
                        </div>
                    </div>
                    <span style="width: 100%" class="faded faded-top">
                    <img style="height: 100vh;width: 100%;" src="{{ asset($section->sectionImg[0]['gallery']['gPath'] .'?v' . config('app.version')) }}">
                    </span>
                </div>
            </div>
            <!--image top fade End-->
        @elseif($section->sectionType->stType == 'CONTENT_TEXT')
            <!--Text Section Start-->
            <div class="grid-container element-distance-tb">
                <div class="grid-x">
                    <div class="large-offset-2 medium-offset-2"></div>
                    <div class="large-8 medium-8">
                        @if($lan == 'fa')
                            <h1 class="center-el titr-color Mj-Flow-Reqular">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 style="font-size: 4em;" class="center-el titr-color wire-one">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h1 class="center-el titr-color Al-Jazeera-Arabic-Bold">{{ $section->sArSubject }}</h1>
                        @endif

                        @if($lan == 'fa')
                            <div class="text-justify element-distanse size-18">{!! $section->sFaDescription !!}</div>
                        @elseif($lan == 'en')
                            <div class="text-justify element-distanse Raleway-Regular size-21">{!! $section->sEnDescription !!}</div>
                        @elseif($lan == 'ar')
                            <div class="text-justify element-distanse Al-Jazeera-Arabic-Regular size-18">{!! $section->sArDescription !!}</div>
                        @endif
                    </div>
                    <div class="large-offset-2 medium-offset-2"></div>
                </div>
            </div>
            <!--Text Section End-->
        @elseif($section->sectionType->stType == 'FOUR_IMAGE_GALLERY')
            <!--4 Image Section Start-->
            <div class="grid-container">
                <div style="margin: 30px 0px 30px 0px;" class="grid-x">
                    @foreach($section->sectionImg as $sectionImg)
                        <div class="large-3 medium-6 small-12 padding-lr">
                            @if ($sectionImg->siLink != null)
                                <a href="{{ url($lan != 'en' ? $lan . $sectionImg->siLink : $sectionImg->siLink) }}">
                                    <img class="image-shadow-effect" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}">
                                </a>
                            @else
                                <img class="image-shadow-effect" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <!--4 Image Section End-->
        @elseif($section->sectionType->stType == 'LIGHT_BOX_IMAGE_GALLERY')
            <!--Light Box Image Start-->
            <div class="grid-container">
                <div class="grid-x align-center-middle" style="height: 80vh;">
                    <ul style="margin: 0;" id="lightgallery" class="list-unstyled padding-lr">
                        <?php
                        $counter = 0;
                        ?>
                        @foreach($section->sectionImg as $sectionImg)
                            @if($lan == 'fa')
                                <li class="large-12" style="{{ $counter != 0 ? 'display: none;' : ''}}" data-src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" data-sub-html="<span>مکان:{{ $sectionImg->gallery->gFaLocation }}</span><span> عکاس:{{ $sectionImg->gallery->gFaPhotographer }}</span>">
                            @elseif($lan == 'en')
                                <li class="large-12 " style="{{ $counter != 0 ? 'display: none;' : ''}}" data-src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" data-sub-html="<span>Location:{{ $sectionImg->gallery->gEnLocation }}</span><span> Photographer:{{ $sectionImg->gallery->gEnPhotographer }}</span>">
                            @elseif($lan == 'ar')
                                <li class="large-12" style="{{ $counter != 0 ? 'display: none;' : ''}}" data-src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" data-sub-html="<span>موقع:{{ $sectionImg->gallery->gArLocation }}</span><span> مصور فوتوغرافي:{{ $sectionImg->gallery->gArPhotographer }}</span>">
                                    @endif
                                    <a href="">
                                        <img style="height: 80vh;background-size: cover;" class=" img-responsive zoom-hover" src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}">
                                    </a>
                                </li>
                            <?php $counter++; ?>
                        @endforeach
                    </ul>
                    <div class="large-12 text-center">
                        @if($lan == 'fa')
                            <span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gFaLocation'] . ' - عکس:' . $section->sectionImg[0]['gallery']['gFaPhotographer'] }}</span>
                        @elseif($lan == 'en')
                            <span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gEnLocation'] . ' - Photo:' . $section->sectionImg[0]['gallery']['gEnPhotographer'] }}</span>
                        @elseif($lan == 'ar')
                            <span class="font-small text-color">{{ $section->sectionImg[0]['gallery']['gArLocation'] . ' - مصور:' . $section->sectionImg[0]['gallery']['gArPhotographer'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <!--Light Box Image End-->
        @elseif($section->sectionType->stType == 'CONTENT_BRIEF_NEWS')
            <!--News Section Start-->
            <?php
            $newNews = \Hamedan_2018\News::getNewNews($lan);
            ?>
            <div id="ploop" style="padding-top: 150px" class="grid-container">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 padding-lr">
                        <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                            <ul class="orbit-container">
                                @for($i = 0; $i < count($newNews) ;)
                                    @if($i % 2 == 0)
                                        <li class="is-active orbit-slide">
                                            <div class="grid-x">
                                                @endif
                                                <div class="large-6 medium-12 small-12 padding-lr">
                                                    <div class="docs-example-orbit-slide">
                                                        <div class="grid-x">
                                                            <div class="large-4 medium-6 small-12">
                                                                <img class="img-circle float-center img-circle-mb" src="{{ asset($newNews[$i]->newsImg[0]['gallery']->gPath .'?v' . config('app.version')) }}">
                                                            </div>
                                                            <div class="large-8 medium-6 small-12">
                                                                @if($lan == 'fa')
                                                                    <h5 class="Shabnam-Bold news-section-header">{{ $newNews[$i]->nFaSubject }}</h5>
                                                                @elseif($lan == 'en')
                                                                    <h5 class="Roboto-Bold news-section-header">{{ $newNews[$i]->nEnSubject }}</h5>
                                                                @elseif($lan == 'ar')
                                                                    <h5 class="Al-Jazeera-Arabic-Bold news-section-header">{{ $newNews[$i]->nArSubject }}</h5>
                                                                @endif

                                                                @if($lan == 'fa')
                                                                    <p class="Shabnam-Light two-line text-color text-justify">{{ $newNews[$i]->nFaBriefDescription }}</p>
                                                                    <div style="text-align: center;" >
                                                                        <a href="{{ url($lan . '/news/info/' . $newNews[$i]->id) }}" class="button primary news-section-btn-center">بیشتر</a>
                                                                    </div>
                                                                @elseif($lan == 'en')
                                                                    <p class="Raleway-Regular two-line text-color text-justify element-distanse">{{ $newNews[$i]->nEnBriefDescription }}</p>
                                                                    <div style="text-align: center;" >
                                                                        <a href="{{ url('news/info/' . $newNews[$i]->id) }}" class="button primary news-section-btn-center">Read More</a>
                                                                    </div>

                                                                @elseif($lan == 'ar')
                                                                    <p class="Al-Jazeera-Arabic-Regular two-line text-color text-justify element-distanse">{{ $newNews[$i]->nArBriefDescription }}</p>
                                                                    <div style="text-align: center;" >
                                                                        <a href="{{ url($lan . '/news/info/' . $newNews[$i]->id) }}" class="button primary news-section-btn-center">اقرأ أكثر</a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $i++; ?>
                                                @if($i % 2 == 0)
                                            </div>
                                        </li>
                                    @endif
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--News Section End-->
        @elseif($section->sectionType->stType == 'CONTENT_LOCATION')
            <!--Location Section End-->
            <div class="grid-container">
                <div class="grid-x">
                    <div class="large-12">{!! $section->sLocation !!}</div>
                </div>
            </div>
            <!--Location Section End-->
        @elseif($section->sectionType->stType == 'HOVER_EFFECT_IDEAS')
            <!--Hover Effect Ideas Start -->
            <div class="grid-container content {{ $section->sFullScreen == true ? 'section-height content-image-text-padding-top' : '' }}">
                <div class="grid-x">
                    @foreach($section->sectionImg as $sectionImg)
                        @if (count($section->sectionImg) <= 2)
                            <div class="large-6 medium-6 small-12 padding-lr">
                                <div class="grid">
                                    <figure class="effect-bubba">
                                        @if($lan == 'fa')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siFaAlt }}"/>
                                        @elseif($lan == 'en')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siEnAlt }}"/>
                                        @elseif($lan == 'ar')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siArAlt }}"/>
                                        @endif
                                        <figcaption>
                                            @if($lan == 'fa')
                                                <h3 class="Shabnam-Bold">{{ $sectionImg->siFaSubject }}</h3>
                                                <p class="Shabnam-Light">{{ $sectionImg->siFaDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($lan . $sectionImg->siLink) }}">بیشتر</a>
                                                @endif
                                            @elseif($lan == 'en')
                                                <h3 class="Roboto-Bold">{{ $sectionImg->siEnSubject }}</h3>
                                                <p>{{ $sectionImg->siEnDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($sectionImg->siLink) }}">Read More</a>
                                                @endif
                                            @elseif($lan == 'ar')
                                                <h3 class="Al-Jazeera-Arabic-Bold">{{ $sectionImg->siArSubject }}</h3>
                                                <p class="Al-Jazeera-Arabic-Regular">{{ $sectionImg->siArDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($lan . $sectionImg->siLink) }}">أقرا اکثر</a>
                                                @endif
                                            @endif
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @elseif(count($section->sectionImg) == 3)
                            <div class="large-4 medium-6 small-12 padding-lr">
                                <div class="grid">
                                    <figure class="effect-bubba">
                                        @if($lan == 'fa')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siFaAlt }}"/>
                                        @elseif($lan == 'en')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siEnAlt }}"/>
                                        @elseif($lan == 'ar')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siArAlt }}"/>
                                        @endif
                                        <figcaption>
                                            @if($lan == 'fa')
                                                <h4 class="Shabnam-Bold">{{ $sectionImg->siFaSubject }}</h4>
                                                <p class="Shabnam-Light">{{ $sectionImg->siFaDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($lan . $sectionImg->siLink) }}">بیشتر</a>
                                                @endif
                                            @elseif($lan == 'en')
                                                <h4 class="Roboto-Bold">{{ $sectionImg->siEnSubject }}</h4>
                                                <p>{{ $sectionImg->siEnDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($sectionImg->siLink) }}">Read More</a>
                                                @endif
                                            @elseif($lan == 'ar')
                                                <h4 class="Al-Jazeera-Arabic-Bold">{{ $sectionImg->siArSubject }}</h4>
                                                <p class="Al-Jazeera-Arabic-Regular">{{ $sectionImg->siArDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($lan . $sectionImg->siLink) }}">أقرا اکثر</a>
                                                @endif
                                            @endif
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @else(count($section->sectionImg) == 3)
                            <div class="large-3 medium-6 small-12 padding-lr">
                                <div class="grid">
                                    <figure class="effect-bubba">
                                        @if($lan == 'fa')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siFaAlt }}"/>
                                        @elseif($lan == 'en')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siEnAlt }}"/>
                                        @elseif($lan == 'ar')
                                            <img src="{{ asset($sectionImg->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $sectionImg->siArAlt }}"/>
                                        @endif
                                        <figcaption>
                                            @if($lan == 'fa')
                                                <h5 class="Shabnam-Bold">{{ $sectionImg->siFaSubject }}</h5>
                                                <p class="one-line Shabnam-Light">{{ $sectionImg->siFaDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($lan . $sectionImg->siLink) }}">بیشتر</a>
                                                @endif
                                            @elseif($lan == 'en')
                                                <h6 class="Roboto-Bold">{{ $sectionImg->siEnSubject }}</h6>
                                                <p class="one-line">{{ $sectionImg->siEnDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($sectionImg->siLink) }}">Read More</a>
                                                @endif
                                            @elseif($lan == 'ar')
                                                <h5 class="Al-Jazeera-Arabic-Bold">{{ $sectionImg->siArSubject }}</h5>
                                                <p class="one-line Al-Jazeera-Arabic-Regular">{{ $sectionImg->siArDescription }}</p>
                                                @if($sectionImg->siLink != null)
                                                    <a href="{{ url($lan . $sectionImg->siLink) }}">أقرا اکثر</a>
                                                @endif
                                            @endif
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!--Hover Effect Ideas End -->
        @elseif($section->sectionType->stType == 'CONTENT_FREE_SPACE_SPLITTER')
            <!--Section Spliter Start-->
            <div class="grid-x element-distanse">
                <div class="large-12 medium-12 small-12" style="height: 8em">

                </div>
            </div>
            <!--Section Spliter Start-->
        @elseif($section->sectionType->stType == 'CONTENT_EVENTS')
            <!--Section Events Start-->
            <?php
                $events = \Hamedan_2018\Event::getAllEvents($section->sEventType);
            ?>
            <div class="grid-container element-distance-tb">
                <div class="grid-x">
                    @foreach($events as $event)
                        <div class="large-offset-2 medium-offset-1 small-offset-1"></div>
                        <div class="large-8 medium-10 small-10">
                            <div class="grid-x {{ !$loop->last ? 'event-border' : '' }}">
                                <div class="large-3 medium-3 small-9">
                                    @if($lan == 'fa')
                                        <img alt="{{ $event->eFaSubject }}" class="image-shadow-effect" style="height:280px;margin-bottom: 45px;" src="{{ asset($event->gallery->gPath) }}">
                                    @elseif($lan == 'en')
                                        <img alt="{{ $event->eEnSubject }}" class="image-shadow-effect" style="height:280px;margin-bottom: 45px;" src="{{ asset($event->gallery->gPath) }}">
                                    @elseif($lan == 'ar')
                                        <img alt="{{ $event->eArSubject }}" class="image-shadow-effect" style="height:280px;margin-bottom: 45px;" src="{{ asset($event->gallery->gPath) }}">
                                    @endif
                                </div>
                                <div class="large-9 medium-9 small-12">
                                    <div class="grid-x">
                                        <div class="large-offset-2 medium-offset-1"></div>
                                        <div class="large-8 medium-10 small-12">
                                            @if($lan == 'fa')
                                                @if($event->eLink == '')
                                                    <h4 class="Shabnam-Bold header-color">{{ $event->eFaSubject }}</h4>
                                                @else
                                                    <a href="{{ url($lan . $event->eLink) }}"><h4 class="Shabnam-Bold header-color">{{ $event->eFaSubject }}</h4></a>
                                                @endif
                                                <div class="text-color element-distanse Shabnam-Light">{!! $event->eFaBriefDescription !!}</div>
                                                <p class="Shabnam-Bold {{ $event->eExpired == 1 ? 'holding-time-expire' : '' }}"><i class="fas fa-calendar-check size-24 element-distanse btn-red"></i><span class="padding-lr size-16 btn-red">{{ $event->eFaHoldingTime }}</span></p>
                                            @elseif($lan == 'en')
                                                @if($event->eLink == '')
                                                    <h4 class="Roboto-Bold header-color">{{ $event->eEnSubject }}</h4>
                                                @else
                                                    <a href="{{ url($event->eLink) }}"><h4 class="Roboto-Bold header-color">{{ $event->eEnSubject }}</h4></a>
                                                @endif
                                                <div class="text-color element-distanse Raleway-Regular">{!! $event->eEnBriefDescription !!}</div>
                                                <p class="Roboto-Bold {{ $event->eExpired == 1 ? 'holding-time-expire' : '' }}"><i class="fas fa-calendar-check size-24 element-distanse btn-red"></i><span class="padding-lr size-16 btn-red">{{ $event->eEnHoldingTime }}</span></p>
                                            @elseif($lan == 'ar')
                                                @if($event->eLink == '')
                                                    <h4 class="Al-Jazeera-Arabic-Bold header-color">{{ $event->eArSubject }}</h4>
                                                @else
                                                    <a href="{{ url($lan . $event->eLink) }}"><h4 class="Roboto-Bold header-color">{{ $event->eArSubject }}</h4></a>
                                                @endif
                                                <div class="text-color element-distanse Al-Jazeera-Arabic-Regular">{!! $event->eArBriefDescription !!}</div>
                                                <p class="Al-Jazeera-Arabic-Bold {{ $event->eExpired == 1 ? 'holding-time-expire' : '' }}"><i class="fas fa-calendar-check size-24 element-distanse btn-red"></i><span class="padding-lr size-16 btn-red">{{ $event->eArHoldingTime }}</span></p>
                                            @endif
                                        </div>
                                        <div class="large-offset-2 medium-offset-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="large-offset-2 medium-offset-1 small-offset-1"></div>
                    @endforeach
                </div>
            </div>
            <!--Section Events End-->
        @elseif($section->sectionType->stType == 'CONTENT_FORM')
            <?php
                $form = \Hamedan_2018\Form::getForm($section->sFrId);
                $formStepsCount = \Hamedan_2018\Form::getStepsCount($section->sFrId);
                $formSteps = \Hamedan_2018\QuestionStep::getSteps($section->sFrId);
            ?>
            <div class="grid-container">
                @if(!\Session::has('successPm'))
                    <div class="grid-x">
                        <form id="fileupload" action="{{ url('/register-form/' . $form->id) }}" class="msform" enctype="multipart/form-data" method="{{ $form->fMethod }}" data-abide novalidate>
                            {{ csrf_field() }}
                            <div class="grid-container">
                                <div class="grid-x">
                                    <div class="large-offset-1 medium-offset-1"></div>
                                    <div class="large-10 medium-10">
                                        <div  data-abide-error class="callout large" style="margin:5px; display: none;margin-bottom: 50px;">
                                            @if($lan == 'fa')
                                                <i class="fi-alert btn-red Shabnam-Light">لطفا موارد الزامی فرم را تکمیل کنید!</i>
                                            @elseif($lan == 'en')
                                                <i class="fi-alert btn-red wire-one">Please complete the required fields!</i>
                                            @elseif($lan == 'ar')
                                                <i class="fi-alert btn-red Al-Jazeera-Arabic-Regular">يرجى إكمال الحقول المطلوبة!</i>
                                            @endif
                                        </div>
                                        @if(\Session::has('resultError'))
                                            <div class="callout large" style="margin:5px; margin-bottom: 50px;">
                                                @if($lan == 'fa')
                                                    <i class="fi-alert btn-red Shabnam-Light">{{ \Session::get('resultError')[0] }}</i>
                                                @elseif($lan == 'en')
                                                    <i class="fi-alert btn-red wire-one">{{ \Session::get('resultError')[1] }}</i>
                                                @elseif($lan == 'ar')
                                                    <i class="fi-alert btn-red Al-Jazeera-Arabic-Regular">{{ \Session::get('resultError')[2] }}</i>
                                                @endif
                                            </div>
                                        @endif
                                        @if($form->fIsMultiStepForm)
                                            <!-- progressbar -->
                                            <div class="center-el">
                                                <ul class="text-center" id="progressbar">
                                                    <li class="active"></li>
                                                    @for($i = 1 ; $i < $formStepsCount ; $i++)
                                                        <li></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="large-offset-1 medium-offset-1"></div>
                                </div>
                            </div>
                            <div class="element-distanse"></div>
                            @for($i = 1 ; $i <= $formStepsCount ; $i++)
                                <fieldset>
                                    @if($lan == 'fa')
                                        <h3 class="fs-subtitle Shabnam-Bold">{!! $formSteps[$i - 1]->qsFaSubject !!}</h3>
                                    @elseif($lan == 'en')
                                        <h3 class="fs-subtitle Roboto-Bold">{!! $formSteps[$i - 1]->qsEnSubject !!}</h3>
                                    @elseif($lan == 'ar')
                                        <h3 class="fs-subtitle Al-Jazeera-Arabic-Bold">{!! $formSteps[$i - 1]->qsArSubject !!}</h3>
                                    @endif

                                    <div class="grid-x">
                                        <!--<p class="help-block">List your strengths here.</p>-->
                                        @foreach($form->questionForm as $questionForm)
                                            @if ($questionForm->qfStep == $i)
                                                <div class="{{ 'large-' . $questionForm->qfGrid . ' medium-' . $questionForm->qfGrid . ' small-12' }} padding-lr">
                                                    @switch($questionForm->question->fieldType->ftType)
                                                        @case("text")
                                                            @if($questionForm->qfRequire)
                                                                @if($lan == 'fa')
                                                                    <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {{ $questionForm->question->qFaSubject }}
                                                                        <input name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="text" placeholder="{{ $questionForm->question->qFaPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                        <span class="form-error">{{ $questionForm->qfFaErrorMsg }}</span>
                                                                    </label>
                                                                @elseif($lan == 'en')
                                                                    <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {{ $questionForm->question->qEnSubject }}
                                                                        <input name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="text" placeholder="{{ $questionForm->question->qEnPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                        <span class="form-error wire-one">{{ $questionForm->qfEnErrorMsg }}</span>
                                                                    </label>
                                                                @elseif($lan == 'ar')
                                                                    <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {{ $questionForm->question->qArSubject }}
                                                                        <input name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="text" placeholder="{{ $questionForm->question->qArPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                        <span class="form-error">{{ $questionForm->qfArErrorMsg }}</span>
                                                                    </label>
                                                                @endif
                                                            @else
                                                                @if($lan == 'fa')
                                                                    <label> {{ $questionForm->question->qFaSubject }}
                                                                        <input name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="text" placeholder="{{ $questionForm->question->qFaPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                        <span class="form-error">{{ $questionForm->qfFrErrorMsg }}</span>
                                                                    </label>
                                                                @elseif($lan == 'en')
                                                                    <label> {{ $questionForm->question->qEnSubject }}
                                                                        <input name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="text" placeholder="{{ $questionForm->question->qEnPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                        <span class="form-error">{{ $questionForm->qfEnErrorMsg }}</span>
                                                                    </label>
                                                                @elseif($lan == 'ar')
                                                                    <label> {{ $questionForm->question->qArSubject }}
                                                                        <input name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="text" placeholder="{{ $questionForm->question->qArPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                        <span class="form-error">{{ $questionForm->qfArErrorMsg }}</span>
                                                                    </label>
                                                                @endif
                                                            @endif
                                                        @break
                                                    @case("checkbox")
                                                        </br>
                                                        @if($questionForm->qfRequire)
                                                            @if($lan == 'fa')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @else
                                                            @if($lan == 'fa')
                                                                <label> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @endif
                                                        @foreach($questionForm->question->fieldOption as $fieldOption)
                                                            <?php $isChecked = false; ?>
                                                            @foreach($questionForm->question->fieldOption as $fo)
                                                                @if($lan == 'fa' && old($questionForm->id . '.' . ($loop->iteration - 1)) == $fieldOption->option->oFaValue)
                                                                    <?php $isChecked = true; ?>
                                                                @elseif($lan == 'en' && old($questionForm->id . '.' . ($loop->iteration - 1)) == $fieldOption->option->oEnValue)
                                                                    <?php $isChecked = true; ?>
                                                                @elseif($lan == 'ar' && old($questionForm->id . '.' . ($loop->iteration - 1)) == $fieldOption->option->oArValue)
                                                                    <?php $isChecked = true; ?>
                                                                @endif
                                                            @endforeach
                                                            @if($lan == 'fa')
                                                                <div class="large-12 medium-12 small-12"><input name="{{ $questionForm->id . '[]'}}" value="{{ $fieldOption->option->oFaValue }}" id="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}" type="checkbox" {{ $fieldOption->foRequire != 0 ? 'required' : '' }} {{ $isChecked == true ? 'checked' : '' }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oFaSubject }}</label></div>
                                                            @elseif($lan == 'en')
                                                                <div class="large-12 medium-12 small-12"><input name="{{ $questionForm->id . '[]' }}" value="{{ $fieldOption->option->oEnValue }}" id="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}" type="checkbox" {{ $fieldOption->foRequire != 0 ? 'required' : '' }} {{ $isChecked == true ? 'checked' : '' }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oEnSubject }}</label></div>
                                                            @elseif($lan == 'ar')
                                                                <div class="large-12 medium-12 small-12"><input name="{{ $questionForm->id . '[]' }}" value="{{ $fieldOption->option->oArValue }}" id="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}" type="checkbox" {{ $fieldOption->foRequire != 0 ? 'required' : '' }} {{ $isChecked == true ? 'checked' : '' }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oFaSubject }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oArSubject }}</label></div>
                                                            @endif
                                                        @endforeach
                                                        @break
                                                    @case("radio")
                                                        </br>
                                                        @if($questionForm->qfRequire)
                                                            @if($lan == 'fa')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @else
                                                            @if($lan == 'fa')
                                                                <label> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @endif
                                                        @foreach($questionForm->question->fieldOption as $fieldOption)
                                                            @if($lan == 'fa')
                                                                <div class="large-12 medium-12 small-12"><input name="{{ $questionForm->id }}" value="{{ $fieldOption->option->oFaValue }}" id="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}" type="radio" {{ $questionForm->qfRequire != 0 ? 'required' : '' }} {{ old($questionForm->id) == $fieldOption->option->oFaValue ? 'checked' : '' }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oFaSubject }}</label></div>
                                                            @elseif($lan == 'en')
                                                                <div class="large-12 medium-12 small-12"><input name="{{ $questionForm->id }}" value="{{ $fieldOption->option->oEnValue }}" id="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}" type="radio" {{ $questionForm->qfRequire != 0 ? 'required' : '' }} {{ old($questionForm->id) == $fieldOption->option->oEnValue ? 'checked' : '' }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oEnSubject }}</label></div>
                                                            @elseif($lan == 'ar')
                                                                <div class="large-12 medium-12 small-12"><input name="{{ $questionForm->id }}" value="{{ $fieldOption->option->oArValue }}" id="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}" type="radio" {{ $questionForm->qfRequire != 0 ? 'required' : '' }} {{ old($questionForm->id) == $fieldOption->option->oArValue ? 'checked' : '' }}><label for="{{ $form->id . $questionForm->question->qName . $fieldOption->option->oName }}">{{ $fieldOption->option->oArSubject }}</label></div>
                                                            @endif
                                                        @endforeach
                                                        @break
                                                    @case("select")
                                                        </br>
                                                        @if($questionForm->qfRequire)
                                                            @if($lan == 'fa')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @else
                                                            @if($lan == 'fa')
                                                                <label> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @endif
                                                        <select name="{{ $questionForm->id }}" {{ $questionForm->qfRequire != 0 ? 'required' : '' }}>
                                                            @if($questionForm->qfRequire != 0)
                                                                <option></option>
                                                            @endif
                                                            <?php $setSelected = false; ?>
                                                            @foreach($questionForm->question->fieldOption as $fieldOption)
                                                                @if($lan == 'fa')
                                                                    @if (old($questionForm->id) == $fieldOption->option->oFaValue)
                                                                        <option value="{{ $fieldOption->option->oFaValue }}" selected>{{ $fieldOption->option->oFaSubject }}</option>
                                                                        <?php $setSelected = true; ?>
                                                                    @else
                                                                        <option value="{{ $fieldOption->option->oFaValue }}" {{ ($fieldOption->foChecked != 0 && !$setSelected) ? 'selected' : '' }}>{{ $fieldOption->option->oFaSubject }}</option>
                                                                    @endif
                                                                @elseif($lan == 'en')
                                                                    @if (old($questionForm->id) == $fieldOption->option->oEnValue)
                                                                        <option value="{{ $fieldOption->option->oEnValue }}" selected>{{ $fieldOption->option->oEnSubject }}</option>
                                                                        <?php $setSelected = true; ?>
                                                                    @else
                                                                        <option value="{{ $fieldOption->option->oEnValue }}" {{ ($fieldOption->foChecked != 0 && !$setSelected) ? 'selected' : '' }}>{{ $fieldOption->option->oEnSubject }}</option>
                                                                    @endif
                                                                @elseif($lan == 'ar')
                                                                    @if (old($questionForm->id) == $fieldOption->option->oArValue)
                                                                        <option value="{{ $fieldOption->option->oArValue }}" selected>{{ $fieldOption->option->oArSubject }}</option>
                                                                        <?php $setSelected = true; ?>
                                                                    @else
                                                                        <option value="{{ $fieldOption->option->oArValue }}" {{ ($fieldOption->foChecked != 0 && !$setSelected) ? 'selected' : '' }}>{{ $fieldOption->option->oArSubject }}</option>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @break
                                                    @case("textarea")
                                                            </br>
                                                            @if($questionForm->qfRequire)
                                                                @if($lan == 'fa')
                                                                    <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qFaSubject !!}</label>
                                                                @elseif($lan == 'en')
                                                                    <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qEnSubject !!}</label>
                                                                @elseif($lan == 'ar')
                                                                    <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qArSubject !!}</label>
                                                                @endif
                                                            @else
                                                                @if($lan == 'fa')
                                                                    <label> {!! $questionForm->question->qFaSubject !!}</label>
                                                                @elseif($lan == 'en')
                                                                    <label> {!! $questionForm->question->qEnSubject !!}</label>
                                                                @elseif($lan == 'ar')
                                                                    <label> {!! $questionForm->question->qArSubject !!}</label>
                                                                @endif
                                                            @endif
                                                            <div class="large-12">
                                                                <textarea style="height: auto;" class="form-control" name="{{ $questionForm->id }}" {{ $questionForm->qfRequire != 0 ? 'required' : '' }}>{{ old($questionForm->id) }}</textarea>
                                                            </div>
                                                        @break
                                                    @case("captcha")
                                                        <div class="large-12" style="margin-top: 20px;margin-bottom: 20px">
                                                            {!! app('captcha')->display(); !!}
                                                        </div>
                                                        @break;
                                                    @case("multi-uploader")
                                                        </br>
                                                        @if($questionForm->qfRequire)
                                                            @if($lan == 'fa')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @else
                                                            @if($lan == 'fa')
                                                                <label> {!! $questionForm->question->qFaSubject !!}</label>
                                                            @elseif($lan == 'en')
                                                                <label> {!! $questionForm->question->qEnSubject !!}</label>
                                                            @elseif($lan == 'ar')
                                                                <label> {!! $questionForm->question->qArSubject !!}</label>
                                                            @endif
                                                        @endif
                                                        <div class="large-12">
                                                            <div class="it">
                                                                <div class="grid-x" id="uploader">
                                                                    <div class="large-3 uploadDoc">
                                                                        <div class="multi-uploader">
                                                                            <div class="fileUpload" style="padding: 5px">
                                                                                <label for="{{ 'up0'  }}" class="multi-uploader-preview-label">
                                                                                    <img src="{{ asset('pic/upload_img.png') }}" class="img-border"/>
                                                                                </label>
                                                                                <input type="file" accept="image/*" class="upload up" id="up0" name="{{ $questionForm->id . '[]' }}" onchange="readURL(this, '{{ $questionForm->id . '[]' }}' , '{{ $questionForm->qfRequire }}' , '{{ asset('pic/upload_img.png') }}' , 1);" {{ $questionForm->qfRequire != 0 ? 'required' : '' }}/>
                                                                            </div><!-- btn-orange -->
                                                                        </div><!-- col-3 -->
                                                                    </div><!--row-->
                                                                </div><!--uploader-->
                                                            </div><!-- row -->
                                                        </div>
                                                        @break;
                                                    @case('single-uploader')
                                                        </br>
                                                        @if($lan == 'fa')
                                                            <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qFaSubject !!}</label>
                                                        @elseif($lan == 'en')
                                                            <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qEnSubject !!}</label>
                                                        @elseif($lan == 'ar')
                                                            <label><span class="btn-red"><i class="fas fa-star size-12"></i></span> {!! $questionForm->question->qArSubject !!}</label>
                                                        @endif
                                                        <div class="large-12">
                                                            <!-- Upload  -->
                                                            <div id="file-upload-form" class="uploader {{ $lan != 'en' ? 'float-right' : 'float-left' }}">
                                                                <input id="file-upload" type="file" name="{{ $questionForm->id . '[]' }}" accept="image/*" {{ $questionForm->qfRequire == 0 ? '' : 'required' }}/>
                                                                <label for="file-upload" id="file-drag">
                                                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                                                    <div id="start">
                                                                        <i style="margin-bottom: 15px;" class="fas fa-camera-retro btn-red size-48" aria-hidden="true"></i>
                                                                        <div style="margin-bottom: 15px;">Select a file or drag here</div>
                                                                        <div id="notimage" class="hidden">Please select an image</div>
                                                                        <span id="file-upload-btn" class="button primary">Select a file</span>
                                                                    </div>
                                                                    <div id="response" class="hidden">
                                                                        <div id="messages"></div>
                                                                        <progress class="progress" id="file-progress" value="0">
                                                                            <span>0</span>%
                                                                        </progress>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @break;
                                                    @endswitch
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    @if($form->fIsMultiStepForm && $formStepsCount > 1)
                                        @if($i == 1)
                                            @if($lan == 'fa')
                                                <input type="button" name="next" class="next action-button float-center" value="بعدی" />
                                            @elseif($lan == 'en')
                                                <input type="button" name="next" class="next action-button float-center" value="Next" />
                                            @elseif($lan == 'ar')
                                                <input type="button" name="next" class="next action-button float-center" value="التالى" />
                                            @endif
                                        @elseif($i < $formStepsCount)
                                            @if($lan == 'fa')
                                                <input type="button" name="next" class="next action-button float-center" value="بعدی" />
                                                <input type="button" name="previous" class="previous action-button" value="قبلی" />
                                            @elseif($lan == 'en')
                                                <input type="button" name="next" class="next action-button float-center" value="Next" />
                                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                            @elseif($lan == 'ar')
                                                <input type="button" name="next" class="next action-button float-center" value="التالى" />
                                                <input type="button" name="previous" class="previous action-button" value="سابق" />
                                            @endif
                                        @else
                                            @if($lan == 'fa')
                                                <input type="button" name="previous" class="previous action-button" value="قبلی" />
                                                <input type="submit" name="submit" class="submit action-button" value="ثبت" />
                                            @elseif($lan == 'en')
                                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                                <input type="submit" name="submit" class="submit action-button" value="Register" />
                                            @elseif($lan == 'ar')
                                                <input type="button" name="previous" class="previous action-button" value="التالى" />
                                                <input type="submit" name="submit" class="submit action-button" value="تسجيل" />
                                            @endif
                                        @endif
                                    @else
                                        @if($lan == 'fa')
                                            <input type="submit" name="submit" class="submit action-button" value="ثبت" />
                                        @elseif($lan == 'en')
                                            <input type="submit" name="submit" class="submit action-button" value="ًRegister" />
                                        @elseif($lan == 'ar')
                                            <input type="submit" name="submit" class="submit action-button" value="تسجيل" />
                                        @endif
                                    @endif
                                </fieldset>
                                <!-- fieldsets -->
                            @endfor
                        </form>
                    </div>
                @else
                    <div class="grid-x">
                        <div class="large-12 medium-12 small-12" style="min-height: 60vh; margin-top: 20vh">
                            @if($lan == 'fa')
                                {!! \Session::get('successPm')[0] !!}
                            @elseif($lan == 'en')
                                {!! \Session::get('successPm')[1] !!}
                            @elseif($lan == 'ar')
                                {!! \Session::get('successPm')[2] !!}
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        @endif
        <!--Section pannellum-master-360 Start-->
{{--        <div class="grid-container">
            <div class="grid-x">
                <div class="large-12 medium-12 small-12">
                    <iframe width="100%" height="600vh"  allowfullscreen style="border-style:none;" src="{{ asset('pannellum-master-360/src/standalone/pannellum.htm?config=../../examples/example-tour.json')}}"></iframe>
                </div>
            </div>
        </div>--}}
        <!--Section pannellum-master-360 End-->



    @endforeach
    <!--Section Go to Register Start-->
    <div class="grid-container element-distanse">
        <div class="grid-x">
            <div class="large-12 text-center">
                <img style="height: 300px;width: 100%;" class="background-cover image-shadow-effect" src="{{ asset('pic/gallery/lan_63.jpg') }}">
                <h3 style="margin-top: -200px;" class="my-text-shadow-effect white-color">Hamedan's handicrafts are full of art and beauty</h3>
                <a style="margin-top: 50px;width: 150px;" href="#" class="button primary ">Register</a>
            </div>
        </div>
    </div>
    <!--Section Go to Register End-->

    <!--Section About Me Start-->
    <div class="grid-container element-distance-tb">
        <div class="grid-x">
            <div class="large-4 medium-6 small-12 padding-lr">
                <article class="material-card Light-Blue">
                    <h2>
                        <span>Ali Jahanpak</span>
                        <strong>
                            <i class="fab fa-connectdevelop"></i>
                            Web Developer
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-harvey-keitel.jpg">
                        </div>
                        <div class="mc-description">
                            Some of his most notable starring roles were in Martin Scorsese's Mean Streets and Taxi Driver, Ridley Scott's The Duellists and Thelma & Louise, Quentin Tarantino ...
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer center-el">
                        <h4>
                            Social
                        </h4>
                        <a class="fab fa-instagram"></a>
                        <a class="fab fa-linkedin"></a>
                        <a class="fab fa-telegram"></a>
                        <a class="fas fa-at"></a>
                    </div>
                </article>
            </div>

            <div class="large-4 medium-6 small-12 padding-lr">
                <article class="material-card Teal">
                    <h2>
                        <span>Morteza Amzajerdi</span>
                        <strong>
                            <i class="far fa-file-alt"></i>
                            Content Manager
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-sean-penn.jpg">
                        </div>
                        <div class="mc-description">
                            Some of his most notable starring roles were in Martin Scorsese's Mean Streets and Taxi Driver, Ridley Scott's The Duellists and Thelma & Louise, Quentin Tarantino ...
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer center-el">
                        <h4>
                            Social
                        </h4>
                        <a class="fab fa-instagram"></a>
                        <a class="fab fa-linkedin"></a>
                        <a class="fab fa-telegram"></a>
                        <a class="fas fa-at"></a>
                    </div>
                </article>
            </div>

            <div class="large-4 medium-6 small-12 padding-lr">
                <article class="material-card Blue-Grey">
                    <h2>
                        <span>Mostafa Asad beygi</span>
                        <strong>
                            <i class="fas fa-camera"></i>
                            Photographer
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-morgan-freeman.jpg">
                        </div>
                        <div class="mc-description">
                            Some of his most notable starring roles were in Martin Scorsese's Mean Streets and Taxi Driver, Ridley Scott's The Duellists and Thelma & Louise, Quentin Tarantino ...
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer center-el">
                        <h4>
                            Social
                        </h4>
                        <a class="fab fa-instagram"></a>
                        <a class="fab fa-linkedin"></a>
                        <a class="fab fa-telegram"></a>
                        <a class="fas fa-at"></a>
                    </div>
                </article>
            </div>

        </div>
    </div>
    <!--Section About Me End-->

    <div class="grid-container">
        <div class="grid-x">
            <div class="large-12">
                <div class="grid-x element-dir-l">
                    <div class="large-4 small-6">
                        <label>
                            <select  name="countryCode" style="border-radius: 0px;border-right: none;" id="select" required>
                                <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                <option data-countryCode="US" value="1">USA (+1)</option>
                                <optgroup label="Other countries">
                                    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                    <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                    <option data-countryCode="AO" value="244">Angola (+244)</option>
                                    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                    <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                    <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                    <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                    <option data-countryCode="AU" value="61">Australia (+61)</option>
                                    <option data-countryCode="AT" value="43">Austria (+43)</option>
                                    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                    <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                    <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                    <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                    <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                    <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                    <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                    <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                    <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                                    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                    <option data-countryCode="CL" value="56">Chile (+56)</option>
                                    <option data-countryCode="CN" value="86">China (+86)</option>
                                    <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                    <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                    <option data-countryCode="CG" value="242">Congo (+242)</option>
                                    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                    <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                    <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                    <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                    <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                    <option data-countryCode="FI" value="358">Finland (+358)</option>
                                    <option data-countryCode="FR" value="33">France (+33)</option>
                                    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                    <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                    <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                    <option data-countryCode="DE" value="49">Germany (+49)</option>
                                    <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                    <option data-countryCode="GR" value="30">Greece (+30)</option>
                                    <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                    <option data-countryCode="GU" value="671">Guam (+671)</option>
                                    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                    <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                    <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                    <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                    <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                    <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                    <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                    <option data-countryCode="IN" value="91">India (+91)</option>
                                    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                                    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                    <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                    <option data-countryCode="IL" value="972">Israel (+972)</option>
                                    <option data-countryCode="IT" value="39">Italy (+39)</option>
                                    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                    <option data-countryCode="JP" value="81">Japan (+81)</option>
                                    <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                    <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                    <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                    <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                    <option data-countryCode="LA" value="856">Laos (+856)</option>
                                    <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                    <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                    <option data-countryCode="LY" value="218">Libya (+218)</option>
                                    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                    <option data-countryCode="MO" value="853">Macao (+853)</option>
                                    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                    <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                    <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                    <option data-countryCode="ML" value="223">Mali (+223)</option>
                                    <option data-countryCode="MT" value="356">Malta (+356)</option>
                                    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                    <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                    <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                    <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                    <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                    <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                    <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                    <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                    <option data-countryCode="NE" value="227">Niger (+227)</option>
                                    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                    <option data-countryCode="NU" value="683">Niue (+683)</option>
                                    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                    <option data-countryCode="NO" value="47">Norway (+47)</option>
                                    <option data-countryCode="OM" value="968">Oman (+968)</option>
                                    <option data-countryCode="PW" value="680">Palau (+680)</option>
                                    <option data-countryCode="PA" value="507">Panama (+507)</option>
                                    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                                    <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                    <option data-countryCode="PL" value="48">Poland (+48)</option>
                                    <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                    <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                    <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                    <option data-countryCode="RO" value="40">Romania (+40)</option>
                                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                                    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                    <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                    <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                    <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                    <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                    <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                    <option data-countryCode="ES" value="34">Spain (+34)</option>
                                    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                    <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                    <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                    <option data-countryCode="SI" value="963">Syria (+963)</option>
                                    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                    <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                    <option data-countryCode="TG" value="228">Togo (+228)</option>
                                    <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                    <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                    <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                    <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                    <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                </optgroup>
                            </select>
                        </label>
                    </div>
                    <div class="large-8 small-6">
                        <input style="border-radius: 0px" type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop