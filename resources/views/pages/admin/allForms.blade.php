@extends('layouts.adminLayout')
@section('content')
    <!--Form Content Start-->
    <div class="grid-container">
        <!-- page bread crumb -->
        <div class="grid-x">
            <div style="margin-top: 50px;color: #37474F;" class="large-12 medium-12 small-12 margin-top-mq">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li class="float-right Shabnam-Bold"><a href="#">همدان - ۲۰۱۸</a></li><Li><span class="show-for-sr Shabnam-Bold">Current: </span> اخبار</Li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x">
        <div class="large-12 medium-12 small-12 padding-lr">
            <div class="stack table-scroll">
                <table>
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>نام شرکت</th>
                        <th>کشور</th>
                        <th>تلفن</th>
                        <th>موبایل</th>
                        <th>جزییات</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Cool</td>
                        <td>Swag</td>
                        <td>Chill</td>
                        <td>Killer</td>
                        <td>Rad</td>
                        <td>Baller</td>
                        <td><a data-open="viewDetail" data-tooltip tabindex="1" title="مشاهده جزییات" data-position="top" data-alignment="center"><i class="fas fa-info-circle btn-red size-21"></i></a></td>
                    </tr>
                    <tr>
                        <td>Cool</td>
                        <td>Swag</td>
                        <td>Chill</td>
                        <td>Killer</td>
                        <td>Rad</td>
                        <td>Baller</td>
                        <td>Baller</td>
                    </tr>
                    <tr>
                        <td>Cool</td>
                        <td>Swag</td>
                        <td>Chill</td>
                        <td>Killer</td>
                        <td>Rad</td>
                        <td>Baller</td>
                        <td>Baller</td>
                    </tr>
                    <tr>
                        <td>Cool</td>
                        <td>Swag</td>
                        <td>Chill</td>
                        <td>Killer</td>
                        <td>Rad</td>
                        <td>Baller</td>
                        <td>Baller</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!--Pagination Content Start-->
    <div class="grid-x element-distanse">
        <div class="large-12 medium-12 small-12">
            <nav aria-label="Pagination">
                <ul class="pagination text-center">
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
            </nav>
        </div>
    </div>
    <!--Pagination Content End-->


    <!--View Detail Modal Start-->
    <div class="reveal large" id="viewDetail" data-reveal data-animation-in="scale-in-up">
        <br>
        <div class="grid-x">
            <div class="large-12 medium-12 small-12 element-dir-l">
               <img class="image-shadow-effect" style="width: 150px;height: 200px;" src="{{ asset('pic/gallery/lan_1.jpg') }}">
            </div>
        </div>
        <br>
        <div class="grid-x">
            <div class="large-6 medium-6 small-6  padding-lr">
                <p class="p-margin detail-element-cell black-color">نام :‌<span class="padding-lr gray-color">علی</span></p>
            </div>
            <div class="large-6 medium-6 small-6 padding-lr">
                <p class="p-margin detail-element-cell black-color">نام :‌<span class="padding-lr gray-color">علی</span></p>
            </div>
        </div>
        <div class="grid-x">
            <div class="large-12 medium-12 small-12 padding-lr">
                <p class="p-margin detail-element-cell black-color">نام خانوادگی :‌<span class="padding-lr gray-color">جهان پاک</span></p>
            </div>
        </div>

        <div class="grid-x">
            <div class="large-3 medium-6 small-12 padding-lr">
                <img class="image-shadow-effect" style="height: 200px;" src="{{ asset('pic/gallery/lan_1.jpg') }}">
            </div>
            <div class="large-3 medium-6 small-12 padding-lr">
                <img class="image-shadow-effect" style="height: 200px;" src="{{ asset('pic/gallery/lan_1.jpg') }}">
            </div>
            <div class="large-3 medium-6 small-12 padding-lr">
                <img class="image-shadow-effect" style="height: 200px;" src="{{ asset('pic/gallery/lan_1.jpg') }}">
            </div>
            <div class="large-3 medium-6 small-12 padding-lr">
                <img class="image-shadow-effect" style="height: 200px;" src="{{ asset('pic/gallery/lan_1.jpg') }}">
            </div>
        </div>
        <button style="margin-bottom: 80px;" class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!--View Detail Modal End-->


    <!--Form Content Start-->
@stop