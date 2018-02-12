@extends('layouts.newsMainLayout')
@section('content')

    <!--News Content Start-->
    <div class="grid-container">
        <!-- page bread crumb -->
        <div class="grid-x">
            <div style="margin-top: 30px;color: #37474F;" class="large-12 medium-12">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs {{ $lan == 'en' ? 'float-left' : '' }}">
                        @if($lan == 'fa')
                            <li class="float-right Shabnam-Bold"><a href="{{ url($lan . '/') }}">همدان - ۲۰۱۸</a></li><Li><span class="show-for-sr Shabnam-Bold">Current: </span> اخبار</Li>
                        @elseif($lan == 'en')
                            <li class="float-left Roboto"><a href="{{ url('/') }}">Hamedan-2018</a></li><Li><span class="show-for-sr Shabnam-Bold">Current: </span> News</Li>
                        @elseif($lan == 'ar')
                            <li><a href="{{ url($lan . '/') }}">همدان - ۲۰۱۸</a></li><Li><span class="show-for-sr Shabnam-Bold">Current: </span> أخبار</Li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div class="grid-x  element-distance-tb">
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
                @foreach($allNews as $news)
                    <div class="grid-x element-distanse news-bottom-line">
                        <div class="large-4 medium-12 small-12 ">
                            @if($lan == 'fa')
                                <a href="{{ url($lan . '/news/info/' . $news->id) }}"><img style=";margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']['gPath']) }}" alt="{{ $news->newsImg[0]['gallery']['niFaAlt'] }}" width="300px" height="200px"></a>
                            @elseif($lan == 'en')
                                <a href="{{ url('news/info/' . $news->id) }}"><img style=";margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']['gPath']) }}" alt="{{ $news->newsImg[0]['gallery']['niEnAlt'] }}" width="300px" height="200px"></a>
                            @elseif($lan == 'ar')
                                <a href="{{ url($lan . '/news/info/' . $news->id) }}"><img style=";margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']['gPath']) }}" alt="{{ $news->newsImg[0]['gallery']['niArAlt'] }}" width="300px" height="200px"></a>
                            @endif
                        </div>
                        <div style="padding-left: 50px;padding-right: 50px;" class="large-8 medium-12 small-12 news-link">
                            @if($lan == 'fa')
                                <a href="{{ url($lan . '/news/info/' . $news->id) }}"><h5 class="Shabnam-Bold">{{ $news->nFaSubject }}</h5></a>
                                <p class="two-line text-color text-justify element-distanse font-small Shabnam-Light">{{ $news->nFaBriefDescription }}</p>
                                <div class="blue-color"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller">{{ \Morilog\Jalali\Facades\jDate::forge($news->created_at)->format('%B %d، %Y') }}</span></div>
                            @elseif($lan == 'en')
                                <a href="{{ url('news/info/' . $news->id) }}"><h5 class="Roboto-Bold">{{ $news->nEnSubject }}</h5></a>
                                <p class="two-line text-color text-justify element-distanse font-small Raleway-Regular">{{ $news->nEnBriefDescription }}</p>
                                <div class="blue-color"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller">{{ $news->created_at->format('Y F d') }}</span></div>
                            @elseif($lan == 'ar')
                                <a href="{{ url($lan . '/news/info/' . $news->id) }}"><h5 class="Al-Jazeera-Arabic-Bold">{{ $news->nFaSubject }}</h5></a>
                                <p class="two-line text-color text-justify element-distanse font-small Al-Jazeera-Arabic-Regular">{{ $news->nArBriefDescription }}</p>
                                <div class="blue-color"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller">{{ $news->created_at->format('Y F d') }}</span></div>
                            @endif
                        </div>
                @endforeach
                <!-Pagination Start--->
                @if ($allNews->lastPage() > 1)
                    <ul class="pagination text-left medium-6 columns" style="margin-top: 0.8rem" role="navigation" aria-label="Pagination">
                        @if($allNews->currentPage() != 1)
                            <li class="pagination-previous">
                                <a href="{{ $allNews->url($allNews->currentPage()-1) }}" aria-label="قبلی">
                                    @if($lan == 'fa')
                                        <span class="my_text_color_pg" aria-hidden="true">قبلی</span>
                                    @elseif($lan == 'en')
                                        <span class="my_text_color_pg" aria-hidden="true">Previous</span>
                                    @elseif($lan == 'ar')
                                        <span class="my_text_color_pg" aria-hidden="true">سابق</span>
                                    @endif
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
                                    @if($lan == 'fa')
                                        <span class="my_text_color_pg" aria-hidden="true">بعدی</span>
                                    @elseif($lan == 'en')
                                        <span class="my_text_color_pg" aria-hidden="true">Next</span>
                                    @elseif($lan == 'ar')
                                        <span class="my_text_color_pg" aria-hidden="true">التالي</span>
                                    @endif
                                </a>
                            </li>
                        @endif
                    </ul>
                @endif
                <!-Pagination End--->
            </div>
            <div class="large-4 medium-6 small-12">

            </div>
        </div>
    </div>
    <!--News Content Start-->
@stop
