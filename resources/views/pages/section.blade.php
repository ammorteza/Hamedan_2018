@extends('layouts.mainLayout')
@section('content')
    <div id="ploop"></div>
    @foreach($sections as $section)
        <!--SUB MENU SECTION-->
        @if($section->sectionType->stType == 'SUB_MENU')
            <div class="grid-x grid-padding-x" data-sticky-container>
                <div style="z-index: 80" class="large-12 medium-12 small-12 middle-menu-bottom" data-sticky data-top-anchor="{{ $pageInfo->headerType->phtType == 'PUBLIC' ? '400' : '650' }}" data-margin-top="0">
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
            <div class="grid-container" id="breadCrumbContainer">
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
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;" class="{{ $section->sButtonStyle == 1 ? 'button primary' : '' }}">{{ $section->sLinkFaTitle }}</a>
                            @endif
                        @elseif($lan == 'en')
                            <div class="text-color text-al Raleway-Regular">{!! $section->sEnDescription !!}</div>
                            @if ($section->sLinkEnTitle != null)
                                <a href="{{ url($section->sLink) }}" style="margin-top: 15px;" class="{{ $section->sButtonStyle == 1 ? 'button primary' : '' }}">{{ $section->sLinkEnTitle }}</a>
                            @endif
                        @elseif($lan == 'ar')
                            <div class="text-color text-al Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</div>
                            @if ($section->sLinkArTitle != null)
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;" class="{{ $section->sButtonStyle == 1 ? 'button primary' : '' }}">{{ $section->sLinkArTitle }}</a>
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
                                <a href="{{ url($lan . $section->sLink) }}" class="{{ $section->sButtonStyle == 1 ? 'button primary' : '' }}" style="margin-top: 15px;">{{ $section->sLinkFaTitle }}</a>
                            @endif
                        @elseif($lan == 'en')
                            <div class="text-color text-al Raleway-Regular">{!! $section->sEnDescription !!}</div>
                            @if ($section->sLinkEnTitle != null)
                                <a href="{{ url($section->sLink) }}" style="margin-top: 15px;" class="{{ $section->sButtonStyle == 1 ? 'button primary' : '' }}">{{ $section->sLinkEnTitle }}</a>
                            @endif
                        @elseif($lan == 'ar')
                            <div class="text-color text-al Al-Jazeera-Arabic-Regular">{!! $section->sArDescription !!}</div>
                            @if ($section->sLinkArTitle != null)
                                <a href="{{ url($lan . $section->sLink) }}" style="margin-top: 15px;" class="{{ $section->sButtonStyle == 1 ? 'button primary' : '' }}">{{ $section->sLinkArTitle }}</a>
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
            <div class="grid-container {{ $section->sFullScreen == true ? 'section-height content-image-text-padding-top' : '' }}">
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
                                        <img alt="{{ $event->eFaSubject }}" class="image-shadow-effect-without-height" style="margin-bottom: 45px;" src="{{ asset($event->gallery->gPath) }}">
                                    @elseif($lan == 'en')
                                        <img alt="{{ $event->eEnSubject }}" class="image-shadow-effect-without-height" style="margin-bottom: 45px;" src="{{ asset($event->gallery->gPath) }}">
                                    @elseif($lan == 'ar')
                                        <img alt="{{ $event->eArSubject }}" class="image-shadow-effect-without-height" style="margin-bottom: 45px;" src="{{ asset($event->gallery->gPath) }}">
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
                                                <div class="large-12 medium-12 small-12" style="margin-top: 10px">
                                                    @if($event->eLink != '')
                                                        <a href="{{ url($lan . $event->eLink) }}">{{ $event->eFaLinkTitle }}</a>
                                                    @endif
                                                </div>
                                                <p class="Shabnam-Bold {{ $event->eExpired == 1 ? 'holding-time-expire' : '' }}"><i class="fas fa-calendar-check size-24 element-distanse btn-red"></i><span class="padding-lr size-16 btn-red">{{ $event->eFaHoldingTime }}</span></p>
                                            @elseif($lan == 'en')
                                                @if($event->eLink == '')
                                                    <h4 class="Roboto-Bold header-color">{{ $event->eEnSubject }}</h4>
                                                @else
                                                    <a href="{{ url($event->eLink) }}"><h4 class="Roboto-Bold header-color">{{ $event->eEnSubject }}</h4></a>
                                                @endif
                                                <div class="text-color element-distanse Raleway-Regular">{!! $event->eEnBriefDescription !!}</div>
                                                <div class="large-12 medium-12 small-12" style="margin-top: 10px">
                                                    @if($event->eLink != '')
                                                        <a href="{{ url($event->eLink) }}">{{ $event->eEnLinkTitle }}</a>
                                                    @endif
                                                </div>
                                                <p class="Roboto-Bold {{ $event->eExpired == 1 ? 'holding-time-expire' : '' }}"><i class="fas fa-calendar-check size-24 element-distanse btn-red"></i><span class="padding-lr size-16 btn-red">{{ $event->eEnHoldingTime }}</span></p>
                                            @elseif($lan == 'ar')
                                                @if($event->eLink == '')
                                                    <h4 class="Al-Jazeera-Arabic-Bold header-color">{{ $event->eArSubject }}</h4>
                                                @else
                                                    <a href="{{ url($lan . $event->eLink) }}"><h4 class="Roboto-Bold header-color">{{ $event->eArSubject }}</h4></a>
                                                @endif
                                                <div class="text-color element-distanse Al-Jazeera-Arabic-Regular">{!! $event->eArBriefDescription !!}</div>
                                                <div class="large-12 medium-12 small-12" style="margin-top: 10px">
                                                    @if($event->eLink != '')
                                                        <a href="{{ url($lan . $event->eLink) }}">{{ $event->eArLinkTitle }}</a>
                                                    @endif
                                                </div>
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
        @elseif($section->sectionType->stType == 'SINGLE_BUTTON')
            <div class="large-12 text-center" style="margin-top: -50px">
                @if($lan == 'fa')
                    <a style="width: 200px" class="button primary" href="{{ url($lan . $section->sLink) }}">{{ $section->sLinkFaTitle }}</a>
                @elseif($lan == 'en')
                    <a style="width: 200px" class="button primary" href="{{ url($section->sLink) }}">{{ $section->sLinkEnTitle }}</a>
                @elseif($lan == 'ar')
                    <a style="width: 200px" class="button primary" href="{{ url($lan . $section->sLink) }}">{{ $section->sLinkArTitle }}</a>
                @endif
            </div>
        @elseif($section->sectionType->stType == 'CONTENT_FORM')
            <?php
            $form = \Hamedan_2018\Form::getForm($section->sFrId);
            $formStepsCount = \Hamedan_2018\Form::getStepsCount($section->sFrId);
            $formSteps = \Hamedan_2018\QuestionStep::getSteps($section->sFrId);
            $countries = \Hamedan_2018\Country::all();
            ?>
            <div class="grid-container">
                @if(!\Session::has('successPm'))
                    <div class="grid-x">
                        <form id="fileupload" action="{{ url('/register-form/' . $form->id) }}" class="msform" enctype="multipart/form-data" method="{{ $form->fMethod }}" data-abide novalidate>
                            {{ csrf_field() }}
                            <div class="grid-container">
                                <div class="grid-x">
                                    <div class="large-offset-1 medium-offset-1 large-offset-1"></div>
                                    <div class="large-10 medium-10 small-10">
                                        <div  data-abide-error class="callout large" style="margin:5px; display: none;margin-bottom: 50px;">
                                            @if($lan == 'fa')
                                                <i class="fi-alert btn-red Shabnam-Light">لطفا موارد الزامی فرم را تکمیل کنید!</i>
                                            @elseif($lan == 'en')
                                                <i class="fi-alert btn-red">Please complete the required fields!</i>
                                            @elseif($lan == 'ar')
                                                <i class="fi-alert btn-red Al-Jazeera-Arabic-Regular">يرجى إكمال الحقول المطلوبة!</i>
                                            @endif
                                        </div>
                                        @if(\Session::has('resultError'))
                                            <div class="callout large" style="margin:5px; margin-bottom: 50px;">
                                                @if($lan == 'fa')
                                                    <i class="fi-alert btn-red Shabnam-Light">{{ \Session::get('resultError')[0] }}</i>
                                                @elseif($lan == 'en')
                                                    <i class="fi-alert btn-red">{{ \Session::get('resultError')[1] }}</i>
                                                @elseif($lan == 'ar')
                                                    <i class="fi-alert btn-red Al-Jazeera-Arabic-Regular">{{ \Session::get('resultError')[2] }}</i>
                                                @endif
                                            </div>
                                        @endif
                                        @if($form->fIsMultiStepForm)
                                        <!-- progressbar -->
                                            <div class="grid-x center-el">
                                                <div class="large-12 medium-12 small-12">
                                                    <ul class="text-center" id="progressbar">
                                                        <li class="active"></li>
                                                        @for($i = 1 ; $i < $formStepsCount ; $i++)
                                                            <li></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="large-offset-1 medium-offset-1 small-10"></div>
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
                                                                    <span class="form-error">{{ $questionForm->qfEnErrorMsg }}</span>
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
                                                                    <span class="form-error">{{ $questionForm->qfFaErrorMsg }}</span>
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
                                                        @case("phone-number")
                                                            <div class="grid-x  element-dir-l">
                                                                @if($questionForm->qfRequire)
                                                                    @if($lan == 'fa')
                                                                        <label class="large-12 medium-12 small-12 text-right"><span class="btn-red"><i class="fas fa-star size-12"></i></span> {{ $questionForm->question->qFaSubject }}</label>
                                                                    @elseif($lan == 'en')
                                                                        <label class="large-12 medium-12 small-12"><span class="btn-red"><i class="fas fa-star size-12"></i></span> {{ $questionForm->question->qEnSubject }}</label>
                                                                    @elseif($lan == 'ar')
                                                                        <label class="large-12 medium-12 small-12  text-right"><span class="btn-red"><i class="fas fa-star size-12"></i></span> {{ $questionForm->question->qArSubject }}</label>
                                                                    @endif
                                                                @else
                                                                    @if($lan == 'fa')
                                                                        <label class="large-12 medium-12 small-12 text-right"> {{ $questionForm->question->qFaSubject }}</label>
                                                                    @elseif($lan == 'en')
                                                                        <label class="large-12 medium-12 small-12"> {{ $questionForm->question->qEnSubject }}</label>
                                                                    @elseif($lan == 'ar')
                                                                        <label class="large-12 medium-12 small-12 text-right"> {{ $questionForm->question->qArSubject }}</label>
                                                                    @endif
                                                                @endif
                                                                <div class="large-5 medium-5 small-6">
                                                                    <label>
                                                                        <select name="{{ $questionForm->id . '_country_code' }}" style="border-radius: 0px;border-right: 0px;background-color: #EEEEEE"  {{ $questionForm->qfRequire == 0 ? '' : 'required' }}>
                                                                            <option data-countryCode="--" value="" Selected>-- country --</option>
                                                                            @foreach($countries as $country)
                                                                                <option value="{{ $country->phonecode }}" {{ old($questionForm->id . '_country_code') == $country->phonecode ? 'selected' : '' }}>{{ $country->name . ' (+' . $country->phonecode . ')' }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                                <div class="large-7 medium-7 small-6">
                                                                    @if($lan == 'fa')
                                                                        <input style="border-radius: 0px" name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="tel" placeholder="{{ $questionForm->question->qFaPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                    @elseif($lan == 'en')
                                                                        <input style="border-radius: 0px" name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="tel" placeholder="{{ $questionForm->question->qEnPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                    @elseif($lan == 'ar')
                                                                        <input style="border-radius: 0px" name="{{ $questionForm->id }}" value="{{ old($questionForm->id) }}" type="tel" placeholder="{{ $questionForm->question->qArPlaceHolder }}" {{ $questionForm->qfRequire == 0 ? '' : 'required' }} pattern="{{ $questionForm->pattern->pType }}">
                                                                    @endif
                                                                </div>
                                                            </div>
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
                                                                <textarea style="height: 10em;" class="form-control" name="{{ $questionForm->id }}" {{ $questionForm->qfRequire != 0 ? 'required' : '' }}>{{ old($questionForm->id) }}</textarea>
                                                            </div>
                                                            @break
                                                        @case("captcha")
                                                            <div class="large-12" style="margin-top: 20px;margin-bottom: 20px">
                                                                {!! app('captcha')->display(); !!}
                                                            </div>
                                                            @break;
                                                        @case("country-picker")
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
                                                                @foreach($countries as $country)
                                                                    <option value="{{ $country->name }}" {{ old($questionForm->id) == $country->name ? 'selected' : '' }}>{{ $country->name }}</option>
                                                                @endforeach
                                                            </select>
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
                                                                                <div class="fileUpload center-el" style="padding: 5px">
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
                                                                            <span id="file-upload-btn" class="button primary">Select a file </span>
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
                                                <button type="button" name="next" class="next button primary button-width" onclick="goToLocation('breadCrumbContainer')">بعدی</button>
                                            @elseif($lan == 'en')
                                                <button type="button" name="next" class="next button primary button-width" onclick="goToLocation('breadCrumbContainer')">Next</button>
                                            @elseif($lan == 'ar')
                                                <button type="button" name="previous" class="previous button primary button-width" onclick="goToLocation('breadCrumbContainer')">التالى</button>
                                            @endif
                                        @elseif($i < $formStepsCount)
                                            @if($lan == 'fa')
                                                <button type="button" name="next" class="next button primary button-width" onclick="goToLocation('breadCrumbContainer')">بعدی</button>
                                                <button type="button" name="previous" class="previous button primary button-width" onclick="goToLocation('breadCrumbContainer')">قبلی</button>
                                            @elseif($lan == 'en')
                                                <button type="button" name="previous" class="previous button primary button-width" onclick="goToLocation('breadCrumbContainer')">Previous</button>
                                                <button type="button" name="next" class="next button primary button-width" onclick="goToLocation('breadCrumbContainer')">Next</button>
                                            @elseif($lan == 'ar')
                                                <button type="button" name="previous" class="previous button primary button-width" onclick="goToLocation('breadCrumbContainer')">التالى</button>
                                                <button type="button" name="next" class="next button primary button-width" onclick="goToLocation('breadCrumbContainer')">سابق</button>
                                            @endif
                                        @else
                                            @if($lan == 'fa')
                                                <button type="button" name="previous" class="previous button primary button-width" value="Previous" onclick="goToLocation('breadCrumbContainer')">قبلی</button>
                                                <button type="submit" class="primary button" data-loading-start>ثبت</button>
                                                <button class="primary button hide" data-loading-end><i class='fa fa-spinner fa-spin'></i> در حال پردازش</button>
                                            @elseif($lan == 'en')
                                                <button type="button" name="previous" class="previous button primary button-width" value="Previous" onclick="goToLocation('breadCrumbContainer')">Previous</button>
                                                <button type="submit" class="primary button" data-loading-start>register</button>
                                                <button class="primary button hide" data-loading-end><i class='fa fa-spinner fa-spin'></i> Processing Order</button>
                                            @elseif($lan == 'ar')
                                                <button type="button" name="previous" class="previous button primary button-width" value="Previous" onclick="goToLocation('breadCrumbContainer')">التالى</button>
                                                <button type="submit" class="primary button" data-loading-start>تسجيل</button>
                                                <button class="primary button hide" data-loading-end><i class='fa fa-spinner fa-spin'></i> معالجة الطلب</button>
                                            @endif
                                        @endif
                                    @else
                                        @if($lan == 'fa')
                                            <button type="submit" class="primary button" data-loading-start>ثبت</button>
                                            <button class="primary button hide" data-loading-end><i class='fa fa-spinner fa-spin'></i> در حال پردازش</button>
                                        @elseif($lan == 'en')
                                            <button type="submit" class="primary button" data-loading-start>register</button>
                                            <button class="primary button hide" data-loading-end><i class='fa fa-spinner fa-spin'></i> Processing Order</button>
                                        @elseif($lan == 'ar')
                                            <button type="submit" class="primary button" data-loading-start>تسجيل</button>
                                            <button class="primary button hide" data-loading-end><i class='fa fa-spinner fa-spin'></i> معالجة الطلب</button>
                                        @endif
                                    @endif
                                </fieldset>
                                <!-- fieldsets -->
                            @endfor
                        </form>
                    </div>
                @else
                    <div class="grid-container element-distance-tb">
                        <div class="grid-x">
                            <div class="large-offset-2 medium-offset-2"></div>
                            <div class="large-8 medium-8 small-12" style="min-height: 40vh; margin-top: 10vh">
                                @if($lan == 'fa')
                                    <div class="Shabnam-Bold">{!! \Session::get('successPm')[0] !!}</div>
                                @elseif($lan == 'en')
                                    <div class="Roboto-Bold">{!! \Session::get('successPm')[1] !!}</div>
                                @elseif($lan == 'ar')
                                    <div class="Al-Jazeera-Arabic-Bold">{!! \Session::get('successPm')[2] !!}</div>
                                @endif
                            </div>
                            <div class="large-offset-2 medium-offset-2"></div>
                        </div>
                    </div>
                @endif
            </div>
        @elseif($section->sectionType->stType == 'HOTEL_LIST')
            <?php
                    $hotels = \Hamedan_2018\Hotel::getAllHotel(0);
                    $specialHotels = \Hamedan_2018\Hotel::getAllHotel(1);
            ?>
            <!--Section Hotels Start-->
            <div class="grid-container">
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
                <div class="grid-x element-dir-l" id="advTop">
                    <div class="large-offset-1 medium-offset-1"></div>
                    <div class="large-6 medium-6 small-12 element-distance-tb">
                        @foreach($hotels as $hotel)
                            @if($lan == 'fa')
                                @if($hotel->hFaLinkUrl != '')
                                    <a style="color: inherit;cursor:pointer;" target="_blank" href="{{ url($hotel->hFaLinkUrl)}}">
                                @endif
                                    <div class="grid-x {{ $loop->last ? '' : 'hotel-border' }}" id="{{ $loop->last ? 'advBottom' : '' }}">
                                        <div class="large-8 medium-7 small-12 element-dir">
                                            <h4 class="Shabnam-Bold">{{ $hotel->hFaSubject }}</h4>
                                            @for($i = 0 ; ($i <5 && $i <$hotel->hStar) ; $i++)
                                                <i class="fas fa-star yellow-color size-12"></i>
                                            @endfor
                                            <p style="margin-top: 15px" class="Shabnam-Light gray-color text-justify">{{ $hotel->hFaDescription }}</p>
                                        </div>
                                        <div class="large-offset-1 medium-offset-1"></div>
                                        <div class="large-3 medium-4 small-12">
                                            <img class="background-cover hotel-pic float-right" src="{{ asset($hotel->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $hotel->hFaSubject }}">
                                        </div>
                                    </div>
                                @if($hotel->hFaLinkUrl != '')
                                    </a>
                                @endif
                            @elseif($lan == 'en')
                                @if($hotel->hEnLinkUrl != '')
                                    <a style="color: inherit;cursor:pointer;" target="_blank"  href="{{ url($hotel->hEnLinkUrl)}}">
                                @endif
                                    <div class="grid-x {{ $loop->last ? '' : 'hotel-border' }}" id="{{ $loop->last ? 'advBottom' : '' }}">
                                        <div class="large-8 medium-7 small-12">
                                            <h4 class="Shabnam-Bold">{{ $hotel->hEnSubject }}</h4>
                                            @for($i = 0 ; ($i <5 && $i <$hotel->hStar) ; $i++)
                                                <i class="fas fa-star yellow-color size-12"></i>
                                            @endfor
                                            <p style="margin-top: 15px" class="Raleway-Regular text-color text-justify">{{ $hotel->hEnDescription }}</p>
                                        </div>
                                        <div class="large-offset-1 medium-offset-1"></div>
                                        <div class="large-3 medium-4 small-12">
                                            <img class="background-cover hotel-pic float-right" src="{{ asset($hotel->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $hotel->hEnSubject }}">
                                        </div>
                                    </div>
                                @if($hotel->hEnLinkUrl != '')
                                    </a>
                                @endif
                            @elseif($lan == 'ar')
                                @if($hotel->hArLinkUrl != '')
                                    <a style="color: inherit;cursor:pointer;" target="_blank"  href="{{ url($hotel->hArLinkUrl)}}">
                                @endif
                                    <div class="grid-x {{ $loop->last ? '' : 'hotel-border' }}" id="{{ $loop->last ? 'advBottom' : '' }}">
                                        <div class="large-8 medium-7 small-12 element-dir">
                                            <h4 class="Shabnam-Bold">{{ $hotel->hArSubject }}</h4>
                                            @for($i = 0 ; ($i <5 && $i <$hotel->hStar) ; $i++)
                                                <i class="fas fa-star yellow-color size-12"></i>
                                            @endfor
                                            <p style="margin-top: 15px" class="Shabnam-Light gray-color text-justify">{{ $hotel->hArDescription }}</p>
                                        </div>
                                        <div class="large-offset-1 medium-offset-1"></div>
                                        <div class="large-3 medium-4 small-12">
                                            <img class="background-cover hotel-pic float-right" src="{{ asset($hotel->gallery->gPath .'?v' . config('app.version')) }}" alt="{{ $hotel->hArSubject }}">
                                        </div>
                                    </div>
                                @if($hotel->hArLinkUrl != '')
                                    </a>
                                @endif
                            @endif
                        @endforeach
                    </div>
                    <div class="large-offset-1 medium-offset-1"></div>
                    <div class="large-3 medium-3 small-12" data-sticky-container>
                        @if(count($specialHotels) > 0)
                            <?php
                                $spHotel = $specialHotels->first();
                            ?>
                            <div class="grid-x adv-hide" data-sticky data-top-anchor="advTop:top" data-btm-anchor="advBottom:bottom">
                                <div style="position: relative;display: inline-block;top:40vh;text-align: center;z-index: 50;" class="large-12">
                                    @if($lan == 'fa')
                                        <h5 class="my-text-shadow-effect white-color">{{ $spHotel->hFaSubject }}</h5>
                                        <a href="{{ url($spHotel->hFaLinkUrl != '' ? $spHotel->hFaLinkUrl : '') }}" class="button primary element-distanse">بیشتر</a>
                                    @elseif($lan == 'en')
                                        <h5 class="my-text-shadow-effect white-color Roboto-Regular">{{ $spHotel->hEnSubject }}</h5>
                                        <a href="{{ url($spHotel->hEnLinkUrl != '' ? $spHotel->hEnLinkUrl : '') }}" class="button primary element-distanse">Read More</a>
                                    @elseif($lan == 'ar')
                                        <h5 class="my-text-shadow-effect white-color">{{ $spHotel->hArSubject }}</h5>
                                        <a href="{{ url($spHotel->hArLinkUrl != '' ? $spHotel->hArLinkUrl : '') }}" class="button primary element-distanse">اقرأ أكثر</a>
                                    @endif
                                </div>
                                <div class="large-12">
                                    <img style="height: 70vh;" class="background-cover" src="{{ asset($spHotel->gallery->gPath .'?v' . config('app.version')) }}">
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="large-offset-2 medium-offset-2"></div>
                </div>
            </div>
            <!--Section Hotels End-->
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
{{--    <!--Section Go to Register Start-->
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
                <input id="phone" type="tel">
                <span id="valid-msg" class="hide">Valid</span>
                <span id="error-msg" class="hide">Invalid number</span>
            </div>
        </div>
    </div>


    <div class="grid-container">
        <div class="grid-x">
            <div class="large-12">
                <a href="#" show-element-tag>Link 1</a>
                <a href="#" show-element-tag>Link 2</a>
            </div>
        </div>
    </div>--}}
@stop