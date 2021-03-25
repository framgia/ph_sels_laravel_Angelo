<h1 class="mb-3 font-bold">Dashboard</h1>

<div class="flex">
    <div class="flex-1">
        <img 
            class="border-black border-2"
            src="/image/sample-avatar.jpeg" 
            alt="avatar"
        >
    </div>

<div class="flex-1 list-group p-3">
    <p>
        {{ Auth::user()->name }}
    </p>

    @if (Route::current()->getName() == 'words-learned')
        <a class="underline" href="{{ route('words-learned') }}">
            {{ __('Learned 20 words') }}
        </a>
    @else
        <a class="underline" href="{{ route('words-learned') }}">
            {{ __('Learned 20 words')}}
        </a>

        <a class="underline" href="#">Learned 5 Lessons</a>
    @endif

</div>
