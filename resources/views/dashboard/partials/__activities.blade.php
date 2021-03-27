<div class="lg:flex-1 text-left ">
    <div class="border border-black-100 w-5/6">
        <div class="p-3 font-bold">
            Activities
        </div>

        <hr class="mx-5">

        <div class="p-3">

            @foreach(range(1, 5) as $activity)
                <div class="flex items-center justify-center text-lg">

                        <div>
                            <img 
                                src="/image/other-user-avatar.jpeg"
                                alt="avatar"
                            >
                        </div>

                        <div class="m-3">
                            <div class="flex-row">
                                <div>
                                    <a class="underline text-blue-600" href="{{ route('profile-page') }}">
                                        {{ __('Jon Doe') }}
                                    </a>
                    
                                    <span>
                                        learned 20 of 20 words in 
                                    </span>

                                    <a class="text-blue-600" href="#">
                                        Basic 500.
                                    </a>
                                </div>
                            </div>

                            <div class="text-sm text-gray-400">
                                3 days ago
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
