@extends('layouts.adminLayout')
@section('content')
    @foreach($rows as $row)
        @foreach($row->formAnswer as $formAnswer)
            {{ $formAnswer->id }}
        @endforeach
        </br>
    @endforeach
@stop