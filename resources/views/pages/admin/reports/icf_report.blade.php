@extends('layouts.report_master')
@section('content')
    @foreach($info as $questionForm)
        @if($questionForm->question->fieldType->ftType == 'single-uploader')
            <div class="grid-x">
                <div class="large-12 medium-12 small-12 element-dir-l">
                    <img class="image-shadow-effect-without-height" style="max-width: 120px" src="{{ asset($questionForm->formAnswer[0]->faValue) }}">
                </div>
            </div>
        @endif
    @endforeach
    <div class="grid-x element-distanse">
        <div class="large-12">
            <div class="stack table-scroll">
                <table class="unstriped">
                    <thead></thead>
                    <tbody>
                    @foreach($info as $questionForm)
                        <tr>
                        @if($questionForm->question->fieldType->ftType == 'phone-number')
                            @if(count($questionForm->formAnswer))
                                <td width="300px">
                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                </td>
                                <td>
                                    <span class="gray-color" dir="ltr">{{ $questionForm->formAnswer[0]->faValue }}</span>
                                </td>
                            @else
                                <td width="300px">
                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                </td>
                                <td>
                                    <span class="gray-color">...</span>
                                </td>
                            @endif
                        @elseif($questionForm->question->fieldType->ftType != 'captcha' &&
                        $questionForm->question->fieldType->ftType != 'single-uploader' &&
                        $questionForm->question->fieldType->ftType != 'multi-uploader')
                            @if(count($questionForm->formAnswer))
                                <td width="300px">
                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                </td>
                                <td>
                                    <span class="gray-color">{{ $questionForm->formAnswer[0]->faValue }}</span>
                                </td>
                            @else
                                <td width="300px">
                                    <p class="p-margin detail-element-cell black-color">{{ $questionForm->question->qFaSubject }}</p>
                                </td>
                                <td>
                                    <span class="gray-color">...</span>
                                </td>
                            @endif
                        @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="grid-x">
        <div class="large-12">
            <table class="unstriped">
                <thead></thead>
                <tbody>
                @foreach($info as $questionForm)
                    @if($questionForm->question->fieldType->ftType == 'multi-uploader')
                        @foreach($questionForm->formAnswer as $formAnswer)
                            @if(!$loop->last && (($loop->iteration - 1) % 2 == 0))
                                <tr>
                                <td>
                                    <img class="image-shadow-effect-without-height" src="{{ asset($formAnswer->faValue) }}">
                                </td>
                            @else
                                @if($loop->last && count($questionForm->formAnswer) % 2 != 0)
                                    <td>
                                        <img class="image-shadow-effect-without-height" src="{{ asset($formAnswer->faValue) }}">
                                    </td>
                                    <td></td>
                                    </tr>
                                @else
                                    <td>
                                        <img class="image-shadow-effect-without-height" src="{{ asset($formAnswer->faValue) }}">
                                    </td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop