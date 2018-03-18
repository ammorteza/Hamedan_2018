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
                        <li class="disabled">اسلایدر خبر</li>
                        <li>
                            <span class="show-for-sr">Current: </span>
                             درج تصویر
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box" id="main">
        <form id="registerNewsForm"  data-abide novalidate method="POST" action="{{ url('/admin/news/slider/register') }}">
            {{ csrf_field() }}
            <div class="tabs-panel is-active" id="panel1c">
                <div class="grid-x">
                    <div class="large-4 medium-6 small-12 padding-lr-fs">
                        <div class="large-4 medium-6 small-12">
                            <label>
                                <img class="image-shadow-effect" id="newsImg" src="{{ asset($gallery[0]['gPath']) }}">
                                <span class="form-error">
                                  لطفا عنوان خبر را وارد نمایید !
                                    </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-6 columns padding-lr-fs">
                        <a class="button primary" data-open="selectImageModal">انتخاب تصویر</a>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr-fs">
                        <label> عنوان - فارسی
                            <input  type="text"  name="faSubject" required>
                            <span class="form-error">
                      لطفا عنوان خبر را وارد نمایید !
                                    </span>
                        </label>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr-fs">
                        <label> عنوان - عربی
                            <input  type="text"  name="arSubject" required>
                            <span class="form-error">
                      لطفا عنوان خبر را وارد نمایید !
                                    </span>
                        </label>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr-fs">
                        <label> عنوان - انگلیسی
                            <input  type="text"  name="enSubject" required>
                            <span class="form-error">
                      لطفا عنوان خبر را وارد نمایید !
                                    </span>
                        </label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="selectedImageId" id="selectedImageId" value="{{ $gallery[0]['id'] }}"/>
            <div style="padding-left: 28px;" class="medium-12 padding-lr-fs top-margin-element ">
                <button style="margin-top: 20px;"  name="submit" class="button primary float-left">ثبت</button>
            </div>
        </form>
        <!--Select Image Modal Start-->
        <div class="reveal large" id="selectImageModal" data-reveal>
            <form id="formModal">
                <div class="grid-x">
                    <?php $first = false; ?>
                    @foreach($gallery as $img)
                        <div class="large-4 medium-6 small-12 padding-lr-fs">
                            <div class="large-4 medium-6 small-12 padding-lr-fs">
                                <img class="image-shadow-effect" src="{{ asset($img->gPath) }}">
                                <div style="padding-bottom: 20px;" class="album-menu center-el">
                                    @if($first == false)
                                        <?php $first = true; ?>
                                        <input type="radio" cheched name="imageGalleryId" value="{{ $img->id }}">
                                    @else
                                        <input type="radio" name="imageGalleryId" value="{{ $img->id }}">
                                    @endif
                                    <input type="hidden" value="{{ asset($img->gPath) }}" id="{{ 'imgPath' . $img->id }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!--Select Image Modal End-->
        </div>
    </div>
</div>
@stop