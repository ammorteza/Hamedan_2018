@extends('layouts.newsMainLayout')
@section('content')


    <!--News Slider Start-->
    <div class="grid-container">
        <div class="">

        </div>
    </div>
    <!--News Slider Start-->

    <!--News Content Start-->
    <div class="grid-container element-distance-tb">
        <div class="grid-x">
            <div class="large-8 medium-12 small-12">

                <div class="grid-x">
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:475px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('pic/spin.svg') }}" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:375px;overflow:hidden;">
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/2.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/2.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/3.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/3.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                            <div data-p="170.00">
                                <img data-u="image" src="{{ asset('pic/gallery/1.jpg') }}" />
                                <img data-u="thumb" src="{{ asset('pic/gallery/1.jpg') }}" />
                            </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:983px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                            <div data-u="slides">
                                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                    <svg viewbox="0 0 16000 16000" class="cv">
                                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                            </svg>
                        </div>
                    </div>
                </div>



                <div class="grid-x element-distanse news-bottom-line">
                    <div class="large-4 medium-12 small-12 ">
                        <a><img style=";margin-top: -20px;" src="{{ asset('pic/gallery/1.jpg') }}" alt="Hamedan-2018" width="300px" height="200px"></a>
                    </div>
                    <div style="padding-left: 50px;padding-right: 50px;" class="large-8 medium-12 small-12 news-link">
                        <a href="#"><h5>رونمایی از لوگو همدان 2018</h5></a>
                        <p class="two-line text-color text-justify element-distanse font-small">
                            به گزارش خبرگزاری تسنیم از همدان، علی مالمیر شامگاه چهارشنبه در جلسه سیاست‌گذاری رویدادهای گردشگری 2018 همدان با اشاره به برگزاری جلسات متعدد توسط کمیته‌های اجرایی رویدادهای گردشگری همدان 2018 اظهار داشت: مجتمع عین القضات به عنوان دبیرخانه این رویدادها تجهیز شده و به زودی مراسم رونمایی از لوگو و افتتاحیه دبیرخانه برگزار می‌شود.
                        </p>
                        <div class="blue-color"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller">1396/11/17</span></div>
                    </div>
                </div>
                <div class="grid-x element-distanse news-bottom-line">
                    <div class="large-4 medium-12 small-12 ">
                        <a><img style=";margin-top: -20px;" src="{{ asset('pic/gallery/8.jpg') }}" alt="Hamedan-2018" width="300px" height="200px"></a>
                    </div>
                    <div style="padding-left: 50px;padding-right: 50px;" class="large-8 medium-12 small-12 news-link">
                        <a href="#"><h5>رونمایی از لوگو همدان 2018</h5></a>
                        <p class="two-line text-color text-justify element-distanse font-small">
                            به گزارش خبرگزاری تسنیم از همدان، علی مالمیر شامگاه چهارشنبه در جلسه سیاست‌گذاری رویدادهای گردشگری 2018 همدان با اشاره به برگزاری جلسات متعدد توسط کمیته‌های اجرایی رویدادهای گردشگری همدان 2018 اظهار داشت: مجتمع عین القضات به عنوان دبیرخانه این رویدادها تجهیز شده و به زودی مراسم رونمایی از لوگو و افتتاحیه دبیرخانه برگزار می‌شود.
                        </p>
                        <div class="blue-color"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller">1396/11/17</span></div>
                    </div>
                </div>
                <div class="grid-x element-distanse news-bottom-line">
                    <div class="large-4 medium-12 small-12 ">
                        <a><img style=";margin-top: -20px;" src="{{ asset('pic/gallery/3.jpg') }}" alt="Hamedan-2018" width="300px" height="200px"></a>
                    </div>
                    <div style="padding-left: 50px;padding-right: 50px;" class="large-8 medium-12 small-12 news-link">
                        <a href="#"><h5>رونمایی از لوگو همدان 2018</h5></a>
                        <p class="two-line text-color text-justify element-distanse font-small">
                            به گزارش خبرگزاری تسنیم از همدان، علی مالمیر شامگاه چهارشنبه در جلسه سیاست‌گذاری رویدادهای گردشگری 2018 همدان با اشاره به برگزاری جلسات متعدد توسط کمیته‌های اجرایی رویدادهای گردشگری همدان 2018 اظهار داشت: مجتمع عین القضات به عنوان دبیرخانه این رویدادها تجهیز شده و به زودی مراسم رونمایی از لوگو و افتتاحیه دبیرخانه برگزار می‌شود.
                        </p>
                        <div class="blue-color"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller">1396/11/17</span></div>
                    </div>
                </div>

                <!-Pagination Start--->
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 element-distanse">
                        <ul class="pagination text-center" role="navigation" aria-label="Pagination">
                            <li class="pagination-previous disabled">قبلی</li>
                            <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                            <li><a href="#" aria-label="Page 2">2</a></li>
                            <li><a href="#" aria-label="Page 3">3</a></li>
                            <li><a href="#" aria-label="Page 4">4</a></li>
                            <li class="ellipsis"></li>
                            <li><a href="#" aria-label="Page 12">12</a></li>
                            <li><a href="#" aria-label="Page 13">13</a></li>
                            <li class="pagination-next"><a href="#" aria-label="Next page">بعدی</a></li>
                        </ul>
                    </div>
                </div>
                <!-Pagination End--->
            </div>
            <div class="large-4 medium-6 small-12">

            </div>
        </div>
    </div>
    <!--News Content Start-->
@stop
