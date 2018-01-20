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
    <div class="container">
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
                            <div class="large-6 medium-6 padding-lr direction-reveal">
                                <a href="#" class="direction-reveal__card">
                                    <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Image" class="img-fluid">

                                    <div class="direction-reveal__overlay">
                                        <h3 class="direction-reveal__title">غار علیصدر</h3>
                                        <p class="direction-reveal__text one-line">
                                            مردم روستای علی صدر و روستاهای اطراف، از قدیم‌الایام به وجود این غار پی برده بودند و از آب آن بهره‌برداری می‌کردند. علاوه بر این، در صد سال گذشته
                                        </p>
                                        <center>
                                            <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
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
                                            <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
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
                                            <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
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
                                            <button style="margin-top: 30px;" class="button primary large white-color">اطلاعات بیشتر</button>
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
            <div class="large-12 medium-12">
                <div id="immersive_slider">
                    <div class="slide" data-blurred="{{ asset('pic/top_slider/3.jpg') }}">
                        <div class="content">
                            <h2><a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></h2>
                            <p>It’s never been easier to watch YouTube on the big screen
                                Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                        </div>
                        <div class="image">
                            <a href="http://www.bucketlistly.com" target="_blank">
                                <img src="{{ asset('pic/top_slider/1.jpg') }}" alt="Slider 1">
                            </a>
                        </div>
                    </div>
                    <div class="slide" data-blurred="{{ asset('pic/top_slider/3.jpg') }}">
                        <div class="content">
                            <h2><a href="http://www.bucketlistly.com/apps" target="_blank">BucketListly Apps</a></h2>
                            <p>It’s never been easier to watch YouTube on the big screen
                                Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                        </div>
                        <div class="image">
                            <a href="http://www.bucketlistly.com/apps" target="_blank"> <img src="{{ asset('pic/top_slider/2.jpg') }}" alt="Slider 1"></a>
                        </div>
                    </div>
                    <div class="slide" data-blurred="{{ asset('pic/top_slider/3.jpg') }}">
                        <div class="content">
                            <h2><a href="http://www.thepetedesign.com" target="_blank">The Pete Design</a></h2>
                            <p>It’s never been easier to watch YouTube on the big screen
                                Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                        </div>
                        <div class="image">
                            <a href="http://www.thepetedesign.com" target="_blank"><img src="{{ asset('pic/top_slider/3.jpg') }}" alt="Slider 1"></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--Content image slider End-->

    </div><!--*****End master container in Page*****-->

@stop
