<div>
    @foreach ($words as $word)
        {{ $word->text }}

        <div>
            @foreach ($word->choices as $choice)
                {{ $choice->text }}
            @endforeach
        </div>
    @endforeach
</div>