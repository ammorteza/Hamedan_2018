@extends('layouts.adminLayout')
@section('content')
<div class="off-canvas-content padding-lr" data-off-canvas-content>
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
                        <li><a href="#">داشبورد</a></li>
                        <li>
                            <a class="disabled">اخبار</a>
                        </li>
                        <li>
                            <span class="show-for-sr">Current: </span>
                           آلبوم
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box">
        <div class="medium-12 padding-lr border-btm-line master-content" style="margin-top: 12px;">
            <div class="clearfix tool-bar">
                <div style="margin-bottom: 10px;" class="button-group float-right">
                    <a  class="button primary">جدید</a>
                </div>
                <div class="float-left">
                    <div class="input-group float-left">
                        <div class="inner-addon right-addon">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="large-12 medium-12 small-12 element-distanse">
            <div class="grid-x">
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset('pic/gallery/lan_1.jpg') }}">
                    <div class="album-menu center-el">
                        <a href=""><i class="far fa-trash-alt btn-red size-21"></i></a>
                    </div>

                </div>
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset('pic/gallery/lan_2.jpg') }}">
                    <div class="album-menu center-el">
                        <a href=""><i class="far fa-trash-alt btn-red size-21"></i></a>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset('pic/gallery/lan_3.jpg') }}">
                    <div class="album-menu center-el">
                        <a href=""><i class="far fa-trash-alt btn-red size-21"></i></a>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset('pic/gallery/lan_6.jpg') }}">
                    <div class="album-menu center-el">
                        <a href=""><i class="far fa-trash-alt btn-red size-21"></i></a>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset('pic/gallery/lan_7.jpg') }}">
                    <div class="album-menu center-el">
                        <a href=""><i class="far fa-trash-alt btn-red size-21"></i></a>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset('pic/gallery/lan_8.jpg') }}">
                    <div class="album-menu center-el">
                        <a href=""><i class="far fa-trash-alt btn-red size-21"></i></a>
                    </div>
                </div>

            </div>
            <!--Pagination Start-->
            <div class="center-el element-distanse">
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li class="pagination-previous disabled">قبلی <span class="show-for-sr">page</span></li>
                        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                        <li><a href="#" aria-label="Page 2">2</a></li>
                        <li><a href="#" aria-label="Page 3">3</a></li>
                        <li><a href="#" aria-label="Page 4">4</a></li>
                        <li class="ellipsis" aria-hidden="true"></li>
                        <li><a href="#" aria-label="Page 12">12</a></li>
                        <li><a href="#" aria-label="Page 13">13</a></li>
                        <li class="pagination-next"><a href="#" aria-label="Next page">بعدی <span class="show-for-sr">page</span></a></li>
                    </ul>
                </nav>
            </div>
            <!--Pagination End-->

        </div>
    </div>
</div>
@stop