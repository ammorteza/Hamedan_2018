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
                        <li>
                            اخبار
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
                    <a href="{{ url('/admin/news/register') }}"  class="button primary">جدید</a>
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
                @foreach($allNews as $news)
                    <div class="grid-x element-distanse news-bottom-line" id="advTop">
                        <div class="large-4 medium-12 small-12">
                            <img class="news-image" style=";margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']->gPath) }}" alt="" width="300px" height="200px">
                        </div>
                        <div style="padding-left: 50px;padding-right: 50px;" class="large-8 medium-12 small-12 news-link">
                                <h5 class="Shabnam-Bold">{{ $news->nFaSubject }}</h5>
                                <p style="width: 100%" class="two-line text-color text-justify element-distanse font-small Shabnam-Light">{{ $news->nFaBriefDescription }}</p>
                            <div class="btn-group">
                                <a  href="#" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="ویرایش" data-position="top" data-alignment="center"><i class="far fa-edit btn-green size-18 btn-group-margin"></i></a>
                                <a data-open="{{ 'deleteNewsModal' . $news->id }}" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="حذف" data-position="top" data-alignment="center"><i class="far fa-trash-alt btn-red size-18"></i></a>
                                <!--Modal Start-->
                                <div class="reveal tiny" id="{{ 'deleteNewsModal' . $news->id }}" data-reveal>
                                    <p style="margin-top: 25px;font-size: small;" class="lead">آیا برا حذف خبر اطمینان دارید؟</p>
                                    <div class="center-el">
                                        <a href="{{ url('/admin/news/delete/' . $news->id) }}" class="button alert">بله</a>
                                    </div>
                                    <button class="close-button" data-close aria-label="Close modal" type="button">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Modal End-->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-Pagination Start--->
        @if ($allNews->lastPage() > 1)
            <ul class="pagination text-right medium-12 columns" style="margin-top: 0.8rem" role="navigation" aria-label="Pagination">
                @if($allNews->currentPage() != 1)
                    <li class="pagination-previous">
                        <a href="{{ $allNews->url($allNews->currentPage()-1) }}" aria-label="قبلی">
                            <span class="my_text_color_pg" aria-hidden="true">قبلی</span>
                        </a>
                    </li>
                @endif
                @for($i = max($allNews->currentPage()-2, 1); $i <= min(max($allNews->currentPage()-2, 1)+4,$allNews->lastPage()); $i++)
                    @if($allNews->currentPage() == $i)
                        <li class="current"><span class="show-for-sr font-size-small">صفحه ای که در آن هستید</span>{{ $i }}
                    @else
                        <li>
                            <a class="font-size-small my_text_color" href="{{ $allNews->url($i) }}">{{ $i }}</a>
                    @endif
                </li>
                @endfor
                @if ($allNews->currentPage() != $allNews->lastPage())
                    <li class="pagination-next">
                        <a href="{{ $allNews->url($allNews->currentPage()+1) }}" aria-label="بعدی">
                            <span class="my_text_color_pg" aria-hidden="true">بعدی</span>
                        </a>
                    </li>
                @endif
            </ul>
        @endif
        <!-Pagination End--->
    </div>
@stop