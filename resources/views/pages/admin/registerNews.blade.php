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
                             درج خبر
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box" id="main">
        <div class="large-12 medium-12 small-12 element-distanse">
            <div class="grid-x">
                <div class="large-12 medium-12 small-12 element-distanse">
                    <form  data-abide novalidate>
                        <fieldset class="fieldset padding-lr-fs">
                            <legend class="btn-red">خبر فارسی </legend>
                            <div data-abide-error class="alert callout" style="display: none;">
                                <span style="color: #9e0c0f">لطفا فیلد های قرمز شده را به صورت صحیح وارد نمایید</span>
                            </div>
                            <div class="grid-x">
                                <div class="large-8 columns padding-lr">
                                    <fieldset class="fieldset padding-lr-fs">
                                        <legend class="btn-red">تصویر خبر</legend>
                                    <label for="exampleFileUpload" class="button">انتخاب تصویر</label>
                                    <input type="file" id="exampleFileUpload" name="imageFile"  onchange="readURL(this);" class="show-for-sr" required>
                                    <span class="form-error">
                                        لطفا تصویر خبر را انتخاب نمایید!
                                    </span>
                                    <div class="grid-x">
                                        <div class="large-3 medium-6 small-12">
                                            <img id="blah">
                                        </div>
                                    </div>
                                </fieldset>
                                </div>
                            </div>
                            <div class="grid-x">
                                <div class="large-8 medium-12 small-12 padding-lr">
                                    <label>عنوان
                                        <input  type="text"  name="title" aria-describedby="newsTitle" required>
                                        <span class="form-error">
                          لطفا عنوان خبر را وارد نمایید !
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="grid-x">
                                <div class="large-8 medium-12 small-12 padding-lr">
                                    <label>خلاصه خبر
                                        <textarea  type="text" style="height: 90px;"  name="description" aria-describedby="newsDescription" required></textarea>
                                        <span class="form-error">
                          لطفا خلاصه خبر را وارد نمایید !
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="grid-x">
                                <div class="large-12 medium-12 small-12">

                                    <label class="padding-lr">متن خبر
                                    </label>
                                    <textarea name="editor1" class="ckeditor"></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace( 'editor1' );
                                        CKEDITOR.add
                                    </script>

                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="fieldset padding-lr-fs">
                            <legend class="btn-red">خبر عربی </legend>
                            <div class="grid-x">
                                <div class="large-8 medium-12 small-12 padding-lr">
                                    <label>عنوان
                                        <input  type="text"  name="title">
                                    </label>
                                </div>
                            </div>
                            <div class="grid-x">
                                <div class="large-8 medium-12 small-12 padding-lr">
                                    <label>خلاصه خبر
                                        <textarea  type="text" style="height: 90px;"  name="description"></textarea>
                                    </label>
                                </div>
                            </div>

                            <div class="grid-x">
                                <div class="large-12 medium-12 small-12">

                                    <label class="padding-lr">متن خبر
                                    </label>
                                    <textarea name="editor2" class="ckeditor"></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace( 'editor2' );
                                        CKEDITOR.add
                                    </script>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="fieldset padding-lr-fs">
                            <legend class="btn-red">خبر انگلیسی </legend>
                            <div class="grid-x">
                                <div class="large-8 medium-12 small-12 padding-lr">
                                    <label>عنوان
                                        <input  type="text"  name="title">
                                    </label>
                                </div>
                            </div>
                            <div class="grid-x">
                                <div class="large-8 medium-12 small-12 padding-lr">
                                    <label>خلاصه خبر
                                        <textarea  type="text" style="height: 90px;"  name="description"></textarea>
                                    </label>
                                </div>
                            </div>

                            <div class="grid-x">
                                <div class="large-12 medium-12 small-12">

                                    <label class="padding-lr">متن خبر
                                    </label>
                                    <textarea name="editor3" class="ckeditor"></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace( 'editor3' );
                                        CKEDITOR.add
                                    </script>
                                </div>
                            </div>

                            <div class="medium-12 padding-lr top-margin-element">
                                <button style="margin-top: 20px;"  name="submit" class="button primary">ثبت</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
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
                        .width(400)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop