@extends('layouts.adminLayout')
@section('content')
    <!--Form Content Start-->
    <div class="grid-container">
        <!-- page bread crumb -->
        <div class="grid-x">
            <div style="margin-top: 20px;color: #37474F;" class="large-12 medium-12 small-12 margin-top-mq">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <Li><span class="show-for-sr Shabnam-Bold">Current: </span> فرم</Li>
                        <Li><span class="show-for-sr Shabnam-Bold">Current: </span> {{ $formSubject }}</Li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <?php
        $fields = \Hamedan_2018\Question::getAllFormFields($fId);
        $rows = \Hamedan_2018\UuId::getFormRecords($fId);
    ?>
    <div class="grid-x">
        <div class="large-12 medium-12 small-12 padding-lr-fs">
            <div class="stack table-scroll">
                <table>
                    <thead>
                    <tr>
                        @foreach($fields as $field)
                            <th>{{ $field->qFaSubject }}</th>
                        @endforeach
                        <th>جزییات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <?php
                                $answers = \Hamedan_2018\Question::getAllFormAnswers($fId , $row->id);
                                $index = 0;
                            ?>
                            @for($i = 0 ; $i < count($answers) && $i < 6 ; $i++)
                                @if(count($answers[$i]->questionForm[0]->formAnswer) > 0)
                                    @if ($answers[$i]->fieldType->ftType == 'phone-number')
                                        <td dir="ltr" class="text-right">{{ $answers[$i]->questionForm[0]->formAnswer[0]->faValue }}</td>
                                    @else
                                        <td class="text-right">{{ $answers[$i]->questionForm[0]->formAnswer[0]->faValue }}</td>
                                    @endif
                                @else
                                    <td> ... </td>
                                @endif
                            @endfor
                            <td><a data-open="{{ 'viewDetail' . $row->id }}" data-tooltip tabindex="1" title="مشاهده جزییات" data-position="top" data-alignment="center"><i class="fas fa-info-circle btn-red size-21"></i></a></td>
                            <!--View Detail Modal Start-->
                            <div class="reveal large" id="{{ 'viewDetail' . $row->id }}" data-reveal data-animation-in="scale-in-up">
                                <br>
                                @foreach(\Hamedan_2018\QuestionForm::getAllQuestionForm($fId , $row->id) as $questionForm)
                                    @if($questionForm->question->fieldType->ftType == 'single-uploader')
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 element-dir-l">
                                                <img class="image-shadow-effect-without-height" style="max-width: 200px" src="{{ asset($questionForm->formAnswer[0]->faValue) }}">
                                            </div>
                                        </div>
                                        <br>
                                    @elseif($questionForm->question->fieldType->ftType == 'multi-uploader')
                                        <div class="grid-x" style="margin-top: 10px;margin-bottom: 20px">
                                            <div class="large-12 medium-12 small-12 padding-lr">{{ $questionForm->question->qFaSubject . ': ' }}</div>
                                            @foreach($questionForm->formAnswer as $formAnswer)
                                                <div class="large-3 medium-6 small-12 padding-lr">
                                                    <img class="image-shadow-effect-without-height" src="{{ asset($formAnswer->faValue) }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @elseif($questionForm->question->fieldType->ftType != 'captcha' && $questionForm->question->fieldType->ftType == 'phone-number')
                                        @if(count($questionForm->formAnswer))
                                            <div class="grid-x {{ $index % 2 == 0 ? 'row-back-color' : '' }}">
                                                <div class="large-4 medium-4 small-4  padding-lr">
                                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                                </div>
                                                <div class="large-8 medium-8 small-8  span-padding">
                                                    <span class="gray-color" dir="ltr">{{ $questionForm->formAnswer[0]->faValue }}</span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="grid-x {{ $index % 2 == 0 ? 'row-back-color' : '' }}">
                                                <div class="large-4 medium-4 small-4  padding-lr">
                                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                                </div>
                                                <div class="large-8 medium-8 small-8 span-padding">
                                                    <span class="gray-color">...</span>
                                                </div>
                                            </div>
                                        @endif
                                        <?php $index++; ?>
                                    @elseif($questionForm->question->fieldType->ftType != 'captcha')
                                        @if(count($questionForm->formAnswer))
                                            <div class="grid-x {{ $index % 2 == 0 ? 'row-back-color' : '' }}">
                                                <div class="large-4 medium-4 small-4  padding-lr">
                                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                                </div>
                                                <div class="large-8 medium-8 small-8 span-padding">
                                                    <span class="gray-color">{{ $questionForm->formAnswer[0]->faValue }}</span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="grid-x {{ $index % 2 == 0 ? 'row-back-color' : '' }}">
                                                <div class="large-4 medium-4 small-4  padding-lr">
                                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                                </div>
                                                <div class="large-8 medium-8 small-8 span-padding">
                                                    <span class="gray-color">...</span>
                                                </div>
                                            </div>
                                        @endif
                                        <?php $index++; ?>
                                    @endif
                                @endforeach
                                <button style="margin-bottom: 80px;" class="close-button" data-close aria-label="Close modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--View Detail Modal End-->
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-Pagination Start--->
    <div class="grid-x">
        <div class="large-12 medium-12 small-12 center-el">
            @if ($rows->lastPage() > 1)
                <ul class="pagination" style="margin-top: 0.8rem" role="navigation" aria-label="Pagination">
                    @if($rows->currentPage() != 1)
                        <li class="pagination-previous">
                            <a href="{{ $rows->url($rows->currentPage()-1) }}" aria-label="قبلی">
                                <span class="my_text_color_pg" aria-hidden="true">قبلی</span>
                            </a>
                        </li>
                    @endif
                    @for($i = max($rows->currentPage()-2, 1); $i <= min(max($rows->currentPage()-2, 1)+4,$rows->lastPage()); $i++)
                        @if($rows->currentPage() == $i)
                            <li class="current"><span class="show-for-sr font-size-small">صفحه ای که در آن هستید</span>{{ $i }}
                        @else
                            <li>
                                <a class="font-size-small my_text_color" href="{{ $rows->url($i) }}">{{ $i }}</a>
                                @endif
                            </li>
                    @endfor
                    @if ($rows->currentPage() != $rows->lastPage())
                        <li class="pagination-next">
                            <a href="{{ $rows->url($rows->currentPage()+1) }}" aria-label="بعدی">
                                <span class="my_text_color_pg" aria-hidden="true">بعدی</span>
                            </a>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
    <!-Pagination End--->
    <!--Form Content Start-->
@stop