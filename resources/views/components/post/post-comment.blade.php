@props(['comment'])

<div class="bg-gray-100 mx-10 my-10 w-1/2 p-3 rounded">
    <article class="flex space-x-4 justify-between">
        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->id == auth()->id() ? "Anda" : $comment->author->username }}</h3>
                <p class="text-xs">
                    diposting
                    <time>{{ $comment->created_at->format('j F, Y (g:i a)') }}</time>
                </p>
            </header>

            <p>{{ $comment->body }}</p>
        </div>

        @if (auth()->id() === $comment->author->id)
        <div>
            <form action="/posts/comments/{{ $comment->id }}" method="post">
                @csrf
                @method('DELETE')

                <x-form.submit-button class="bg-red-500 text-white">Hapus</x-form.submit-button>
            </form>
        </div>
        @endif
    </article>
</div>
