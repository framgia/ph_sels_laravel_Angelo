@extends('layouts.app')

@section('content')

<div class="flex py-5">
    <div class="lg:flex-col px-14">

        @include('profile.partials.__profile-detail')
    </div>

    @include('dashboard.partials.__activities') 
</div>

@endsection
