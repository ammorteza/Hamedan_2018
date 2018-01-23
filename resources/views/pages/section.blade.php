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
                                <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smFaSubject }}</a></li>
                            @elseif($lan == 'en')
                                <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smEnSubject }}</a></li>
                            @elseif($lan == 'ar')
                                <li><a href="{{ url($lan . $subMenu->smPageLink) }}">{{ $subMenu->smArSubject }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @elseif($section->sectionType->stType == 'CONTENT_LEFT')
            <div class="container">
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
                            <p class="">{{ $section->sFaDescription}}</p>
                        @elseif($lan == 'en')
                            <p class="">{{ $section->sEnDescription }}</p>
                        @elseif($lan == 'ar')
                            <p class="">{{ $section->sArDescription }}</p>
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
                                                                    <h3 class="direction-reveal__title">{{ $sectionImg->siFaSubject }}</h3>
                                                                    <p class="direction-reveal__text one-line">{{ $sectionImg->siFaDescription }}</p>
                                                                @elseif($lan == 'en')
                                                                    <h3 class="direction-reveal__title">{{ $sectionImg->siEnSubject }}</h3>
                                                                    <p class="direction-reveal__text one-line">{{ $sectionImg->siEnDescription }}</p>
                                                                @elseif($lan == 'ar')
                                                                    <h3 class="direction-reveal__title">{{ $sectionImg->siArSubject }}</h3>
                                                                    <p class="direction-reveal__text one-line">{{ $sectionImg->siArDescription }}</p>
                                                                @endif
                                                                <center>
                                                                    <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                                                </center>
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
                                                        <center>
                                                            <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                                        </center>
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
        @endif
        <!--END SUB MENU SECTION-->
        <!--CONTENT_LEFT SECTION-->
        <!--END CONTENT_LEFT SECTION-->
    @endforeach

@stop
