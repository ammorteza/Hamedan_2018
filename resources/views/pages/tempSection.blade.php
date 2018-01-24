@extends('layouts.mainLayout')
@section('content')
    <!--Middle Menu Start-->
    <div class="grid-x grid-padding-x" data-sticky-container>
        <div style="border-bottom:.1rem solid hsla(0,15%,80%,.3);height: 100px;background-color: #FFFFFF;" class="large-12 medium-12" data-sticky data-top-anchor="650" data-margin-top="0">
            <ul class="menu align-center top-menu middle-menu element-dir">
                <li><a href="#">جاذبه ها</a></li>
                <li><a href="#">صنایع دستی</a></li>
                <li><a href="#">تورهای گردشگری</a></li>
                <li><a href="#">مراکز اقامتی</a></li>
                <li><a href="#">مراکز پذیرایی</a></li>
            </ul>
        </div>
    </div>

    <!--Middle Menu End-->
    <!--Content left Start-->
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div style="margin-top: 80px;" class="large-12 medium-12 center-el">
                <h1 class="BYekan">همدان پایتخت تاریخ و تمدن ایران زمین</h1>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div style="margin-top: 20px;" class="large-12 medium-12 center-el">
                <p>
                    نخستین باری که اسم این شهر برده شد، در حدود ۱۱۰۰ سال پیش از میلاد بود که نام همدان را اَمدانه ذکر شده‌است. این شهر تحت نام‌های دیگری از قبیل هگمتانه، هگمتان، اکباتان، اکباتانا، آمدانه، آنادانا نیز نوشته شده‌است. در کتیبه‌های آشوری نام آن شهر آمدانه آمده، این اسم بایستی مشتق از کلمهٔ ماد باشد چنان‌که آشوریان قوم ماد را آمادای ذکر کرده‌اند. از این رو آمادانه به معنی محل مادها و جایی‌است که مادها زندگی می‌کردند.[۱۸] در دوران مادها به زبان پارسی باستان این شهر هگمتانه یا هگمتانه به معنی «جای تجمع» خوانده می‌شد. اکباتان نیز همان تلفظ هگمتانه به زبان یونانی است.[۱]

                    نام هگمتانه به مرور زمان در دوران ساسانیان به اَهمتان، اَهمدان و سپس به همدان دگرگون شده‌است.
                </p>
            </div>
        </div>
        <div class="grid-x">
            <div style="margin-top: 15px;" class="large-12 medium-12 element-dir">
                <div class="direction-reveal direction-reveal--grid-bootstrap direction-reveal--demo-bootstrap">
                <div class="grid-x">
                    <div class="large-6 medium-6">
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 medium-6 padding-lr">
                                <a href="#" class="direction-reveal__card">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Image" class="img-fluid">

                                    <div class="direction-reveal__overlay">
                                        <h4 class="direction-reveal__title">غار علیصدر</h4>
                                        <p class="direction-reveal__text one-line">
                                            مردم روستای علی صدر و روستاهای اطراف، از قدیم‌الایام به وجود این غار پی برده بودند و از آب آن بهره‌برداری می‌کردند. علاوه بر این، در صد سال گذشته
                                        </p>
                                        <center>
                                            <button style="margin-top: 20px;" class="button primary white-color">اطلاعات بیشتر</button>
                                        </center>
                                    </div>
                                </a>
                            </div>
                            <div class="large-6 medium-6 padding-lr">
                                <a href="#" class="direction-reveal__card">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Image" class="img-fluid">

                                    <div class="direction-reveal__overlay">
                                        <h3 class="direction-reveal__title">غار علیصدر</h3>
                                        <p class="direction-reveal__text one-line">
                                            مردم روستای علی صدر و روستاهای اطراف، از قدیم‌الایام به وجود این غار پی برده بودند و از آب آن بهره‌برداری می‌کردند. علاوه بر این، در صد سال گذشته
                                        </p>
                                        <center>
                                            <button style="margin-top: 30px;" class="button primary white-color">اطلاعات بیشتر</button>
                                        </center>
                                    </div>
                                </a>
                            </div>
                            <div class="large-6 medium-6 padding-lr">
                                <a href="#" class="direction-reveal__card">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Image" class="img-fluid">

                                    <div class="direction-reveal__overlay">
                                        <h3 class="direction-reveal__title">غار علیصدر</h3>
                                        <p class="direction-reveal__text one-line">
                                            مردم روستای علی صدر و روستاهای اطراف، از قدیم‌الایام به وجود این غار پی برده بودند و از آب آن بهره‌برداری می‌کردند. علاوه بر این، در صد سال گذشته
                                        </p>
                                        <center>
                                            <button style="margin-top: 30px;" class="button primary white-color">اطلاعات بیشتر</button>
                                        </center>
                                    </div>
                                </a>
                            </div>
                            <div class="large-6 medium-6 padding-lr">
                                <a href="#" class="direction-reveal__card">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Image" class="img-fluid">

                                    <div class="direction-reveal__overlay">
                                        <h3 class="direction-reveal__title">غار علیصدر</h3>
                                        <p class="direction-reveal__text one-line">
                                            مردم روستای علی صدر و روستاهای اطراف، از قدیم‌الایام به وجود این غار پی برده بودند و از آب آن بهره‌برداری می‌کردند. علاوه بر این، در صد سال گذشته
                                        </p>
                                        <center>
                                            <button style="margin-top: 30px;" class="button primary white-color">اطلاعات بیشتر</button>
                                        </center>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 padding-lr">
                        <a href="#" class="direction-reveal__card">
                            <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Image" class="img-fluid">

                            <div class="direction-reveal__overlay">
                                <h3 class="direction-reveal__title">گنج نامه</h3>
                                <p class="direction-reveal__text one-line">
                                    سنگ‌نوشته‌های گنج‌نامه نوشتارهایی از دوران داریوش و خشایارشای هخامنشی است که بر دل یکی از صخره‌های الوند در فاصله ۵ کیلومتری غرب همدان و در انتهای درهٔ عباس‌آباد حکاکی شده‌است. کتیبه‌ها هر کدام در سه ستون ۲۰ سطری به زبان‌های پارسی باستان، عیلامی و بابلی نو نوشته شده‌اند. متن پارسی باستان در سمت چپ هر دو لوح جای گرفته‌است و پهنایی معادل ۱۱۵ سانتی‌متر دارد. متن عیلامی در وسط هر دو کتیبه نوشته شده و متن بابلی نو در ستون سوم قراردارد.
                                </p>
                                <center>
                                    <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!--Content left End-->
    <!--Content image slider End-->
        <div class="grid-x grid-padding-x">
            <div style="margin-top: 80px;" class="large-12 medium-12 center-el">
                <h1 class="BYekan">هنر دست ایرانی</h1>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div style="margin-top: 20px;" class="large-12 medium-12 center-el">
                <p>
                    نخستین باری که اسم این شهر برده شد، در حدود ۱۱۰۰ سال پیش از میلاد بود که نام همدان را اَمدانه ذکر شده‌است. این شهر تحت نام‌های دیگری از قبیل هگمتانه، هگمتان، اکباتان، اکباتانا، آمدانه، آنادانا نیز نوشته شده‌است. در کتیبه‌های آشوری نام آن شهر آمدانه آمده، این اسم بایستی مشتق از کلمهٔ ماد باشد چنان‌که آشوریان قوم ماد را آمادای ذکر کرده‌اند. از این رو آمادانه به معنی محل مادها و جایی‌است که مادها زندگی می‌کردند.[۱۸] در دوران مادها به زبان پارسی باستان این شهر هگمتانه یا هگمتانه به معنی «جای تجمع» خوانده می‌شد. اکباتان نیز همان تلفظ هگمتانه به زبان یونانی است.[۱]

                    نام هگمتانه به مرور زمان در دوران ساسانیان به اَهمتان، اَهمدان و سپس به همدان دگرگون شده‌است.
                </p>
            </div>
        </div>
        <div class="grid-x">
            <div class="large-12 medium-12 element-distanse">
                {{--<div id="immersive_slider">
                    <div class="slide" data-blurred="{{ asset('pic/top_slider/3.jpg') }}">
                        <div class="grid-x">
                            <div class="large-6 medium-6">
                                <h2><a href="#" target="_blank">شهر جهانی لالجین</a></h2>
                                <p>به اعتقاد برخی از محققان، نام کنونی شهر لالجین تغییریافتهٔ واژهٔ «لاچین» است که نام پرنده‌ای شکاری و عنوان یکی از قبیله‌های ترک بوده‌است. از همین روی به احتمال زیاد در گذشته قبیلهٔ مذکور این منطقه را برای سکونت برگزیده و ساکن آن شده‌است.</p>
                            </div>
                            <div class="image large-6 medium-6">
                                <a href="http://www.bucketlistly.com" target="_blank">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Slider 1">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-blurred="{{ asset('pic/top_slider/3.jpg') }}">
                        <div class="grid-x">
                            <div class="large-6 medium-6">
                                <h2><a href="#" target="_blank">شهر جهانی لالجین</a></h2>
                                <p>به اعتقاد برخی از محققان، نام کنونی شهر لالجین تغییریافتهٔ واژهٔ «لاچین» است که نام پرنده‌ای شکاری و عنوان یکی از قبیله‌های ترک بوده‌است. از همین روی به احتمال زیاد در گذشته قبیلهٔ مذکور این منطقه را برای سکونت برگزیده و ساکن آن شده‌است.</p>
                            </div>
                            <div class="image large-6 medium-6">
                                <a href="http://www.bucketlistly.com" target="_blank">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Slider 1">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-blurred="{{ asset('pic/top_slider/3.jpg') }}">
                        <div class="grid-x">
                            <div class="large-6 medium-6">
                                <h2><a href="#" target="_blank">شهر جهانی لالجین</a></h2>
                                <p>به اعتقاد برخی از محققان، نام کنونی شهر لالجین تغییریافتهٔ واژهٔ «لاچین» است که نام پرنده‌ای شکاری و عنوان یکی از قبیله‌های ترک بوده‌است. از همین روی به احتمال زیاد در گذشته قبیلهٔ مذکور این منطقه را برای سکونت برگزیده و ساکن آن شده‌است.</p>
                            </div>
                            <div class="image large-6 medium-6">
                                <a href="http://www.bucketlistly.com" target="_blank">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Slider 1">
                                </a>
                            </div>
                        </div>
                    </div>


                </div>--}}
                <ul class="pgwSlider">
                    <li><img src="{{ asset('pic/top_slider/1.jpg') }}" alt="سفال" data-description="لالجین شهر جهانی سفال"></li>
                    <li><img src="{{ asset('pic/top_slider/2.jpg') }}" alt="Montréal, QC, Canada" data-large-src="{{ asset('pic/top_slider/2.jpg') }}"></li>
                    <li><img src="{{ asset('pic/top_slider/3.jpg') }}" alt="Montréal, QC, Canada" data-large-src="{{ asset('pic/top_slider/3.jpg') }}"></li>
                    <li><img src="{{ asset('pic/top_slider/3.jpg') }}" alt="Montréal, QC, Canada" data-large-src="{{ asset('pic/top_slider/3.jpg') }}"></li>
                </ul>
            </div>
        </div>
        <!--Content image slider End-->

        <!--logo Slider Section Start-->
        <div class="grid-x grid-padding-x">
            <div style="margin-top: 80px;" class="large-12 medium-12 center-el">
                <h1 class="BYekan">هنر دست ایرانی</h1>
            </div>
        </div>
        <div class="grid-x">
            <div class="large-12 element-distanse">
                <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
                    <ul class="orbit-container">
                        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                        <li style="padding: 50px;" class="orbit-slide">
                            <div class="docs-example-orbit-slide">
                                <div class="grid-x">
                                    <div class="medium-3 style_prevu_kit">
                                        <img style="background-image: linear-gradient(-180deg, rgba(0,0,0, 0) 53%, #000 100%)" class="img-size bg-effect" src="{{ asset('pic//hand/1.jpg') }}">
                                        <p style="margin-top:-50px;margin-right: 100px;color: #FFFFFF;font-weight: bold;z-index: 9;">سفال لالجین</p>
                                    </div>
                                    <div class="medium-3 style_prevu_kit">
                                        <img class="img-size" src="{{ asset('pic/hand/2.jpg') }}">
                                    </div>
                                    <div class="medium-3 style_prevu_kit">
                                        <img class="img-size" src="{{ asset('pic/hand/3.jpg') }}">
                                    </div>
                                    <div class="medium-3 style_prevu_kit">
                                        <img class="img-size" src="{{ asset('pic/hand/4.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="padding: 50px;" class="orbit-slide">
                            <div class="docs-example-orbit-slide">
                                <div class="grid-x">
                                    <div class="medium-3 style_prevu_kit">
                                        <img  class="img-size" src="{{ asset('pic/hand/5.jpg') }}">
                                    </div>
                                    <div class="medium-3 style_prevu_kit">
                                        <img class="img-size" src="{{ asset('pic/hand/6.jpg') }}">
                                    </div>
                                    <div class="medium-3 style_prevu_kit">
                                        <img class="img-size" src="{{ asset('pic/hand/7.jpg') }}">
                                    </div>
                                    <div class="medium-3 style_prevu_kit">
                                        <img class="img-size" src="{{ asset('pic/hand/8.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!--logo Slider Section End-->


    </div><!--*****End master container in Page*****-->

@stop

