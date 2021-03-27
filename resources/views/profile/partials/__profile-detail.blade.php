<div>
    <img 
        class="border-black border-2"
        src="/image/other-user-avatar-big.jpeg" 
        alt="avatar"
    >
</div>

<div class="font-bold text-base text-center py-4">
    {{ ucwords(trans(Auth::user()->name)) }}
</div>

<hr class="mx-1 border-black">

<div class="flex justify-between text-center py-4">
    <div>
        50
        <div>
            followers
        </div>
    </div>

    <div>
        30
        <div>
            following
        </div>
    </div>
</div>

<div class="text-center">
    <button 
        type="submit" 
        class="text-white bg-blue-500 rounded-full shadow w-full py-0.5 border-2 border-blue-500">
       
            Unfollow
    </button>
</div>

<div class="text-center py-4">
    <a class="underline" href="{{ route('words-learned') }}">
        {{ __('Learned 20 words') }}
    </a>
</div>

