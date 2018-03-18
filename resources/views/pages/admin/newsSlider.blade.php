@extends('layouts.adminLayout')
@section('content')
<div class="off-canvas-content padding-lr-fs" data-off-canvas-content>
    <div class="title-bar hide-for-large">
        <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="my-info"></button>
            <span class="title-bar-title">پنل مدیریت همدان 2018</span>
        </div>
    </div>
    <div style="margin-top: 30px;" class="grid-x padding-lr breadcrumbs-pos">
        <div class="medium-12">
            <div class="grid-x">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li><a href="{{ url('/admin/news') }}">اخبار</a></li>
                        <li>
                            <span class="show-for-sr">Current: </span>
                             اسلایدر خبر
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box">
        <div class="large-12 medium-12 small-12 element-distanse">
            <div class="grid-x">
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:575px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('pic/spin.svg') }}" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:475px;overflow:hidden;">
                        <div data-p="170.00">
                            <img class="background-cover" data-u="image" src="{{ asset('pic/gallery/lan_1.jpg') }}" />
                            <img data-u="thumb" src="{{ asset('pic/gallery/lan_1.jpg') }}" />
                        </div>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:983px;height:100px;" data-autocenter="1" data-scale-bottom="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p" style="left: 0;width:190px;height:90px;">
                                <div data-u="thumbnailtemplate" class="t"></div>
                                <svg style="left: 0;" viewbox="0 0 16000 16000" class="cv">
                                    <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                    <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                    <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:210px;left:30px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                            <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:210px;right:30px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                            <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
            <div class="grid-x">
                <div style="position: absolute;z-index: 99;margin-top: 40px;margin-right: -8%;" class="large-12 medium-12 small-12">
                    <button class="button alert"><i class="far fa-trash-alt size-21"></i></button>
                </div>
            </div>
            <div class="grid-x">
                <div class="large-12 medium-12 small-12">
                    <button class="button primary">تصویر جدید</button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop