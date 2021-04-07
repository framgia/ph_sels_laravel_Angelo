@extends('layouts.app')

@section('content')

<div class="container flex-col h-auto">

    <div class="flex text-center py-5">
        <div class="flex-1 self-center font-bold">
            {{ $quiz->title }}
        </div>

        <div class="flex-1">
            <span class="font-bold">
                {{ __('Result') }}
            </span> 
            {{ __(': 15 of 20') }}
        </div>
    </div>

    <div class="text-center">
        <div class="flex font-bold pb-4">
            <div class="flex-1"></div>
            <div class="flex-1">Word</div>
            <div class="flex-1">Answer</div>
        </div>

        <div class="flex">
            <div class="flex-1">
                @foreach ($quiz->words as $word)
                    <ul class="py-2">
                        {{ __('X') }}
                    </ul>
                @endforeach
            </div>

            <div class="flex-1">
                @foreach ($quiz->words as $word)
                    <ul class="py-2">
                        {{ $word->text }}
                    </ul>
                @endforeach
            </div>

            <div class="flex-1">
                @foreach ($choices as $choice)
                    <ul class="py-2">
                        {{ $choice->text }}
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection

