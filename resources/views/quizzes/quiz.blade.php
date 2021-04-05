@extends('layouts.app')

@section('content')

<div class="container flex-col h-screen">

    <div class="flex text-center font-bold py-5">
        <div class="flex-1 self-center">
            {{ $quiz->title }}
        </div>

        <div class="flex-1">
            @include('quizzes.partials.__pagination')
        </div>
    </div>

    <div class="flex text-center">
        {{-- @include('quizzes.partials.__words') --}}
        @foreach ($words as $word)
            <div class="flex-1 self-center" style="font-size: 40px;">
                {{ $word->text }}
            </div>

            <div class="flex-1">
                @foreach ($word->choices as $choice)
                    <div class="border p-2.5 w-3/5 my-4 bg-blue-500 rounded-full text-white font-bold">
                        {{ $choice->text }}
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

</div>

@endsection

