@extends('layouts.newsMainLayout')
@section('content')
    <div class="grid-container">
    <!-- page bread crumb -->
        <div class="grid-x">
            <div style="margin-top: 30px;color: #37474F;" class="large-12 medium-12">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs {{ $lan == 'en' ? 'float-left' : '' }}">
                        @if($lan == 'fa')
                            <li class="float-right Shabnam-Bold"><a href="{{ url($lan . '/') }}">همدان - ۲۰۱۸</a></li>
                            <li class="float-right Shabnam-Bold"><a href="{{ url($lan . '/news') }}">اخبار</a></li>
                            <Li><span class="show-for-sr Shabnam-Bold">Current: </span> {{ $news->nFaSubject }}</Li>
                        @elseif($lan == 'en')
                            <li class="float-left Roboto"><a href="{{ url('/') }}">Hamedan-2018</a></li>
                            <li class="float-left Roboto"><a href="{{ url('/news') }}">News</a></li>
                            <Li><span class="show-for-sr Shabnam-Bold">Current: </span> {{ $news->nEnSubject }}</Li>
                        @elseif($lan == 'ar')
                            <li><a href="{{ url($lan . '/') }}">همدان - ۲۰۱۸</a></li>
                            <li><a href="{{ url($lan . '/news') }}"></a>أخبار</li>
                            <Li><span class="show-for-sr Shabnam-Bold">Current: </span> {{ $news->nArSubject }}</Li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div class="grid-x element-distance-tb">
            <div class="large-8 medium-12 small-12">
                @if($lan == 'fa')
                    <img style="margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']['gPath']) }}" alt="Hamedan-2018"  height="400px">
                    <h5 class="titr-color element-distanse Shabnam-Bold">{{ $news->nFaSubject }}</h5>
                    <div class="blue-color element-distanse"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller Shabnam-Bold">{{ \Morilog\Jalali\Facades\jDate::forge($news->created_at)->format('%B %d، %Y') }}</span></div>
                    <p class="news-description Shabnam-Light">{!! $news->nFaDescription !!}</p>
                    <div class="blue-color element-distanse"><i style="margin-bottom: -5px;" class="fas fa-eye camera-margin"></i><span class="font-smaller titr-color Shabnam-Light">{{ 'تعداد بازدید ' . $news->nViewedCount }}</span></div>
                @elseif($lan == 'en')
                    <img style="margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']['gPath']) }}" alt="Hamedan-2018"  height="400px">
                    <h5 class="titr-color element-distanse Roboto-Bold">{{ $news->nEnSubject }}</h5>
                    <div class="blue-color element-distanse"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller Raleway-Regular">{{ $news->created_at->format('Y F d') }}</span></div>
                    <p class="news-description Raleway-Regular">{!! $news->nEnDescription !!}</p>
                    <div class="blue-color element-distanse"><i style="margin-bottom: -5px;" class="fas fa-eye camera-margin"></i><span class="font-smaller titr-color Raleway-Regular">{{ 'Views ' . $news->nViewedCount }}</span></div>
                @elseif($lan == 'ar')
                    <img style="margin-top: -20px;" src="{{ asset($news->newsImg[0]['gallery']['gPath']) }}" alt="Hamedan-2018"  height="400px">
                    <h5 class="titr-color element-distanse Al-Jazeera-Arabic-Bold">{{ $news->nArSubject }}</h5>
                    <div class="blue-color element-distanse"><i class="far fa-calendar-alt camera-margin"></i><span class="font-smaller Al-Jazeera-Arabic-Regular">{{ $news->created_at->format('Y F d') }}</span></div>
                    <p class="news-description Al-Jazeera-Arabic-Regular">{!! $news->nArDescription !!}</p>
                    <div class="blue-color element-distanse"><i style="margin-bottom: -5px;" class="fas fa-eye camera-margin"></i><span class="font-smaller titr-color Al-Jazeera-Arabic-Regular">{{ 'المشاهدات ' . $news->nViewedCount }}</span></div>
                @endif
            </div>
            <div class="large-4 medium-12 small-12">

            </div>
        </div>
    </div>
@stop
