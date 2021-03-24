@extends('layouts.app')

@section('content')

<div>
   <div>
      <h1 class="font-bold m-4 px-14">Categories</h1>
   </div>

   <div class="flex flex-wrap content-start justify-content-center">
      @foreach (range(1, 8) as $category)
         <div class="w-2/5 border border-black m-4 p-4">
            <div class="font-bold m-2">TITLE</div>

            <div class="m-2">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div> 

            <div class="m-2 float-right">
               <button type="submit" class="btn btn-primary" href="#">
                  Start
               </button>
            </div>
         </div>
      @endforeach
   </div>
</div>

@endsection
