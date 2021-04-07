@extends('layouts.app')

@section('content')

<div class="container flex-col h-auto">

    <div class="flex text-center font-bold py-5">
        <div class="flex-1 self-center">
            {{ $quiz->title }}
        </div>

        <div class="flex-1">
            @include('quizzes.partials.__pagination')
        </div>
    </div>

    <div class="flex text-center">
        @include('quizzes.partials.__words')
    </div>

</div>

@endsection

