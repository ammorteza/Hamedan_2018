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
                            اخبار
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="grid-x padding-lr-fs my-callout-box">
        <div class="medium-12 padding-lr border-btm-line master-content" style="margin-top: 12px;">
            <div class="clearfix tool-bar">
                <div style="margin-bottom: 10px;" class="button-group float-right">
                    <a href=""  class="button primary">جدید</a>
                </div>
                <div class="float-left">
                    <div class="input-group float-left">
                        <div class="inner-addon right-addon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="large-12 medium-12 small-12 element-distanse">
            <div class="grid-x">
                <table>
                    <thead>
                        <th width="900px">عنوان خبر</th>
                        <th>عملیات</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="one-line-event">
                                جمهوري اسلامي ايران و گروه ۱+۵ (چين، فرانسه، آلمان، فدراسيون روسيه، انگليس و ايالات متحده، و نماينده عالي اتحاديه اروپايي در امور خارجی و سیاست امنیتی)، در مورد اين برنامه جامع اقدام مشترک (برجام) تصميم گيري نمودند. اين برجام بازتاب یک فرآیند گام به گام بوده و مشتمل بر تکاليف متقابل به نحو مندرج در اين سند و پيوست هاي آن است که قرار است توسط شوراي امنيت مورد تاييد قرار گیرد.

                                اجراي کامل اين برجام موجب حصول اطمينان از ماهيت صرفا صلح آميز برنامه هسته اي ايران خواهد شد.

                                ايران مجددا تائيد مي‌کند که هيچگاه و تحت هيچ شرايطي در پي سلاح هاي هسته اي، توليد و يا به دست آوردن آنها نخواهد بود.

                                اجراي موفقيت آميز اين برجام ايران را قادر خواهد ساخت تا به طور کامل حق خود بر انرژي هسته اي جهت مقاصد صلح آميز را طبق مواد ذيربط معاهده عدم اشاعه هسته اي و همسو با تعهداتش در آن سند استيفاء نمايد و در نتيجه با برنامه هسته اي ايران همچون برنامه هر دولت ديگر غير دارنده سلاح هاي هسته اي عضو معاهده عدم اشاعه رفتار خواهد شد
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a  href="#" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="ویرایش" data-position="top" data-alignment="center"><i class="far fa-edit btn-green size-18 btn-group-margin"></i></a>
                                    <a  href="#" data-open="deleteNewsModal" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="حذف" data-position="top" data-alignment="center"><i class="far fa-trash-alt btn-red size-18"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!--Modal Start-->
<div class="reveal tiny" id="deleteNewsModal" data-reveal>
    <p style="margin-top: 25px;font-size: small;" class="lead">آیا برا حذف خبر اطمینان دارید؟</p>
    <div class="center-el">
        <button class="button alert">بله</button>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<!--Modal End-->
@stop