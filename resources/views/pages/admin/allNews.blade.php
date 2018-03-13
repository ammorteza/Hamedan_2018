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
                    <a href=""  class="button primary">جدید</a>
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
                <div class="grid-x element-distanse news-bottom-line" id="advTop">
                    <div class="large-4 medium-12 small-12">
                        <a  href=""><img class="news-image" style=";margin-top: -20px;" src="{{ asset('pic/gallery/lan_1.jpg') }}" alt="" width="300px" height="200px"></a>
                    </div>
                    <div style="padding-left: 50px;padding-right: 50px;" class="large-8 medium-12 small-12 news-link">
                            <a href=""><h5 class="Shabnam-Bold">تخفیف نوروزی هتل‌های همدان در عيد</h5></a>
                            <p class="two-line text-color text-justify element-distanse font-small Shabnam-Light">طرح «عیدانه گردشگری» همزمان با تعطیلات نوروزی با عرضه تخفیف‌های ۳۰ تا ۵۰ درصدی در برخی هتل‌های کشور اجرا می‌شود.</p>
                        <div class="btn-group">
                            <a  href="#" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="ویرایش" data-position="top" data-alignment="center"><i class="far fa-edit btn-green size-18 btn-group-margin"></i></a>
                            <a  href="#" data-open="deleteNewsModal" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="حذف" data-position="top" data-alignment="center"><i class="far fa-trash-alt btn-red size-18"></i></a>
                        </div>
                    </div>
                </div>


            </div>
    </div>
</div>
<!--Modal Start-->
<div class="reveal tiny" id="deleteNewsModal" data-reveal>
    <p style="margin-top: 25px;font-size: small;" class="lead">آیا برا حذف خبر اطمینان دارید؟</p>
    <div class="center-el">
        <button class="button alert">بله</button>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<!--Modal End-->
@stop