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
                        <li><a href="{{ url('/admin/album') }}">گالری</a></li>
                        <li><span class="show-for-sr">Current: </span>
                          تصویر جدید
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box">

        <div class="large-12 medium-12 small-12 element-distanse">
            <form  data-abide novalidate method="POST" enctype="multipart/form-data" action="{{ url('/admin/album/register') }}">
                {{ csrf_field() }}
                <div data-abide-error class="alert callout" style="display: none;">
                    <span style="color: #9e0c0f">خطا</span>
                </div>
                <fieldset class="fieldset padding-lr-fs">
                    <legend class="btn-red">تصویر آلبوم</legend>
                    <div class="columns padding-lr">
                        <label for="exampleFileUpload" class="button">انتخاب تصویر</label>
                        <input type="file" id="exampleFileUpload" name="imageFile"  onchange="readURL(this);" class="show-for-sr">
                        <div class="grid-x">
                            <div class="large-3 medium-6 small-12">
                                <img id="blah">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="fieldset padding-lr-fs">
                    <legend class="btn-red">مکان</legend>
                    <div class="medium-12 columns padding-lr">
                        <label>مکان - فارسی
                            <input  type="text"  name="location_fa">
                        </label>
                    </div>
                    <div class="medium-12 columns padding-lr">
                        <label>مکان - عربی
                            <input  type="text"  name="location_ar">
                        </label>
                    </div>
                    <div class="medium-12 columns padding-lr">
                        <label>مکان - انگلیسی
                            <input  type="text"  name="location_en">
                        </label>
                    </div>
                </fieldset>
                <fieldset class="fieldset padding-lr-fs">
                    <legend class="btn-red">عکاس</legend>
                <div class="medium-12 columns padding-lr">
                    <label>نام عکاس - فارسی
                        <input  type="text"  name="photographer_fa" aria-describedby="photographerFa" required>
                        <span class="form-error">
                              لطفا نام عکاس را به فارسی را وارد نمایید !
                            </span>
                    </label>
                </div>
                <div class="medium-12 columns padding-lr">
                    <label>نام عکاس - عربی
                        <input  type="text"  name="photographer_ar" aria-describedby="photographerAa" required>
                        <span class="form-error">
                              لطفا نام عکاس را به عربی را وارد نمایید !
                            </span>
                    </label>
                </div>
                <div class="medium-12 columns padding-lr">
                    <label>نام عکاس - انگلیسی
                        <input  type="text"  name="photographer_en" aria-describedby="photographerAa" required>
                        <span class="form-error">
                              لطفا نام عکاس را به انگلیسی را وارد نمایید !
                            </span>
                    </label>
                </div>
                </fieldset>
                <div class="medium-12 padding-lr top-margin-element">
                    <button style="margin-top: 20px;"  name="submit" class="button primary">ثبت</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop