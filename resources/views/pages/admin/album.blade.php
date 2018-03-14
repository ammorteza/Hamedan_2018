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
                        <li><a href="{{ url('/admin/news') }}">اخبار</a></li>
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
                    <a href="{{ url('/admin/album/register') }}"  class="button primary">جدید</a>
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
                @if($errors->any())
                    <div class="medium-12 padding-lr-fs">
                        <div data-abide-error class="alert callout">
                            <span style="color: #9e0c0f">{{$errors->first('msg')}}</span>
                        </div>
                    </div>
                @endif
                @foreach($gallery as $img)
                <div class="large-3 medium-6 small-12 padding-lr-fs">
                    <img class="image-shadow-effect" src="{{ asset($img->gPath) }}">
                    <div class="album-menu center-el">
                        <a  href="#" data-open="{{ 'deleteNewsModal' . $img->id }}" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="حذف" data-position="top" data-alignment="center"><i class="far fa-trash-alt btn-red size-18"></i></a>
                        <!--Modal Start-->
                        <div class="reveal tiny" id="{{ 'deleteNewsModal' . $img->id }}" data-reveal>
                            <p style="margin-top: 25px;font-size: small;" class="lead">آیا برا حذف خبر اطمینان دارید؟</p>
                            <div class="center-el">
                                <a href="{{ url('/admin/album/delete/' . $img->id) }}" class="button alert">بله</a>
                            </div>
                            <button class="close-button" data-close aria-label="Close modal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Modal End-->
                    </div>
                </div>
                @endforeach
            </div>
            <!--Pagination Start-->
            @if ($gallery->lastPage() > 1)
                <ul class="pagination text-right medium-6 columns" style="margin-top: 0.8rem" role="navigation" aria-label="Pagination">
                    @if($gallery->currentPage() != 1)
                        <li class="pagination-previous">
                            <a href="{{ $gallery->url($gallery->currentPage()-1) }}" aria-label="قبلی">
                                <span class="my_text_color_pg" aria-hidden="true">قبلی</span>
                            </a>
                        </li>
                    @endif
                    @for($i = max($gallery->currentPage()-2, 1); $i <= min(max($gallery->currentPage()-2, 1)+4,$gallery->lastPage()); $i++)
                        @if($gallery->currentPage() == $i)
                            <li class="current"><span class="show-for-sr font-size-small">صفحه ای که در آن هستید</span>{{ $i }}
                        @else
                        <li>
                            <a class="font-size-small my_text_color" href="{{ $gallery->url($i) }}">{{ $i }}</a>
                            @endif
                        </li>
                    @endfor
                    @if ($gallery->currentPage() != $gallery->lastPage())
                        <li class="pagination-next">
                            <a href="{{ $gallery->url($gallery->currentPage()+1) }}" aria-label="بعدی">
                                <span class="my_text_color_pg" aria-hidden="true">بعدی</span>
                            </a>
                        </li>
                    @endif
                </ul>
            @endif
            <!--Pagination End-->
        </div>
    </div>
</div>
@stop