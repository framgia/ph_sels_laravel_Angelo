@extends('layouts.app')

@section('content')

    <div class="lg:flex p-8">
        <div class="lg:flex-1/2">

            @include('dashboard.partials.__user-details')
        </div>
    </div>

    @include('dashboard.partials.__activities') 

@endsection
