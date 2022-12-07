@props(['pertanyaan','jawaban'])

<details class="question py-4 border-b border-grey-lighter">
    <summary class="flex items-center cursor-pointer font-semibold">
        {{ $pertanyaan }}
        <button class="ml-auto">
            <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <path
                    d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
            </svg>
        </button>
    </summary>

    <div class="mt-4 leading-normal text-md">
        <p>
            {!! $jawaban !!}
        </p>
    </div>
</details>