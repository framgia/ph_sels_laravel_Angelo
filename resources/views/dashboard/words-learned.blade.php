@extends('layouts.app')

@section('content')

    <div class="lg:flex p-8">
        <div class="lg:flex-1/2">

            @include('dashboard.partials.__user-details')
        </div>
    </div>

    <div class="lg:flex-1 text-left ">
        <div class="border border-black-100">
            <div class="p-3 font-bold">
                Words Learned
            </div>

            <hr class="mx-5">

            <div class="p-3">
                Words Learned Content
            </div>
        </div>
    </div>

@endsection
 
