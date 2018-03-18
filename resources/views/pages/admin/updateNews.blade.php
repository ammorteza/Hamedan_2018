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
                             ویرایش خبر
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box" id="main">
        <div class="large-12 medium-12 small-12 element-distanse">
            <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
                <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">فارسی</a></li>
                <li class="tabs-title"><a href="#panel2c">عربی</a></li>
                <li class="tabs-title"><a href="#panel3c">انگلیسی</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="collapsing-tabs">
                <form  data-abide novalidate method="POST" enctype="multipart/form-data" action="{{ url('/admin/news/update') }}">
                    {{ csrf_field() }}
                <div class="tabs-panel is-active" id="panel1c">
                    <div class="grid-x">
                        <div class="large-3 medium-6 small-12 padding-lr-fs">
                            <div class="large-3 medium-6 small-12">
                                <img class="image-shadow-effect" src="{{ asset($news->newsImg[0]['gallery']->gPath) }}" id="newsImg">
                            </div>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="large-8 columns padding-lr-fs">
                            <a class="button primary" data-open="selectImageModal">تغییر تصویر</a>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="large-8 medium-12 small-12 padding-lr-fs">
                            <label>عنوان
                                <input  type="text"  name="faSubject" aria-describedby="newsTitle" value="{{ $news->nFaSubject }}" required>
                                <span class="form-error">
                      لطفا عنوان خبر را وارد نمایید !
                                    </span>
                            </label>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="large-8 medium-12 small-12 padding-lr-fs">
                            <label>خلاصه خبر
                                <textarea  type="text" style="height: 90px;"  name="faBriefDescription" aria-describedby="newsDescription" required>{{ $news->nFaBriefDescription }}</textarea>
                                <span class="form-error">
                      لطفا خلاصه خبر را وارد نمایید !
                                    </span>
                            </label>
                        </div>
                    </div>

                    <div class="grid-x">
                        <div class="large-12 medium-12 small-12 padding-lr-fs">
                            <label class="padding-lr">متن خبر
                            </label>
                            <textarea name="faDescription" class="ckeditor">{{ $news->nFaDescription }}</textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'editor1' );
                                CKEDITOR.add
                            </script>
                        </div>
                    </div>
                </div>
                <!--Tab 2-->
                <div class="tabs-panel" id="panel2c">
                    <div class="grid-x">
                        <div class="large-8 medium-12 small-12 padding-lr-fs">
                            <label>عنوان
                                <input  type="text" value="{{ $news->nArSubject }}"  name="arSubject">
                            </label>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="large-8 medium-12 small-12 padding-lr-fs">
                            <label>خلاصه خبر
                                <textarea  type="text" style="height: 90px;"  name="arBriefDescription">{{ $news->nArBriefDescription }}</textarea>
                            </label>
                        </div>
                    </div>

                    <div class="grid-x">
                        <div class="large-12 medium-12 small-12">

                            <label class="padding-lr">متن خبر
                            </label>
                            <textarea name="arDescription" class="ckeditor">{{ $news->nArDescription }}</textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'editor2' );
                                CKEDITOR.add
                            </script>
                        </div>
                    </div>
                </div>
                <!--Tab 2-->
                <!--Tab 3-->
                <div class="tabs-panel element-dir-l" id="panel3c">
                    <div class="grid-x">
                        <div class="large-8 medium-12 small-12 padding-lr-fs">
                            <label>عنوان
                                <input  type="text" value="{{ $news->nEnSubject }}" value="{{ $news->nEnSubject }}"  name="enSubject">
                            </label>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="large-8 medium-12 small-12 padding-lr-fs">
                            <label>خلاصه خبر
                                <textarea  type="text" style="height: 90px;"  name="enBriefDescription">{{ $news->nEnBriefDescription }}</textarea>
                            </label>
                        </div>
                    </div>

                    <div class="grid-x">
                        <div class="large-12 medium-12 small-12 padding-lr-fs">
                            <label class="padding-lr">متن خبر
                            </label>
                            <textarea name="enDescription" class="ckeditor">{{ $news->nEnDescription }}</textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'editor3' );
                                CKEDITOR.add
                            </script>
                        </div>
                    </div>
                </div>
                <div class="grid-x">
                    <div style="padding-right: 28px;" class="large-12 medium-12 small-12">
                        <label>وضعیت مشاهده خبر
                        </label>
                        <div class="switch small">
                            <input class="switch-input" id="news1" {{ $news->nState == 1 ? 'checked' : '' }} type="checkbox">
                            <label  class="switch-paddle" for="news1">
                                <span class="switch-active" aria-hidden="true">بلی</span>
                                <span class="switch-inactive" aria-hidden="true">خیر</span>
                            </label>
                        </div>
                    </div>
                </div>
                    <input type="hidden" name="selectedImageId" id="selectedImageId" value="{{ $news->newsImg[0]['gallery']->id }}"/>
                <div style="padding-right: 28px;" class="medium-12 padding-lr-fs top-margin-element ">
                    <button style="margin-top: 20px;"  name="submit" class="button primary">ثبت</button>
                </div>
                <!--Tab 3-->
                </form>
            </div>

        </div>
    </div>
</div>
<!--Select Image Modal Start-->
<div class="reveal large" id="selectImageModal" data-reveal>
    <form id="formModal">
        <div class="grid-x">
            @foreach($gallery as $img)
                <div class="large-4 medium-6 small-12 padding-lr-fs">
                    <div class="large-4 medium-6 small-12 padding-lr-fs">
                        <img class="image-shadow-effect" src="{{ asset($img->gPath) }}">
                        <div style="padding-bottom: 20px;" class="album-menu center-el">
                            <input type="radio" name="imageGalleryId" value="{{ $img->id }}" {{ $news->newsImg[0]['gallery']->id == $img->id ? 'checked' : '' }}>
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
@stop