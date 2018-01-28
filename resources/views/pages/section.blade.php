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
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div style="margin-top: 80px;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <h1 class="BYekan">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 class="BYekan">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h1 class="BYekan">{{ $section->sArSubject }}</h1>
                        @endif
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div style="margin-top: 20px;" class="large-12 medium-12">
                        @if($lan == 'fa')
                            <p class="">{!! $section->sFaDescription !!}</p>
                        @elseif($lan == 'en')
                            <p class="">{!! $section->sEnDescription !!}</p>
                        @elseif($lan == 'ar')
                            <p class="">{!! $section->sArDescription !!}</p>
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
                                                                    <h4 class="direction-reveal__title">{{ $sectionImg->siEnSubject }}</h4>
                                                                    <p class="direction-reveal__text one-line">{{ $sectionImg->siEnDescription }}</p>
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
                                                            <h3 class="direction-reveal__title">{{ $sectionImg->siEnSubject }}</h3>
                                                            <p class="direction-reveal__text one-line">{{ $sectionImg->siEnDescription }}</p>
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
                <div class="grid-x grid-padding-x">
                    <div style="margin-top: 80px;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <h1 class="BYekan">{{ $section->sFaSubject }}</h1>
                        @elseif($lan == 'en')
                            <h1 class="BYekan">{{ $section->sEnSubject }}</h1>
                        @elseif($lan == 'ar')
                            <h1 class="BYekan">{{ $section->sArSubject }}</h1>
                        @endif
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div style="margin-top: 20px;" class="large-12 medium-12 center-el">
                        @if($lan == 'fa')
                            <p class="">{!! $section->sFaDescription !!}</p>
                        @elseif($lan == 'en')
                            <p class="">{!! $section->sEnDescription !!}</p>
                        @elseif($lan == 'ar')
                            <p class="">{!! $section->sArDescription !!}</p>
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
        @endif
    @endforeach
    <!--logo Slider Section Start-->
    <div>
    <div class="grid-x grid-padding-x">
        <div style="margin-top: 80px;" class="large-12 medium-12 center-el">
            <h1 class="BYekan">هنر دست ایرانی</h1>
        </div>
    </div>
    <div class="grid-x">
        <div class="large-12 element-distanse">
            <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
                <ul class="orbit-container">
                    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                    <li style="padding: 50px;" class="orbit-slide">
                        <div class="docs-example-orbit-slide">
                            <div class="grid-x">
                                <div class="medium-3 style_prevu_kit">
                                    <img style="background-image: linear-gradient(-180deg, rgba(0,0,0, 0) 53%, #000 100%)" class="img-size bg-effect" src="{{ asset('pic//hand/1.jpg') }}">
                                    <p style="margin-top:-50px;margin-right: 100px;color: #FFFFFF;font-weight: bold;z-index: 9;">سفال لالجین</p>
                                </div>
                                <div class="medium-3 style_prevu_kit">
                                    <img class="img-size" src="{{ asset('pic/hand/2.jpg') }}">
                                </div>
                                <div class="medium-3 style_prevu_kit">
                                    <img class="img-size" src="{{ asset('pic/hand/3.jpg') }}">
                                </div>
                                <div class="medium-3 style_prevu_kit">
                                    <img class="img-size" src="{{ asset('pic/hand/4.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="padding: 50px;" class="orbit-slide">
                        <div class="docs-example-orbit-slide">
                            <div class="grid-x">
                                <div class="medium-3 style_prevu_kit">
                                    <img  class="img-size" src="{{ asset('pic/hand/5.jpg') }}">
                                </div>
                                <div class="medium-3 style_prevu_kit">
                                    <img class="img-size" src="{{ asset('pic/hand/6.jpg') }}">
                                </div>
                                <div class="medium-3 style_prevu_kit">
                                    <img class="img-size" src="{{ asset('pic/hand/7.jpg') }}">
                                </div>
                                <div class="medium-3 style_prevu_kit">
                                    <img class="img-size" src="{{ asset('pic/hand/8.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    </div>
    <!--logo Slider Section End-->

@stop
