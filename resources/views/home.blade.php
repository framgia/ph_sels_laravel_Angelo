@extends('layouts.app')

@section('content')

    <div class="lg:flex p-8">
        <div class="lg:flex-1/2">
           @include('__dashboard') 
        </div>

        <div class="lg:flex-1 text-left ">
            <div class="border border-black-100">
                <div class="p-3 font-bold">
                    Activities
                </div>

                <hr class="mx-5">

                <div class="p-3">
                    Activities Content
                </div>
            </div>
        </div>
    </div>

@endsection
