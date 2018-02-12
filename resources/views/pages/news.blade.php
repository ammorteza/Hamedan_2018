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
