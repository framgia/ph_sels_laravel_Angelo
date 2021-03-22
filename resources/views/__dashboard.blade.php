<h1 class="mb-3 font-bold">Dashboard</h1>

<div class="flex">
    <div class="flex-1">
        <img 
            src="/image/sample-avatar.jpeg" 
            alt="avatar"
        >
    </div>

    <div class="flex-1 list-group p-3">
            <p>
                {{ Auth::user()->name }}
            </p>
            <a class="underline" href="#">Learned 20 Words</a>
            <a class="underline" href="#">Learned 5 Lessons</a>
    </div>
</div>