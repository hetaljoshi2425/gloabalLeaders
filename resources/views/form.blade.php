@extends('layouts.main')
@section('content')
@php
    $progress = '';
@endphp
    <div class="grid form-container p-5" id="portfolio-grid" style="position: relative;">
        @if ($param == 'home')
            @include('formSections/form_start')
            @php $progress = '0%'; @endphp
        @elseif ($param == 'step1')
            @include('formSections/form_step1')
            @php $progress = '10%'; @endphp
        @elseif ($param == 'step2')
            @include('formSections/form_step2')
            @php $progress = '20%' @endphp
        @elseif ($param == 'step3')
            @include('formSections/form_step3')
            @php $progress = '30%' @endphp
        @elseif ($param == 'step4')
            @include('formSections/form_step4')
            @php $progress = '40%' @endphp
        @elseif ($param == 'step5')
            @include('formSections/form_step5')
            @php $progress = '50%' @endphp
        @elseif ($param == 'step6')
            @include('formSections/form_step6')
            @php $progress = '60%' @endphp
        @elseif ($param == 'step7')
            @include('formSections/form_step7')
            @php $progress = '70%' @endphp
        @elseif ($param == 'step8')
            @include('formSections/form_step8')
            @php $progress = '80%' @endphp
        @elseif ($param == 'step9')
            @include('formSections/form_step9')
            @php $progress = '90%' @endphp
        @elseif ($param == 'step10')
            @include('formSections/form_step10')
            @php $progress = '100%' @endphp
        @else
            @include('formSections/form_final')
            @php $progress = null @endphp
        @endif

        <div class="border-top border-danger my-5"></div>

        {{-- Progress Bar --}}
        @if ($progress)
        <div class="border border-danger">
            <div class="bg-danger" style="width: {{$progress}}">
                {{ $progress }}
            </div>
        </div>
        @endif
        {{-- ... --}}
    </div>
@endsection