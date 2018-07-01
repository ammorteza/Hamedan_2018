@extends('layouts.adminLayout')
@section('content')
<div class="off-canvas-content padding-lr-fs" data-off-canvas-co ntent>
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
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 padding-lr-fs">
                        <div class="grid-x">
                            <div class="large-4 medium-6 small-12">
                                <img class="image-shadow-effect" id="blah">
                            </div>
                        </div>
                        <label for="exampleFileUpload" class="button" style="margin-top: 20px">انتخاب تصویر</label>
                        <label>
                            <input type="file" id="exampleFileUpload" name="imageFile" required pattern="^.+?\.(jpg|JPG|png|PNG)$"  onchange="readURL(this);" class="show-for-sr">
                            <span class="form-error">
                              لطفا تصویر را انتخاب کنید!
                            </span>
                        </label>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="large-6 medium-12 small-12 padding-lr-fs">
                        <fieldset class="fieldset padding-lr-fs">
                            <legend class="btn-red">مکان</legend>
                            <div class="medium-6 columns padding-lr">
                                <label> فارسی
                                    <input  type="text"  name="location_fa">
                                </label>
                            </div>
                            <div class="medium-6 columns padding-lr">
                                <label>عربی
                                    <input  type="text"  name="location_ar">
                                </label>
                            </div>
                            <div class="medium-6 columns padding-lr">
                                <label>انگلیسی
                                    <input  type="text"  name="location_en">
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="large-6 medium-12 small-12 padding-lr-fs">
                        <fieldset class="fieldset padding-lr-fs">
                            <legend class="btn-red">عکاس</legend>
                            <div class="medium-6 columns padding-lr">
                                <label>فارسی
                                    <input  type="text"  name="photographer_fa" aria-describedby="photographerFa" required>
                                    <span class="form-error">
                              لطفا نام عکاس را به فارسی را وارد نمایید !
                            </span>
                                </label>
                            </div>
                            <div class="medium-6 columns padding-lr">
                                <label>عربی
                                    <input  type="text"  name="photographer_ar" aria-describedby="photographerAa" required>
                                    <span class="form-error">
                              لطفا نام عکاس را به عربی را وارد نمایید !
                            </span>
                                </label>
                            </div>
                            <div class="medium-6 columns padding-lr">
                                <label>انگلیسی
                                    <input  type="text"  name="photographer_en" aria-describedby="photographerAa" required>
                                    <span class="form-error">
                              لطفا نام عکاس را به انگلیسی را وارد نمایید !
                            </span>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="medium-6 padding-lr-fs top-margin-element">
                    <button style="margin-top: 20px;"  name="submit" class="button primary float-left">ثبت</button>
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
                        .width(800)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop