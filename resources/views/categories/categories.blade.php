@extends('layouts.app')

@section('content')

<div>
   <div>
      <h1 class="font-bold m-4 px-14">Categories</h1>
   </div>

   @include('categories.partials.__quizzes_data') 
</div>

@endsection
