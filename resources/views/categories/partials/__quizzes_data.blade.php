<div class="flex flex-wrap content-start justify-content-center">
    @foreach ($quizzes as $quiz)
       <div class="w-2/5 border border-black m-4 p-4 bg-white">
          <div class="font-bold m-2">{{ $quiz->title }}</div>

          <div class="m-2">
            {{ $quiz->description }}
          </div> 

          <div class="m-2 float-right">
             <a class="btn btn-primary" href="{{ route('quiz', ['quiz' => $quiz->id]) }}">
               {{ __('Start') }} 
             </a>
          </div>
       </div>
    @endforeach
</div>
